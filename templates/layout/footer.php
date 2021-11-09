<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * More info at https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#footer-php
 * 
 * Template Type: Partial
 * Author: OSW3
 * Author URI: http://osw3.net
 * Version: 1.0.0
 */ if (!defined( 'ABSPATH' )) exit;
?>
    </div><!-- End .main-content -->

    <!-- Footer Newsletter -->
    <?php wptb__render_component("newsletter/banner/01") ?>


    <!-- Main Footer -->
    <footer class="main-footer">
    <?php wptb__render_component("footer/01") ?>
    </footer>
    
    <!-- </div> --><!-- End .wrapper -->

    <?php wp_footer(); ?>

</body>
</html>