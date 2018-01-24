<?php get_header(); ?>

<section class="post">
    <?php if (have_posts()): while(have_posts()): the_post();

        get_template_part('template-parts/post/archive');

    endwhile; endif; ?>
</section>
<aside class="sidebar">

    <?php get_sidebar( 'primary' ); ?>

</aside>

<?php get_footer(); ?>
