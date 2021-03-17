    <div class="footer-widgets">
        <div class="bottom footer-wrap">
            <div class="container bottom-footer-cont">
                <div class="row clearfix">
                    <?php if (is_active_sidebar('bottom1')):?>
                        <div class="col-md-3 bottom-wrap style1">
                            <div class="gutenwp-about">
                                <?php dynamic_sidebar('bottom1'); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (is_active_sidebar('bottom2')):?>
                        <div class="col-md-3 bottom-wrap style1">
                            <div class="gutenwp-container">
                                <?php dynamic_sidebar('bottom2'); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (is_active_sidebar('bottom3')):?>
                        <div class="col-md-3 bottom-wrap style1">
                            <div class="gutenwp-container">
                                <?php dynamic_sidebar('bottom3'); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (is_active_sidebar('bottom4')):?>
                        <div class="col-md-3 bottom-wrap style1">
                            <div class="gutenwp-container">
                                <?php dynamic_sidebar('bottom4'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div><!--/#footer-->
    </div>

    <!-- Start Footer -->
    <footer id="footer" class="footer-banner style1"> 
        <div class="container">
            <div class="footer-copyright">
                <div class="row">  
                    <div class="col-md-12 text-center copy-wrapper">
                        <span><?php esc_html_e('GutenWP WordPress Theme, Copyright 2019 Themeum', 'gutenwp'); ?></span>
                    </div> <!-- end row -->
                </div> <!-- end row -->
            </div> <!-- end row --> 
        </div> <!-- end container -->
    </footer>
    <!-- End footer -->

</div> <!-- # page -->
<a id="scrollUp" class="scrollUp" href="#top" style="position: fixed; z-index: 999;"><i class="fa fa-arrow-up"></i></a>
<?php wp_footer(); ?>
</body>
</html>
