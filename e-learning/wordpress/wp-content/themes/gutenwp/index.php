<?php get_header();?>
<?php get_template_part('lib/sub-header'); ?>
<section id="main" class="page-content">
    <div class="container">
        <div class="row"> 
            <div id="content" class="site-content col-md-12 guten-blog-default" role="main">
                <?php if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                        get_template_part( 'post-format/content', get_post_format() );
                    endwhile;
                else:
                    get_template_part( 'post-format/content', 'none' );
                endif; ?>
                <?php 
                    global $wp_query;
                    gutenwp_pagination( (get_query_var('paged')) ? get_query_var('paged') : 1 , $wp_query->max_num_pages ); 
                ?>
            </div>
        </div>
    </div><!-- .container -->
</section> 
<?php get_footer();