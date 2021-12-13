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
 * Taxonomy for CPT 'blog'
 */
add_action( 'init', 'create_taxonomy' );
function create_taxonomy(){
    register_taxonomy( 'blog', [ 'blog' ], [
        'label'                 => '',
        'labels'                => [
            'name'              => 'Темы',
            'singular_name'     => 'Тема',
            'search_items'      => 'Поиск темы',
            'all_items'         => 'Все темы',
            'view_item '        => 'Показать тему',
            'edit_item'         => 'Обновить тему ',
            'update_item'       => 'Применить изменения',
            'add_new_item'      => 'Добавить тему',
            'new_item_name'     => 'Новое имя темы',
            'back_to_items'     => '← Нахад к темам',
        ],
        'description'           => '', // описание таксономии
        'public'                => true,
        'hierarchical'          => true,
        'rewrite'               => true,
        'capabilities'          => array(),
        'meta_box_cb'           => 'post_categories_meta_box',
        'show_admin_column'     => true, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
        'show_in_rest'          => null, // добавить в REST API
        'rest_base'             => null,

    ] );
}

/**
 * CPT blog
 */
function create_post_type() {
    register_post_type( 'blog',
        array(
            'labels' => array(
                'name' => __( 'Блоги' ),
                'singular_name' => __( 'Блог' ),
                'add_new' => __( 'Добавить блог' ),
            ),
            'menu_position' => 4,
            'public' => true,
            'has_archive' => true,
            'supports' => [ 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
            'menu_icon'   => 'dashicons-welcome-write-blog',
            'show_in_rest' => true
        )
    );
}
add_action( 'init', 'create_post_type' );

/**
 *Config for ACF
 */
include 'config_acf.php';