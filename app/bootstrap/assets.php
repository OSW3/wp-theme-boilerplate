<?php
//======================================================================
//  WordPress Theme Boilerplate by OSW3
//======================================================================

// File: ./app/assets.php
// This file autoload assets of the theme (css & js)

// required: yes

//======================================================================

// Place $assets to the global namespace
// global $assets;

$assets = [
    'styles' => [], 
    'scripts' => []
];

wptb_include( WPTB_DIR__CONFIG . "assets.php");

define("ASSETS", $assets); 

unset($assets);