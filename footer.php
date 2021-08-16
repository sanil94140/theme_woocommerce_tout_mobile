<footer>
        <section class="footer-widgets">widgets
            <!-- <?php wp_nav_menu(
                array(
                    'theme_location'    => 'tout_mobile_footer_menu'
                )
            ); ?>             -->
        </section>
        <nav class="main-menu navbar navbar-expand-md navbar-light" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'tout_mobile_footer_menu',
                        'depth'             => 3,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?>
                </div>
            </nav>
        <section class="copyright">Infos site</section>
    </footer>
</body>
<?php wp_footer(); ?>
</html>