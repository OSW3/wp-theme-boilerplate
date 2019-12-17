<?php
/**
 * WP Theme Boilerplate : config/menus
 * 
 * Definition of the menus that will be created during the theme installation
 * 
 * Page parameters :
 * @param required title
 * @param optional items
 * 
 * 
    // $item_parent        = isset($item['parent']) ? $item['parent'] : 0;
    // $item_position      = isset($item['position']) ? $item['position'] : $index;
    // $item_description   = isset($item['description']) ? __($item['description']) : '';
    // $item_attr_title    = isset($item['attr_title']) ? __($item['attr_title']) : '';
    // $item_xfn           = isset($item['xfn']) ? $item['xfn'] : '';
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
    'title'     => "Accueil",
    'classes'   => null,
    'url'       => "/",
]);

// Add menu items as referenced "page"
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