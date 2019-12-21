<?php
/**
 * Template Name: Example Content
 */

get_header(); ?>

<!-- Page Header -->
<div class="page-header">
    <h1><?= WPTB_THEME_TITLE ?></h1>
    <h2>Example Content Template</h2>
</div>

<!-- Page Content -->
<div class="page-content">

    <?php wptb_debug__pageinfo(__DIR__,__FILE__) ?>

    <?= get__page_content(get_the_id()) ?>

</div>

<?php get_footer(); ?>