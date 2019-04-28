<?php
/**
 * Template Name: Example Content
 */

get_header(); ?>

<h2>Content Template</h2>

<?= get__page_content(get_the_id()) ?>

<?php get_footer(); ?>