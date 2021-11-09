<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Component: Footer 02
 * 
 */ if (!defined('ABSPATH')) exit;
?>

<div class="wptb--footer-01">
    <div class="container">
        <div class="row">

            <div class="col-3">
                <h4 class="heading-title">xxx</h4>

            </div>

            <div class="col-3">
                <h4 class="heading-title">About</h4>

            </div>

            <div class="col-3">
                <h4 class="heading-title">Gallery</h4>

                <?php wptb__render_component("gallery/widget/01") ?>
            </div>

            <div class="col-3">
                <h4 class="heading-title">Latest News</h4>
                
                
                <?php wptb__post_getLastet("post/content-excerpt-footer.php", [
                    // 'post_type' => "post",              // Specify Post Type
                    // 'category_name' => "category-1", // Specify a category (slug)
                    'posts_per_page' => 4,          // Specify item per page
                    // 'order' => "ASC",
                ]); ?>

            </div>

        </div>
    </div>
</div>

<!-- Footer Copyright -->
<?php wptb__render_component("copyright/02") ?>