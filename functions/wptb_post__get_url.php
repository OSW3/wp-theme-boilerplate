<?php
/**
 * WP Theme Boilerplate : functions/wptb_post__get_path
 * 
 * Return the path for a route
 * --
 * @param integer $post_id
 */

if (!function_exists('wptb_post__get_url'))
{
    function wptb_post__get_url(int $post_id)
    {
        return wptb_post__get_path($post_id, true);
    }
}