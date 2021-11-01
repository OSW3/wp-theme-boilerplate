<?php
/**
 * WordPress Theme Boilerplate by OSW3
 * --
 * 
 * File: ./config/admin.php
 * Use this file to define the admin configuration.
 * 
 * required: recommended
 */

/**
 * Check if this file is executed in WordPress environment.
 * if the ABSPATH constant don't exists, this theme will be not executed
 */
if (!defined( 'ABSPATH' )) exit;


/**
 * Show the admin bar on front office
 * 
 * @default true
 * @var bool
 */
const WPTB__SHOW_ADMINBAR = false;