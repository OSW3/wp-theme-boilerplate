<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Use this file to define the assets (css & js) that will be integrated when
 * the theme is initialized.
 * 
 * @since: 1.0.0
 * @version: 1.0.0
 * 
 */ if (!defined('ABSPATH')) exit;


// Load Stylesheets
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

/**
 * Load the main Stylesheet
 */
wptb__register_stylesheet([
    'handle' => "main",
    'source' => "main.css",
]);

/**
 * Load the Bootstrap Stylesheet
 */
// wptb__register_stylesheet([
//     'handle' => "bootstrap",
//     'source' => "bootstrap.min.css",
// ]);

/**
 * Load the Animate Stylesheet
 */
// wptb__register_stylesheet([
//     'handle' => "animate",
//     'source' => "animate.min.css",
// ]);


// Load Scripts
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

/**
 * Load the main script
 */
wptb__register_script([
    'handle'        => "_main",
    'source'        => "main.js",
    'version'       => "1",
    // 'dependencies'  => ['_jquery'],
]);

/**
 * Load the Bootstrap library
 */
// wptb__register_script([
//     'handle'        => "_bootstrap",
//     'source'        => "bootstrap.min.js",
//     'version'       => "4.5.2",
//     // 'dependencies'  => ['_jquery', '_popperjs'],
// ]);

/**
 * Load the jQuery library
 */
// wptb__register_script([
//     'handle'        => "_jquery",
//     'source'        => "jquery.min.js",
//     'version'       => "3.5.1",
// ]);

/**
 * Load the Popper JS
 */
// wptb__register_script([
//     'handle'        => "_popperjs",
//     'source'        => "popper.min.js",
//     'version'       => "1.16.0",
// ]);