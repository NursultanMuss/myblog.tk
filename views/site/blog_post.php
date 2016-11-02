<?php
/**
 * Created by PhpStorm.
 * User: HomeO
 * Date: 31.10.2016
 * Time: 22:41
 */

use yii\widgets\LinkPager;
$this->title=$blog_post->title;
$this->registerMetaTag([
    'name' => 'description',
    'content' => $blog_post->meta_desc
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $blog_post->meta_key
])
?>



    <header class="grid col-full">
        <hr>
        <p class="fleft">Статьи про программирование</p>
    </header>
    <div class="entry-image">
<!--        --><?//=$blog_post->image?>
    </div>


    <section class="grid col-three-quarters mq2-col-two-thirds mq3-col-full">

        <article class="post post-single">
            <h2><a href="#" class="post-title"><?=$blog_post->title?></a></h2>
            <div class="meta">
                <p>Запостено <span class="time"><?=$blog_post->date?></span> &nbsp &nbsp<a href="#"class="cat"><?=$blog_post->category?></a> &nbsp;&nbsp; <span class="glyphicon glyphicon-eye-open"></span>&nbsp;<span><?=$blog_post->hits?></span>.</p>
            </div>
            <div class="entry">
                <?=$blog_post->full_text?>
            </div>

        </article>


    </section>
<aside class="grid col-one-quarter mq2-col-one-third mq3-col-full blog-sidebar">

    <div class="widget">
        <input id="search" type="search" name="search" value="Type and hit enter to search" >
    </div>

    <div class="widget">
        <h2>Популярные статьи</h2>
        <?php if ($action == "prog_post" ||$action =="blog_post") {$post_id =Yii::$app->getRequest()->getQueryParam('id');}
        else {$post_id=null;}
        if ($action == 'programming' || $action== 'prog_post'){
            $posts=Programming::find()->where(['hide' => 0])->limit(5)->where(['not' , ['id' => $this->id]])->orderBy(['hits' => SORT_DESC])->all();
        }else  {$posts=Blog::find()->where(['hide' => 0])->limit(5)->where(['not' , ['id' => $this->id]])->orderBy(['hits', SORT_DESC])->all();}


        foreach($posts as $post){
            $a=Html::tag('a', $post->title, ['href' => $post->link]);
            $li= Html::tag('li',$a);
        }
        return HTML::tag('ul', $li, ['id'=> 'popular_post']);

        ?>
    </div>

    <div class="widget">
        <h2>Categories</h2>
        <ul>
            <li><a href="http://">Design (99+)</a></li>
            <li><a href="http://">Web (53)</a></li>
            <li><a href="http://">Other (12)</a></li>
            <li><a href="http://">Weird (4)</a></li>
        </ul>
    </div>

    <div class="widget">
        <h2>Meta</h2>
        <ul>
            <li><a href="">Entries (RSS)</a></li>
            <li><a href="">Comments (RSS)</a></li>
        </ul>
    </div>
</aside>




