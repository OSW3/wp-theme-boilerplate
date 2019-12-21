<?php
/**
 * WP Theme Boilerplate : functions/wptb_post__get_path
 * 
 * Return the path for a route
 * --
 * @param integer $post_id
 * @param boolean $absolute
 */

if (!function_exists('wptb_post__get_path'))
{
    function wptb_post__get_path(int $post_id, bool $absolute=false)
    {
        $translations = array();

        // Get post translation if PPL plugin is actived
        // --

        if (function_exists('pll_current_language'))
        {
            $post_slug = pll_current_language("slug");
        }

        if (function_exists('pll_get_post_translations'))
        {
            $translations = pll_get_post_translations($post_id);
        }

        if (isset($translations[$post_slug])) 
        {
            return get_permalink($translations[$post_slug]);
        }


        if ($absolute)
        {
            return get_permalink($post_id);
        }
        else
        {
            $post = get_post($post_id);
            $path = $post->post_name;
            $path.= "/";
            
            return $path;
        }
    }
}