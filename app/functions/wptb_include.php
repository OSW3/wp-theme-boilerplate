<?php
/**
 * Prevent error if function is already defined
 */
if (function_exists("wptb_include")) return;


/**
 * Include file with optional parameters.
 * 
 * @param string $file The file to include
 * @param array $parameters passed to the file 
 * @param bool $once if true, include_once
 */
function wptb_include(string $file, bool $once = true)
{
    if (file_exists($file))
    {
        $once ? include_once $file : include $file;
    }
}