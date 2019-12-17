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
array_push($assets["styles"], ["bootstrap", THEME_STYLES_URI."bootstrap.min.css"]);
array_push($assets["styles"], ["animate", THEME_STYLES_URI."animate.min.css"]);



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
array_push($assets["scripts"], ["bootstrap", THEME_SCRIPTS_URI."bootstrap.min.js", "4.4", ['jquery','popper.js'], true]);
array_push($assets["scripts"], ["jquery", THEME_SCRIPTS_URI."jquery.min.js", "3.4.1", [], true]);
array_push($assets["scripts"], ["popper.js", THEME_SCRIPTS_URI."popper.min.js", "1.16.0", [], true]);
