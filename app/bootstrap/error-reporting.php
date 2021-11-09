<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * This file override the Apache setting about the errors reportings.
 * 
 * @since: 1.0.0
 * @version: 1.0.0
 * 
 */ if (!defined('ABSPATH')) exit;


/**
 * Define $env value if is not set
 */
if (!isset($env)) $env = "prod";

/**
 * If the $env is NOT "dev", force to hide all errors
 */
if ($env != "dev") 
{
   ini_set('display_errors', 0);
   ini_set('display_startup_errors', 0);
   error_reporting(0);
}

/**
 * If the $env is "dev", force to show all errors
 */
else 
{
   ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);
}