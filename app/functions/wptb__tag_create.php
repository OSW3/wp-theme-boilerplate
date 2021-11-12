<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Add new tag in database
 * 
 * @author http://osw3.net
 * @version: 1.0.0
 * @since: 1.0.0
 * 
 */ if (function_exists("wptb__tag_create")) return;


/**
 * @param required $name of the tag
 * @param optional $parent of the tag
 * @param optional $description of the tag
 */
function wptb__tag_create(array $tag=[])
{
    $tag = array_merge([
        'name'          => null,
        'parent'        => 0,
        'description'   => null,
    ], $tag);

    wptb__taxonomy_create(
        $tag['name'], 
        "post_tag", 
        $tag['parent'], 
        $tag['description']
    );
}