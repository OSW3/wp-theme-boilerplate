<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Component: Section 01
 * 
 */ if (!defined('ABSPATH')) exit;
?>

<?php 
$options = array_merge([
    'id' => null,
    'class' => "",
    'container-fluid' => false,
], $options);



// Section Class
// --

// Classes from options
$section_class = explode(" ", $options['class']);

// Add the default class
array_unshift($section_class, "wptb-section");

// Build the classes string
$section_class = implode(" ", $section_class);



?>
<section <?= $options['id'] ? "id=\"".$options['id']."\"" : null ?>class="<?= $section_class ?>">
    <div class="<?= $options['container-fluid'] ? "container-fluid" : "container" ?>">
        <?= $content ?>
    </div>
</section>