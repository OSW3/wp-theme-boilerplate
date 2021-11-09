<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * @see https://developer.wordpress.org/themes/template-files-section/post-template-files/#home-php
 * 
 * Template Name: Homepage
 * Template Type: Post Template
 * Author: OSW3
 * Author URI: http://osw3.net
 * Version: 1.0.0
 */ if (!defined('ABSPATH')) exit;


// Init Sliders
$WpSliders = new WpSliders;
?>
<?php get_header() ?>

<h2>Section Boxed</h2>
<?php wptb__render_section("lorem/01", [], [
    'id' => "section-test-01",
    // 'class' => "wptb-section-boxed"
    'container-fluid' => false,
]) ?>
<hr>

<h2>Section Fluid</h2>
<?php wptb__render_section("lorem/01", [], [
    'id' => "section-test-02",
    // 'class' => "wptb-section-fluid"
    'container-fluid' => true,
]) ?>
<hr>





<!-- Hero -->
<?php wptb__render_section("hero/01") ?>
<?php //wptb__render_section("hero/02", [], ['container-fluid' => true]) ?>
<?php //wptb__render_section("hero/03", [], ['container-fluid' => true]) ?>
<?php //wptb__render_section("hero/04", [], []) ?>
<?php //wptb__render_section("hero/05", [], ['container-fluid' => true]) ?>
<?php //wptb__render_section("hero/06", [], ['container-fluid' => true]) ?>


<!-- Horizontal Accordion -->
<?php wptb__render_section("accordion/01", [
    'items' => [
        [
            'title' => "A propos de nous",
            'illustration' => "http://wgl-demo.net/atlets/wp-content/uploads/2020/07/faq_01.jpg"
        ],
        [
            'title' => "Notre boutique",
            'illustration' => "http://wgl-demo.net/atlets/wp-content/uploads/2020/07/faq_02.jpg"
        ],
        [
            'title' => "Sponsors",
            'illustration' => "http://wgl-demo.net/atlets/wp-content/uploads/2020/07/faq_03.jpg"
        ],
        [
            'title' => "Nous soutenir",
            'illustration' => "http://wgl-demo.net/atlets/wp-content/uploads/2020/07/faq_04.jpg"
        ],
    ]
],[
    'container-fluid' => true,
]) ?>



<div class="container">

    <section>
        <h2>NetLab Slider : Bootstrap</h2>
        <?php $WpSliders->get("netlab-slider-bootstrap"); ?>
    </section>
    
    <section>
        <h2>NetLab Slider : Slick</h2>
        <?php $WpSliders->get("netlab-slider-slick"); ?>
    </section>
    
    <hr>

    <section>
        <h2>Theme Constants</h2>
        <?php
        $defined_constants = get_defined_constants(true);
        $defined_constants = $defined_constants['user'];
        ?>
    
        <table class="table">
            <tbody>
            <?php foreach ($defined_constants as $constant => $value): ?>
            <?php if (preg_match("/NETLAB_THEME_/", $constant)): ?>
                <tr>
                    <th><?= $constant ?></td>
                    <td><?= $value ?></td>
                </tr>
            <?php endif; ?>
            <?php endforeach; ?>
            </tbody>
        </table>
    </section>



</div>
<?php get_footer(); ?>