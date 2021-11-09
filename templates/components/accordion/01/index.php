<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Component: Accordion 01
 * 
 */ if (!defined('ABSPATH')) exit;
?>

<!-- Component: Hero 01 -->
<h2>Accordion 01</h2>

<div class="wptb-accordion-service" data-controller="wptb-accordion-service">
<?php foreach($items as $item): ?>
    <div class="wptb-accordion-item">
        <div class="wptb-accordion-header">
            <div class="wptb-accordion-inner" style="background-image: url(<?= $item['illustration'] ?>);"></div>
        </div>
        <div class="wptb-accordion-body">
            <div class="wptb-accordion-inner">
                <h3 class="wptb-accordion-item-title"><?= $item['title'] ?></h3>
                <div class="wptb-accordion-item-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, et.</div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>