<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * @see https://developer.wordpress.org/themes/template-files-section/post-template-files/#index-php
 * 
 * Template Name: Default Posts page
 * Template Type: Post Template
 * Author: OSW3
 * Author URI: http://osw3.net
 * Version: 1.0.0
 */ if (!defined('ABSPATH')) exit;
?>
<?php get_header(); ?>

<hr>
<div class="container">
    <div class="row">
        <div class="col-8">

            <?php if (have_posts()):
                while (have_posts()):
                    the_post();

                    set_query_var('options', [
                        'template' => "post/content-excerpt.php",
                    ]);
                    get_template_part( 'template-parts' );

                endwhile;
            else :

                set_query_var('options', [
                    'template' => "post/content-none.php",
                ]);
                get_template_part( 'template-parts' );

            endif;
            ?>

            <hr>

            <?php wptb__pagination("bootstrap") ?>

        </div>
        
        <?php get_sidebar() ?>
    </div>
</div>
<?php get_footer(); ?>