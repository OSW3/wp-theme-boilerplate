<?php
/**
 * WordPress Theme Boilerplate by OSW3
 * --
 * 
 * File: ./app/boot.php
 * This file is the root of the theme app installation
 * 
 * --
 * 
 * DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE
 * DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE
 * DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE
 * DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE
 */

/**
 * Check if this file is executed in WordPress environment.
 * if the ABSPATH constant don't exists, this theme will be not executed
 */
if (!defined( 'ABSPATH' )) exit;

/**
 * Directory separator shortcut definition
 * 
 * @var string
 */
const DS = DIRECTORY_SEPARATOR;


/**
 * Load the theme configuration
 */
require_once __DIR__ . DS . "config.php";

/**
 * Load the environment definition
 */
require_once __DIR__ . DS . "environment.php";

/**
 * Override the Apache settings
 */
require_once __DIR__ . DS . "error-reporting.php";

/**
 * Load functions library of the theme
 */
require_once __DIR__ . DS . "functions.php";

/**
 * Load Assets
 */
require_once __DIR__ . DS . "assets.php";

/**
 * Installation process (on theme activate)
 * 
 * will be executed only at the install of the theme
 */
require_once __DIR__ . DS . "install.php";

/**
 * Load post type (create custom post)
 */
require_once __DIR__ . DS . "posttypes.php";

/**
 * Theme setup
 * 
 * will be executed on each loading of the themes pages
 */
require_once __DIR__ . DS . "setup.php";