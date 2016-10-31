<?php
/**
 * Created by PhpStorm.
 * User: йойо
 * Date: 26.10.2016
 * Time: 9:45
 */
use yii\widgets\LinkPager;
$this->title=$post->title;
$this->registerMetaTag([
    'name' => 'description',
    'content' => $post->meta_desc
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $post->meta_key
])
?>

<div class="blogpost-page main grid-wrap">

    <header class="grid col-full">
        <hr>
        <p class="fleft">Статьи про программирование</p>
    </header>
    <div class="entry-image">
        <?=$post->entry_image?>
    </div>


    <section class="grid col-three-quarters mq2-col-two-thirds mq3-col-full">

        <article class="post post-single">
            <h2><a href="#" class="post-title"><?=$post->title?></a></h2>
            <div class="meta">
                <p>Опубликовано <span class="time"><?=$post->date?></span> мной с ресурса <a href="<?=$post->res_link?>" class="fn"><?=$post->resource?></a> <span class="glyphicon glyphicon-eye-open"></span><span><?=$post->hits?></span>.</p>
            </div>
            <div class="entry">
                <?=$post->full_text?>
            </div>

        </article>


    </section>

    <aside class="grid col-one-quarter mq2-col-one-third mq3-col-full blog-sidebar">

        <div class="widget">
            <input id="search" type="search" name="search" value="Type and hit enter to search" >
        </div>

        <div class="widget">
            <h2>Popular Posts</h2>
            <ul>
                <li><a href="#" title="">Nullam porttitor elementum ligula</a></li>
                <li><a href="#" title="">Vestibulum interdum</a></li>
                <li><a href="#" title="">Quisque venenatis ante sit amet dolor</a></li>
                <li><a href="#" title="">Aliquam adipiscing libero vitae leo</a></li>
                <li><a href="#" title="">Sed accumsan quam ac tellus</a></li>
            </ul>
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


</div> <!--main-->
