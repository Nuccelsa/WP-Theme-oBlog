<article>
<h1 class="post__title">
    <span><?php the_title(); ?></span>
</h1>

<div class="post__info">
    <?php

        $now = new DateTime();
        $postDate = new DateTime(get_the_date('Y-m-d H:i:s'));

        $interval = $postDate->diff($now);

    ?>
    Il y a <?php echo $interval->format('%a'); ?> jours &bull; par <?php ucfirst(the_author()); ?>
</div>
<div class="post__content">
    <p><?php the_excerpt(); ?></p>
    <p>
        <a href="<?php the_permalink(); ?>">Lire la suite...</a>
    </p>
</div>
</article>
