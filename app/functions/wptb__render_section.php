<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Include a component template embed in a <section> with parameters.
 * 
 * @author http://osw3.net
 * @version: 1.0.0
 * @since: 1.0.0
 * 
 */ if (function_exists("wptb__render_section")) return;


/**
 * Include a component template embed in a <section> with parameters.
 * 
 * @param string $template The file to include
 * @param array $parameters passed to the file 
 * @param bool $once if true, include_once
 * 
 * @return void
 */
function wptb__render_section(string $template, array $params=[], array $options=[])
{
    $options = array_merge([
        'id' => null,
        // 'class' => "",
        'container-fluid' => false,
    ], $options);

    ob_start();

    wptb__render_component($template, $params);
    
    $content = ob_get_clean();

    wptb__render_component("section/01", [
        'options' => $options,
        'content' => $content,
    ]);
}