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

    // Define the locations of config files
    $conf_categories = WPTB_DIR__REGISTER."categories.php";
    $conf_tags       = WPTB_DIR__REGISTER."tags.php";
    // $conf_posts      = WPTB_DIR__REGISTER."posts.php";
    $conf_pages      = WPTB_DIR__REGISTER."pages.php";
    $conf_menus      = WPTB_DIR__REGISTER."menus.php";

    // Create new categories
    if (is_admin() && file_exists($conf_categories))
    {
        $categories = include $conf_categories;

        if (!is_array($categories)) 
            throw new Exception("The file ".$conf_categories." must return an Array.");

        foreach ($categories as $category) 
            wptb__category_create($category);
    }

    // Create new tags
    if (is_admin() && file_exists($conf_tags))
    {
        $tags = include $conf_tags;

        if (!is_array($tags)) 
        throw new Exception("The file ".$conf_tags." must return an Array.");

        foreach ($tags as $tag) 
            wptb__tag_create($tag);
    }

    // Create new custom posts
    if (false && is_admin() && file_exists($conf_posts))
    {
    }

    // Create new pages
    if (is_admin() && file_exists($conf_pages))
    {
        $pages = include $conf_pages;

        if (!is_array($pages)) 
        throw new Exception("The file ".$conf_pages." must return an Array.");

        foreach ($pages as $page) 
            wptb__page_create($page['name'], $page);
    }

    // Create new menus
    if (is_admin() && file_exists($conf_menus))
    {
        $menus = include $conf_menus;

        if (!is_array($menus)) 
        throw new Exception("The file ".$conf_menus." must return an Array.");

        foreach ($menus as $menu)
        {
            $items = isset($menu['items']) ? $menu['items'] : [];
            $options = isset($menu['options']) ? $menu['options'] : [];

            wptb__menu__create($menu['name'], $items, $options);
        }
    }
    

    // Update the Permalink Structure
    $permalink = get_option('permalink_structure');

    if ((empty($permalink) || (defined('WPTB_OVERRIDE_PERMALINK') && WPTB_OVERRIDE_PERMALINK)) && defined('WPTB_PERMALINK_STRUCTURE'))
    {
        update_option("rewrite_rules", FALSE);
        $wp_rewrite->set_permalink_structure(WPTB_PERMALINK_STRUCTURE);
    }

    $wp_rewrite->flush_rules(true);
}
add_action('after_switch_theme', 'wptb__install');