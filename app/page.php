<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * @see -
 * 
 * Template Name: Default Page
 * Template Type: Post Template
 * Author: OSW3
 * Author URI: http://osw3.net
 * Version: 1.0.0
 */ if (!defined('ABSPATH')) exit;

// Get the current page ID
$page_ID = get_the_ID();

// Get the template of the current page
$page_template = get_page_template_slug(get_the_ID());

// Build the full path of the template of the current page
$page_templatePath = WPTB_DIR__TEMPLATES. "pages/".$page_template;

// Include the template of the current page or the default template
file_exists($page_templatePath)
    ? wptb__include($page_templatePath)
    : wptb__include(WPTB_DIR__TEMPLATES."pages/page.php");