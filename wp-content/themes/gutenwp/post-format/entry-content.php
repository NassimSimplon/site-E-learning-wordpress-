<?php if ( is_single() ) { ?>

    <?php if ( has_post_thumbnail() ){ ?>
    <div class="blog-single-wrap">
    <?php }else { ?>
    <div class="blog-single-wrap default-post">
    <?php } ?>
        <div class="entry-headder">
            <h2 class="entry-title blog-entry-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
            </h2>
        </div>
        <div class="entry-blog-meta">
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
                <li class="comments">
                    <?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'gutenwp' ), number_format_i18n( get_comments_number() ) ); ?>
                </li>
                <li class="cat-list">
                    <?php
                        if(get_the_category_list()) :
                            get_the_category_list( __( ', ', 'gutenwp' ) );
                        endif; 
                    ?>
                </li>
            </ul>
        </div> <!--/.entry-meta -->
    </div>
<?php } ?>

<div class="entry-summary clearfix">
    <?php 
        if ( is_single() ) {
            the_content();
        } else {
            if (!is_search()) {
                $content = get_the_content();
                $trimmed_content = wp_trim_words( $content, 25, NULL );
                echo $trimmed_content;
            }
        }
        wp_link_pages( array(
            'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'gutenwp' ) . '</span>',
            'after'       => '</div>',
            'link_before' => '<span>',
            'link_after'  => '</span>',
        ) );
    ?>

    <?php if(is_single()) { ?>
        <div class="guten-intro-cat">
            <div class="row">
                <div class="col-md-12">
                    <div class="gutenwp-cat">
                        <?php _e('Category: ', 'gutenwp'); ?>
                        <?php echo get_the_category_list(', '); ?>
                    </div>
                </div>
            </div>
        </div>


        <div class="guten_user_info">
            <?php echo get_avatar( get_the_author_meta( 'ID' ) , 50 ); ?>
            <span class="author"><?php _e('Written By', 'gutenwp'); ?></span>
            <span class="username"><?php the_author_posts_link(); ?></span>
            <p><?php the_author_meta('description'); ?></p>
        </div>

        <!-- Blog next/pre post -->
        <div class="col-md-12 blog-arrow-gutenwp">
            <div class="blog-change-arrow-section">
                <div class="row">
                    <div class="blog-post-review-pre col-md-6">
                        <?php $prev_posts = get_previous_post();  
                        if (!empty( $prev_posts )): ?>
                            <a href="<?php echo get_permalink( $prev_posts->ID ); ?>">
                                <span class="arrow-button-left1">
                                    <?php 
                                        if ( !empty( $prev_posts ) ): 
                                        $post_thumbnail_id = get_post_thumbnail_id( $prev_posts );
                                        if ( $post_thumbnail_id ) {
                                            echo wp_get_attachment_image( esc_attr($post_thumbnail_id), array('95', '120'), false);
                                        }
                                        endif; 
                                    ?>
                                </span>
                                <span class="arrow-button-left">
                                    <p class="prev"><?php _e('Previous post', 'gutenwp') ?></p>
                                    <p><?php echo mb_strimwidth($prev_posts->post_title, 0, 80, ''); ?></p>
                                </span>
                            </a>
                        <?php endif ?>
                    </div>

                    <div class="blog-post-review-next col-md-6">
                        <?php $next_post = get_next_post();
                        if (!empty( $next_post )): ?>
                        <a href="<?php echo get_permalink( $next_post->ID ); ?>">
                            <span class="arrow-button-right1">
                                <p class="next"><?php _e('Next post', 'gutenwp') ?></p>
                                <p><?php echo mb_strimwidth($next_post->post_title, 0, 80, ''); ?></p>
                            </span>
                            <span class="arrow-button-right2">
                            <?php 
                                if ( !empty( $next_post ) ):
                                $post_thumbnail_id = get_post_thumbnail_id( $next_post );
                                if ( $post_thumbnail_id ) {
                                    echo wp_get_attachment_image( esc_attr($post_thumbnail_id), array(95, 120), false);
                                }
                                endif; 
                            ?>
                            </span>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Next/Previous Post -->

        <?php
            # If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
        ?>
    <?php } ?>
</div> <!-- //.entry-summary -->



