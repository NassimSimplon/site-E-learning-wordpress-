<?php
/*
*Template Name: 404 Page Template
*/
get_header('alternative');
?>

<div class="gutenwp-error-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12 info-wrapper">
                <h2 class="error-message-title">
                    <?php esc_attr_e('404', 'gutenwp'); ?>
                </h2>
                <p class="error-message">
                    <?php esc_html_e('Oops!you have encountered an error!', 'gutenwp'); ?>
                </p>
                <a class="btn btn-gutenwp" href="<?php echo esc_url( home_url('/') ); ?>" title="<?php  esc_attr_e( 'HOME', 'gutenwp' ); ?>">
                    <?php esc_html_e('Go Home', 'gutenwp'); ?>
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer('alternative'); ?>
