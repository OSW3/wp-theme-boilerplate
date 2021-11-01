<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * More info at https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#404-php
 * 
 * Template Name: 404 Not Found
 * Template Type: Post Template
 * Author: OSW3
 * Author URI: http://osw3.net
 * Version: 1.0.0
 */
if (!defined( 'ABSPATH' )) exit;

//======================================================================
?>
<?php get_header(); ?>
<div class="container">
    <div class="text-center">

        <?= wptb_getImage("404.png", [
            'title' => "Resource not found",
            'class' => "img-thumbnail"
        ]) ?>

    </div>
</div>
<?php get_footer(); ?>