<?php 

/*
* Add Custom Metabox 
*--------------------------*/ 
add_action( 'add_meta_boxes', 'gutenwp_add_meta_box' );
if ( ! function_exists( 'gutenwp_add_meta_box' ) ) {
	function gutenwp_add_meta_box(){
		add_meta_box( 
			'header-page-metabox-options', 
			esc_html__('Subheader Background Color', 'gutenwp' ), 
			'gutenwp_header_meta_box', 
			'page', 
			'normal'
		);
	}
}

# Enqueue Color Picker
add_action( 'admin_enqueue_scripts', 'gutenwp_backend_scripts');
if ( ! function_exists( 'gutenwp_backend_scripts' ) ){
	function gutenwp_backend_scripts( $hook ) {
		wp_enqueue_style( 'wp-color-picker');
		wp_enqueue_script( 'wp-color-picker');
	}
}


# Subheader Color.
if ( ! function_exists( 'gutenwp_header_meta_box' ) ) {
	function gutenwp_header_meta_box( $post ) {

   		# Color Picker
		$custom = get_post_custom( $post->ID );
		$subheader_color = ( isset( $custom['subheader_color'][0] ) ) ? $custom['subheader_color'][0] : '';
		wp_nonce_field( 'gutenwp_header_meta_box', 'gutenwp_header_meta_box_nonce' );
		?>
		<script>
		jQuery(document).ready(function($){
		    $('.color_field').each(function(){
        		$(this).wpColorPicker();
    		    });
		});
		</script>
		<div class="pagebox">
		    <p class="widefat"><?php esc_attr_e('Choose a color for subheader.', 'gutenwp' ); ?></p>
		    <input class="color_field" type="hidden" name="subheader_color" value="<?php echo $subheader_color; ?>"/>

		    <p>
				<span class="widefat"><?php esc_attr_e('Upload subheader Banner Image.', 'gutenwp' ); ?></span>
				<?php 
				# Image Upload Field.
				$meta_key = 'upload_banner_img';
	   			echo gutenwp_image_uploader_field( $meta_key, get_post_meta($post->ID, $meta_key, true) ); ?>
			</p>
		</div>
		<?php
	}
}

       
# Image Upload Callback Function.
function gutenwp_image_uploader_field( $name, $value = '') {
    $image = ' button">Upload image';
    $image_size = 'thumbnail'; // it would be better to use thumbnail size here (150x150 or so)
    $display = 'none'; // display state ot the "Remove image" button

    if( $image_attributes = wp_get_attachment_image_src( $value, $image_size ) ) {

        $image = '"><img src="' . $image_attributes[0] . '" style="max-width:29%; display:block;" />';
        $display = 'inline-block';

    } 

    return '
    <div>
        <a href="#" class="gutenwp_upload_image_button' . $image . '</a>
        <input type="hidden" name="' . $name . '" id="' . $name . '" value="' . $value . '" />
        <a href="#" class="gutenwp_remove_image_button" style="display:inline-block;display:' . $display . '">'.__( 'Remove Image', 'gutenwp' ).'</a>
    </div>';
}

