<?php
//======================================================================
//  WordPress Theme Boilerplate by OSW3
//======================================================================

// File: ./functions/wptb_getLastetPosts.php
// Function: wptb_getLastetPosts

// Check if file exists before include or include_once
// $args list : https://www.billerickson.net/code/wp_query-arguments/

// required: yes

/**
 * @usage wptb_getLastetPosts(string $slug)
 * 
 * @example wptb_getLastetPosts("my-page");
 * 
 * @param required $slug, the name of the post (post_name)
 */

//======================================================================

// Prevent function declaration
if (function_exists('wptb_getLastetPosts')) return;

function wptb_getLastetPosts(array $args = [], ?string $post_view = null)
{
    $args = array_merge($args,[
        'post_status' => "publish",
    ]);
    
    $posts = wp_get_recent_posts($args);

    // Return the query object if $view is not defined
    if ($post_view == null)
    {
        return $posts;
    }

    // Parse the query
    if (is_array($posts) && !empty($posts))
    {
        foreach ($posts as $post)
        {
            set_query_var( '_post', $post );
            get_template_part('template-parts/post/content', $post_view);
        }
    }
}