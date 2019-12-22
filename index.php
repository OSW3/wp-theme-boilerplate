<?php
/**
 * Template Name: Index
 * --
 * The main template file
 */

get_header(); ?>

<!-- Page Header -->
<div class="page-header">
    <h1><?= WPTB_THEME_TITLE ?></h1>
    <h2>Index / Homepage</h2>
</div>

<!-- Page Content -->
<div class="page-content">

    <?php wptb_debug__pageinfo(__DIR__,__FILE__) ?>

    <pre><?php // print_r( wptb_plugins__get_active(['name','version','identifier']) ) ?></pre>
    <pre><?php // print_r( wptb_plugins__is_active("hello") ) ?></pre>
    <pre><?php print_r( wptb_route__get_home_url() ) ?></pre>
    <pre><?php print_r( wptb_i18n__get_current_language() ) ?></pre>
    <pre><?php print_r( wptb_i18n__get_current_language('name') ) ?></pre>
    <pre><?php print_r( wptb_i18n__get_available_languages() ) ?></pre>

</div>

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
                'image' => wptb_assets__get_image("carousel/slide1.png"),
                'image_alt' => "Main Carousel: Slide 1",
                'link' => null,
                'link_target' => null,
            ],
            [
                'active' => false,
                'image' => wptb_assets__get_image("carousel/slide2.png"),
                'image_alt' => "Main Carousel: Slide 2",
                'link' => null,
                'link_target' => null,
            ],
            [
                'active' => false,
                'image' => wptb_assets__get_image("carousel/slide3.png"),
                'image_alt' => "Main Carousel: Slide 3",
                'link' => null,
                'link_target' => null,
            ],
        ],
    ]) ?>
</div>

<?php get_footer(); ?>