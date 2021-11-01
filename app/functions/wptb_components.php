<?php
/**
 * Prevent error if function is already defined
 */
if (function_exists("wptb_component")) return;

/**
 * Include a components with optional parameters
 * 
 * @param string $file The file to include
 * @param array $parameters
 */
function wptb_component(string $file, array $parameters=[])
{
    // Convert parameters to variables
    foreach ($parameters as $key => $value) $$key = $value;

    // include component
    include WPTB_DIR__COMPONENTS.$file;;
}