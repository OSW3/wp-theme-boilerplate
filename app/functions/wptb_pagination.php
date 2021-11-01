<?php
//======================================================================
//  WordPress Theme Boilerplate by OSW3
//======================================================================

// File: ./functions/wptb_pagination.php
// Function: wptb_pagination

// Check if file exists before include or include_once
// $args list : https://www.billerickson.net/code/wp_query-arguments/

// required: yes

/**
 * @usage wptb_pagination(string $slug)
 * 
 * @example wptb_pagination();
 */

//======================================================================

// Prevent function declaration
if (function_exists('wptb_pagination')) return;

function wptb_pagination(?string $view = null, $query = null)
{
    global $wp_rewrite;
    
    if ($query === null)
    {
        global $wp_query;
        $query = $wp_query;
    }

    $current = $query->query_vars['paged'];
	$current = $current <= 1 ? 1 : $current;
	
	$pagination = [
		// 'base'      => @add_query_arg('page','%#%'),
		'format'    => '',
		// 'total'     => $wp_query->max_num_pages,
		'total'     => $query->max_num_pages,
		'current'   => $current,
        'show_all'  => false,
        'end_size'  => 1,
        'mid_size'  => 2,
		'type'      => 'array',
		'next_text' => 'next',
		'prev_text' => 'prev'
    ];
    
	if( $wp_rewrite->using_permalinks() )
		$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%', 'paged' );
	
	// if( !empty($wp_query->query_vars['s']) )
	if( !empty($query->query_vars['s']) )
		$pagination['add_args'] = array( 's' => str_replace( ' ' , '+', get_query_var( 's' ) ) );
    
    $links = paginate_links($pagination);

    if (!is_array($links)) return null;

    foreach ($links as $key => $link)
    {
        preg_match('#<[a|span](?:(?:.+)href="(.+)")?>(.+)</[a|span]>#', $link, $match);

        $link = [
            'url'       => $match[1] ?? null,
            'current'   => !($match[1] ?? false),
            'page'      => strip_tags($link),
        ];

        $links[$key] = $link;
    }

    if ($view == null) return $links;

    set_query_var( 'links', $links );
    get_template_part( 'template-parts/pagination/'.$view );
}