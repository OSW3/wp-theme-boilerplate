<?php
/**
 * Template Name: WPTB Documentation
 */

get_header(); ?>

<!-- Page Header -->
<div class="page-header">
    <h1><?= WPTB_THEME_TITLE ?></h1>
    <h2>Documentation</h2>
</div>

<!-- Page Content -->
<div class="page-content">

    <?php wptb_debug__pageinfo(__DIR__,__FILE__) ?>

    <?php wptb_documentation() ?>

    <pre><?php // print_r($GLOBALS) ?></pre>



</div>

<?php get_footer(); ?>