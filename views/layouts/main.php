<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
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
    <link rel="shortcut icon" href="favicon.ico" type='image/x-icon' />
</head>
<body>
<?php $this->beginBody() ?>


<div class="container">

    <header id="navtop">
        <a href="index.html" class="logo fleft">
            <img src="img/logo.png" alt="Designa Studio">
        </a>

        <nav class="fright">
            <ul>
                <li><a href="index.html" class="navactive">Home</a></li>
                <li><a href="about.html">About</a></li>
            </ul>
            <ul>
                <li><a href="works.html">Works</a></li>
                <li><a href="services.html">Services</a></li>
            </ul>
            <ul>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>


    <div class="home-page main">
        <section class="grid-wrap" >
            <header class="grid col-full">
                <hr>
                <p class="fleft">Home</p>
                <a href="about.html" class="arrow fright">see more infos</a>
            </header>

            <div class="grid col-one-half mq2-col-full">
                <h1>Web design <br>
                    Web Development <br>
                    Graphic Design</h1>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim. Suspendisse id velit vitae ligula volutpat condimentum. Aliquam erat volutpat. Sed quis velit.
                </p>
                <p>Vivamus pharetra posuere sapien. Nam consectetuer. Sed aliquam, nunc eget euismod ullamcorper, lectus nunc ullamcorper orci, fermentum bibendum enim nibh eget ipsum.
                </p>
            </div>


            <div class="slider grid col-one-half mq2-col-full">
                <div class="flexslider">
                    <div class="slides">
                        <div class="slide">
                            <figure>
                                <img src="img/img2.jpg" alt="">
                                <figcaption>
                                    <div>
                                        <h5>Caption 1</h5>
                                        <p>Lorem ipsum dolor set amet, lorem, <a href="#">link text</a></p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="slide">
                            <figure>
                                <img src="img/img.jpg" alt="">
                                <figcaption>
                                    <div>
                                        <h5>Caption 2</h5>
                                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="services grid-wrap">
            <header class="grid col-full">
                <hr>
                <p class="fleft">Services</p>
                <a href="services.html" class="arrow fright">see more services</a>
            </header>

            <article class="grid col-one-third mq3-col-full">
                <aside>01</aside>
                <h5>Web design</h5>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim.</p>
            </article>

            <article class="grid col-one-third mq3-col-full">
                <aside>02</aside>
                <h5>Web development</h5>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim.</p>
            </article>

            <article class="grid col-one-third mq3-col-full">
                <aside>03</aside>
                <h5>Graphic design</h5>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim.</p>
            </article>
        </section>

        <section class="works grid-wrap">
            <header class="grid col-full">
                <hr>
                <p class="fleft">Works</p>
                <a href="works.html" class="arrow fright">see more works</a>
            </header>

            <figure class="grid col-one-quarter mq2-col-one-half">
                <a href="work1.html">
                    <img src="img/img.jpg" alt="">
                    <span class="zoom"></span>
                </a>
                <figcaption>
                    <a href="work1.html" class="arrow">Project page!</a>
                    <p>Lorem ipsum dolor set amet</p>
                </figcaption>
            </figure>

            <figure class="grid col-one-quarter mq2-col-one-half">
                <a href="#">
                    <img src="img/img.jpg" alt="">
                    <span class="zoom"></span>
                </a>
                <figcaption>
                    <a href="#" class="arrow">Project x</a>
                    <p>Lorem ipsum dolor set amet</p>
                </figcaption>
            </figure>

            <figure class="grid col-one-quarter mq2-col-one-half">
                <a href="#">
                    <img src="img/img.jpg" alt="">
                    <span class="zoom"></span>
                </a>
                <figcaption>
                    <a href="#" class="arrow">Project x</a>
                    <p>Lorem ipsum dolor set amet</p>
                </figcaption>
            </figure>

            <figure class="grid col-one-quarter mq2-col-one-half">
                <a href="#">
                    <img src="img/img.jpg" alt="">
                    <span class="zoom"></span>
                </a>
                <figcaption>
                    <a href="#" class="arrow">Project x</a>
                    <p>Lorem ipsum dolor set amet</p>
                </figcaption>
            </figure>
        </section>
    </div> <!--main-->

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
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="works.html">Works</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </footer>
    </div>

</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
