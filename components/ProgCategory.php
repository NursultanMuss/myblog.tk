<?php
/**
 * Created by PhpStorm.
 * User: Nursultan
 * Date: 03.11.2016
 * Time: 11:13
 */
namespace app\components;

use yii\base\widget;
use yii\helpers\Html;
use app\models\Programming;

class ProgCategory extends Widget{
    public function run(){
        $posts = Programming::find()->where(['hide' => 0])->all();
        $categories=[];
        foreach ($posts as $post){
            $categories[$post->category]=0;
        }
        foreach ($posts as $post){
            foreach ($categories as $key =>$value){
                if($key==$post->category){
                    $categories[$key]=++$value;
                };
            }
        }
        $a1='';
        foreach ($posts as $post){
            $a=Html::tag('a', $post->category, ['href' => $post->link]);
            $a1.=$a;
        }

        return Html::tag('div', $a1, ['class' => 'categories']);
    }


}