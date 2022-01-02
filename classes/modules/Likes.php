<?php

namespace theme_for_nix\classes\modules;

class Likes
{
    public function __construct(){
        add_action( 'template_redirect', [ $this,'ip_process_like' ] );
    }

    public function ip_process_like()
    {
        $processed_like = false;
        $redirect = false;
        $key = wp_get_current_user()->ID;

        if ( isset( $_GET[ 'post_action' ] ) ){
            if ( is_user_logged_in() ) {
                if ( $_GET[ 'post_action' ] == 'like' ) {
                    $like_count = get_post_meta( get_the_ID(), 'likes', true );
                    $user_meta = get_user_meta( $key, get_the_ID(), true );

                    if( !$user_meta ){
                        update_user_meta( $key, get_the_ID(), 0 );
                        wp_redirect( get_the_permalink() . '?post_action=like' );
                    }

                    if ( $like_count ) {
                        if( $user_meta == '0' ){
                            $like_count = $like_count + 1;
                            update_user_meta( $key, get_the_ID(), 1 );
                        }elseif ( $user_meta == '1' ) {
                            $like_count = $like_count - 1;
                            update_user_meta( $key, get_the_ID(), 0 );
                        }
                    } else {
                        $like_count = 1;
                        update_user_meta( $key, get_the_ID(), 1 );
                    }

                    if( get_user_meta( $key, 'dis' . get_the_ID(), true ) == 1 ){
                        update_user_meta( $key, 'dis' . get_the_ID(), 0 );
                        $dislike_count = get_post_meta( get_the_ID(), 'dislikes', true );
                        $dislike_count = $dislike_count - 1;
                        update_post_meta( get_the_id(), 'dislikes', $dislike_count );
                    }

                    $processed_like = update_post_meta( get_the_id(), 'likes', $like_count );

                }elseif ( $_GET[ 'post_action' ] == 'dislike' ) {
                    $dislike_count = get_post_meta( get_the_ID(), 'dislikes', true );
                    $user_meta = get_user_meta( $key, 'dis' . get_the_ID(), true );

                    if( !$user_meta ){
                        update_user_meta( $key, 'dis' .get_the_ID(), 0 );
                        wp_redirect( get_the_permalink() . '?post_action=dislike' );
                    }

                    if ( $dislike_count ) {
                        if( $user_meta == '0' ){
                            $dislike_count = $dislike_count + 1;
                            update_user_meta( $key, 'dis' . get_the_ID(), 1 );
                        }elseif ( $user_meta == '1' ) {
                            $dislike_count = $dislike_count - 1;
                            update_user_meta( $key, 'dis' . get_the_ID(), 0 );
                        }
                    } else {
                        $dislike_count = 1;
                        update_user_meta( $key, 'dis' . get_the_ID(), 1 );
                    }

                    if( ( get_user_meta( $key,  get_the_ID(), true ) ) == 1 ){
                        $like_count = get_post_meta( get_the_ID(), 'likes', true );
                        $like_count = $like_count - 1;
                        update_post_meta( get_the_ID(), 'likes', $like_count );
                        update_user_meta( $key,  get_the_ID(), 0 );
                    }

                    $processed_like = update_post_meta( get_the_id(), 'dislikes', $dislike_count );

                }

                if ( $processed_like ) {
                    $redirect = get_the_permalink();
                }

            }else{
                $redirect = get_the_permalink() . '/?sign_in=dont_exist';
            }
        }

        if ( $redirect ) {
            wp_redirect( $redirect );
            die;
        }
    }

}