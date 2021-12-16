<?php

/**
 * INCLUDE
 */
include 'classes/theme/default_functions_theme.php';
include 'classes/modules/custom_taxonomy.php';
include 'classes/modules/custom_cpt.php';
include 'classes/modules/custom_filter_cpt.php';

/**
 * NEW classes
 */
new \theme_for_nix\classes\theme\default_functions_theme();
new \theme_for_nix\classes\modules\custom_taxonomy();
new \theme_for_Nix\classes\modules\custom_cpt();
new \theme_for_Nix\classes\modules\custom_filter_cpt();

