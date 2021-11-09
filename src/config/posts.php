<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Use this file to define the posts that will be created when installing the
 * theme.
 * 
 * @since: 1.0.0
 * @version: 1.0.0
 */ if (!defined('ABSPATH')) exit;


/**
 * Generate the Excerpt on save the post
 * 
 * @var bool
 * @default false
 */
const WPTB_GENERATE_EXCERPT = true;


/**
 * Define the lentgh of posts excerpt
 * 
 * @var int
 * @default 40
 */
const WPTB_EXCERPT_LENGTH = 40;

/**
 * Define excerpt ellipsis symbole
 * 
 * @var string
 * @default [...]
 */
const WPTB_EXCERPT_MORE = " &hellip;";

/**
 * Define permalink structure
 * 
 * @var string
 * @default null
 * 
 * @value (Plain)               null
 * @value (Day and name)        /%year%/%monthnum%/%day%/%postname%/
 * @value (Month and name)      /%year%/%monthnum%/%postname%/
 * @value (Numeric)             /archives/%post_id%
 * @value (Post name)           /%postname%/
 * @value (Custom structure)    /blog/%postname%/
 */
const WPTB_PERMALINK_STRUCTURE = "/blog/%postname%/";

/**
 * If True, the activation of this theme force WordPress to override the 
 * permalink to the value defined by WPTB_PERMALINK_STRUCTURE.
 * 
 * @var bool
 */
const WPTB_OVERRIDE_PERMALINK = true;
