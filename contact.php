<?php
/**
 * Template Name: Single
 */
?>

<?= get_header(); ?>
<?= get_partial( 'header/page' ); ?>

<div class="page-header">
    <?= get_map(1, ['url' => 'https://www.google.com/maps/embed?xxxx']) ?>
</div>

<div class="page-inner">
    <div class="container">
        Page : Single
    </div>
</div>

<?php get_footer(); ?>