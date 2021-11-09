<?php
/**
 * Prevent error if function is already defined
 */
if (function_exists("wptb__render")) return;


/**
 * Include file with optional parameters.
 * 
 * @param string $file The file to include
 * @param array $parameters passed to the file 
 * @param bool $once if true, include_once
 */
function wptb__render(string $file, array $parameters = [], bool $once = true)
{
    // Convert parameters to variables
    foreach ($parameters as $key => $value) $$key = $value;

    $file = WPTB_DIR__THEME.$file;
    
    if (file_exists($file))
    {
        $once ? include_once $file : include $file;
    }
}