
<figure class="grid col-one-third mq1-col-one-half mq2-col-one-third mq3-col-full <?=$work->type;?>">
    <a href="<?= $work->link?>" >
        <img class="img-responsive" src="<?=$work->img?>" alt="<?=$work->address?>" >
        <span class="zoom"></span>
    </a>
    <figcaption>
        <a href="<?= $work->link?>" class="arrow">Project page!</a>
        <p><?=$work->description?></p>
    </figcaption>
</figure>
