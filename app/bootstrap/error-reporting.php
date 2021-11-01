<?php
/**
 * WordPress Theme Boilerplate by OSW3
 * --
 * 
 * File: ./app/error-reporting.php
 * This file override the Apache setting about the errors reportings.
 *
 * @see http://php.net/manual/fr/function.error-reporting.php
 * 
 * --
 * 
 * DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE
 * DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE
 * DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE
 * DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE
 */

/**
 * Check if this file is executed in WordPress environment.
 * if the ABSPATH constant don't exists, this theme will be not executed
 */
if (!defined( 'ABSPATH' )) exit;

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