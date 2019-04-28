<?php

/**
 * Type: String
 * Define the name of "includes" directory
 */
define("WP_INCLUDES_DIRNAME", "wp-includes");

/**
 * Type: String
 * Define the name of "content" directory
 */
define("WP_CONTENT_DIRNAME", "wp-content");

/**
 * Directory Separator alias
 */
define("DS", DIRECTORY_SEPARATOR);


// ------------------------------ // 

/**
 * Type: String
 * Define the uri of the "includes" directory
 */
define("WP_INCLUDES_URI", get_site_url().DS.WP_INCLUDES_DIRNAME.DS);

/**
 * Type: String
 * Define the uri of the "content" directory
 */
define("WP_CONTENT_URI", get_site_url().DS.WP_CONTENT_DIRNAME.DS);

/**
 * Type: String
 * Define the URI of the "plugins" directory
 */
define("PLUGINS_URI", WP_CONTENT_URI."plugins".DS);

/**
 * Type: String
 * Define the URI of the "uploads" directory
 */
define("UPLOADS_URI", WP_CONTENT_URI."uploads".DS);

/**
 * Type: String
 * Define the URI of the "themes" directory
 */
define("THEMES_URI", WP_CONTENT_URI."themes".DS);

/**
 * Type: String
 * Define the uri of the current "theme" 
 */
define("THEME_URI", get_template_directory_uri().DS);

/**
 * Type: String
 * Define the uri of the current "theme" styles directory 
 */
define("THEME_STYLES_URI", THEME_URI."assets".DS."css".DS);

/**
 * Type: String
 * Define the uri of the current "theme" scripts directory 
 */
define("THEME_SCRIPTS_URI", THEME_URI."assets".DS."js".DS);

/**
 * Type: String
 * Define the uri of the current "theme" images directory 
 */
define("THEME_IMAGES_URI", THEME_URI."assets".DS."images".DS);


// ------------------------------ // 

/**
 * Type: String
 * Define the path of root directory
 */
preg_match("/(.*)".WP_CONTENT_DIRNAME."/u", get_template_directory(), $matches);
define("ROOT_DIR", isset($matches[1]) ? $matches[1] : DS);

/**
 * Type: String
 * Define the path of the "includes" directory
 */
define("DIR_INCLUDES", ROOT_DIR.WP_INCLUDES_DIRNAME.DS);

/**
 * Type: String
 * Define the path of the "content" directory
 */
define("CONTENT_DIR", ROOT_DIR.WP_CONTENT_DIRNAME.DS);

/**
 * Type: String
 * Define the path of the "plugins" directory
 */
define("PLUGINS_DIR", CONTENT_DIR."plugins".DS);

/**
 * Type: String
 * Define the path of the "uploads" directory
 */
define("UPLOADS_DIR", CONTENT_DIR."uploads".DS);

/**
 * Type: String
 * Define the path of the "themes" directory
 */
define("THEMES_DIR", CONTENT_DIR."themes".DS);

/**
 * Type: String
 * Define the path of the current "theme" 
 */
define("THEME_DIR", get_template_directory().DS);

/**
 * Type: String
 * Define the path of the functions directory of the current theme
 */
define("FUNCTIONS_DIR", THEME_DIR."functions".DS);



// ****************************** //
// LOAD FUNCTIONS
// ****************************** //

if (is_dir(FUNCTIONS_DIR)) 
{
    $scandir = scandir(FUNCTIONS_DIR);

    foreach ($scandir as $entry) 
    {
        if (preg_match("/^(?!_)(.+)\.php$/", $entry))
        {
            include_once FUNCTIONS_DIR.$entry;
        }
    }
}



// ****************************** //
// Assets
// ****************************** //

/**
 * Type: Array
 * Define assets of the current theme
 */
$assets = ['styles' => [], 'less' => [], 'scripts' => []];

if (file_exists(THEME_DIR."/config/assets.php")) {
    include_once THEME_DIR."/config/assets.php";
}

define("ASSETS", $assets);



// ****************************** //
// CONFIG
// ****************************** //

if (file_exists(THEME_DIR."/config/config.php")) {
    include_once THEME_DIR."/config/config.php";
}



// ****************************** //
// Install
// ****************************** //

if (file_exists(THEME_DIR."/bootstrap/install.php")) {
    $pages = [];
    include_once THEME_DIR."/bootstrap/install.php";
}



// ****************************** //
// Setup
// ****************************** //

if (file_exists(THEME_DIR."/bootstrap/setup.php")) {
    include_once THEME_DIR."/bootstrap/setup.php";
}