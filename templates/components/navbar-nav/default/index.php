<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Component: Navbar Nav : Default
 * 
 */ if (!defined('ABSPATH')) exit;


/**
 * Build the class attribute
 */

$a_classes = ["navbar-nav"];

// Add custom classes
if (isset($attr_class))
{
    $a_classes = array_merge($a_classes, explode(" ", $attr_class));
}

$s_classes = wptb__attr__class($a_classes);
?>

<ul class="<?= $s_classes ?>">
<?php 
foreach ($items as $item)

    if (!empty($item->children))
        wptb__render_component("dropdown/menu", [
            'item' => $item,
            'class' => "nav-item dropdown",
            'id' => "navbar-dropdown-". $item->ID,
        ]);

    else
        wptb__render_component("nav-item/link", [
            'item' => $item
        ]);
?>
</ul>