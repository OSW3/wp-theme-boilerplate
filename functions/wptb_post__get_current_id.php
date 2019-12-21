<?php
/**
 * WP Theme Boilerplate : functions/wptb_post__get_current_id
 * 
 * Return the current post ID
 */

if (!function_exists('wptb_post__get_current_id')) 
{    
    function wptb_post__get_current_id()
    {
        global $post;
        return $post->ID;
    }
}