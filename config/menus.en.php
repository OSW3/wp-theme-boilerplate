<?php
/**
 * WP Theme Boilerplate : config/menus
 * 
 * Definition of the menus that will be created during the theme installation
 * 
 * Menu parameters :
 * @param required title
 * @param optional items
 * 
 * Menu item parameters :
 * @param required title    Item label
 * @param optional classes  Item class attribute
 * @param optional url      Item link url
 * @param optional object   Item Object (like a page or post)
 * 
 * TODO: $item_parent        = isset($item['parent']) ? $item['parent'] : 0;
 * TODO: $item_position      = isset($item['position']) ? $item['position'] : $index;
 * TODO: $item_description   = isset($item['description']) ? __($item['description']) : '';
 * TODO: $item_attr_title    = isset($item['attr_title']) ? __($item['attr_title']) : '';
 * TODO: $item_xfn           = isset($item['xfn']) ? $item['xfn'] : '';
 */


/**
 * Main Menu
 * --
 * For this menu we add items from custom link and created page
 * @show: config/pages
 */

// Menu items definition
$mainMenuItems = [];

// Add menu item as "custom link"
array_push($mainMenuItems, [
    'title'     => "Homepage",
    'classes'   => null,
    'url'       => "/",
]);

// Add menu items as referenced "page"
array_push($mainMenuItems, ["object" => "wptb-documentation"]);
array_push($mainMenuItems, ["object" => "example-content"]);
array_push($mainMenuItems, ["object" => "example-template"]);

// Add items to the menu
array_push($menus, [
    'title' => "Main Menu",
    'items' => $mainMenuItems]);





/**
 * Social Menu
 * --
 * For this menu we add custom link
 */

// Menu items definition
$socilaMenuItems = [];

// Add menu item as "custom link"
array_push($mainMenuItems, [
    'title'     => "Facebook",
    'classes'   => "social social-facebook",
    'url'       => "http://facebook.com/",
    'target'    => "_blank"]);

array_push($mainMenuItems, [
    'title'     => "Twitter",
    'classes'   => "social social-twitter",
    'url'       => "http://twitter.com/",
    'target'    => "_blank"]);

array_push($mainMenuItems, [
    'title'     => "Instagram",
    'classes'   => "social social-instagram",
    'url'       => "http://instagram.com/",
    'target'    => "_blank"]);

// Add items to the menu
array_push($menus, [
    'title' => "Social Menu",
    'items' => $socilaMenuItems]);