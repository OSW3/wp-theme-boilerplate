<?php
//======================================================================
//  WordPress Theme Boilerplate by OSW3
//======================================================================

// File: ./functions/wptb_getPosts.php
// Function: wptb_getPosts

// Check if file exists before include or include_once
// $args list : https://www.billerickson.net/code/wp_query-arguments/

// required: yes

/**
 * @usage wptb_getPosts(string $slug)
 * 
 * @example wptb_getPosts("my-page");
 * 
 * @param required $slug, the name of the post (post_name)
 */

//======================================================================

// Prevent function declaration
if (function_exists('wptb_getPosts')) return;

function wptb_getPosts(array $args = [], ?string $post_view = null, ?string $pagination_view = null)
{
    global $wp;
    $current = $wp->query_vars['paged'] ?? 1;
    $current = $current <= 1 ? 1 : $current;
    
    $args['paged'] = $current;

    $query = new WP_Query($args);

    print_r($query->have_posts());

    // Return the query object if $view is not defined
    if ($post_view == null) return $query;

    // Parse the query
    if ($query->have_posts())
    {
        while ($query->have_posts())
        {
            $query->the_post();
            // get_template_part('template-parts/post/content', $post_view);
            wptb__render("pages/post/content-$post_view.php");
        }
      
        if ($pagination_view != null)
        {
            wptb__pagination($pagination_view, $query);
        }

        // Reset Post Data
        wp_reset_postdata();
    }
}