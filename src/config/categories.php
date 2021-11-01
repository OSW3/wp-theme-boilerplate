<?php
/**
 * WordPress Theme Boilerplate by OSW3
 * --
 * 
 * File: ./config/categories.php
 * Use this file to define categories will be created when installing the theme.
 * 
 * required: recommended
 */

/**
 * Check if this file is executed in WordPress environment.
 * if the ABSPATH constant don't exists, this theme will be not executed
 */
if (!defined( 'ABSPATH' )) exit;



/**
 * Create a category with name and description
 */
wptb_createCategory([
    'name'          => "Category 1", 
    'description'   => "The category 1 description"
]);

/**
 * Create a category with name and description
 */
wptb_createCategory([
    'name'          => "Category 2", 
    'description'   => "The category 2 description"
]);

/**
 * Create a category with name and description
 */
wptb_createCategory([
    'name'          => "Category 3", 
    'description'   => "The category 3 description"
]);

/**
 * Create a category with name and description
 */
wptb_createCategory([
    'name'          => "Category 4" ,
    'description'   => "The category 4 description"
]);