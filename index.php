<?php
/**
 * The main template file
 */

get_header(); ?>

<div class="page-header">
    <h1>Welcome to the WP Theme Boilerplate</h1>
</div>

<div class="page-content">
    <pre><?php // print_r( wptb_plugins__get_active(['name','version','identifier']) ) ?></pre>
    <pre><?php // print_r( wptb_plugins__is_active("hello") ) ?></pre>

    <?= wptb_component__get_carousel([
        'name'      => null,
        'component' => "default_carousel",
        'id'        => "main-carousel",
        'class'     => "carousel slide",
        'indicators'=> true,
        'controls'  => true,
        'print_html'=> false,
        'items'     => [
            [
                'active' => true,
                'image' => wptp_assets__get_image("carousel/slide1.png"),
                'image_alt' => "Main Carousel: Slide 1",
                'link' => null,
                'link_target' => null,
            ],
            [
                'active' => false,
                'image' => wptp_assets__get_image("carousel/slide2.png"),
                'image_alt' => "Main Carousel: Slide 2",
                'link' => null,
                'link_target' => null,
            ],
            [
                'active' => false,
                'image' => wptp_assets__get_image("carousel/slide3.png"),
                'image_alt' => "Main Carousel: Slide 3",
                'link' => null,
                'link_target' => null,
            ],
        ],
    ]) ?>
</div>

<?php get_footer(); ?>