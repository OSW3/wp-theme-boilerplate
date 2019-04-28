<?php
/**
 * Template for displaying search forms
 */
?>

<form role="search" method="get" class="search-form" action="<?= esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?= _x( 'Search for:', 'label', 'twentysixteen' ); ?></span>
		<input type="search" class="search-field" placeholder="<?= esc_attr_x( 'Search &hellip;', 'placeholder', 'twentysixteen' ); ?>" value="<?= get_search_query(); ?>" name="s" />
	</label>
	<button type="submit" class="search-submit"><span class="screen-reader-text"><?= _x( 'Search', 'submit button', 'twentysixteen' ); ?></span></button>
</form>
