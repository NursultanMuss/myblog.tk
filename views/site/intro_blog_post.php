<article class="post">
    <h2><a href="<?=$blog_post->link?>" class="post-title"><?=$blog_post->title?></a></h2>
    <div class="meta">
        <p>Запостено <span class="time"><?=$blog_post->date?></span> &nbsp &nbsp<a href="#"class="cat"><?=$blog_post->category?></a>.</p>
    </div>
    <div class="entry">
        <?=$blog_post->full_text?>
    </div>
    <footer>
        <a href="<?=$blog_post->link?>" class="more-link">Читать дальше…</a>
    </footer>
</article>	