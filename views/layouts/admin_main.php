<?php
/**
 * Created by PhpStorm.
 * User: Nursultan
 * Date: 07.11.2016
 * Time: 10:12
 */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\components\PopularPosts_Prog;
use app\components\PopularPosts_Blog;
use app\components\ProgCategory;
use app\components\BlogCategory;

AppAsset::register($this);
$action = Yii::$app->controller->action->id;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Админпанель</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/template/css/admincss.css">
    <link href="/template/css/main.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/ced0a1df4f.js"></script>

    <!--[if lt IE 9]>
    <script src="/template/js/html5shiv.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="/template/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/template/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/template/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/template/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/template/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="admin-login">
<div class="page-wrapper">

    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <h5>
                                <a href="/admin"><i class="fa fa-edit"></i> Админпанель</a>
                            </h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="/user/logout"><i class="fa fa-sign-out"></i>На сайт</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->


        <div class="page-buffer"></div>
</div>

<footer id="footer" class="page-footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2015</p>
                <p class="pull-right">Курс PHP Start</p>
            </div>
        </div>
    </div>
</footer><!--/Footer-->





<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdn.siftscience.com/s.js"></script>
<script>
    jQuery(document).ready(function() {
        App.init();
        Login.init();
        $('.login').attr('style', '');

        $.backstretch([
            "https://d2599kud7uucku.cloudfront.net/themes/h2/img/bg/6.jpg?v=2.3.2",
            "https://d2599kud7uucku.cloudfront.net/themes/h2/img/bg/7.jpg?v=2.3.2",
            "https://d2599kud7uucku.cloudfront.net/themes/h2/img/bg/8.jpg?v=2.3.2"
        ], {
            fade: 1000,
            duration: 1000
        });

    });
</script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

</body>
</html>
