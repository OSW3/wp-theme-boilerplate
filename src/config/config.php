<?php
/**
 * WordPress Theme Boilerplate by OSW3
 * --
 * 
 * File: ./config/config.php
 * This file set some config values
 * 
 * required: recommended
 */

/**
 * Check if this file is executed in WordPress environment.
 * if the ABSPATH constant don't exists, this theme will be not executed
 */
if (!defined( 'ABSPATH' )) exit;


/**
 * Define the execution environment
 * 
 * @values prod | dev
 * @var string
 */
$env = "prod";

/**
 * The list of domains which are automatically considered as a "dev" environment
 * 
 * @var array
 */
$dev_domains = [
   "127.0.0.1",
   "localhost"
];