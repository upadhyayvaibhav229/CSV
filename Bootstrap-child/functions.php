<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Three
 * @since Twenty Twenty-Three 1.0
 */

function enqueue_bootstrap() {
    // Bootstrap CSS (CDN)
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    
    // FontAwesome CSS (CDN)
    wp_enqueue_style('fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css');

    wp_enqueue_style('custom-css', get_stylesheet_directory_uri() . '/assets/style.css');

    // Bootstrap JS (bundle includes Popper)
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap');




function enqueue_child_theme_styles() {
    wp_enqueue_style('child-theme-style', get_stylesheet_directory_uri() . '/style.css');
}


add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles');


//For Remove Blank P tag
remove_filter( 'the_content', 'wpautop' );
