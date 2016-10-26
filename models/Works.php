<?php
/**
 * Created by PhpStorm.
 * User: йойо
 * Date: 25.10.2016
 * Time: 15:37
 */

namespace app\models;

use yii\db\ActiveRecord;
use Yii;


class Works extends ActiveRecord{
    public $link;
    public $video;
    public $date;
    public function afterFind (){
        $monthes = [
            1 => 'Января', 2=> 'Февраля', 3 => 'Марта', 4 => 'Апреля', 5 => 'Мая', 6 => 'Июня',
            7 => 'Июля', 8 => 'Августа', 9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря'
        ];
        
        $this->date = date('j ', $this->date).$monthes[date('n', $this->date)].date(', Y', $this->date);
        $this->description = $this->replaceContent($this->description);
        if($this->id == 1){
            $this->img = '/web/img/works/' . $this->img;
        }else{
            $this->img = '/web/img/works/' . $this->img . ".jpg";
        }
        $this->video=$this->youtube("{youtube:".$this->video." ,480,295}");

        $this->link = Yii::$app->urlManager->createUrl(["site/work", "id" => $this->id]);
    }

    public function replaceContent ($text){
        $text = $this->youtube($text);
        return $text;
    }

    private function youtube($text){
        if(strpos($text, "youtube") === false) return $text;
        $reg = "/{youtube: ([\w-_]*)?,(\d*)?,(\d*)?}/i";
        $text = preg_replace($reg, str_replace(array ("%name%", "%width%", "%height%"), array ("\\1", "\\2", "\\3"), file_get_contents(Yii::$app->basePath.Yii::$app->params["dir_tmpl"]."youtube.tpl")), $text);

        return $text;
    }
    
}
