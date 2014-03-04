<?php
// Load the theme CSS	
function theme_styles() {
	wp_enqueue_style('googlefonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,300');
	wp_enqueue_style('grid', get_template_directory_uri() . '/css/grid.css');
	wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('fontawesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');
	wp_register_style('flexslider', get_template_directory_uri() . '/css/flexslider.css');
	if(is_page('home')) {
		wp_enqueue_style('flexslider');
	}
}
add_action('wp_enqueue_scripts', theme_styles);

// Load the theme JS
function theme_js() {
	wp_register_script('flexslider', get_template_directory_uri() . '/js/flexslider.js', array('jquery'), '', true);
	if(is_page('home')) {
		wp_enqueue_script('flexslider');
	}
	wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script('theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery'), '', true);

}
add_action('wp_enqueue_scripts', theme_js);
add_action('wp_enqueue_scripts', theme_styles);

// add ie conditional html5 shim to header
function add_ie_html5_shim () {
   	echo '<!--[if lt IE 9]>';
   	echo '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
   	echo '<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>';
   	echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_html5_shim');


//enable custom menus
add_theme_support('menus');

// Enable sidebar widgets
function create_widget( $name, $id, $description ) {
	$args = array(
		'name'          => __( $name ),
		'id'            => $id,
		'description'   => $description,
	    'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5 class="widgettitle">',
		'after_title'   => '</52>'
	);
	register_sidebar( $args );
}
create_widget( 'Left Footer', 'footer_left', 'Displays in the bottom left of footer' );
create_widget( 'middle Footer', 'footer_middle', 'Displays in the bottom middle of footer' );
create_widget( 'right Footer', 'footer_right', 'Displays in the bottom right of footer' );
create_widget( 'sidebar', 'sidebar', 'News Sidebar' );
create_widget( 'Sub Navigation', 'sub-nav', 'Sub Navigation' );


?>