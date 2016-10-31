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

<div class="blogpost-page main grid-wrap">

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
            <input id="search" type="search" name="search" value="Найти" >
        </div>

        <div class="widget">
            <p>Здесь будут раздел шуток как в Тпрогере</p>
        </div>

        <div class="widget">
            <h2>Популярные записи</h2>
            <ul>
                <li><a href="#" title="">Популярная запись 1</a></li>
                <li><a href="#" title="">Популярная запись 2</a></li>
                <li><a href="#" title="">Популярная запись 3</a></li>
                <li><a href="#" title="">Популярная запись 4</a></li>
                <li><a href="#" title="">Популярная запись 5</a></li>
            </ul>
        </div>

        <div class="widget">
            <h2>Категории</h2>
            <ul>
                <li><a href="http://">Новости (99+)</a></li>
                <li><a href="http://">JS (53)</a></li>
                <li><a href="http://">Заметки программиста (12)</a></li>
                <li><a href="http://">Front-End (4)</a></li>
            </ul>
        </div>

        <div class="widget">
            <h2>Какой-нибудь еще виджет</h2>
            <ul>
                <li><a href="">Entries (RSS)</a></li>
                <li><a href="">Comments (RSS)</a></li>
            </ul>
        </div>
    </aside>


</div> <!--main-->

