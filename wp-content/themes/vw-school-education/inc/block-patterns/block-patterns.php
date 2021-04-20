<?php
/**
 * VW School Education: Block Patterns
 *
 * @package VW School Education
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'vw-school-education',
		array( 'label' => __( 'VW School Education', 'vw-school-education' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'vw-school-education/banner-section',
		array(
			'title'      => __( 'Banner Section', 'vw-school-education' ),
			'categories' => array( 'vw-school-education' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png\",\"id\":9294,\"dimRatio\":80,\"customGradient\":\"linear-gradient(0deg,rgb(0,43,70) 0%,rgb(0,0,0) 100%)\",\"align\":\"full\",\"className\":\"banner-section\"} -->\n<div class=\"wp-block-cover alignfull has-background-dim-80 has-background-dim has-background-gradient banner-section\" style=\"background-image:url(" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner.png)\"><span aria-hidden=\"true\" class=\"wp-block-cover__gradient-background\" style=\"background:linear-gradient(0deg,rgb(0,43,70) 0%,rgb(0,0,0) 100%)\"></span><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"align\":\"wide\",\"className\":\"m-0\"} -->\n<div class=\"wp-block-columns alignwide m-0\"><!-- wp:column {\"width\":\"25%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:25%\"></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"50%\",\"className\":\"ml-0\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center ml-0\" style=\"flex-basis:50%\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":1,\"className\":\"mb-5\",\"style\":{\"typography\":{\"fontSize\":28}}} -->\n<h1 class=\"has-text-align-center mb-5\" style=\"font-size:28px\">LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT, SED DO</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"className\":\"text-center mb-3\",\"style\":{\"typography\":{\"fontSize\":15}}} -->\n<p class=\"has-text-align-center text-center mb-3\" style=\"font-size:15px\">Lorem Ipsum has been the industrys standard. Lorem Ipsum has been the industrys standard. Lorem Ipsum has been the industrys standard. Lorem Ipsum has been the industrys.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"align\":\"center\",\"className\":\"mt-0\"} -->\n<div class=\"wp-block-buttons aligncenter mt-0\"><!-- wp:button {\"borderRadius\":0,\"className\":\"hvr-sweep-to-right\"} -->\n<div class=\"wp-block-button hvr-sweep-to-right\"><a class=\"wp-block-button__link no-border-radius\">READ MORE</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"25%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:25%\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'vw-school-education/welcome-section',
		array(
			'title'      => __( 'Welcome Section', 'vw-school-education' ),
			'categories' => array( 'vw-school-education' ),
			'content'    => "<!-- wp:cover {\"overlayColor\":\"white\",\"align\":\"wide\",\"className\":\"welcome-section m-0\"} -->\n<div class=\"wp-block-cover alignwide has-white-background-color has-background-dim welcome-section m-0\"><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"align\":\"wide\",\"className\":\"m-0\"} -->\n<div class=\"wp-block-columns alignwide m-0\"><!-- wp:column {\"width\":\"66.66%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:66.66%\"><!-- wp:heading {\"textAlign\":\"left\",\"className\":\"mb-3\",\"style\":{\"color\":{\"text\":\"#002b46\"},\"typography\":{\"fontSize\":28}}} -->\n<h2 class=\"has-text-align-left mb-3 has-text-color\" style=\"color:#002b46;font-size:28px\">LOREM IPSUM DOLOR SIT AMET</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"className\":\"text-left mb-3\",\"style\":{\"color\":{\"text\":\"#888888\"},\"typography\":{\"fontSize\":15}}} -->\n<p class=\"text-left mb-3 has-text-color\" style=\"color:#888888;font-size:15px\">Lorem Ipsum has been the industrys standard. Lorem Ipsum has been the industrys standard. Lorem Ipsum has been the industrys standard. Lorem Ipsum has been the industrys standard. Lorem Ipsum has been the industrys standard. Lorem Ipsum has been the industrys standard.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"align\":\"left\",\"className\":\"mt-0\"} -->\n<div class=\"wp-block-buttons alignleft mt-0\"><!-- wp:button {\"borderRadius\":0,\"className\":\"hvr-sweep-to-right\"} -->\n<div class=\"wp-block-button hvr-sweep-to-right\"><a class=\"wp-block-button__link no-border-radius\">LEARN MORE</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"33.33%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:33.33%\"><!-- wp:image {\"align\":\"center\",\"id\":9315,\"sizeSlug\":\"large\",\"linkDestination\":\"media\"} -->\n<div class=\"wp-block-image\"><figure class=\"aligncenter size-large\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/welcome-image.png\" alt=\"\" class=\"wp-image-9315\"/></figure></div>\n<!-- /wp:image --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:cover -->",
		)
	);
}