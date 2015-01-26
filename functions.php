<?php
$theme_name = 'tpc-CeilingCentre';


//adding thumbnail support in the theme
add_theme_support('post-thumbnails');

//adding custom image size for post thumbnail
add_image_size( 'img-size', 400, 400, false);

// adding read more link using except filter
function nm_new_excerpt_more($more) {
	global $post;
	return '  ....  <a class="more" href="'. get_permalink($post->ID) . '">Read More</a>';
}
add_filter('excerpt_more', 'nm_new_excerpt_more');

function new_excerpt_more($length) {
	global $length;
	return 40;
}
add_filter('excerpt_length', 'new_excerpt_more');

add_action( 'after_setup_theme', 'wpt_setup' );
if ( ! function_exists( 'wpt_setup' ) ):
	function wpt_setup() {  
		register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
	} 
endif;
require_once('wp_bootstrap_navwalker.php');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Footer Widget One',
    		'id'   => 'footer-widget-one',
    		'description'   => 'These is the widget for Footer.',
    		'before_widget' => '',
    		'after_widget'  => '',
    		'before_title'  => '',
    		'after_title'   => ''
    	));
		
    	register_sidebar(array(
    		'name' => 'Footer Widget Two',
    		'id'   => 'footer-widget-two',
    		'description'   => 'These is the widget for Footer.',
    		'before_widget' => '',
    		'after_widget'  => '',
    		'before_title'  => '<p><strong>',
    		'after_title'   => '</strong></p>'
    	));
    }
    
	// Declare Footer widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Homepage Contents',
    		'id'   => 'Homepage-Contents',
    		'description'   => 'Homepage Content Area',
    		'before_widget' => '',
    		'after_widget'  => '',
    		'before_title'  => '<h1>',
    		'after_title'   => '</h1>'
    	));
		
    	register_sidebar(array(
    		'name' => 'Testimonials',
    		'id'   => 'Testimonials',
    		'description'   => 'Homepage Testimonial Area',
    		'before_widget' => '',
    		'after_widget'  => '',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
				
    	register_sidebar(array(
    		'name' => 'Homepage Widgets',
    		'id'   => 'Homepage-Widgets',
    		'description'   => 'Homepage Widgets Area',
    		'before_widget' => '',
    		'after_widget'  => '',
    		'before_title'  => '<h1 style="display: none"">',
    		'after_title'   => '</h1>'
    	));

    	register_sidebar(array(
    		'name' => 'Footer Widget1',
    		'id'   => 'Footer-Widget1',
    		'description'   => 'Footer Widget 1',
    		'before_widget' => '',
    		'after_widget'  => '',
    		'before_title'  => '<h4>',
    		'after_title'   => '</h4>'
    	));

    	register_sidebar(array(
    		'name' => 'Footer Widget2',
    		'id'   => 'Footer-Widget2',
    		'description'   => 'Footer Widget 2',
    		'before_widget' => '',
    		'after_widget'  => '',
    		'before_title'  => '<h4>',
    		'after_title'   => '</h4>'
    	));
    }
	
    if (function_exists('primary_menu')) {	
		register_nav_menu (
			array ( 'main-nav' => 'Main Navigation Menu' )
		);
	}
	
	if (function_exists('secondary_menu')) {	
		register_nav_menu (
			array ( 'footer-menu' => 'Footer Menu' )
		);
	}
