<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Add new page in database
 * 
 * @author http://osw3.net
 * @version: 1.0.0
 * @since: 1.0.0
 * 
 */ if (function_exists("wptb__page_create")) return;


/**
 * @param required $title of the page
 * @param optional $options array
 */
function wptb__page_create(string $title, array $options = [])
{
    $options = array_merge([
        'slug'              => null,
        'content'           => "",
        'status'            => "publish",
        'template'          => null,
        'author'            => 1,
        'static-homepage'   => false,
        'static-posts'      => false,
        'static-privacy'    => false,
    ], $options);

    // Retrieve page if page exists
    $page = get_page_by_title( $title );

    // Retrieve the page ID
    $page_id = isset($page->ID) ? $page->ID : null;

    // Create the new page if don't exists
    if ( null === $page_id )
    {
        $slug = null == $options['slug'] ? wptb__slugify($options['slug']) : $options['slug'];

        // Add new page
        $page_id = wp_insert_post([
            'post_type'     => 'page',
            'post_title'    => $title,
            'post_name'     => $slug,
            'post_content'  => $options['content'],
            'post_status'   => $options['status'],
            'post_author'   => $options['author'],
        ]);

        // Add page template
        if (!empty( $options['template'] ))
        {
            update_post_meta( $page_id, '_wp_page_template', $options['template'] );
        }

        $page = get_page_by_title($title);
    }

    // Define the page as the Homepage
    if ( $page_id != null && $options['static-homepage'])
    {
        update_option( 'page_on_front', $page_id );
        update_option( 'show_on_front', 'page' );
    }

    // Define the page as the Post Page
    if ( $page_id != null && $options['static-posts'])
    {
        update_option( 'page_for_posts', $page_id );
    }

    // Define the page as the Privacy Page
    if ( $page_id != null && $options['static-privacy'])
    {
        update_option( 'wp_page_for_privacy_policy', $page_id );
    }

    unset($page);
}