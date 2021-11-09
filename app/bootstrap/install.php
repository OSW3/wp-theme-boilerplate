<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * This file contain the process of the installation of this theme.
 * 
 * @since: 1.0.0
 * @version: 1.0.0
 * 
 */ if (!defined('ABSPATH')) exit;


function wptb__install() 
{
    global $wp_rewrite;

    if (is_admin())
    {
        wptb__include( WPTB_DIR__CONFIG.DS."categories.php" );
        wptb__include( WPTB_DIR__CONFIG.DS."tags.php" );
        // wptb__include( WPTB_DIR__CONFIG.DS."posts.php" );
        wptb__include( WPTB_DIR__CONFIG.DS."pages.php" );
        wptb__include( WPTB_DIR__CONFIG.DS."menus.php" );
    }

    // Change the Permalink Structure
    $permalink = get_option('permalink_structure');

    if ((empty($permalink) || (defined('WPTB_OVERRIDE_PERMALINK') && WPTB_OVERRIDE_PERMALINK)) && defined('WPTB_PERMALINK_STRUCTURE'))
    {
        update_option("rewrite_rules", FALSE);
        $wp_rewrite->set_permalink_structure(WPTB_PERMALINK_STRUCTURE);
    }

    $wp_rewrite->flush_rules(true);
}
add_action('after_switch_theme', 'wptb__install');