<?php

/**
 * get_page_by_slug
 * --
 * @param string $slug
 * @param string $post_type
 */

if (!function_exists('get_page_by_slug')) 
{    
    function get_page_by_slug(string $slug, string $post_type = "page")
    {
        $params = [
            'name'        => $slug,
            'post_type'   => $post_type,
            'post_status' => 'publish',
            'numberposts' => 1
        ];
    
        $posts = get_posts($params);
    
        if (isset($posts[0])) {
            return $posts[0];
        }

        return null;
    }
}