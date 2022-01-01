<?php

/**
 * INCLUDE
 */
//default
include 'classes/theme/DefaultFunctionsTheme.php';
//modules
include 'classes/modules/RegisterTaxonomy.php';
include 'classes/modules/RegisterCPT.php';
include 'classes/modules/CustomFilterCPT.php';
include 'classes/modules/RegisterACF.php';
include 'classes/modules/Likes.php';

/**
 * NEW classes
 */
//default
new \theme_for_nix\classes\theme\DefaultFunctionsTheme();
//modules
new \theme_for_nix\classes\modules\RegisterTaxonomy();
new \theme_for_Nix\classes\modules\RegisterCPT();
new \theme_for_Nix\classes\modules\CustomFilterCPT();
new \theme_for_Nix\classes\modules\RegisterACF();
new \theme_for_Nix\classes\modules\Likes();

