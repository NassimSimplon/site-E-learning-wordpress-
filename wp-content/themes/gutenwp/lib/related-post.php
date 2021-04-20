<div class="related-entries">
	<div class="container">
		<div class="row">
        	<div class="addon-article intro-item-wrapper col-md-12">
        		<h3><?php esc_html_e('Related Posts', 'gutenwp') ?></h3>
    		</div>
		</div>
	</div>

	<div class="container">

	  	<div class="row">
		    <?php
		        $cats = get_the_category($post->ID);
		        if ($cats) {  
			        $first_cat = $cats[0]->term_id;
			        $args = array(
				        'category__in' 			=> array($first_cat),
				        'post__not_in' 			=> array($post->ID),
				        'posts_per_page'		=> 3,
				        'ignore_sticky_posts'	=> 1
			        );
			        $query_post = new WP_Query($args);
			        if( $query_post->have_posts() ) {
				        while ($query_post->have_posts()) : $query_post->the_post(); ?>

				        	<div class="addon-article intro-item-wrapper col-md-4">
								<div class="article-image-wrap">
									<a href="<?php get_permalink(); ?>" class="img-wrapper">
										<?php echo get_the_post_thumbnail(get_the_ID(), 'gutenwp-medium', array('class' => 'img-responsive')); ?>
									</a>
								</div>

								<?php 
								$content = get_post_field( 'post_content', get_the_ID() );
							    $word_count = str_word_count( strip_tags( $content ) );
							    $wordceil = ceil ($word_count / 200); ?>

								<div class="article-details">
									<h3 class="article-title">
										<a href="<?php get_permalink(); ?>"><?php echo mb_strimwidth(get_the_title(), 0, 45, '...'); ?></a>
									</h3>
									
						            <ul class="gutenwp-post-category">
						                <li class="meta-category"><?php echo get_the_category_list( __( ',', 'gutenwp' ) ); ?></li>
						                <li class="meta-read"><?php echo $wordceil.' '.__('  min read', 'gutenwp'); ?></li>
						            </ul>       
								</div>
							</div>

				        <?php
				        endwhile;
			        }
			        wp_reset_query();
		        }
		    ?> 
	  	</div>
  	</div>
</div>