<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * This file set some config values.
 * 
 * @since: 1.0.0
 * @version: 1.0.0
 * 
 */ if (!defined('ABSPATH')) exit;


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
 * @var string[]
 */
$dev_domains = [
   "127.0.0.1",
   "localhost"
];