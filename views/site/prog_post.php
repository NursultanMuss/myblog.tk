<?php
/**
 * Created by PhpStorm.
 * User: йойо
 * Date: 26.10.2016
 * Time: 9:45
 */
use yii\widgets\LinkPager;
use app\components\PopularPosts;
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



    <header class="grid col-full">
        <hr>
        <p class="fleft">Статьи про программирование</p>
    </header>



    <section class="grid col-three-quarters mq2-col-two-thirds mq3-col-full">

        <article class="post post-single">
            <h2><a href="#" class="post-title"><?=$post->title?></a></h2>
            <div class="meta">
                <p>Опубликовано <span class="time"><?=$post->date?></span> мной с ресурса <a href="<?=$post->res_link?>" class="fn"><?=$post->resource?></a> &nbsp; <span class="glyphicon glyphicon-eye-open"></span><span><?=$post->hits?></span>.</p>
            </div>
            <div class="entry-image">
                <?=$post->entry_image?>
            </div>
            <div class="entry">
                <?=$post->full_text?>
            </div>

        </article>


    </section>

    

<!--main-->
