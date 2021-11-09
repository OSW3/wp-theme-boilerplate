<?php
//======================================================================
//  WordPress Theme Boilerplate by OSW3
//======================================================================

// File: ./functions/wptb_getPageBySlug.php
// Function: wptb_getPageBySlug

// Check if file exists before include or include_once

// required: yes

/**
 * @usage wptb_getPageBySlug(string $slug)
 * 
 * @example wptb_getPageBySlug("my-page");
 * 
 * @param required $slug, the name of the post (post_name)
 */

//======================================================================

// Prevent function declaration
if (function_exists('wptb_getPageBySlug')) return;

function wptb_getPageBySlug(string $slug)
{
    $posts = get_posts([
        'name'          => $slug,
        'post_type'     => "page",
        'post_status'   => 'publish',
    ]);
    
    return isset($posts[0]) ? $posts[0] : null;
}