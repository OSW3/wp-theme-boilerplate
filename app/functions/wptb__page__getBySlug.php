<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Return a page Object from the slug of the page
 * 
 * @author http://osw3.net
 * @version: 1.0.0
 * @since: 1.0.0
 * 
 */ if (function_exists("wptb__page__getBySlug")) return;


/**
 * @param required $slug, the name of the post (post_name)
 */
function wptb__page__getBySlug(string $slug)
{
    $posts = get_posts([
        'name'          => $slug,
        'post_type'     => "page",
        'post_status'   => 'publish',
    ]);
    
    return isset($posts[0]) ? $posts[0] : null;
}