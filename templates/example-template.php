<?php
/**
 * Template Name: Example Template
 */

get_header(); ?>

<!-- Page Header -->
<div class="page-header">
    <h1><?= WPTB_THEME_TITLE ?></h1>
    <h2>Example Template</h2>
</div>

<!-- Page Content -->
<div class="page-content">

    <?php wptb_debug__pageinfo(__DIR__,__FILE__) ?>

    <p>This content is directly writed in the <code>template/example-template.php</code>.</p>

</div>

<?php get_footer(); ?>