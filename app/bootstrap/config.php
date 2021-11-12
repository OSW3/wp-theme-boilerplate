<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * This file define some constants of this theme and merge custom config.
 * 
 * @since: 1.0.0
 * @version: 1.0.0
 * 
 */ if (!defined('ABSPATH')) exit;


/**
 * The absolute URL of the site
 * 
 * @var string
 */
define("ABSURL", get_site_url() . DS);

/**
 * The name of the "wp-includes" directory
 * 
 * @var string
 */
const WP_INCLUDES = "wp-includes";

/**
 * The name of the "src" directory
 * 
 * @var string
 */
const DIR_SRC = "src" . DS;

/**
 * The name of the "src" directory
 * 
 * @var string
 */
const DIR_APP = "app" . DS;

/**
 * Define the path and the url of the "wp-includes" directory
 * 
 * @var string
 */
const WPTB_DIR__WP_INCLUDES = ABSPATH . WP_INCLUDES . DS;
const WPTB_URL__WP_INCLUDES = ABSURL . WP_INCLUDES . DS;

/**
 * Define the path and the url of the "wp-includes" directory
 * 
 * @var string
 */
const WPTB_DIR__WP_CONTENT = WP_CONTENT_DIR . DS;
const WPTB_URL__WP_CONTENT = WP_CONTENT_URL . DS;

/**
 * Define the path and the url of the "wp-content/languages" directory
 * 
 * @var string
 */
const WPTB_DIR__LANGUAGES = WPTB_DIR__WP_CONTENT . "languages" . DS;
const WPTB_URL__LANGUAGES = WPTB_URL__WP_CONTENT . "languages" . DS;

/**
 * Define the path and the url of the "wp-content/themes" directory
 * 
 * @var string
 */
const WPTB_DIR__THEMES = WPTB_DIR__WP_CONTENT . "themes" . DS;
const WPTB_URL__THEMES = WPTB_URL__WP_CONTENT . "themes" . DS;

/**
 * Define the path and the url of the current theme directory
 * 
 * @var string
 */
define('WPTB_DIR__THEME', preg_replace("@".DIR_APP."$@", "", get_template_directory() . DS));
define('WPTB_URL__THEME', preg_replace("@".DIR_APP."$@", "", get_template_directory_uri() . DS));

/**
 * Define the path and the url of the "wp-content/uploads" directory
 * 
 * @var string
 */
const WPTB_DIR__UPLOADS = WPTB_DIR__WP_CONTENT . "uploads" . DS;
const WPTB_URL__UPLOADS = WPTB_URL__WP_CONTENT . "uploads" . DS;

/**
 * Define the path and the url of the builded theme "theme/dist" directory
 * 
 * @var string
 */
const WPTB_DIR__ASSETS = WPTB_DIR__THEME . "dist" . DS;
const WPTB_URL__ASSETS = WPTB_URL__THEME . "dist" . DS;

/**
 * Define the path and the url of the "theme/assets/favicon" directory
 * 
 * @var string
 */
const WPTB_DIR__FAVICON = WPTB_DIR__ASSETS . "favicon" . DS;
const WPTB_URL__FAVICON = WPTB_URL__ASSETS . "favicon" . DS;

/**
 * Define the path and the url of the "theme/assets/fonts" directory
 * 
 * @var string
 */
const WPTB_DIR__FONTS = WPTB_DIR__ASSETS . "fonts" . DS;
const WPTB_URL__FONTS = WPTB_URL__ASSETS . "fonts" . DS;

/**
 * Define the path and the url of the "theme/assets/icons" directory
 * 
 * @var string
 */
const WPTB_DIR__ICONS = WPTB_DIR__ASSETS . "icons" . DS;
const WPTB_URL__ICONS = WPTB_URL__ASSETS . "icons" . DS;

/**
 * Define the path and the url of the "theme/assets/images" directory
 * 
 * @var string
 */
const WPTB_DIR__IMAGES = WPTB_DIR__ASSETS . "images" . DS;
const WPTB_URL__IMAGES = WPTB_URL__ASSETS . "images" . DS;

/**
 * Define the path and the url of the "theme/assets/scripts" directory
 * 
 * @var string
 */
const WPTB_DIR__SCRIPTS = WPTB_DIR__ASSETS . "scripts" . DS;
const WPTB_URL__SCRIPTS = WPTB_URL__ASSETS . "scripts" . DS;

/**
 * Define the path and the url of the "theme/assets/styles" directory
 * 
 * @var string
 */
const WPTB_DIR__STYLES = WPTB_DIR__ASSETS . "styles" . DS;
const WPTB_URL__STYLES = WPTB_URL__ASSETS . "styles" . DS;

/**
 * Define the path the "templates" directory
 * 
 * @var string
 */
const WPTB_DIR__TEMPLATES = WPTB_DIR__THEME . "templates" . DS;

/**
 * Define the path the "templates/components" directory
 * 
 * @var string
 */
const WPTB_DIR__COMPONENTS = WPTB_DIR__TEMPLATES . "components" . DS;

/**
 * Define the path the "templates/partials" directory
 * 
 * @var string
 */
const WPTB_DIR__PARTIALS = WPTB_DIR__TEMPLATES . "partials" . DS;

/**
 * Define the path the "config" directory
 * 
 * @var string
 */
const WPTB_DIR__CONFIG = WPTB_DIR__THEME . DIR_SRC . "config" . DS;

/**
 * Define the path the "register" directory
 * 
 * @var string
 */
const WPTB_DIR__REGISTER = WPTB_DIR__THEME . DIR_SRC . "register" . DS;

/**
 * Define the path the "functions" directory
 * 
 * @var string
 */
const WPTB_DIR__FUNCTIONS = WPTB_DIR__THEME . DIR_APP . "functions" . DS;

/**
 * Define the path the custom "posts" directory
 * 
 * @var string
 */
const WPTB_DIR__POSTTYPES = WPTB_DIR__THEME . DIR_SRC . "posts" . DS;

/**
 * Define the path the "templates" directory
 * 
 * @var string
 */
// const WPTB_DIR__TEMPLATES = WPTB_DIR__THEME . "templates" . DS;


/**
 * Includes Custom Config files
 */
require_once WPTB_DIR__CONFIG . "config.php";
require_once WPTB_DIR__CONFIG . "admin.php";
require_once WPTB_DIR__CONFIG . "locales.php";
require_once WPTB_DIR__CONFIG . "posts.php";