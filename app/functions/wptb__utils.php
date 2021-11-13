<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * @author http://osw3.net
 * @version: 1.0.0
 * @since: 1.0.0
 * 
 */ 

if (!function_exists("dump"))
{
    /**
     * Dump
     *
     * @param mixed $text
     * @return void
     */
    function dump($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

if (!function_exists("dd"))
{
    /**
     * Dump & die
     *
     * @param mixed $text
     * @return void
     */
    function dd($data)
    {
        dump($data);
        exit;
    }
}

if (!function_exists("makeRecursive"))
{
    /**
     * Helper function
     * 
     * @param array   $flat_data   flat data, implementing a id/parent id (adjacency list) structure
     * @param string  $parent       parent id index
     * @param string  $key          id index
     * @param string  $children     children index
     * @return array
     */
    function makeRecursive(array $flat_data, string $parent = "parent", string $key = "id", string $children = "children") 
    {
        $m = [];

        foreach ($flat_data as $item) 
        {
            switch (gettype($item))
            {
                case 'array':
                    isset($m[$item[$parent]]) ?: $m[$item[$parent]] = [];
                    isset($m[$item[$key]])    ?: $m[$item[$key]]  = [];
                    $m[$item[$parent]][]      = array_merge($item, [$children => &$m[$item[$key]]]);
                break;
                    
                case 'object':
                    isset($m[$item->$parent]) ?: $m[$item->$parent] = [];
                    isset($m[$item->$key])    ?: $m[$item->$key]  = [];
                    $m[$item->$parent][]      = (object) array_merge((array) $item, [$children => &$m[$item->$key]]);
                break;
            }
        }
    
        return $m[0];
    }
}

function wptb__attr__class(array $classes): string
{
    return implode(" ", $classes);
}

if (!function_exists("is"))
{
    /**
     * Return the $response if $condition is true
     *
     * @param boolean $condition
     * @param mixed $response
     * @return mixed
     */
    function is(bool $condition, $response)
    {
        return $condition ? $response : null;
    }
}