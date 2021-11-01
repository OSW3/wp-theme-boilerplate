<?php
//======================================================================
//  WordPress Theme Boilerplate by OSW3
//======================================================================

// File: ./functions/wptb_addTaxonomy.php
// Function: wptb_addTaxonomy

// Add new taxonomy in database

// required: no

/**
 * @usage wptb_addTaxonomy(string $name, string $type, int $parent = 0, ?string $description = null)
 * 
 * @example wptb_addTaxonomy("My Menu");
 * 
 * @param required $name of the taxonomy
 * @param required $type of the taxonomy
 * @param optional $parent of the taxonomy
 * @param optional $description of the taxonomy
 */

//======================================================================


// Prevent function declaration
if (function_exists('wptb_addTaxonomy')) return;

// TODO: possibilité que le parent soit de type string
function wptb_addTaxonomy(string $name, string $type, int $parent = 0, ?string $description = null)
{
    // Exit if menu exists
    if (term_exists($name, $type)) return;

    // Create the menu
    $tag_id = wp_insert_term(
        $name,
        $type,
        [
            'description'=> $description,
            'slug' => wptb_slugify($name),
            'parent'=> $parent
        ]
    );
}