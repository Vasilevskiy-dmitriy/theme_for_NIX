<?php

class Football_data_API
{
    public function __construct( private $api_key ){
    }
    public function result(){
        if ( ! $result = get_transient( 'football_db' . __METHOD__ ) ) {
            $result = $this->response();
            $this->save_to_cache( $result );
        }

        return $result;
    }

    public function response(){
        $uri = "https://api.football-data.org/v2/competitions/CL/matches";
        return $this->request( $uri );
    }

    private function request($uri){
        $reqPrefs['http']['method'] = 'GET';
        $reqPrefs['http']['header'] = "X-Auth-Token: $this->api_key ";
        $stream_context = stream_context_create($reqPrefs);
        $response = file_get_contents($uri, false, $stream_context);
        return json_decode($response);
    }

    private function save_to_cache( $value, ){
        return set_transient( 'football_db' . __METHOD__, $value, 60*60*12 );
    }
}