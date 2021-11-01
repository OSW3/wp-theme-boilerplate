<?php
//======================================================================
//  WordPress Theme Boilerplate by OSW3
//======================================================================

// File: ./config/pages.php
// Use this file to define the pages that will be created when installing the theme

// required: recommended

//======================================================================

// Check the ABSPATH constant for security
// if the ABSPATH constant don't exists, this theme will be not executed
if (!defined( 'ABSPATH' )) exit;

//======================================================================

// 1. Comment the line below if you need to define pages for your website
// return;


// 2. Create the Static Homepage
wptb_addPage("Homepage", [
    'homepage'  => true, // Set the page as Homepage
    'slug'      => "homepage",
    'content'   => "",
    'template'  => "front-page.php",
]);

// 3. Create the static Posts page
wptb_addPage("Blog", [
    'postspage' => true, // Set the page as Posts page
    'slug'      => "blog",
    'content'   => "",
    'template'  => "home.php",
]);

wptb_addPage("Contact", [
    'slug'      => "contact",
    'content'   => "",
    'template'  => "contact.php",
]);

// 3. Page with static content
wptb_addPage("Example with Static Content", [
    'slug'      => "example-with-static-content",
    'content'   => "This content is writed in the Pages editor",
    'template'  => "custom-template-static.php",
]);

// 4. Page with dynamic content
wptb_addPage("Example with Dynamic Content", [
    'slug'      => "example-with-dynamic-content",
    'template'  => "custom-template-dynamic.php",
]);