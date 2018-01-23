<?php get_header(); ?>

<article class="post">
    <?php if (have_posts()): while(have_posts()): the_post(); ?>
    <h1 class="post__title">
        <span><?php the_title(); ?></span>
    </h1>
        <!-- <img src="images/kiev.jpg" alt="Kiev vue du ciel" class="post__image" /> -->

    <div class="post__info">
        2d ago &bull; by Explorer
    </div>
    <div class="post__content">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </div>
    <?php endwhile; endif; ?>
</article>
<aside class="sidebar">

    <?php dynamic_sidebar( 'primary' ); ?>

    <!-- <div class="archive">
        <h3 class="archive__title">Travel tips</h3>
        <p class="archive__text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit [...]
        </p>
    </div> -->
</aside>

<?php get_footer(); ?>
