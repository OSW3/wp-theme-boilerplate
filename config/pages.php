<?php
/**
 * WP Theme Boilerplate : config/pages
 * 
 * Definition of the pages that will be created during the theme installation
 * 
 * Page parameters :
 * @param required (string) title
 * @param optional (string) slug
 * @param optional (string) template
 * @param optional (string) content
 * @param optional (bool) homepage 
 */


/**
 * Page with content
 * --
 * For this example page, we define a template and content.
 * The content is retrieved in the template
 */
array_push($pages, [
    'title'     => "Example Content",
    'slug'      => "example-content",
    'content'   => "This content is writed in the Pages editor",
    'template'  => "templates/example-content.php"]);


/**
 * Page with template
 * --
 * For this example page, the content is writted directly in the template
 */
array_push($pages, [
    'title'     => "Example Template",
    'slug'      => "example-template",
    'template'  => "templates/example-template.php"]);