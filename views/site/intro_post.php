<article class="grid col-one-third mq3-col-full">
    <aside><?php if ($post->is_release) {?>Выпуск №<?=$post->id?> <?php }?>
        <ul class="post-info">
            <li><span class="glyphicon glyphicon-time"></span><time><?=$post->date?></time></li>
            <li><span class="glyphicon glyphicon-eye-open"></span><p><?=$post->hits?></p></li>

        </ul>
    </aside>
    <h5><?=$post->title?></h5>
    <img class="img-responsive" src="<?=$post->img?>" alt="<?=$post->title?>">

    <p class="more">
        <a href="<?= $post->link?>">Читать полностью</a>
        <a href="<?= Yii::$app->urlManager->createUrl(["site/releases"])?>">Другие выпуски</a>
    </p>
   
</article>
