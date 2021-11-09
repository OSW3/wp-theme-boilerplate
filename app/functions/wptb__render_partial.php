<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Include a component template (from template/partials/) with parameters.
 * 
 * @author http://osw3.net
 * @version: 1.0.0
 * @since: 1.0.0
 * 
 */ if (function_exists("wptb__render_partial")) return;


/**
 * Include a component template (from template/components/) with parameters.
 * 
 * @param string $template The file to include
 * @param array $parameters
 * 
 * @return void
 */
function wptb__render_partial(string $template, array $parameters=[])
{
    // Convert parameters to variables
    foreach ($parameters as $key => $value) $$key = $value;

    // include component
    include WPTB_DIR__PARTIALS.$template;;
}