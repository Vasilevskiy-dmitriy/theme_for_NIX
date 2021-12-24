<?php

return [
    [
        'name' => 'blog',
        'args'  =>  [     'labels' => array(
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
            ]
    ],
    [
        'name' => 'movie',
        'args' =>  [
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
            ]
    ]
];