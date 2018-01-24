<?php

// Déclaration des fonctionnalités
if (!function_exists('oblog_setup')) {

    function oblog_setup() {

        add_theme_support('post-thumbnails');

        register_nav_menus([
        	'main' => 'Menu du haut',
            'social' => 'Barre des réseaux sociaux'
        ]);
    }
}
add_action('after_setup_theme', 'oblog_setup');

// Ajout des fichiers de styles & scripts
if (!function_exists('oblog_script')) {

    function oblog_script() {

        wp_enqueue_style(
            'oblog-vendors-style',
            get_theme_file_uri('public/css/vendors.css')
        );

        wp_enqueue_style(
            'oblog-app-style',
            get_theme_file_uri('public/css/app.css')
        );

    }
}
add_action('wp_enqueue_scripts', 'oblog_script');

// Ajout des fichiers de styles & scripts
if (!function_exists('oblog_register_sidebars')) {

    function oblog_register_sidebars() {

        /* 'primary' sidebar. */
        register_sidebar(
            array(
                'id'            => 'primary',
                'name'          => 'Barre latérale principale',
                'description'   => 'Affichage de widget sur le flanc du site',
                'class'         => 'sidebar',
                'before_widget' => '<h2>',
                'after_widget'  => '</h2>'
            )
        );
    }
}
add_action('widgets_init', 'oblog_register_sidebars');
