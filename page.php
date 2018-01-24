<?php get_header(); ?>

<article class="post">
    <?php if (have_posts()): while(have_posts()): the_post();

        get_template_part('template-parts/post/content', 'page');

    endwhile; endif; ?>
</article>


<?php get_footer(); ?>
