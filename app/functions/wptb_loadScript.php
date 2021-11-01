<?php
/**
 * Prevent error if function is already defined
 */
if (function_exists("wptb_loadScript")) return;




//======================================================================
//  WordPress Theme Boilerplate by OSW3
//======================================================================

// File: ./functions/wptb_loadScript.php
// Function: wptb_loadScript

// Push CSS file to the list of assets

// required: yes

/**
 * @usage wptb_loadScript(string $handle, string $source, ?string $version = null, array $dependancies = [], bool $in_footer = true)
 * 
 * @example wptb_loadScript("_bootstrap", "assets/js/bootstrap.min.js", "4.4", ["_jquery]);
 * 
 * @param required $handle Identifier name
 * @param required $source Script path
 * @param optional $version name
 * @param optional $dependancies 
 * @param optional $in_footer (default true) 
 */


function wptb_loadScript(array $options=[])
{
    global $assets;

    $options = array_merge([
        'handle'        => null,
        'source'        => null,
        'version'       => null,
        'dependencies'  => [],
        'in_footer'     => true,
        'isLocal'       => true,
    ], $options);

    if ($options['isLocal'])
    {
        // TODO: check if file_exists(WP_SCRIPTS_DIR.$source)
        $options['source'] = WPTB_URL__SCRIPTS . $options['source'];
    }

    array_push($assets["scripts"], [
        $options['handle'],
        $options['source'],
        $options['version'],
        $options['dependencies'],
        !$options['in_footer'],
    ]);
}