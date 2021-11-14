<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * More info at -
 * 
 * Template Type: Partial
 * Author: OSW3
 * Author URI: http://osw3.net
 * Version: 1.0.0
 */ if (!defined( 'ABSPATH' )) exit;

$search_form_id = wp_unique_id( 'search-form-' );
?>

<form method="get" role="search" class="d-flex" action="<?= esc_url( home_url( '/' ) ); ?>">
    <label for="<?= esc_attr($search_form_id) ?>" hidden><?= __("Search&hellip;", TEXT_DOMAIN) ?></label>
    <input type="search" id="<?= esc_attr($search_form_id) ?>" name="s" class="form-control me-2" placeholder="<?= __("Search&hellip;", TEXT_DOMAIN) ?>" aria-label="<?= __("Search", TEXT_DOMAIN) ?>">
    <button type="submit"><?= __("Search", TEXT_DOMAIN) ?></button>
</form>