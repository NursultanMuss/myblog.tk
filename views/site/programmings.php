<?php
/**
 * Created by PhpStorm.
 * User: HomeO
 * Date: 30.10.2016
 * Time: 19:47
 */
use yii\widgets\LinkPager;
$this->title="Мой сайт";
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Мой личный сайт'
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Нурсултан Мусабаев, личный сайт'
])
?>

<div class="works-page main grid-wrap">

    <header class="grid col-full">
        <hr>
        <p class="fleft">Works</p>
    </header>
<section class="grid col-three-quarters mq2-col-full">

    <div class="grid-wrap works">
        <?php foreach($posts as $post) include 'intro_post.php'?>

    </div> <!-- grid inside 3/4-->

</section>
</div>