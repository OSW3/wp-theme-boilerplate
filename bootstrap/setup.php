<?php
/**
 * WP Theme Boilerplate : bootstrap/setup
 * 
 * Definition of constants and variables
 */


/**
 * On WordPress init
 */
function wpThemeBoilerplate__init() 
{
    // active la gestion des menus
    register_nav_menu("new-menu",__( "New Menu" ));

}

/**
 * On WordPress Loaded
 */
function wpThemeBoilerplate__wp_loaded() 
{
    if(!is_admin()) 
    {
        // remove meta "generator"
        remove_action("wp_head", "wp_generator");

        // Enqueue Style
        if (is_array(ASSETS["styles"])) 
        {
            foreach (ASSETS["styles"] as $item)
            {
                wp_enqueue_style($item[0], $item[1]);
            }
        }

        // Enqueue Style LESS
        if (is_array(ASSETS["less"]))
        {
            foreach (ASSETS["less"] as $item)
            {
                wp_enqueue_style($item[0], $item[1]);
            }
        }

        // Enqueue JavaScript
        if (is_array(ASSETS["scripts"]))
        {
            foreach (ASSETS["scripts"] as $item)
            {
                $item[4] = isset($item[4]) ? !$item[4] : true;
                wp_enqueue_script($item[0], $item[1], $item[3], $item[2], $item[4]);
            }
        }
    }
} 

/**
 * On After Setup Theme 
 */
function wpThemeBoilerplate__after_setup_theme() 
{
    // Force to show/hide the admin bar
    if (defined('WPTB_SHOW_ADMINBAR'))
    {
        show_admin_bar(WPTB_SHOW_ADMINBAR);
    }

    // Add the <title> tag
    add_theme_support('title-tag');

    // -
    add_theme_support('post-thumbnails'); 
}

/**
 * Redefine the excerpt lentgh
 * EXCERPT_LENGTH is declared in config/config
 */
function wpThemeBoilerplate__excerpt_length( $length ) 
{
    if (defined('WPTB_EXCERPT_LENGTH')) 
    {
        return WPTB_EXCERPT_LENGTH;
    }

	return 40;
}

/**
 * On styles are loaded
 */
function wpThemeBoilerplate__style_loader_tag( $tag ) 
{
    // Make LESS tags
    if (is_array(ASSETS["less"])) 
    {
        foreach (ASSETS["less"] as $item) 
        {
            $tag = preg_replace(
                "/='stylesheet' id='".$item[0]."-css'/", 
                "='stylesheet/less' id='".$item[0]."-less-css'", 
                $tag
            );
        }
    }

    return $tag;
}

/**
 * Triggers
 */

// Actions Triggers
add_action( 'init'              , "wpThemeBoilerplate__init" );
add_action( 'wp_loaded'         , "wpThemeBoilerplate__wp_loaded");
add_action( 'after_setup_theme' , 'wpThemeBoilerplate__after_setup_theme' );

// Filters Triggers
add_filter( 'excerpt_length'    , 'wpThemeBoilerplate__excerpt_length', 999 );
add_filter( 'style_loader_tag'  , 'wpThemeBoilerplate__style_loader_tag' );