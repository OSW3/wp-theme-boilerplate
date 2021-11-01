<?php
//======================================================================
//  WordPress Theme Boilerplate by OSW3
//======================================================================

// File: ./functions/wptb_createCategory.php
// Function: wptb_createCategory

// Add new category in database

// required: no

/**
 * @usage wptb_createCategory(string $name, int $parent = 0, ?string $description = null)
 * 
 * @example wptb_createCategory("My category");
 * 
 * @param required $name of the category
 * @param optional $parent of the category
 * @param optional $description of the category
 */

//======================================================================


// Prevent function declaration
if (function_exists('wptb_createCategory')) return;

function wptb_createCategory(array $options=[])
{
    $options = array_merge([
        'name'          => null,
        'parent'        => 0,
        'description'   => null,
    ], $options);

    wptb_addTaxonomy(
        $options['name'], 
        "category", 
        $options['parent'], 
        $options['description']
    );
}