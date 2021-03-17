<?php

if(!function_exists('gutenwp_setup')):
    function gutenwp_setup(){
        load_theme_textdomain( 'gutenwp', get_parent_theme_file_path() . '/languages' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_image_size( 'gutenwp-medium', 660, 400, true );
        add_image_size( 'gutenwp-portfo', 600, 630, true );
        add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ) );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'customize-selective-refresh-widgets' );

        # Enable support for header image
        add_theme_support( 'custom-header', array(
            'default-text-color' => '#131d30',
            'wp_head-callback' => 'gutenwp_header_image',
        ) );

        # Enable Custom Background.
        add_theme_support( 'custom-background' );

        # Enable Logo 
        add_theme_support( 'custom-logo' );

        # Add support for full and wide align images.
        add_theme_support( 'align-wide' );

        # Add support for editor styles.
        add_theme_support( 'editor-styles' ); 

        # Enqueue editor styles.
        add_editor_style( 'style-editor.css' );

        # Add support for font size.
        add_theme_support( 'editor-font-sizes', array(
            array(
                'name' => __( 'small', 'gutenwp' ),
                'shortName' => __( 'S', 'gutenwp' ),
                'size' => 16,
                'slug' => 'small'
            ),
            array(
                'name' => __( 'regular', 'gutenwp' ),
                'shortName' => __( 'M', 'gutenwp' ),
                'size' => 24,
                'slug' => 'regular'
            ),
            array(
                'name' => __( 'large', 'gutenwp' ),
                'shortName' => __( 'L', 'gutenwp' ),
                'size' => 36,
                'slug' => 'large'
            ),
            array(
                'name' => __( 'larger', 'gutenwp' ),
                'shortName' => __( 'XL', 'gutenwp' ),
                'size' => 50,
                'slug' => 'larger'
            )
        ) );

        # Editor color palette.
        add_theme_support(
            'editor-color-palette',
            array(
                array(
                    'name'  => __( 'Mejor Color', 'gutenwp' ),
                    'slug'  => 'mejor-color',
                    'color' => '#FC8A15',
                ),
                array(
                    'name'  => __( 'Heading Color', 'gutenwp' ),
                    'slug'  => 'heading-color',
                    'color' => '#131D3D',
                ),
                array(
                    'name'  => __( 'Paragraph', 'gutenwp' ),
                    'slug'  => 'dark-gray',
                    'color' => '#5e6571',
                ),
                array(
                    'name'  => __( 'Hover Color', 'gutenwp' ),
                    'slug'  => 'hover-color',
                    'color' => '#FC8A15',
                ),
            )
        );

        if ( ! isset( $content_width ) ){
            $content_width = 660;
        }
    }
    add_action('after_setup_theme','gutenwp_setup');
endif;

/*-------------------------------------------------------
*              Gutenwp Pagiantion
*-------------------------------------------------------*/

if(!function_exists('gutenwp_pagination')):
    function gutenwp_pagination( $page_numb , $max_page ){
        $big = 999999999;
        echo '<div class="gutenwp-pagination" data-preview="'.__( "PREV","gutenwp" ).'" data-nextview="'.__( "NEXT","gutenwp" ).'">';
        echo paginate_links( array(
            'base'          => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format'        => '?paged=%#%',
            'current'       => $page_numb,
            'prev_text'     => ('<i class="fa fa-angle-left"></i>'),
            'next_text'     => ('<i class="fa fa-angle-right"></i>'),
            'total'         => $max_page,
            'type'          => 'list',
        ) );
        echo '</div>';
    }
endif;


/*-------------------------------------------------------
*              CSS Generator
*-------------------------------------------------------*/
if(!function_exists('gutenwp_css_generator')){
    function gutenwp_css_generator(){
        # Header Image.
        $output = '.site-header { background-image: url('.get_header_image().'); background-repeat: no-repeat; background-position: 50% 50%; -webkit-background-size: cover; -moz-background-size:cover; -o-background-size:cover; background-size:cover; }';
        $output .= '.logo-wrapper h1, .common-menu-wrap .nav>li>a, .common-menu-wrap .nav> li > ul li a, .common-menu-wrap .nav > li > ul li.mega-child > a, .common-menu-wrap .nav>li.menu-item-has-children>a:after{color: '.get_header_textcolor().';}';
        return $output;
    }
}