<?php

class TMDB_API {
    public function __construct( private $api_key ){
    }

    public function popular( $page ) {
        if ( ! $result = get_transient( 'movies_db' . __METHOD__ ) ) {
            $result = $this->request( $page );
            $this->save_to_cache( $result );
        }

        return $result;
    }

    private function save_to_cache( $value, ): bool {
        return set_transient( 'movies_db' . __METHOD__, $value, 60*60*12 );
    }

    public function request( $page ) {
        $response = wp_remote_get( ( 'https://api.themoviedb.org/3/movie/popular' ),
            [ 'body' =>
                [
                    'api_key' => $this->api_key,
                    'language' => 'ru-RU',
                    'page' => $page
                ]
            ]
        );
        return json_decode( $response['body'] );
    }

}