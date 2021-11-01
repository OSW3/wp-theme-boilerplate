<?php
//======================================================================
//  WordPress Theme Boilerplate by OSW3
//======================================================================

// File: ./config/menus.php
// Use this file to define the menus that will be created when installing the theme

// required: recommended

//======================================================================

// Check the ABSPATH constant for security
// if the ABSPATH constant don't exists, this theme will be not executed
if (!defined( 'ABSPATH' )) exit;

//======================================================================



// 2. Create a menu with post object
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