<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Add new category in database
 * 
 * @author http://osw3.net
 * @version: 1.0.0
 * @since: 1.0.0
 * 
 */ if (function_exists("wptb__category_create")) return;


/**
 * @param required $name of the category
 * @param optional $parent id of the category
 * @param optional $description of the category
 */
function wptb__category_create(array $category=[])
{
    $category = array_merge([
        'name'          => null,
        'parent'        => 0,
        'description'   => null,
    ], $category);
    
    wptb__taxonomy_create(
        $category['name'], 
        "category", 
        $category['parent'], 
        $category['description']
    );
}