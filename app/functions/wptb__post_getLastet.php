<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * @author http://osw3.net
 * @version: 1.0.0
 * @since: 1.0.0
 * 
 */ if (function_exists("wptb__post_getLastet")) return;


/**
 * Get the latests published posts
 *
 * @param array $options
 * @param string|null $template If null, an Object of posts is returned. If 
 *  defined, Posts will be parsed in HTML output.
 * 
 * Options param
 * @param int 'posts_per_page' Number of posts. Default 4
 * 
 * @return void
 */
function wptb__post_getLastet(?string $template=null, array $options=[])
{
    // Define the options ($args) of the WP_Request
    $options = array_merge([
        'post_type'         => "post",
        'category_name'     => null,
        'posts_per_page'    => 4,
        'order'             => "DESC",
    ], $options, [
        'post_status' => "publish",
    ]);
    
    // Execute the WP_Request
    $posts = wp_get_recent_posts($options, OBJECT);

    // Return the query object if $view is not defined
    if ($template == null) return $posts;

    // Parse the query
    if (is_array($posts) && !empty($posts)) foreach ($posts as $post)
    {
        set_query_var('options', [
            'post' => (object) [
                'ID' => $post->ID,
                'post_title' => $post->post_title,
                'post_excerpt' => trim($post->post_excerpt),
                'post_date' => $post->post_date,
                'post_modified' => $post->post_modified,
                'comment_count' => $post->comment_count,
            ],
            'template' => $template,
        ]);
        get_template_part('template-parts');
    }   
}