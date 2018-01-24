<h1 class="post__title">
    <span><?php the_title(); ?></span>
</h1>

<?php if (has_post_thumbnail()): ?>
    <img src="<?php the_post_thumbnail_url(); ?>" alt="Image" class="post__image" />
<?php endif; ?>

<div class="post__info">
    <?php

        $now = new DateTime();
        $postDate = new DateTime(get_the_date('Y-m-d H:i:s'));

        $interval = $postDate->diff($now);

    ?>
    Il y a <?php echo $interval->format('%a'); ?> jours &bull; par <?php ucfirst(the_author()); ?>
</div>
<div class="post__content">
    <p><?php the_content(); ?></p>
</div>
