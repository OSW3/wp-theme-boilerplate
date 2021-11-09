<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Include or include once a file.
 * 
 * @author http://osw3.net
 * @version: 1.0.0
 * @since: 1.0.0
 * 
 */ if (function_exists("wptb__include")) return;

 
/**
 * Include or include once a file.
 * 
 * @param string $file The file to include
 * @param bool $once if true, include_once
 * 
 * @return void
 */
function wptb__include(string $file, bool $once = true)
{
    if (file_exists($file)) $once 
        ? include_once $file 
        : include $file
    ;
}