<?php
/**
 * WP Theme Boilerplate : config/assets
 * 
 * Definition of the assets (css & js) for this theme.
 */

/**
 * Stylesheets definition
 * -- 
 * the file "assets/css/main.css" with the alias "main" is added to $assets["styles"]
 * 
 * @param required $handle Identifier name
 * @param required $source Stylesheet path
 */

// Add Styles
array_push($assets["styles"], ["main", THEME_STYLES_URI."main.css"]);
// array_push($assets["styles"], ["page1", THEME_STYLES_URI."page1.css"]);
// array_push($assets["styles"], ["page2", THEME_STYLES_URI."page2.css"]);



/**
 * Scripts definition
 * --
 * the file "assets/js/app.js" with the alias "app" is added to $assets["scripts"]
 * 
 * @param required $handle Identifier name
 * @param required $source Script path
 * @param optional $version name
 * @param optional $dependancies 
 * @param optional $in_footer (default true) 
 */

// Add Scripts
array_push($assets["scripts"], ["app", THEME_SCRIPTS_URI."app.js", "1", []]);
// array_push($assets["scripts"], ["app1", THEME_SCRIPTS_URI."app1.js", "2", [], true]);
