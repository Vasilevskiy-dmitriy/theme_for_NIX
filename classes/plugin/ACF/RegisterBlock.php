<?php

namespace theme_for_nix\classes\plugin\ACF;

class RegisterBlock
{
    public function __construct(){
        add_action( 'acf/init', [ $this, 'register_blocks' ] );
    }

    public function register_blocks() {
        $config = $this->get_config();

        foreach ( $config as $block ) {
            acf_register_block_type( $block );
        }
    }

    private function get_config(): array {
        return include get_template_directory() . '/template-parts/ACF_block/00_array_acf_blocks.php';
    }

}