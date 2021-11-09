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
 */ if (function_exists("wptb__pagination")) return;


/**
 * Undocumented function
 *
 * @param string|null $view
 * @param [type] $query
 * 
 * @return void
 */
function wptb__pagination(?string $view = null, $query = null)
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