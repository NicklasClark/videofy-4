<?php
add_action( 'wp_enqueue_scripts', 'videofy_enqueue_styles' );
function videofy_enqueue_styles() {
    // wp_enqueue_style( 'videostories-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'videofy-style', get_stylesheet_directory_uri() . '/style.css', array('videostories-style'));
	wp_enqueue_style( 'videostories-header', get_stylesheet_directory_uri() . '/assets/css/header.css');
	wp_enqueue_style( 'videostories-themes', get_stylesheet_directory_uri() . '/assets/css/themes.css');
	wp_enqueue_style( 'videostories-responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css');
}