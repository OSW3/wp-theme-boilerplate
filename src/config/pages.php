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

// Static Homepage
wptb_addPage("Homepage", [
    'homepage'  => true,
    'slug'      => "homepage",
    'content'   => "",
    'template'  => "front-page.php",
]);

// Blog (posts) page
wptb_addPage("Blog", [
    'postspage' => true,
    'slug'      => "blog",
    'content'   => "",
    'template'  => "home.php",
]);

// Contact Page
wptb_addPage("Contact", [
    'slug'      => "contact",
    'content'   => "",
    'template'  => "contact.php",
]);


// Example: Page with static content
wptb_addPage("Example with Static Content", [
    'slug'      => "example-with-static-content",
    'content'   => "This content is writed in the Pages editor",
    'template'  => "custom-static.php",
]);

// Example: Page with dynamic content
wptb_addPage("Example with Dynamic Content", [
    'slug'      => "example-with-dynamic-content",
    'template'  => "custom-dynamic.php",
]);





// * 
// * Use the wptb_addPage function to register a new page.
// * e.g.: wptb_addPage(string $name, array $options)
// * 
// * 
// * Params
// * --
// * 
// * @param string $name The name of the page in the Pages list.
// * @param array $options List of parameters of the page.
// * 
// * 
// * Options
// * --
// * 
// * @param bool "homepage" If true set the new page as the Homepage of the 
// *      website.
// * 
// * @param bool "postspage" If true set the new page as a dedicated page for 
// *      Posts (like blog).
// * 
// * @param string "slug" Define the slug (name) of the page
// * 
// * @param string "content" Define the dynamic content of the page. The content
// *      is stored in the database.
// * 
// * @param string "template" Define the file of the template of the page. This 
// *      file must be stored in the the directory "templates/pages".
// * 