<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * More info at https://developer.wordpress.org/themes/template-files-section/post-template-files/#index-php
 * 
 * Template Name: Default Posts page
 * Template Type: Post Template
 * Author: OSW3
 * Author URI: http://osw3.net
 * Version: 1.0.0
 */
if (!defined( 'ABSPATH' )) exit;

//======================================================================
?>
<?php get_header(); ?>

<hr>
<div class="container">
    <div class="row">
        <div class="col-8">

            <?php if (have_posts()):
                while (have_posts()):
                    the_post();
                    get_template_part( 'template-parts/post/content', 'excerpt' );
                endwhile;
            else :
                get_template_part( 'template-parts/post/content', 'none' );
            endif;
            ?>

            <hr>

            <?php wptb_pagination("bootstrap") ?>

        </div>
        
        <?php get_sidebar() ?>
    </div>
</div>
<?php get_footer(); ?>