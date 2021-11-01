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

        <footer class="main-footer">
            <div class="footer-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            xxx
                        </div>
                        <div class="col-3">
                            xxx
                        </div>
                        <div class="col-3">
                            xxx
                        </div>
                        <div class="col-3">
                            
                            <?php wptb_getLastetPosts([
                                // 'post_type' => "post",              // Specify Post Type
                                // 'category_name' => "category-1", // Specify a category (slug)
                                'posts_per_page' => 4,          // Specify item per page
                                // 'order' => "ASC",
                            ], "excerpt-footer"); ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-coyright">
                <div class="container">
                    Footer
                </div>
            </div>
        </footer>

    <!-- </div> --><!-- End .wrapper -->

    <?php wp_footer(); ?>

</body>
</html>