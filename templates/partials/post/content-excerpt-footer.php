<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * @see -
 * 
 * Template Type: Partial
 * Author: OSW3
 * Author URI: http://osw3.net
 * Version: 1.0.0
 * 
 */ if (!defined('ABSPATH')) exit;
?>
<div>
    <h3><?= $post->post_title ?></h3>
    <p><?= $post->post_excerpt ?></p>
    <a href="<?= get_the_permalink($post->ID); ?>">&#8594;</a>
</div>
<hr>