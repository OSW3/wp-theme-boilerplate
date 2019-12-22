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

                        <?= wptb_component__get_i18n_switcher([]) ?>

                    </div>
                    
                </div>
            </div>
        </footer>

    </div><!-- end .wrapper -->

    <?php wp_footer(); ?>
    
</body>
</html>