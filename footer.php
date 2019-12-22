<?php
/**
 * The template for displaying the footer
 */
?>
            </div><!-- end #main-content .container -->
        </div><!-- end #main-content -->

        <footer id="main-footer">
            <div class="container">
                <div class="d-flex">

                    <div class="mr-auto">
                        <?= wptb_component__copyright(2009); ?>
                        <span id="toggle-theme">switch theme : <span></span></span>
                    </div>
                    <div class="ml-auto">

                        <div class="dropdown dropup">
                            <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                lang
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>

                    </div>
                    
                </div>
            </div>
        </footer>

    </div><!-- end .wrapper -->

    <?php wp_footer(); ?>
    
</body>
</html>