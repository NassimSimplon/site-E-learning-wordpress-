<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action( 'vw_school_education_before_slider' ); ?>

  <?php if( get_theme_mod('vw_school_education_slider_hide_show') != ''){ ?>
    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod( 'vw_school_education_slider_speed',3000)) ?>"> 
        <?php $vw_school_education_slider_page = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'vw_school_education_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $vw_school_education_slider_page[] = $mod;
            }
          }
          if( !empty($vw_school_education_slider_page) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $vw_school_education_slider_page,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
        ?>  
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php the_post_thumbnail(); ?>
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <h1><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                  <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_school_education_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_school_education_slider_excerpt_number','30')))); ?></p>
                  <?php if( get_theme_mod('vw_school_education_slider_button_text','READ MORE') != ''){ ?>
                    <div class="more-btn">              
                      <a href="<?php echo esc_url(get_permalink()); ?>" class="hvr-sweep-to-right"><?php echo esc_html(get_theme_mod('vw_school_education_slider_button_text',__('READ MORE','vw-school-education')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_school_education_slider_button_text',__('READ MORE','vw-school-education')));?></span></a>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
            <div class="no-postfound"></div>
          <?php endif;
        endif;?>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','vw-school-education' );?></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','vw-school-education' );?></span>
        </a>
      </div>  
      <div class="clearfix"></div>
    </section> 
  <?php }?>

  <?php do_action( 'vw_school_education_after_slider' ); ?>

  <?php if( get_theme_mod('vw_school_education_welcome_post') != ''){ ?>
    <section id="welcome-sec">
      <div class="container">
        <div class="row">
          <?php
          $vw_school_education_postData1=  get_theme_mod('vw_school_education_welcome_post');
            if($vw_school_education_postData1){
            $args = array( 'name' => esc_html($vw_school_education_postData1 ,'vw-school-education'));
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="col-lg-9 col-md-8">
                  <h2><?php the_title(); ?></h2>
                  <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_school_education_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_school_education_welcome_excerpt_number','30')))); ?></p>
                  <?php if( get_theme_mod('vw_school_education_welcome_button_text','LEARN MORE') != ''){ ?>
                    <div class ="wel-btn">
                      <a href="<?php echo esc_url(get_permalink()); ?>" class="hvr-sweep-to-right"><?php echo esc_html(get_theme_mod('vw_school_education_welcome_button_text',__('LEARN MORE','vw-school-education')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_school_education_welcome_button_text',__('LEARN MORE','vw-school-education')));?></span></a>
                    </div>
                  <?php } ?>
                </div>
                <div class="col-lg-3 col-md-4">
                  <div class="wel-image">
                    <?php the_post_thumbnail(); ?>
                  </div>
                </div>
              <?php endwhile; 
              wp_reset_postdata();?>
              <?php else : ?>
                <div class="no-postfound"></div>
              <?php
          endif; }?>
        </div>
      </div>
    </section>
  <?php }?>

  <?php do_action( 'vw_school_education_after_welcome' ); ?>

  <div class="content-vw">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>