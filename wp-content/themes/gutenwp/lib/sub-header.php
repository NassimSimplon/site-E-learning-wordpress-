<?php if (!is_front_page()) { 

    $subheader_color    = get_post_meta(get_the_ID(), 'subheader_color', true);
    $image_id           = get_post_meta(get_the_ID(), 'upload_banner_img', true);
    $image_thumb        = wp_get_attachment_image_src($image_id, 'full');

    if( $image_thumb ){
        $output = 'style="background-image:url('.esc_url( $image_thumb[0] ).'); background-size: cover; background-position: 50% 50%;"';
    }else {
        $output = 'style="background-color:'.esc_attr( $subheader_color ).';"';
    } ?>

    <?php if ($subheader_color){ ?>
        <style type="text/css">
            .subtitle-cover.sub-title:before {
                background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), <?php echo esc_attr($subheader_color); ?>);
            }
        </style>
    <?php } ?>

    <div class="subtitle-cover sub-title" <?php print $output;?>>
        <div class="container">       
            <div class="row">
                <div class="col-12 text-left">
                    <?php
                        global $wp_query;
                        if(isset($wp_query->queried_object->name)){
                            echo '<h2 class="page-leading">'.get_the_title().'</h2>';
                        }else{
                            if( is_search() ){
                                echo '<h3 class="page-subleading">'. __('Search Page', 'gutenwp').'</h3>';
                            }else if( is_archive() ){
                                the_archive_title('<h2 class="page-leading">', '</h2>');
                            }else{
                                echo '<h2 class="page-leading">'.get_the_title().'</h2>';
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div><!--/.sub-title-->
<?php } ?>




