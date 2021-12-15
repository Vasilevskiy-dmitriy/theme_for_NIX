<?php
/**
 * Register CONST for lang-func
 */
$cur_theme = wp_get_theme();

define( 'THEME_FN_VERSION', $cur_theme->get( 'Version' ) );
define( 'THEME_FN_TEXT_DOMAIN', $cur_theme->get( 'TextDomain' ) );

/**
 * Script_load
 */
function load_style_script ()
{
    /**
     * Styles
     */
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', THEME_FN_VERSION);
    wp_enqueue_style('bootstrap' , get_template_directory_uri() . '/assets/css/bootstrap.min.css', THEME_FN_VERSION);
    wp_enqueue_style('blog' , get_template_directory_uri() . '/assets/css/blog.css', THEME_FN_VERSION);
    wp_enqueue_style('navbar', get_template_directory_uri() . '/assets/css/navbar.css', THEME_FN_VERSION);

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
 * Taxonomy for CPT 'movie'
 */
function create_taxonomy(){
    register_taxonomy( 'blog', [ 'blog' ], [
        'label'                 => '',
        'labels'                => [
            'name'              => __( 'Темы', THEME_FN_TEXT_DOMAIN ),
            'singular_name'     => __( 'Тема', THEME_FN_TEXT_DOMAIN ),
            'search_items'      => __( 'Поиск темы', THEME_FN_TEXT_DOMAIN ),
            'all_items'         => __( 'Все темы', THEME_FN_TEXT_DOMAIN ),
            'view_item '        => __( 'Показать тему', THEME_FN_TEXT_DOMAIN ),
            'edit_item'         => __( 'Обновить тему', THEME_FN_TEXT_DOMAIN ),
            'update_item'       => __( 'Применить изменения', THEME_FN_TEXT_DOMAIN ),
            'add_new_item'      => __( 'Добавить тему', THEME_FN_TEXT_DOMAIN ),
            'new_item_name'     => __( 'Новое имя темы', THEME_FN_TEXT_DOMAIN ),
            'back_to_items'     => __( '← Нахад к темам', THEME_FN_TEXT_DOMAIN ),
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
add_action( 'init', 'create_taxonomy' );

function categories_movies(){
    register_taxonomy( 'categories_movies', [ 'movie' ], [
        'label'                 => '',
        'labels'                => [
            'name'              => __( 'Категории', THEME_FN_TEXT_DOMAIN ),
            'singular_name'     => __( 'Категория', THEME_FN_TEXT_DOMAIN ),
            'search_items'      => __( 'Поиск категория', THEME_FN_TEXT_DOMAIN ),
            'all_items'         => __( 'Все категории', THEME_FN_TEXT_DOMAIN ),
            'view_item '        => __( 'Показать категорию', THEME_FN_TEXT_DOMAIN ),
            'edit_item'         => __( 'Обновить категорию', THEME_FN_TEXT_DOMAIN ),
            'update_item'       => __( 'Применить изменения', THEME_FN_TEXT_DOMAIN ),
            'add_new_item'      => __( 'Добавить категорию', THEME_FN_TEXT_DOMAIN ),
            'new_item_name'     => __( 'Новое имя категории', THEME_FN_TEXT_DOMAIN ),
            'back_to_items'     => __( '← Нахад к категориям', THEME_FN_TEXT_DOMAIN ),
        ],
        'description'           => '', // описание таксономии
        'public'                => true,
        'hierarchical'          => true,
        'rewrite'               => true,
        'capabilities'          => array(),
        'meta_box_cb'           => 'post_categories_meta_box',
        'show_admin_column'     => true, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
        'show_in_rest'          => true, // добавить в REST API
        'rest_base'             => null,

    ] );
}
add_action( 'init', 'categories_movies' );
/**
 * CPT blog
 * CPT movie
 */
function create_post_type() {
    register_post_type( 'blog',
        array(
            'labels' => array(
                'name' => __( 'Блоги', THEME_FN_TEXT_DOMAIN ),
                'singular_name' => __( 'Блог', THEME_FN_TEXT_DOMAIN ),
                'add_new' => __( 'Добавить блог', THEME_FN_TEXT_DOMAIN ),
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

function cpt_movie() {
    register_post_type( 'movie',
        array(
            'labels' => array(
                'name' => __( 'Фильмы', THEME_FN_TEXT_DOMAIN ),
                'singular_name' => __( 'Фильм', THEME_FN_TEXT_DOMAIN ),
                'add_new' => __( 'Добавить фильм', THEME_FN_TEXT_DOMAIN ),
            ),
            'menu_position' => 5,
            'public' => true,
            'has_archive' => true,
            'supports' => [ 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
            'menu_icon'   => 'dashicons-welcome-write-blog',
            'show_in_rest' => true
        )
    );
}
add_action( 'init', 'cpt_movie' );

/**
 *Config for ACF
 */
include 'config_acf.php';

/**
 * Filter for blog
 * Filrer for movie
 */
function modify_archive_blog_query( WP_Query $query ) {
    if ( is_admin() || ! $query->is_post_type_archive( 'blog' ) || ! $query->is_main_query() ) {
        return;
    }

    $search        = filter_input( INPUT_GET, 'filter_search', FILTER_SANITIZE_STRING );
    $filter_views   = filter_input( INPUT_GET, 'filter_views', FILTER_VALIDATE_INT );
    $filter_relevance = filter_input( INPUT_GET, 'filter_relevance', FILTER_SANITIZE_STRING);

    $meta_query = [];

    if ( $search ) {
        $query->set( 's', $search );
    }

    if ( $filter_views ) {
        $meta_query[] = [
            'key'   => 'Ожидаемое количество просмотров',
            'value' => $filter_views,
        ];
    }

    if ( $filter_relevance ) {
        $meta_query[] = [
          'key'   => 'Актуальность записи',
          'value' => $filter_relevance,
        ];
    }

    if ( $meta_query ) {
        $query->set( 'meta_query', $meta_query );
    }
}

add_action( 'pre_get_posts', 'modify_archive_blog_query' );

function modify_archive_movie_query( WP_Query $query ) {
    if ( is_admin() || ! $query->is_post_type_archive( 'movie' ) || ! $query->is_main_query() ) {
        return;
    }

    $search        = filter_input( INPUT_GET, 'filter_search', FILTER_SANITIZE_STRING );
    $time   = filter_input( INPUT_GET, 'time', FILTER_VALIDATE_INT );
    $movie_imdb_rating = filter_input( INPUT_GET, 'movie_imdb_rating', FILTER_VALIDATE_INT);

    $meta_query = [];

    if ( $search ) {
        $query->set( 's', $search );
    }

    if ( $time ) {
        $meta_query[] = [
            'key'   => 'time',
            'value' => $time,
            'compare' => '<=',
            'type'    => 'numeric',
        ];
    }

    if ( $movie_imdb_rating ) {
        $meta_query[] = [
            'relation' => 'OR',
            [
                'key'   => 'movie_imdb_rating',
                'value' => $movie_imdb_rating,
                'compare' => '>=',
                'type'    => 'numeric',
            ],
            [
                'key'   => 'movie_kinopoisk_rating',
                'value' => $movie_imdb_rating,
                'compare' => '>=',
                'type'    => 'numeric',
            ]
        ];
    }

    if ( $meta_query ) {
        $query->set( 'meta_query', $meta_query );
    }
}

add_action( 'pre_get_posts', 'modify_archive_movie_query' );