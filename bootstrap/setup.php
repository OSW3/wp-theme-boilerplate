<?php

/**
 * The Setup
 */

add_action( "wp_loaded", function()
{
    if(!is_admin()) 
    {
        // remove meta "generator"
        remove_action("wp_head", "wp_generator");

        // Enqueue Style
        if (is_array(ASSETS["styles"])) 
        foreach (ASSETS["styles"] as $item)
        wp_enqueue_style($item[0], $item[1]);

        // Enqueue Style LESS
        if (is_array(ASSETS["less"]))
        foreach (ASSETS["less"] as $item)
        wp_enqueue_style($item[0], $item[1]);

        // Enqueue JavaScript
        if (is_array(ASSETS["scripts"]))
        foreach (ASSETS["scripts"] as $item)
        wp_enqueue_script($item[0], $item[1], $item[3], $item[2], $item[4]);
    }
} );


function theme_functions() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails'); 
}
add_action( 'after_setup_theme', 'theme_functions' );




function custom_excerpt_length( $length ) {
    if (defined('EXCERPT_LENGTH')) {
        return EXCERPT_LENGTH;
    }
	return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );





function make_stylesheet_less( $tag ) {
    if (is_array(ASSETS["less"])) {
        foreach (ASSETS["less"] as $item) {
            $tag = preg_replace( "/='stylesheet' id='".$item[0]."-css'/", "='stylesheet/less' id='".$item[0]."-less-css'", $tag );
        }
    }
    return $tag;
}
add_filter( 'style_loader_tag', 'make_stylesheet_less' );


// active la gestion des menus
function simplify_register_menu() {
	register_nav_menu("new-menu",__( "New Menu" ));
}
add_action( "init", "simplify_register_menu" );

/** Remove Admin Bar */
if ((!isset($_GET["simplify"]) || $_GET["simplify"] != "false") && isset($display_wp_admin_bar) && !$display_wp_admin_bar)
    show_admin_bar(false);
