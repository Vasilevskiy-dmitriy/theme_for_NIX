<?php

function load_style_script ()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('bootstrap' , get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('blog' , get_template_directory_uri() . '/assets/css/blog.css');
}

add_action('wp_enqueue_scripts', 'load_style_script');



add_theme_support( 'post-thumbnails' );

add_image_size( 'spec_thumb', 200, 250, true );

add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
    register_nav_menu( 'primary', 'Primary Menu' );
}