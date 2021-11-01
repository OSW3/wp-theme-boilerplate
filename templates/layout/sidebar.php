<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * More info at https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#sidebar-php
 * 
 * Template Type: Partial
 * Author: OSW3
 * Author URI: http://osw3.net
 * Version: 1.0.0
 */ if (!defined( 'ABSPATH' )) exit;
?>
<div class="col-4">
<?php 
if (is_home())
{
    get_template_part( 'template-parts/sidebar/content', 'home' );
}
else if (is_single())
{
    get_template_part( 'template-parts/sidebar/content', 'single' );
}
?>
</div>