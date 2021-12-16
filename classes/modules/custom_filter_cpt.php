<?php

namespace theme_for_nix\classes\modules;

class custom_filter_cpt{
    public function __construct(){
        add_action( 'pre_get_posts', [ $this, 'modify_archive_blog_query' ] );
        add_action( 'pre_get_posts', [ $this, 'modify_archive_movie_query' ] );
    }

    /**
    * Filter for blog
    */
    public function modify_archive_blog_query( \WP_Query $query ) {
        if ( is_admin() || ! $query->is_post_type_archive( 'blog' ) || ! $query->is_main_query() ) {
            return ;
        }

        $search           = filter_input( INPUT_GET, 'filter_search', FILTER_SANITIZE_STRING );
        $filter_views     = filter_input( INPUT_GET, 'filter_views', FILTER_VALIDATE_INT );
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


/**
* Filrer for movie
*/
    function modify_archive_movie_query( \WP_Query $query ) {
        if ( is_admin() || ! $query->is_post_type_archive( 'movie' ) || ! $query->is_main_query() ) {
            return;
        }

        $search            = filter_input( INPUT_GET, 'filter_search', FILTER_SANITIZE_STRING );
        $time              = filter_input( INPUT_GET, 'time', FILTER_VALIDATE_INT );
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
}