<?php
/**
 * Created by PhpStorm.
 * User: йойо
 * Date: 25.10.2016
 * Time: 15:37
 */

namespace app\models;

use yii\db\ActiverRecord;
use Yii;


class Works extends ActiveRecord{
    public $link;
    public $video;

    public $address;
    public $description;
    public $img;
    public $date;
    public function afterFind (){
        $monthes = [
            1 => 'Января', 2=> 'Февраля', 3 => 'Марта', 4 => 'Апреля', 5 => 'Мая', 6 => 'Июня',
            7 => 'Июля', 8 => 'Августа', 9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря'
        ];
        
        $this->date = date('j ', $this->date).$monthes[date('n', $this->date)].date(', Y', $this->date);
        $this->intro_text = $this->
    }
    
    
}
