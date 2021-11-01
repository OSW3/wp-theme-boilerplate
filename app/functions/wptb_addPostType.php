<?php
//======================================================================
//  WordPress Theme Boilerplate by OSW3
//======================================================================

// File: ./functions/wptb_addPostType.php
// Function: wptb_addPostType

// Add new tag in database

// required: no

/**
 * @usage wptb_addPostType(string $name, int $parent = 0, ?string $description = null)
 * 
 * @example wptb_addPostType("My tag");
 * 
 * @param required $name of the tag
 * @param optional $parent of the tag
 * @param optional $description of the tag
 */

//======================================================================


// Prevent function declaration
if (function_exists('wptb_addPostType')) return;

function wptb_addPostType(string $handle, array $args, array $labels)
{
    $args['labels'] = $labels;
	register_post_type($handle, $args);
}