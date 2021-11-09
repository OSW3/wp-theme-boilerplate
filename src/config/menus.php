<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Use this file to define the menus that will be created when installing the
 * theme.
 * 
 * @since: 1.0.0
 * @version: 1.0.0
 * 
 */ if (!defined('ABSPATH')) exit;


// The main menu
wptb_addMenu("Main Menu", [
    [
        'title'     => "Accueil",  // Override the title of the page
        'object'    => "homepage",
    ], 
    [
        'title'     => "All Posts",
        'object'    => "blog",
    ], 
    [
        'object'    => "example-with-static-content",
    ], 
    [
        'object'    => "example-with-dynamic-content",
    ], 
]);

// 3. Create a menu with custom links
wptb_addMenu("Social Menu", [
    [
        'title'     => "Facebook",
        'classes'   => "social social-facebook",
        'url'       => "http://facebook.com/",
        'target'    => "_blank"
    ], 
    [
        'title'     => "Twitter",
        'classes'   => "social social-twitter",
        'url'       => "http://twitter.com/",
        'target'    => "_blank"
    ], 
    [
        'title'     => "Instagram",
        'classes'   => "social social-instagram",
        'url'       => "http://instagram.com/",
        'target'    => "_blank"
    ]
]);








 
//  * .
//  * 
//  * Use the wptb_addMenu function to register a new menu.
//  * e.g.: wptb_addMenu(string $name, array $options)
//  * 
//  * 
//  * Params
//  * --
//  * 
//  * @param string $name The name of the new menu.
//  * @param array $options List of menu items.
//  * 
//  */ if (!defined( 'ABSPATH' )) exit;