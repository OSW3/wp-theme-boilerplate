<?php
//======================================================================
//  WordPress Theme Boilerplate by OSW3
//======================================================================

// File: ./functions/wptb_addTag.php
// Function: wptb_addTag

// Add new tag in database

// required: no

/**
 * @usage wptb_addTag(string $name, int $parent = 0, ?string $description = null)
 * 
 * @example wptb_addTag("My tag");
 * 
 * @param required $name of the tag
 * @param optional $parent of the tag
 * @param optional $description of the tag
 */

//======================================================================


// Prevent function declaration
if (function_exists('wptb_addTag')) return;

function wptb_addTag(string $name, int $parent = 0, ?string $description = null)
{
    wptb_addTaxonomy($name, "post_tag", $parent, $description);
}