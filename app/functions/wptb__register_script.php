<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Add script to the wordpress register
 * 
 * @author http://osw3.net
 * @version: 1.0.0
 * @since: 1.0.0
 * 
 */ if (function_exists("wptb__register_script")) return;


/**
 * Add script to the wordpress register
 * 
 * @param required $handle Identifier name
 * @param required $source Script path
 * @param optional $version name
 * @param optional $dependancies 
 * @param optional $in_footer (default true)
 * 
 * @return void
 */
function wptb__register_script(array $options=[])
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