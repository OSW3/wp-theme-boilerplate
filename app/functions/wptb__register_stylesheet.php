<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Add stylesheet to the wordpress register
 * 
 * @author http://osw3.net
 * @version: 1.0.0
 * @since: 1.0.0
 * 
 */ if (function_exists("wptb__register_stylesheet")) return;


/**
 * Add stylesheet to the wordpress register
 * 
 * @param array $options
 * @param required $handel Identifier name
 * @param required $source Stylesheet path
 * @param required $isLocal
 * 
 * @return void
 */
function wptb__register_stylesheet(array $options=[])
{
    global $assets;

    $options = array_merge([
        'handle'    => null,
        'source'    => null,
        'isLocal'   => true,
    ], $options);

    if ($options['isLocal'])
    {
        // TODO: check if file_exists(WP_STYLES_DIR.$source)
        $options['source'] = WPTB_URL__STYLES . $options['source'];
    }

    array_push($assets["styles"], [
        $options['handle'], 
        $options['source'],
    ]);
}