<?php

namespace theme_for_nix\classes\modules;

class RegisterTaxonomy
{
    public function __construct(){
        add_action( 'init', [ $this, 'registerTaxonomy' ] );
    }

    public function registerTaxonomy() {
        $config = $this->get_config();

        foreach ( $config as $taxonomy ) {
            $taxonomyName = $taxonomy[ 'taxonomy' ];
            $object_type = $taxonomy[ 'object_type' ];
            $args = $taxonomy[ 'args' ];

            register_taxonomy( $taxonomyName, $object_type, $args );
        }
    }

    private function get_config(): array {
        return include get_template_directory() . '/customConfigs/CustomTaxonomy.php';
    }
}
