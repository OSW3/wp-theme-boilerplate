<?php
/**
 * WordPress Theme Boilerplate by OSW3
 * --
 * 
 * This file contain the process of the setup of this theme
 * 
 * DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE
 * DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE
 * DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE
 * DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE --- DON'T MODIFY THIS FILE
 */
if (!defined( 'ABSPATH' )) exit;




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

    // Assets Shortcodes
    add_shortcode( 'images', function( $atts )
    {
        return WPTB_URL__IMAGES . $atts['src'];
    });
}
add_action('init', "wptb_setup__init");

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





// add_action( 'admin_init', function ()
// {
//     // Get all pages in order to change the template paths to subfolder
//     $args = [
//         'post_type'      => 'page',
//         'posts_per_page' => -1,
//         'fields'         => 'ids',
//         'meta_query'     => [
//             [
//                 'key' => '_wp_page_template',
//                 'value' => ['front-page.php','template.php'] // Set all the templates you have moved into an array
//             ]
//         ]
//     ];
//     $q = get_posts( $args );

//     if ( !$q )
//         return;

//     foreach ( $q as $id ) {
//         // Get the current template name saved
//         $template = get_post_meta( $id, '_wp_page_template', true );
//         // The name of the subfolder with trailing slash
//         $subfolder_name = 'pages/';
//         // Update the templates to add the subfolder name. Change name as needed
//         update_post_meta( 
//             $id, // Page ID
//             '_wp_page_template', //Meta key under which the page template name is saved
//             $subfolder_name . $template, //the new value of the template name, in this case subfolder/{$template}.php
//             $template // Old value of the template name
//         );
//     }
// });




// function yourFunction($string) {
//     //Modify the string here
//     // $string = WPTB_DIR__TEMPLATES;

//     // echo $string;
//     // exit;

//     return $string;
// }
// add_filter('template_directory', 'yourFunction', 10, 2);

// add_filter( 'template_include', 'portfolio_page_template', 99 );
function portfolio_page_template( $template ) {


    echo "ertyuio";
    exit;
    // $scandir = scandir(WPTB_DIR__TEMPLATES."pages/");

    // print_r($scandir);


    // if ( is_page( 'portfolio' )  ) {
        $new_template = locate_template([
            '../templates/pages/portfolio-page-template.php',
            // '../templates/pages/front-page.php',
        ]);
        // $new_template = locate_template( array( '../templates/pages/front-page.php' ) );
        // $new_template = locate_template( array( WPTB_DIR__TEMPLATES."portfolio-page-template.php" ) );

        return $new_template;
        // echo $new_template;
        // exit;

    // if ( '' != $new_template ) {
    //     return $new_template ;
    // }
    // // }
    // return $template;
}

/**
* multiple custom routing with one page
*/
// add_filter( 'template_include', 'wpdocs_include_template_files_on_page' );
 
// function wpdocs_include_template_files_on_page( $template ) {
 
//     $action = isset( $_GET['action'] ) ? $_GET['action'] : 'list';

 
//     switch ( $action ) {
 
//         case 'add-list' :
//             $template = __DIR__ . '/views/address-new.php';
//             break;
 
//         case 'edit-list' :
//             $template = __DIR__ . '/views/address-edit.php';
//             break;
 
//         case 'view-list' :
//             $template = __DIR__ . '/views/address-view.php';
//             break;
 
//         default :
//             // $template = __DIR__ . '/views/address-list.php';

//             // $template = __DIR__ . '../templates/pages/portfolio-page-template.php';
//             $template = __DIR__ . '/../../templates/pages/front-page.php';
//             break;          
//     }
 
//     if ( file_exists( $template ) ) {
//         include $template;
//     }
 
//     return $template;
// }

