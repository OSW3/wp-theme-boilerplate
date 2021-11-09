<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * This file autoload functions of the theme.
 * 
 * @since: 1.0.0
 * @version: 1.0.0
 * 
 */ if (!defined('ABSPATH')) exit;


/**
 * Define the function constant to null if is not set
 */
if (!defined('WPTB_DIR__FUNCTIONS')) define('WPTB_DIR__FUNCTIONS', null);

/**
 * Autoload functions files
 */
if (WPTB_DIR__FUNCTIONS != null && is_dir(WPTB_DIR__FUNCTIONS) ) 
{
    foreach ( scandir( WPTB_DIR__FUNCTIONS ) as $file )
    {
        if ( preg_match("/^wptb__(.+)\.php$/", $file) )
        {
            include_once WPTB_DIR__FUNCTIONS . $file;
        }
    }
}