<?php
/**
 * Created by PhpStorm.
 * User: HomeO
 * Date: 30.10.2016
 * Time: 19:47
 */
use yii\widgets\LinkPager;
$this->title="Мой блог";
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Мой личный Блог'
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Нурсултан Мусабаев, личный блог'
])
?>

<div class="blog-page main grid-wrap">

    <header class="grid col-full">
        <hr>
        <p class="fleft">Блог</p>
    </header>
    <section class="grid col-three-quarters mq2-col-two-thirds mq3-col-full">

            <?php foreach($blog_posts as $blog_post) include 'intro_blog_post.php'?>


    </section>

    <aside class="grid col-one-quarter mq2-col-one-third mq3-col-full blog-sidebar">

        <div class="widget">
            <input id="search" type="search" name="search" value="Найти" >
        </div>

        <div class="widget">
            <p>Здесь будут афоризмы</p>
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
</div>