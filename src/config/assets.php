<?php
/**
 * WordPress Theme Boilerplate by OSW3
 * --
 * 
 * File: ./config/assets.php
 * Use this file to define the assets that will be integrated when the theme is initialized
 * 
 * required: recommended
 */

/**
 * Check if this file is executed in WordPress environment.
 * if the ABSPATH constant don't exists, this theme will be not executed
 */
if (!defined( 'ABSPATH' )) exit;


// Load Stylesheets
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

/**
 * Load the main Stylesheet
 */
wptb_loadStylesheet([
    'handle' => "main",
    'source' => "main.css",
]);

/**
 * Load the Bootstrap Stylesheet
 */
// wptb_loadStylesheet([
//     'handle' => "bootstrap",
//     'source' => "bootstrap.min.css",
// ]);

/**
 * Load the Animate Stylesheet
 */
// wptb_loadStylesheet([
//     'handle' => "animate",
//     'source' => "animate.min.css",
// ]);


// Load Scripts
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

/**
 * Load the main script
 */
wptb_loadScript([
    'handle'        => "_main",
    'source'        => "main.js",
    'version'       => "1",
    // 'dependencies'  => ['_jquery'],
]);

/**
 * Load the Bootstrap library
 */
// wptb_loadScript([
//     'handle'        => "_bootstrap",
//     'source'        => "bootstrap.min.js",
//     'version'       => "4.5.2",
//     // 'dependencies'  => ['_jquery', '_popperjs'],
// ]);

/**
 * Load the jQuery library
 */
// wptb_loadScript([
//     'handle'        => "_jquery",
//     'source'        => "jquery.min.js",
//     'version'       => "3.5.1",
// ]);

/**
 * Load the Popper JS
 */
// wptb_loadScript([
//     'handle'        => "_popperjs",
//     'source'        => "popper.min.js",
//     'version'       => "1.16.0",
// ]);