<?php
// dynamic_sidebar( 'primary' );
?>

<h2>latest</h2>
<ul>
<?php

$arguments_query_posts_sidebar = [
    'posts_per_page' => 3,
    'post_type' => 'post',
];

$query_post_sidebar = new WP_Query($arguments_query_posts_sidebar);

if ($query_post_sidebar->have_posts()) {

    while($query_post_sidebar->have_posts()) {

        $query_post_sidebar->the_post();

        ?><li>
            <h3><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
            <p>
                <a href="<?php the_permalink(); ?>">Lire la suite...</a>
            </p>
        </li>
        <?php
    }

    wp_reset_postdata();
}


?>
</ul>
