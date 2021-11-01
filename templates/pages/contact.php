<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Template of Contact Form page
 * More info at -
 * 
 * Template Name: Contact Page
 * Template Type: Custom Template
 * Author: OSW3
 * Author URI: http://osw3.net
 * Version: 1.0.0
 */ if (!defined( 'ABSPATH' )) exit;

//======================================================================
do_shortcode("[contact_form_init]");
?>
<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">

            <h2>Contact</h2>

            <?php do_shortcode("[contact_form_start]") ?>
            
                <?php wp_nonce_field( 'contact_submission', 'contact_nonce' ); ?>

                <div class="row">
                    <div class="col-6">
                        <?php do_shortcode('[contact_firstname label="Firstname" label_class="" class="form-control"]') ?>
                    </div>
                    <div class="col-6">
                        <?php do_shortcode('[contact_lastname label="Lastname" label_class="" class="form-control"]') ?>
                    </div>
                    <div class="col-6">
                        <?php do_shortcode('[contact_email label="Email" label_class="" class="form-control"]') ?>
                    </div>
                    <div class="col-6">
                        <?php do_shortcode('[contact_phone label="Phone" label_class="" class="form-control"]') ?>
                    </div>
                    <div class="col-12">
                        <?php do_shortcode('[contact_message label="Message" label_class="" class="form-control"]') ?>
                    </div>
                </div>

                <button type="submit" class="submit">Send</button>
            <?php do_shortcode("[contact_form_end]") ?>
        
        </div>
    </div>
</div>
<?php get_footer(); ?>