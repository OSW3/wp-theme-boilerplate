<?php
/**
 * WP Theme Boilerplate : functions/wptb_documentation
 * 
 * @Description: xxxx
 * @Version: 1.0.0
 * @Usage: xxx
 * @Example: xxx
 * 
 * Generate the doc
 * --
 */

if (!function_exists('wptb_documentation')) 
{    
    function wptb_documentation()
    {
        $wptb_functions = scandir(FUNCTIONS_DIR);
        
        foreach ($wptb_functions as $key => $function)
        {
            if (preg_match("/^wptb_(:?.)+\.php$/", $function))
            {
                $function = str_replace(".php", null, $function);
                wptb_documentation__section($function);
            }
        }
    }

    function wptb_documentation__section($function)
    {
        $function_file = FUNCTIONS_DIR.$function.".php";
        ?>
        <section>
            <h3><?= $function ?></h3>

            <dl>
                <?php foreach(wptb_documentation__file_data($function_file) as $index => $value): ?>
                <dt><?= $index ?></dt>
                <dd>
                    <pre><?= $value ?></pre>
                    <?php if ($index == "example" ): ?>
                        <pre><?php echo eval($value); ?></pre>
                    <?php endif; ?>
                </dd>
            <?php endforeach; ?>

                <dt>Filename</dt>
                <dd><code><?= $function_file ?></code></dd>

            </dl>
            <hr>
        </section>
        <?php
    }

    function wptb_documentation__file_data( $file, $default_headers=[], $context = '' ) 
    {        
        // We don't need to write to the file, so just open for reading.
        $fp = fopen( $file, 'r' );

        // Pull only the first 8 KB of the file in.
        $file_data = fread( $fp, 8 * KB_IN_BYTES );

        // PHP will close file handle, but we are good citizens.
        fclose( $fp );

        // Make sure we catch CR-only line endings.
        $file_data = str_replace( "\r", "\n", $file_data );

        // Make string as array
        $file_data = explode("\n", $file_data);

        $data = array();
        foreach ($file_data as $line => $value)
        {
            if (preg_match("/^\s\*\s@(.+):(.*)$/mi", $value, $matches)) 
            {
                $index = strtolower($matches[1]);
                if (in_array($index, ["description", "example", "usage", "version"]))
                {
                    $data[$index] = $matches[2];
                }
            }
        }

        return $data;
    }
}