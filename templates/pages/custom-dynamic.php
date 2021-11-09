<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * An example template with a dynamic content
 * More info at -
 * 
 * Template Name: Custom Dynamic Content
 * Template Type: Custom Template
 * Author: OSW3
 * Author URI: http://osw3.net
 * Version: 1.0.0
 */
if (!defined( 'ABSPATH' )) exit;

//======================================================================
?>
<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-12">

        aaaa
            <?php wptb_getPosts([
                'post_type' => "post",              // Specify Post Type
                'category_name' => "category-1", // Specify a category (slug)
                // 'posts_per_page' => 30,          // Specify item per page
                // 'order' => "ASC",
            ], "excerpt", "bootstrap"); ?>

        </div>
    </div>
</div>
<?php get_footer(); ?>