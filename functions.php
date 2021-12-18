<?php

/**
 * INCLUDE
 */
//default
include 'classes/theme/default_functions_theme.php';
//default
include 'classes/modules/custom_taxonomy.php';
include 'classes/modules/custom_CPT.php';
include 'classes/modules/custom_filter_CPT.php';
//plugins
include  'classes/plugin/ACF/register_block.php';

/**
 * NEW classes
 */
//default
new \theme_for_nix\classes\theme\default_functions_theme();
//default
new \theme_for_nix\classes\modules\custom_taxonomy();
new \theme_for_Nix\classes\modules\custom_CPT();
new \theme_for_Nix\classes\modules\custom_filter_CPT();
//plugins
new \theme_for_nix\classes\plugin\ACF\register_block;




