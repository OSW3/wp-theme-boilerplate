<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * @see -
 * 
 * Template Type: Partial
 * Author: OSW3
 * Author URI: http://osw3.net
 * Version: 1.0.0
 */ if (!defined('ABSPATH')) exit;


// Default partial template
$partial_template = null;

// Get the template of the partial
if (isset($options['template']))
{
    $partial_template = $options['template'];
    unset($options['template']);
}

// Build the full path of the template of the partial
$partial_templatePath = WPTB_DIR__PARTIALS.$partial_template;

// Include the template of the partial
if (file_exists($partial_templatePath))
{
    wptb__render_partial($partial_template, $options);
}