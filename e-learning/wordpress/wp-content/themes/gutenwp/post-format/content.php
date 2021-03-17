<article id="post-<?php the_ID(); ?>" <?php post_class('post-format-image'); ?>>
	<?php if (!is_single()) { ?>
		<div class="row">
            <?php 
                if ( has_post_thumbnail() ){
                    $col = 'col-sm-7';
                }else {
                    $col = 'col-sm-12';
                } 
            ?>
            <?php if ( has_post_thumbnail() ) { ?>
                <div class="gutenwp-blog-wrap col-sm-5">
                    <div class="gutenwp-thumb">
                        <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail('gutenwp-medium', array('class' => 'img-responsive')); ?></a>
                    </div>
                </div>
            <?php } ?>

            <?php if (!is_search()){ ?>
                <div class="content-wrap-section <?php echo esc_attr($col); ?>">
                    <div class="entry-headder">
                        <!-- Date Time -->
                        <div class="date">
                            <i class="fa fa-clock-o"></i>
                            <?php $the_date = get_the_date(); ?>
                            <?php echo date_i18n( get_option( 'date_format' ), strtotime($the_date)); ?>
                        </div>   
                        <!-- BLog Title -->
                        <h2 class="entry-title blog-entry-title">
                            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                        </h2>
                    </div>
                    
                    <!-- Post Content -->
                    <?php get_template_part( 'post-format/entry-content' ); ?> 

                    <div class="thm-post-meta">
                        <ul>
                            <li class="author-by">
                                <?php echo get_avatar( get_the_author_meta( 'ID' ) , 50 );?>
                                <span class="author"><?php _e('By','gutenwp'); ?> <?php the_author_posts_link() ?></span> 
                            </li>
                            <li class="author-by">
                                <span>
                                    <?php $the_date = get_the_date(); ?>
                                    <?php echo date_i18n( get_option( 'date_format' ), strtotime($the_date)); ?>
                                </span>
                            </li>
                            <li class="cat-list">
                                <?php
                                    if(get_the_category_list()) :
                                        get_the_category_list( __( ', ', 'gutenwp' ) );
                                    endif; 
                                ?>
                            </li>
                            <li class="tag-list">
                                <?php if(get_the_tag_list()) : ?>
                                <?php echo get_the_tag_list('',', ',''); ?>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                    <?php 
                        $continue = esc_html('Read More', 'gutenwp' );
                        echo '<p class="wrap-btn-style"><a class="thm-btn" href="'.get_permalink().'">'. $continue .'<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>';    
                    ?>
                </div>
            <?php } ?>
        </div>
	<?php } else { ?>
        <?php if ( has_post_thumbnail() ) { ?>
	        <div class="featured-wrap">
                <a href="<?php the_permalink(); ?>" rel="bookmark">
    	            <?php the_post_thumbnail('blog-medium', array('class' => 'img-responsive'));?>
    	        </a>
            </div>
	    <?php } ?>
        <!-- Sidebar -->
        <div class="container">
            <div class="row">
            	<div id="content" class="site-content col-md-8" role="main">
	    			<?php get_template_part( 'post-format/entry-content' ); ?> 
				</div>
		      <?php get_sidebar(); ?>
            </div>
        </div>
		
	<?php } ?>
</article> <!--/#post-->