<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Use this file to define the pages that will be created when installing the
 * theme.
 * 
 * @since: 1.0.0
 * @version: 1.0.0
 * 
 */ if (!defined('ABSPATH')) exit;


/**
 * @param string name
 * @param string slug Define the slug (name) of the page
 * @param string content Define the dynamic content of the page. The content is stored in the database.
 * @param string template Define the file of the template of the page. This file must be stored in the the directory "templates/pages".
 * @param bool static-homepage If true set the new page as the Homepage of the website.
 * @param bool static-posts If true set the new page as a dedicated page for Posts (like blog).
 * @param bool static-privacy
 */
return [
    [
        'name'              => "Homepage",
        'slug'              => "homepage",
        'static-homepage'   => true,
        'content'           => "",
        'template'          => "front-page.php",
    ],
    [
        'name'              => "Blog",
        'slug'              => "blog",
        'static-posts'      => true,
        'content'           => "",
        'template'          => "home.php",
    ],
    [
        'name'              => "Privacy",
        'slug'              => "privacy",
        'static-privacy'    => true,
        'content'           => "",
        'template'          => "privacy.php",
    ],
    [
        'name'              => "About",
        'slug'              => "about",
        'content'           => "",
        'template'          => "about.php",
    ],
    [
        'name'              => "Contact",
        'slug'              => "contact",
        'content'           => "",
        'template'          => "contact.php",
    ],
    [
        'name'      => "Example with Static Content",
        'slug'      => "example-with-static-content",
        'content'   => "This content is write in the Pages editor",
        'template'  => "custom-static.php",
    ],
    [
        'name'      => "Example with Dynamic Content",
        'slug'      => "example-with-dynamic-content",
        'template'  => "custom-dynamic.php",
    ],
];