<?php
/**
 * Template Name: Default Posts
 * --
 * The template for displaying by default
 */

get_header(); ?>

<!-- Page Header -->
<div class="page-header">
    <h1><?= WPTB_THEME_TITLE ?></h1>
    <h2>Page : Page</h2>
</div>

<!-- Page Content -->
<div class="page-content">

    <?php wptb_debug__pageinfo(__DIR__,__FILE__) ?>


</div>

<?php get_footer(); ?>