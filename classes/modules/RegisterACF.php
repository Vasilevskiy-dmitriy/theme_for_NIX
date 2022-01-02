<?php

namespace theme_for_nix\classes\modules;

class RegisterACF {
    public function __construct(){
        add_action( 'acf/init', [ $this, 'register_blocks' ] );
        add_action( 'acf/init', [ $this, 'register_option_pages' ] );
    }
    /**
     * Blocks ACF
     */
    public function register_blocks() {
        $config = $this->get_config();

        foreach ( $config as $block ) {
            acf_register_block_type( $block );
        }
    }

    private function get_config(): array {
        return include get_template_directory() . '/customConfigs/CustomBlocksACF.php';
    }

    /**
     * Pages ACF
     */
    public function register_option_pages() {
        $config = $this->get_option_pages_config();

        foreach ( $config as $page ) {
            acf_add_options_page( $page );
        }
    }

    private function get_option_pages_config(): array {
        return include get_template_directory() . '/customConfigs/CustomPagesACF.php';
    }
}
