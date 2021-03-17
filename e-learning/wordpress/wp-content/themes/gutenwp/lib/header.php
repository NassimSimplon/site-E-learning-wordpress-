<header id="masthead" class="site-header header">
    <div class="gutenwp-menu-wrap">
        <div class="site-header-wrap container regular-menu">
            <div class="row">
                
                <!-- Logo Section -->
                <div class="col-xs-6 col-sm-3 col-lg-2">
                    <div class="gutenwp-navbar-header">
                        <div class="logo-wrapper regular">
                            <a class="gutenwp-navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                                    the_custom_logo();
                                } else { ?>
                                    <h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>
                                <?php } ?>
                            </a>
                        </div>
                    </div><!--/#gutenwp-navbar-header-->
                </div><!-- Logo End -->
                
                <!-- Menu Setup - Default menu -->
                    <div class="col-xs-12 col-sm-8 col-lg-8 d-none d-lg-block">
                        <?php if ( has_nav_menu( 'primary' ) ) { ?>
                            <div id="main-menu" class="common-menu-wrap d-none d-lg-block">
                                <?php
                                    wp_nav_menu( array(
                                            'theme_location' => 'primary',
                                            'container'      => '',
                                            'menu_class'     => 'nav',
                                            'fallback_cb'    => 'wp_page_menu',
                                            'depth'          => 4,
                                        )
                                    );
                                ?>
                            </div><!--/#main-menu-->
                        <?php } ?>
                    </div>
                <!-- End Menu -->

                <div class="col-xs-12 col-sm-2 col-lg-2">
                    <!-- Search section -->
                    <div class="header-search-wrap regular">
                        <a href="#" class="gutenwp-search search-open-icon"><i class="fa fa-search"></i></a>
                        <a href="#" class="gutenwp-search search-close-icon"><i class="fa fa-times"></i></a>
                        <div class="top-search-input-wrap">
                            <div class="top-search-overlay"></div>
                            <form action="<?php echo esc_url(home_url( '/' )); ?>" method="get">
                                <div class="search-wrap">
                                    <div class="search  pull-right gutenwp-top-search">
                                        <div class="sp_search_input">
                                            <input type="text" value="<?php echo get_search_query(); ?>" name="s" class="form-control" placeholder="<?php esc_attr_e('Search...', 'gutenwp'); ?>" autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Mobile menu -->
                <div class="col-7 col-sm-7 d-lg-none">
                    <button type="button" class="navbar-toggle float-right" data-toggle="collapse" data-target=".navbar-collapse">
                        <i class="fa fa-navicon"></i>
                    </button>
                </div>
                <div class="col-12 d-lg-nones">
                    <div id="mobile-menu">
                        <div class="collapse navbar-collapse">
                            <?php
                                if ( has_nav_menu( 'primary' ) ) {
                                    wp_nav_menu( array(
                                        'theme_location'      => 'primary',
                                        'container'           => false,
                                        'menu_class'          => 'nav navbar-nav',
                                        'fallback_cb'         => 'wp_page_menu',
                                        'depth'               => 3,
                                        'walker'              => new wp_bootstrap_mobile_navwalker()
                                        )
                                    );
                                }
                            ?>
                        </div>
                    </div><!--/.#mobile-menu-->
                </div>
                <!-- End Mobile Menu -->

            </div>
        </div>
    </div><!-- gutenwp-menu-wrap -->
</header><!--/.header-->