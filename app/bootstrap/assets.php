<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * This file autoload assets of the theme (css & js).
 * 
 * @since: 1.0.0
 * @version: 1.0.0
 * 
 */ if (!defined('ABSPATH')) exit;


// Define $assets register
$assets             = [];
$assets['styles']   = [];
$assets['scripts']  = [];

// Import $assets definition (custom config)
wptb__include( WPTB_DIR__CONFIG . "assets.php");

define("ASSETS", $assets); 

unset($assets);