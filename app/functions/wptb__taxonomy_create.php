<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Add new taxonomy in database
 * 
 * @author http://osw3.net
 * @version: 1.0.0
 * @since: 1.0.0
 * 
 */ if (function_exists("wptb__taxonomy_create")) return;


/**
 * @param required $name of the taxonomy
 * @param required $type of the taxonomy
 * @param optional $parent of the taxonomy
 * @param optional $description of the taxonomy
 */
function wptb__taxonomy_create(string $name, string $type, int $parent = 0, ?string $description = null)
{
    // TODO: possibilité que le parent soit de type string

    // Exit if menu exists
    if (term_exists($name, $type)) return;

    // Create the menu
    $tag_id = wp_insert_term($name, $type, [
        'description'   => $description,
        'slug'          => wptb__slugify($name),
        'parent'        => $parent
    ]);
}