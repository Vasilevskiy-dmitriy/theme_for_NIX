<?php

/**
 * INCLUDE
 */
//default
include 'classes/theme/DefaultFunctionsTheme.php';
//default
include 'classes/modules/CustomTaxonomy.php';
include 'classes/modules/CustomCPT.php';
include 'classes/modules/CustomFilterCPT.php';
//plugins
include  'classes/plugin/ACF/RegisterBlock.php';

/**
 * NEW classes
 */
//default
new \theme_for_nix\classes\theme\DefaultFunctionsTheme();
//default
new \theme_for_nix\classes\modules\CustomTaxonomy();
new \theme_for_Nix\classes\modules\CustomCPT();
new \theme_for_Nix\classes\modules\CustomFilterCPT();
//plugins
new \theme_for_nix\classes\plugin\ACF\RegisterBlock;




