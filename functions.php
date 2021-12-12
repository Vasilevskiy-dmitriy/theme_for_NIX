<?php

/**
 * Script_load
 */
function load_style_script ()
{
    /**
     * Styles
     */
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('bootstrap' , get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('blog' , get_template_directory_uri() . '/assets/css/blog.css');
    wp_enqueue_style('navbar', get_template_directory_uri() . '/assets/css/navbar.css');

    /**
     * Scripts
     */
   // wp_enqueue_script('bootstrap_js', get_template_directory_uri() . 'assets/js/bootstrap.bundle.min');
}
add_action('wp_enqueue_scripts', 'load_style_script');

/**
 * post-thumb
 */
add_theme_support( 'post-thumbnails' );
add_image_size( 'spec_thumb', 200, 250, true );

/**
 * Menu
 */
function theme_register_nav_menu() {
    register_nav_menu( 'primary', 'Primary Menu' );
}
add_action( 'after_setup_theme', 'theme_register_nav_menu' );

/**
 * CPT
 */
function create_post_type() {
    register_post_type( 'blog',
        array(
            'labels' => array(
                'name' => __( 'Блог' ),
                'singular_name' => __( 'Блог' ),
                'add_new' => __( 'Добавить блог' ),
            ),
            'menu_position' => 4,
            'public' => true,
            'has_archive' => true,
            'supports' => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
            'menu_icon'   => 'dashicons-welcome-write-blog',
        )
    );
}
add_action( 'init', 'create_post_type' );
