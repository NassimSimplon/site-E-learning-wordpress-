<?php
/*-------------------------------------------*
 *      Themeum Widget Registration
 *------------------------------------------*/

if(!function_exists('gutenwp_widdget_init')):

    function gutenwp_widdget_init(){
        register_sidebar(
            array(
            'name'          => esc_html__( 'Sidebar', 'gutenwp' ),
            'id'            => 'sidebar',
            'description'   => esc_html__( 'Widgets in this area will be shown on Sidebar.', 'gutenwp' ),
            'before_title'  => '<h3 class="widget_title">',
            'after_title'   => '</h3>',
            'before_widget' => '<div id="%1$s" class="widget %2$s" >',
            'after_widget'  => '</div>'
            )
        );
        register_sidebar(array(
            'name'          => esc_html__( 'Bottom1 Widgets', 'gutenwp' ),
            'id'            => 'bottom1',
            'description'   => esc_html__( 'Widgets in this area will be shown before Bottom.' , 'gutenwp'),
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
            'before_widget' => '<div class="bottom-widget"><div id="%1$s" class="widget %2$s" >',
            'after_widget'  => '</div></div>'
            )
        );
        register_sidebar(array(
            'name'          => esc_html__( 'Bottom2 Widgets', 'gutenwp' ),
            'id'            => 'bottom2',
            'description'   => esc_html__( 'Widgets in this area will be shown before Bottom.' , 'gutenwp'),
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
            'before_widget' => '<div class="bottom-widget"><div id="%1$s" class="widget %2$s" >',
            'after_widget'  => '</div></div>'
            )
        );
        register_sidebar(array(
            'name'          => esc_html__( 'Bottom3 Widgets', 'gutenwp' ),
            'id'            => 'bottom3',
            'description'   => esc_html__( 'Widgets in this area will be shown before Bottom.' , 'gutenwp'),
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
            'before_widget' => '<div class="bottom-widget"><div id="%1$s" class="widget %2$s" >',
            'after_widget'  => '</div></div>'
            )
        );
        register_sidebar(array(
            'name'          => esc_html__( 'Bottom4 Widgets', 'gutenwp' ),
            'id'            => 'bottom4',
            'description'   => esc_html__( 'Widgets in this area will be shown before Bottom.' , 'gutenwp'),
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
            'before_widget' => '<div class="bottom-widget"><div id="%1$s" class="widget %2$s" >',
            'after_widget'  => '</div></div>'
            )
        );
        
    }

    add_action('widgets_init', 'gutenwp_widdget_init');

endif;


/*-------------------------------------------*
 *      gutenwp Style
 *------------------------------------------*/
if(!function_exists('gutenwp_style')):

    function gutenwp_style(){
        #Font
        wp_enqueue_style( 'default-google-font', '//fonts.googleapis.com/css?family=Barlow:100,200,300,400,500,600,700' );
        
        #CSS
        wp_enqueue_media();
        wp_enqueue_style( 'gutenwp-bootstrap', GUTENWP_CSS . 'bootstrap.min.css',false,'all');
        wp_enqueue_style( 'gutenwp-font-awesome', GUTENWP_CSS . 'font-awesome.min.css',false,'all');
        wp_enqueue_style( 'gutenwp-main-css', GUTENWP_CSS . 'main.css',false,'all');
        wp_enqueue_style( 'gutenwp-responsive', GUTENWP_CSS . 'responsive.css',false,'all'); 
        wp_enqueue_style( 'gutenwp-style-uri', get_stylesheet_uri());
        wp_add_inline_style( 'gutenwp-style-generator', gutenwp_css_generator() );

        # JS
        wp_enqueue_script('gutenwp-bootstrap',GUTENWP_JS.'bootstrap.min.js',array(),false,true);
        wp_enqueue_script('gutenwp-social',GUTENWP_JS.'jquery.prettySocial.min.js',array(),false,true);
        wp_enqueue_script('gutenwp-main-js',GUTENWP_JS.'main.js',array(),false,true);

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
    add_action('wp_enqueue_scripts','gutenwp_style');
    add_action('enqueue_block_editor_assets','gutenwp_style');
endif;


# Admin. 
if(!function_exists('gutenwp_admin_style')):
    function gutenwp_admin_style(){
        wp_enqueue_media();
        wp_enqueue_script('gutenwp-widget-js', get_parent_theme_file_uri().'/js/admin.js', array('jquery'));
    }
    add_action('admin_enqueue_scripts','gutenwp_admin_style');
endif;

/*-------------------------------------------------------
*           Include the TGM Plugin Activation class
*-------------------------------------------------------*/
add_action( 'tgmpa_register', 'gutenwp_plugins_include');
if(!function_exists('gutenwp_plugins_include')):
    function gutenwp_plugins_include(){
        $plugins = array(
            array(
                'name'               => 'WP Page Builder', 
                'slug'               => 'wp-pagebuilder', 
                'source'             => esc_url('https://downloads.wordpress.org/plugin/wp-pagebuilder.zip'), 
                'required'           => false, 
                'version'            => '', 
                'force_activation'   => false, 
                'force_deactivation' => false, 
                'external_url'       => '', 
                'is_callable'        => '', 
            ),
        );
        $config = array(
            'id'           => 'gutenwp',
            'default_path' => '',
            'menu'         => 'tgmpa-install-plugins',
            'parent_slug'  => 'themes.php',
            'capability'   => 'edit_theme_options',
            'has_notices'  => true,
            'dismissable'  => true,
            'dismiss_msg'  => '',
            'is_automatic' => false,
            'message'      => '',
            'strings'      => array(
                'page_title'        => esc_html__( 'Install Required Plugins', 'gutenwp' ),
                'menu_title'        => esc_html__( 'Install Plugins', 'gutenwp' ),
                'installing'        => esc_html__( 'Installing Plugin: %s', 'gutenwp' ),
                'oops'              => esc_html__( 'Something went wrong with the plugin API.', 'gutenwp'),
                'return'            => esc_html__( 'Return to Required Plugins Installer', 'gutenwp'),
                'plugin_activated'  => esc_html__( 'Plugin activated successfully.','gutenwp'),
                'complete'          => esc_html__( 'All plugins installed and activated successfully. %s', 'gutenwp' )
            )
        );
        tgmpa( $plugins, $config );
    }

endif;