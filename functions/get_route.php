<?php

/**
 * get_route
 * --
 * @param integer $post_id
 * @param string $slug
 */

if (!function_exists('get_route')) 
{    
    function get_route(int $post_id, string $slug = '')
    {
        $translations = [];

        if (function_exists('pll_current_language'))
        {
            $slug = pll_current_language("slug");
        }

        if (function_exists('pll_get_post_translations'))
        {
            $translations = pll_get_post_translations($post_id);
        }

        if (isset($translations[$slug])) 
        {
            return get_permalink($translations[$slug]);
        }

        return get_permalink($post_id);
    }
}