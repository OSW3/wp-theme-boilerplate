<?php

/**
 * get_active_plugins
 * --
 * @return array array of names of actived plugins
 */

if (!function_exists('get_active_plugins')) 
{    
    function get_active_plugins()
    {
        $plugins = [];
        $active_plugins = get_option('active_plugins');

        foreach($active_plugins as $plugin) 
        {
            $string = explode('/',$plugin);
            array_push($plugins,$string[0]);
        }

        return $plugins;
    }
}