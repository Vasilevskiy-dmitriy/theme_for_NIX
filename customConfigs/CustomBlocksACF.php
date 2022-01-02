<?php

return  [
    [
        'name'            => 'advertising_banner',
        'title'           => __( 'Advertising banner', THEME_FN_TEXT_DOMAIN ),
        'render_template' => 'template-parts/ACF_block/advertising_banner.php',
        'mode'            => 'edit',
    ],
    [
        'name'            => 'advertising_banner_content',
        'title'           => __( 'Advertising banner content', THEME_FN_TEXT_DOMAIN ),
        'render_template' => 'template-parts/ACF_block/advertising_banner_content.php',
        'mode'            => 'edit',
    ],
    [
        'name'            => 'header_banner',
        'title'           => __( 'Header banner', THEME_FN_TEXT_DOMAIN ),
        'render_template' => 'template-parts/ACF_block/header_banner.php',
        'mode'            => 'edit',
    ],
    [
        'name'            => 'render_posts',
        'title'           => __( 'Render posts', THEME_FN_TEXT_DOMAIN ),
        'render_template' => 'template-parts/ACF_block/render_posts.php',
        'mode'            => 'edit',
    ],
    [
        'name'            => 'info_about_movie',
        'title'           => __( 'Info about movie', THEME_FN_TEXT_DOMAIN ),
        'render_template' => 'template-parts/ACF_block/info_about_movie.php',
        'mode'            => 'edit',
    ],
    [
        'name'            => 'slider',
        'title'           => __( 'Slider', THEME_FN_TEXT_DOMAIN ),
        'render_template' => 'template-parts/ACF_block/slider.php',
        'mode'            => 'edit',
    ],
    [
        'name'            => 'improved_render_movies',
        'title'           => __( 'Improved render movies', THEME_FN_TEXT_DOMAIN ),
        'render_template' => 'template-parts/ACF_block/improved_render_movies.php',
        'mode'            => 'edit',
        'enqueue_style'   => get_template_directory_uri() . '/assets/css/style_imp_rend_mov.css',
    ],
    [
        'name'            => 'popular_from_tmdb',
        'title'           => __( 'Popular from themoviedb.org', THEME_FN_TEXT_DOMAIN ),
        'render_template' => 'template-parts/ACF_block/render_tmdb.php',
        'mode'            => 'edit',
        'enqueue_style'   => get_template_directory_uri() . '/assets/css/render_tmdb.css',
    ],
    [
        'name'            => 'football_data',
        'title'           => __( 'Football-data.org API', THEME_FN_TEXT_DOMAIN ),
        'render_template' => 'template-parts/ACF_block/render_football_lc.php',
        'mode'            => 'edit',
//        'enqueue_style'   => get_template_directory_uri() . '/assets/css/render_tmdb.css',
    ],
    [
        'name'            => 'likes_movie',
        'title'           => __( 'Likes movie', THEME_FN_TEXT_DOMAIN ),
        'render_template' => 'template-parts/ACF_block/likes_movie.php',
        'mode'            => 'edit',
    ],
] ;


