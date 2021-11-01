<?php
/**
 * WordPress Theme Boilerplate by OSW3
 * --
 * 
 * File: ./app/environment.php
 * This file define the execution environment
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