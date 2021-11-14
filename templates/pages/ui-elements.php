<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * An example template with a static content
 * More info at -
 * 
 * Template Name: UI Elements
 * Template Type: Custom Template
 * Author: OSW3
 * Author URI: http://osw3.net
 * Version: 1.0.0
 */
if (!defined( 'ABSPATH' )) exit;

//======================================================================
?>
<?php get_header(); ?>

UI Elements

<!-- Hero -->
<h2>Hero 01</h2>
<?php wptb__render_section("hero/01") ?>

<h2>Hero 02</h2>
<?php wptb__render_section("hero/02", [], ['container-fluid' => true]) ?>

<h2>Hero 03</h2>
<?php wptb__render_section("hero/03", [], ['container-fluid' => true]) ?>

<h2>Hero 04</h2>
<?php wptb__render_section("hero/04", [], []) ?>

<h2>Hero 05</h2>
<?php wptb__render_section("hero/05", [], ['container-fluid' => true]) ?>

<h2>Hero 06</h2>
<?php wptb__render_section("hero/06", [], ['container-fluid' => true]) ?>



<?php get_footer(); ?>