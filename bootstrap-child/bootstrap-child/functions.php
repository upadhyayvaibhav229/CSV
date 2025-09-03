<?php
function twentytwentythree_child_enqueue_scripts() {
    // Parent theme styles
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // Bootstrap CSS (local)
    wp_enqueue_style(
        'bootstrap-css',
        get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css'
    );

    // Bootstrap JS (local)
    wp_enqueue_script(
        'bootstrap-js',
        get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js',
        array('jquery'),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'twentytwentythree_child_enqueue_scripts');

function child_register_menus() {
    register_nav_menus([
        'header-menu' => __('Header Menu'),
        'footer-menu' => __('Footer Menu'),
    ]);
}
add_action('init', 'child_register_menus');
?>
