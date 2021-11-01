<?php
//======================================================================
//  WordPress Theme Boilerplate by OSW3
//======================================================================

// DON'T MODIFY THIS FILE

// File: ./app/install.php
// This file contain the process of the installation of this theme

// required: yes

//======================================================================

// Check the ABSPATH constant for security
// if the ABSPATH constant don't exists, this theme will be not executed
if (!defined( 'ABSPATH' )) exit;

//-----------------------------------------------------

function wptb__install() 
{
    global $wp_rewrite;

    if (is_admin())
    {
        wptb_render( WPTB_DIR__CONFIG.DS."categories.php" );
        wptb_render( WPTB_DIR__CONFIG.DS."tags.php" );
        // wptb_render( WPTB_DIR__CONFIG.DS."posts.php" );
        wptb_render( WPTB_DIR__CONFIG.DS."pages.php" );
        wptb_render( WPTB_DIR__CONFIG.DS."menus.php" );
    }

    // Change the Permalink Structure
    $permalink = get_option('permalink_structure');

    if ((empty($permalink) || (defined('WPTB_PERMALINK_FORCE') && WPTB_PERMALINK_FORCE)) && defined('WPTB_PERMALINK_STRUCTURE'))
    {

        update_option("rewrite_rules", FALSE);
        $wp_rewrite->set_permalink_structure(WPTB_PERMALINK_STRUCTURE);
    }

    $wp_rewrite->flush_rules(true);
}
add_action('after_switch_theme', 'wptb__install');