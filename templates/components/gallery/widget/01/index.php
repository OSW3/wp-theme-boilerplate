<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Component: Gallery (widget) 01
 * 
 */ if (!defined('ABSPATH')) exit;
?>

<div class="wptb--gallery-widget-01">
    <div class="wptb--gallery-items">
        <?php for ($i=0; $i<6; $i++): ?>
        <div class="wptb--gallery-item-wrapper">
            <a href="#" class="wptb--gallery-item">
            <img class="wptb--gallery-image" src="http://wgl-demo.net/atlets/wp-content/uploads/2020/07/widgets_gallery_1-166x166.jpg" alt="image">
            </a>
        </div>
        <?php endfor; ?>
    </div>
</div>