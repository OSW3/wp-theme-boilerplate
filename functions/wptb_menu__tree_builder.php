<?php
/**
 * WP Theme Boilerplate : functions/wptb_menu__tree_builder
 * 
 * @Description: Build a multidimentional array
 * @Version: 1.0.0
 * @Usage: wptb_menu__tree_builder(array $input[, int $parent]);
 * @Example: wptb_menu__tree_builder([...]);
 * --
 * @param array $input Simple array
 * @param int $parent
 */

if (!function_exists('wptb_menu__tree_builder')) 
{    
    function wptb_menu__tree_builder(array $input, int $parent=0)
    {
        $output = array();

        foreach ($input as $key => $item)
        {
            if ($item['parent'] == $parent)
            {
                $children = wptb_menu__tree_builder($input, $key);

                if ($children)
                {
                    $item['children'] = $children;
                }

                $output[$key] = $item;
            }
        }

        return $output;
    }
}


