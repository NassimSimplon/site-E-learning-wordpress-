<div id="top-bar">
  <div class="container">
    <div class="row m-0">
      <div class="logo col-lg-3 col-md-12">
        <?php if ( has_custom_logo() ) : ?>
          <div class="site-logo"><?php the_custom_logo(); ?></div>
        <?php endif; ?>
        <?php $blog_info = get_bloginfo( 'name' ); ?>
          <?php if ( ! empty( $blog_info ) ) : ?>
            <?php if ( is_front_page() && is_home() ) : ?>
              <?php if( get_theme_mod('vw_school_education_logo_title_hide_show',true) != ''){ ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
              <?php } ?>
            <?php else : ?>
              <?php if( get_theme_mod('vw_school_education_logo_title_hide_show',true) != ''){ ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
              <?php } ?>
            <?php endif; ?>
          <?php endif; ?>
          <?php
            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) :
          ?>
          <?php if( get_theme_mod('vw_school_education_tagline_hide_show',true) != ''){ ?>
            <p class="site-description">
              <?php echo $description; ?>
            </p>
          <?php } ?>
        <?php endif; ?>
      </div>
      <div class="col-lg-9 col-md-12 content">
        <div class="row m-0">
          <div class="col-lg-4 col-md-4">
            <div class="row">
              <?php if ( get_theme_mod('vw_school_education_location_text','') != "" ) {?>
                <div class="col-lg-2 col-md-2 col-3 p-0">
                  <i class="<?php echo esc_attr(get_theme_mod('vw_school_education_location_address_icon','fas fa-map-marker-alt')); ?>"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-9 contents">
                  <?php if ( get_theme_mod('vw_school_education_location_text','') != "" ) {?>
                    <p class="email"><?php echo esc_html( get_theme_mod('vw_school_education_location_text','') ); ?></p>
                  <?php }?>
                  <?php if ( get_theme_mod('vw_school_education_address','') != "" ) {?>
                    <p class="email"><?php echo esc_html( get_theme_mod('vw_school_education_address','') ); ?></p>
                  <?php }?>
                </div>
              <?php }?>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="row">
              <?php if ( get_theme_mod('vw_school_education_contact','') != "" ) {?>
                <div class="col-lg-2 col-md-2 col-3 p-0">
                  <i class="<?php echo esc_attr(get_theme_mod('vw_school_education_contact_icon','fas fa-mobile-alt')); ?>"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-9 contents">
                  <?php if ( get_theme_mod('vw_school_education_contact','') != "" ) {?>
                    <p class="call"><?php echo esc_html( get_theme_mod('vw_school_education_contact','' )); ?></p>
                  <?php }?>
                  <?php if ( get_theme_mod('vw_school_education_email','') != "" ) {?>
                    <p class="call"><?php echo esc_html( get_theme_mod('vw_school_education_email','' )); ?></p>
                  <?php }?>
                </div>
              <?php }?>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="row">
              <?php if ( get_theme_mod('vw_school_education_day','') != "" ) {?>
                <div class="col-lg-2 col-md-2 col-3 p-0">
                  <i class="<?php echo esc_attr(get_theme_mod('vw_school_education_timing_icon','far fa-clock')); ?>"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-9 contents">
                  <?php if ( get_theme_mod('vw_school_education_day','') != "" ) {?>
                    <p class="call"><?php echo esc_html( get_theme_mod('vw_school_education_day','' )); ?></p>
                  <?php }?>
                  <?php if ( get_theme_mod('vw_school_education_time','') != "" ) {?>
                    <p class="call"><?php echo esc_html( get_theme_mod('vw_school_education_time','' )); ?></p>
                  <?php }?>
                </div>
              <?php }?>
            </div>
          </div>        
        </div>
      </div>      
    </div>
  </div>
</div>