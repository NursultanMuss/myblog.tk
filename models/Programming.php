<?php
/**
 * Created by PhpStorm.
 * User: HomeO
 * Date: 22.10.2016
 * Time: 14:57
 */
namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class Programming extends ActiveRecord{
    
    public $link;
    public $video;
    public function afterFind() {
        $monthes = [
            1 => 'Января', 2=> 'Февраля', 3 => 'Марта', 4 => 'Апреля', 5 => 'Мая', 6 => 'Июня',
            7 => 'Июля', 8 => 'Августа', 9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря'
        ];

        $this->date = date('j ', $this->date).$monthes[date('n', $this->date)].date(', Y', $this->date);
        $this->intro_text = $this->replaceContent($this->intro_text);
        $this->full_text = $this->replaceContent($this->full_text);


        $this->link = Yii::$app->urlManager->createUrl(["site/post", "id" => $this->id]);
        $this->img= '/web/img/programming/'.$this->img;
        $this->video = $this->youtube("{youtube:".$this->video.",480,295}");

    }

     public function replaceContent ($text) {
         $text = $this->youtube($text);
         return $text;
     }



    private function youtube($text){
        if (strpos($text, "youtube") === false) return $text;
        $reg = "/{youtube:([\w-_]*)?,(\d*)?,(\d*)?}/i";

        $text=preg_replace($reg, str_replace(array("%name%", "%width%", "%height%"), array("\\1", "\\2", "\\3"), file_get_contents(Yii::$app->basePath.Yii::$app->params["dir_tmpl"]."youtube.tpl")), $text);

        return $text;
    }
    
}