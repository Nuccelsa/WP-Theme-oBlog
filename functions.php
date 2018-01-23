<?php

if (!function_exists('oblog_setup')) {

    function oblog_setup() {

        add_theme_support('post-thumbnails');

    }
}
add_action('after_setup_theme', 'oblog_setup');

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
