<?php
   
	// Add RSS links to <head> section
	add_theme_support('automatic-feed-links') ;
	
	// Load jQuery
	if ( !function_exists('core_mods') ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script('jquery');
				wp_register_script('jquery', ("//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"));
				wp_register_script('relicario', (get_template_directory_uri()."/js/scripts.min.js"),'relicario',false,true);
				
				wp_enqueue_script('jquery');
				wp_enqueue_script('relicario');
			}
		}
		core_mods();
	}

	// Register stylesheets

	function theme_styles()  
	{ 
	    wp_register_style('relicario', get_template_directory_uri() . '/style.css', array(), '1.0', 'all' );

	    wp_enqueue_style('relicario');
	}
	add_action('wp_enqueue_scripts', 'theme_styles');
	
	// content width
	if ( !isset( $content_width ))  {
		$content_width = 710; 
	}


	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Gridly post thumbnails
	add_theme_support( 'post-thumbnails' );
		add_image_size('summary-image', 450, 9999);
		add_image_size('full-image', 9999, 9999);
		add_image_size('detail-image', 770, 9999);
	
	
    // menu 
	add_action( 'init', 'register_gridly_menu' );

	function register_gridly_menu() {
		register_nav_menu( 'main_nav', __( 'Main Menu' ) );
	} 

     //setup footer widget area
	if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Footer',
    		'id'   => 'gridly_footer',
    		'description'   => 'Footer Widget Area',
    		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-copy">',
    		'after_widget'  => '</div></div>',
    		'before_title'  => '<h3>',
    		'after_title'   => '</h3>'
    	));
	}


	// hide blank excerpts 
	function custom_excerpt_length( $length ) {
	return 0;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	
	function new_excerpt_more($more) {
       global $post;
	return '';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

?>