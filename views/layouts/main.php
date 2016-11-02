<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\components\PopularPosts_Prog;
use app\components\PopularPosts_Blog;

AppAsset::register($this);
$action = Yii::$app->controller->action->id;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="shortcut icon" href="/web/favicon.ico" type='image/x-icon' />
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?136"></script>

    <script type="text/javascript">
        VK.init({apiId: 5695735, onlyWidgets: true});
    </script>
</head>
<body>
<?php $this->beginBody() ?>


<div class="container">

    <header id="navtop">
        <a href="<?=Yii::$app->urlManager->createUrl(["site/index"])?>" class="logo fleft">
            <img src="img/logo.png" alt="Designa Studio">
        </a>

        <nav class="fright">
            <ul>
                <li><a href="<?=Yii::$app->urlManager->createUrl(["site/index"])?>" <?php if ($action== "index"){?>class="navactive"<?php }?>>Home</a></li>
                <li><a href="<?=Yii::$app->urlManager->createUrl(["site/about"])?>" <?php if ($action== "about"){?>class="navactive"<?php }?>>Обо мне</a></li>
            </ul>
            <ul>
                <li><a href="<?=Yii::$app->urlManager->createUrl(["site/works"])?>" <?php if ($action== "works"){?>class="navactive"<?php }?>>Мои работы</a></li>
                <li><a href="<?=Yii::$app->urlManager->createUrl(["site/programming"])?>" <?php if ($action== "programming"){?>class="navactive"<?php }?>>Статьи про программирование</a></li>
            </ul>
            <ul>
                <li><a href="<?=Yii::$app->urlManager->createUrl(["site/blog"])?>" <?php if ($action== "blog"){?>class="navactive"<?php }?>>Блог</a></li>
                <li><a href="<?=Yii::$app->urlManager->createUrl(["site/contacts"])?>" <?php if ($action== "contacts"){?>class="navactive"<?php }?>>Контакты</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="<?php echo $action;?>-page main grid-wrap">
<?=$content?>
        <?php
        $actionList =['programming', 'blog', 'prog_post', 'blog_post'];
        foreach ($actionList as $action1){
            if($action == $action1){?>
                <aside class="grid col-one-quarter mq2-col-one-third mq3-col-full blog-sidebar">

                    <div class="widget">
                        <input id="search" type="search" name="search" value="Найти" >
                    </div>

                    <div class="widget">
                        <h2>Популярные статьи</h2>
                        <?php
                        if ($action == "prog_post" || $action == "programming"){
                            if ($action == "prog_post") {$post_id =Yii::$app->getRequest()->getQueryParam('id');}
                            else {$post_id=null;}
                            PopularPosts_Prog::widget(['id' => $post_id]);
                        }else {
                            if ($action == "blog_post") {$post_id =Yii::$app->getRequest()->getQueryParam('id');}
                            else {$post_id=null;}
                           echo PopularPosts_Blog::widget(['id' => $post_id]);}
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
                <?php
            }
        }
        ?>

    </div>
    <div class="divide-top">
        <footer class="grid-wrap">
            <ul class="grid col-one-third social">
                <li><a href="#">RSS</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Google+</a></li>
                <li><a href="#">Flickr</a></li>
            </ul>

            <div class="up grid col-one-third ">
                <a href="#navtop" title="Go back up">&uarr;</a>
            </div>

            <nav class="grid col-one-third ">
                <ul>
                    <li><a href="<?=Yii::$app->urlManager->createUrl(["site/index"])?>">Home</a></li>
                    <li><a href="<?=Yii::$app->urlManager->createUrl(["site/about"])?>">Обо мне</a></li>
                    <li><a href="<?=Yii::$app->urlManager->createUrl(["site/works"])?>">Мои работы</a></li>
                    <li><a href="<?=Yii::$app->urlManager->createUrl(["site/programming"])?>">Статьи про программирование</a></li>
                    <li><a href="<?=Yii::$app->urlManager->createUrl(["site/blog"])?>">Блог</a></li>
                    <li><a href="<?=Yii::$app->urlManager->createUrl(["site/contacts"])?>">Контакты</a></li>
                </ul>
            </nav>
        </footer>
    </div>

</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
