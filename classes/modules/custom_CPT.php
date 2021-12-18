<?php

namespace theme_for_nix\classes\modules;

class custom_CPT
{
    public function __construct(){
        add_action( 'init', [ $this, 'create_post_type' ] );
        add_action( 'init', [ $this, 'cpt_movie' ] );
    }

    /**
     * CPT blog
     */
    public function create_post_type() {
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

    /**
     * CPT movie
     */
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
}