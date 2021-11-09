<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * This file define the execution environment.
 * 
 * @since: 1.0.0
 * @version: 1.0.0
 * 
 */ if (!defined('ABSPATH')) exit;


/**
 * Define $dev_domains array if is not set
 */
if (!isset($dev_domains)) $dev_domains = [];

/**
 * Define the execution environment 
 */
if (
    !empty($_SERVER['SERVER_NAME']) &&
    in_array($_SERVER['SERVER_NAME'], $dev_domains)
) $env = "dev";