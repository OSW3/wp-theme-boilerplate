<?php

/**
 * is_plugin_actived
 * --
 * @param string $plugin the name of a plugin
 * @return bool true if the $plugin is actived
 */

if (!function_exists('is_plugin_actived')) 
{    
    function is_plugin_actived(string $plugin = null)
    {
        // if (!function_exists('wptb_active_plugins')) {
        //     return false;
        // }

        // return in_array($plugin, wptb_active_plugins());
    }
}