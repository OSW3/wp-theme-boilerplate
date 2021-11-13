<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * This file contain the process of the setup of this theme.
 * 
 * @since: 1.0.0
 * @version: 1.0.0
 * 
 */ if (!defined('ABSPATH')) exit;


//-----------------------------------------------------
// Actions
//-----------------------------------------------------

/**
 * Add action after theme setup
 *
 * @return void
 */
function wptb_setup__after_setup_theme() 
{
    // Force to show/hide the admin bar
    if (defined('WPTB__SHOW_ADMINBAR')) 
    {
        show_admin_bar(WPTB__SHOW_ADMINBAR);
    }

    // Add the <title> tag
    add_theme_support('title-tag');

    // -
    add_theme_support('post-thumbnails'); 
}
add_action('after_setup_theme', "wptb_setup__after_setup_theme");

/**
 * Add action on theme init
 *
 * @return void
 */
function wptb_setup__init() 
{
    if (is_admin())
    {
        // Create au fake menu to active menus management
        register_nav_menus(["main-menu" => "Main menu"]);
    }

    
    // Add custom post to the registry
    // --

    $postsRegistryFile = WPTB_DIR__REGISTER."posts.php";

    $posts = file_exists($postsRegistryFile) 
        ? include $postsRegistryFile 
        : [];
    
    if (is_array($posts)) foreach ($posts as $post)
    {
        register_post_type($post['type'], $post['properties']);
    }
    

    // Add
    // Assets Shortcodes
    add_shortcode( 'images', function( $atts )
    {
        return WPTB_URL__IMAGES . $atts['src'];
    });
}
add_action('init', "wptb_setup__init", 0);

/**
 * Create the post excerpt
 *
 * @param integer $post_id
 * @return void
 */
function wptb_setup__post_excerpt(int $post_id) 
{
    if (!wp_is_post_revision($post_id) && defined('WPTB_GENERATE_EXCERPT') && WPTB_GENERATE_EXCERPT === true)
    {
        // unhook this function so it doesn't loop infinitely
        remove_action('save_post', 'wptb_setup__post_excerpt');
     
        $post = get_post($post_id);

        $excerpt_length = defined(WPTB_EXCERPT_LENGTH) ? WPTB_EXCERPT_LENGTH : 50;

        $excerpt = strip_tags($post->post_content);

        // // Excerpt based on words counting
        // $excerpt = explode(" ", $excerpt);
        // $excerpt = array_slice($excerpt, 0, $excerpt_length);
        // $excerpt = implode(" ", $excerpt);

        // Excerpt based on characters counting
        $excerpt = substr($excerpt, 0, $excerpt_length);

        // Update the Excerpt only if the post have some content
        if (!empty($excerpt))
        {
            $excerpt.= WPTB_EXCERPT_MORE;
    
            // update the post, which calls save_post again
            wp_update_post( [
                'ID' => $post_id,
                'post_excerpt' => trim($excerpt),
            ] );
        }
 
        // re-hook this function
        add_action('save_post', 'wptb_setup__post_excerpt');
    }
}
add_action('save_post', 'wptb_setup__post_excerpt' );


/**
 * Add action on theme is loaded
 *
 * @return void
 */
function wptb_setup__wp_loaded() 
{
    if(!is_admin()) 
    {
        // remove the meta "generator"
        remove_action("wp_head", "wp_generator");

        // Enqueue Style
        if (is_array(ASSETS["styles"])) 
        {
            foreach (ASSETS["styles"] as $item)
            {
                wp_enqueue_style($item[0], $item[1]);
            }
        }

        // Enqueue JavaScript
        if (is_array(ASSETS["scripts"]))
        {
            foreach (ASSETS["scripts"] as $item)
            {
                $item[4] = isset($item[4]) ? !$item[4] : true;
                wp_enqueue_script($item[0], $item[1], $item[3], $item[2], $item[4]);
            }
        }
    }
} 
add_action('wp_loaded', "wptb_setup__wp_loaded");

/**
 * Display the favicon
 *
 * @return void
 */
function wptb_setup__favicon()
{
    if (file_exists(WPTB_DIR__ASSETS."favicon/favicon.ico"))
    {
        echo "<link rel='shortcut icon' href='" . WPTB_URL__ASSETS . "favicon/favicon.ico' />" . "\n";
    }
}
add_action( 'wp_head', 'wptb_setup__favicon');

/**
 * Minify HTM
 */
function wptb_setup___html_minify_start()
{
    global $env;

    if ($env != "dev")
    {
        ob_start('wptb_setup___html_minyfy_finish');
    }
}
function wptb_setup___html_minyfy_finish( $html )
{
    $html = preg_replace('/<!--(?!s*(?:[if [^]]+]|!|>))(?:(?!-->).)*-->/s', '', $html);
    $html = str_replace(array("\r\n", "\r", "\n", "\t"), '', $html);
    while (stristr($html, '  ')) 
    $html = str_replace('  ', ' ', $html);
    return $html;
}
add_action('get_header', 'wptb_setup___html_minify_start');


//-----------------------------------------------------
// Filters
//-----------------------------------------------------

/**
 * Change the excerpt length
 *
 * @param int $length
 * @return int
 */
function wptb_setup__excerpt_length(int $length): int
{
	return defined('WPTB_EXCERPT_LENGTH') ? WPTB_EXCERPT_LENGTH : $length;
}
add_filter('excerpt_length', "wptb_setup__excerpt_length", 999 );

/**
 * Set the excerpt "more" symbol
 *
 * @param string $more
 * @return string
 */
function new_excerpt_more(string $more): string
{
    return defined('WPTB_EXCERPT_MORE') ? WPTB_EXCERPT_MORE : $more;
}
add_filter('excerpt_more', 'new_excerpt_more', 999);