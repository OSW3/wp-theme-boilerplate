<?php
/**
 * WordPress Theme Boilerplate by OSW3
 * --
 * 
 * Front Page is used to display the homepage
 * @see https://developer.wordpress.org/themes/template-files-section/post-template-files/#home-php
 * 
 * Template Name: Homepage
 */
if (!defined( 'ABSPATH' )) exit;

//======================================================================

// Init Sliders
$WpSliders = new WpSliders;
?>
<?php get_header(); ?>

<section class="wptb-section wptb-section-top">
    SECTION TOP
</section>
<section class="wptb-section wptb-section-top">
    SECTION TOP
</section>
<section class="wptb-section wptb-section-top">
    SECTION TOP
</section>
<section class="wptb-section wptb-section-top">
    SPONSORS / PARTNERS
</section>




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