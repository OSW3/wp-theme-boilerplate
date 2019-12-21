<?php

/**
 * get_page_url_by_slug
 * --
 * @param string $slug
 * @param string $post_type
 */

if (!function_exists('get_page_url_by_slug')) 
{    
    function get_page_url_by_slug(string $slug, string $post_type = "page")
    {
        $page = null;

        if (function_exists('get_page_by_slug')) {
            $page = get_page_by_slug( $slug, $post_type );
        }

        if (null != $page) {
            if (function_exists('is_plugin_actived') && function_exists('pll_get_post_translations') && function_exists('wptb_i18n__get_current_lang')) {
                if (is_plugin_actived("polylang")) {
                    $lang = wptb_i18n__get_current_lang();
                    $posts = pll_get_post_translations( $pageID );
                    if (isset($posts[$lang])) {
                        $pageID = $posts[$lang];
                    }
                }
            }

            $pageID = $page->ID;

            return get_permalink( $pageID );
        }

        return null;
    }
}