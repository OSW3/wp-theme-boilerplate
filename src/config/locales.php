<?php
/**
 * WordPress Theme Boilerplate by OSW3
 * --
 * 
 * File: ./config/locales.php
 * Use this file to define locales will be created when installing the theme
 * 
 * required: recommended
 */

/**
 * Check if this file is executed in WordPress environment.
 * if the ABSPATH constant don't exists, this theme will be not executed
 */
if (!defined( 'ABSPATH' )) exit;


/**
 * Comment the line below if you need to internationalize your website
 */
return;

/**
 * Define the default locale
 * 
 * @var string
 */
const DEFAULT_LOCALE = "fr";

/**
 * Define available locales
 * 
 * @var array
 */
const AVAILABLE_LOCALES = [DEFAULT_LOCALE, 
    "en", // English
    "es", // Spanish
    // "de", // German
    "fr", // French
    "it", // Italian
    // "nl", // Dutch
    // "pt", // Portuguese
];