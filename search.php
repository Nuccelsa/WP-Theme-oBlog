<?php get_header(); ?>

<section class="post">

    <h1 class="page-title">
        <?php
            printf( 'Résultats de recherche pour: %s', '<span>' . get_search_query() . '</span>' );
        ?>
    </h1>

    <?php if (have_posts()): while(have_posts()): the_post();


        get_template_part('template-parts/post/archive');


    endwhile;

else: ?>

    <article class="post">
        <h1 class="page-title">Aucun résultat</h1>
        <p>
            Désolé, mais rien ne correspond à votre recherche. Veuillez réessayer avec des mots différents.
        </p>
    </article>

<?php endif; ?>
</section>
<aside class="sidebar">

    <?php get_sidebar( 'primary' ); ?>

</aside>

<?php get_footer(); ?>
