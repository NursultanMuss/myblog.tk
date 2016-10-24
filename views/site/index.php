<?php
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
                        <?php //foreach(); ?>
<div class="slide">
    <figure>
        <img class="img-responsive" src="img/img2.jpg" alt="">
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
    <?php
        foreach ($posts as $post){include_once  "intro_post.php";}

    ?>
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