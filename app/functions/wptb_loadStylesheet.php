<?php
/**
 * Prevent error if function is already defined
 */
if (function_exists("wptb_loadStylesheet")) return;


/**
 * Add stylesheets to the register
 * 
 * 
 * @param array $options
 * @param required $source Stylesheet path
 */
function wptb_loadStylesheet(array $options=[])
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