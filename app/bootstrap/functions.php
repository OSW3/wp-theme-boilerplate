<?php
/**
 * WordPress Theme Boilerplate by OSW3
 * --
 * 
 * File: ./app/functions.php
 * This file autoload functions of the theme
 * 
 * --
 * 
 * DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE
 * DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE
 * DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE
 * DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE
 */

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
        if ( preg_match("/^wptb_(.+)\.php$/", $file) )
        {
            include_once WPTB_DIR__FUNCTIONS . $file;
        }
    }
}