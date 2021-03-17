<?php
define( 'GUTENWP_CSS', get_parent_theme_file_uri().'/css/' );
define( 'GUTENWP_JS', get_parent_theme_file_uri().'/js/' );

// Include TGM Plugins
include( get_parent_theme_file_path('lib/class-tgm-plugin-activation.php') );

// Nav Walker
include( get_parent_theme_file_path('lib/mobile-navwalker.php') );

// Comments
include( get_parent_theme_file_path('lib/gutenwp_comment.php') );

// Comments Callback Function
include( get_parent_theme_file_path('lib/gutenwp-comments.php') );

// Custom Metabox.
include( get_parent_theme_file_path('lib/custom-meta-box.php') );

// Register Navigation
register_nav_menus( array( 'primary' => __( 'Primary Menu', 'gutenwp' ) ) );

// Gutenwp Core
include( get_parent_theme_file_path('lib/main-function/gutenwp-core.php') );
include( get_parent_theme_file_path('lib/main-function/gutenwp-register.php') );

// Search Query
function gutenwp_search_title( $title ) {
    if ( is_search() ) 
    $title['title'] = sprintf(
        esc_html__( '&#8220;%s&#8221; result page', 'gutenwp' ), 
        get_search_query()
    );
    return $title;
}
add_filter( 'document_title_parts', 'gutenwp_search_title' );


function gutenwp_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'gutenwp_pingback_header' );