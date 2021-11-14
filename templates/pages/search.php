<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * More info at https://developer.wordpress.org/themes/template-files-section/post-template-files/#search-php
 * 
 * Template Name: Search results
 * Template Type: Post Template
 * Author: OSW3
 * Author URI: http://osw3.net
 * Version: 1.0.0
 */ if (!defined( 'ABSPATH' )) exit;

global $query_string;

wp_parse_str( $query_string, $search_query );
$search = new WP_Query( $search_query );
?>
<?php get_header() ?>

Search Results Page

<hr>

<h3>Query String</h3>
<?php dump($query_string) ?>

<hr>

<h3>Search Query</h3>
<?php dump($search_query) ?>

<hr>

<h3>Search</h3>
<?php dump($search) ?>

<?php get_footer(); ?>