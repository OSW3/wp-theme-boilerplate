<?php
/**
 * WP Theme Boilerplate : functions/wptb_plugins__get_active
 * 
 * Return the list of actived wordpress plugins
 */

if (!function_exists('wptb_plugins__get_active'))
{    
    function wptb_plugins__get_active(array $output_data=[]): array
    {
        $plugins = [];
        $active_plugins = get_option('active_plugins');

        foreach($active_plugins as $plugin_file) 
        {
            $plugin_filename = PLUGINS_DIR.$plugin_file;

            $identifier = explode('/',$plugin_file);
            $identifier = $identifier[0];
            $identifier = preg_replace("/\.php/", null, $identifier);

            $plugin_data = array_merge(get_file_data($plugin_filename, [
                'name'        => 'Plugin Name',
                'pluginURI'   => 'Plugin URI',
                'version'     => 'Version',
                'description' => 'Description',
                'author'      => 'Author',
                'authorURI'   => 'Author URI',
                'textDomain'  => 'Text Domain',
                'domainPath'  => 'Domain Path',
                'network'     => 'Network',
                'requiresWP'  => 'Requires at least',
                'requiresPHP' => 'Requires PHP',
                '_sitewide'   => 'Site Wide Only',
            ], 'plugin'),[
                'filename' => $plugin_filename,
                'identifier' => $identifier,
            ]);


            $data = [];

            if (!empty($output_data)) 
            {
                foreach ($output_data as $key => $value)
                {
                    $data[$value] = $plugin_data[$value];
                }
            }
            else
            {
                $data = $plugin_data;
            }

            array_push($plugins, $data);
        }

        if (count($output_data) == 1) 
        {
            $_plugins = [];
            foreach ($plugins as $key => $value)
            {
                array_push($_plugins, $value[$output_data[0]]);
            }

            $plugins = $_plugins;
        }

        return $plugins;
    }
}
