<?php

/**
 * wptb_copyright
 * --
 * @param string $plugin the name of a plugin
 * @return bool true if the $plugin is actived
 */

if (!function_exists('wptb_copyright')) 
{    
    function wptb_copyright($since = null)
    {
        $copyright = "&copy; ";
        $now = date('Y');

        if (null == $since) $since = $now;
        $copyright.= $since;

        if ($since < $now) $copyright.= "-".$now;
        $copyright.= " ".get_bloginfo('name');

        return $copyright;
    }
}