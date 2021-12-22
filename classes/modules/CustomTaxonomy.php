<?php

namespace theme_for_nix\classes\modules;

class CustomTaxonomy
{
    public function __construct(){
        add_action( 'init', [ $this, 'registerTaxonomy' ] );
    }

    public function registerTaxonomy() {
        $config = $this->get_config();

        foreach ( $config as $taxonomy ) {
            return $taxonomy ;
        }
    }

    private function get_config(): array {
        return include get_template_directory() . '/template-parts/customConfigs/RegisterTaxonomy.php';
    }
}