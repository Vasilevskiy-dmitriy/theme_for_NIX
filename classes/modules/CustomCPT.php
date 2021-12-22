<?php

namespace theme_for_nix\classes\modules;

class CustomCPT
{
    public function __construct(){
        add_action( 'init', [ $this, 'registerCPT' ] );
    }

    public function registerCPT() {
        $config = $this->get_config();

        foreach ( $config as $CPT ) {
            return $CPT ;
        }
    }

    private function get_config(): array {
        return include get_template_directory() . '/template-parts/customConfigs/RegisterCPT.php';
    }

}