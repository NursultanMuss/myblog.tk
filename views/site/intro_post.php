<article class="grid col-one-third mq3-col-full">
    <aside><?php if ($post->is_release) {?>Выпуск №<?=$post->id?> <?php }?>
        <ul class="post-info">
            <li><span class="glyphicon glyphicon-time"></span><time><?=$post->date?></time></li>
            <li><span class="glyphicon glyphicon-eye-open"></span><p><?=$post->hits?></p></li>

        </ul>
    </aside>
    <h5><?=$post->title?></h5>
    <img class="img-responsive" src="<?=$post->img?>" alt="<?=$post->title?>">
   
</article>


<?php
/**
 * Created by PhpStorm.
 * User: йойо
 * Date: 24.10.2016
 * Time: 16:08
 */
