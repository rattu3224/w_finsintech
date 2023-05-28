<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
	wp_enqueue_style( 'child-style',
		get_stylesheet_uri(),
		array( 'parenthandle' ),
		wp_get_theme()->get( 'Version' ) // This only works if you have Version defined in the style header.
	);
	wp_enqueue_script(
        'jquery-url', get_template_directory_uri() .'-child/assets/js/jquery.js',
        array('jquery')
    );
	wp_enqueue_script(
		'calculate-distance-js', get_template_directory_uri() .'-child/assets/js/map.js'
    );
}

//// function that runs when shortcode is called
// function wpb_demo_shortcode() { 
  
// 	// Things that you want to do.
// 	$message = 'Hello world!sdfsafsdfsdf'; 
	  
// 	// Output needs to be return
// 	return $message;
// 	}
// 	// register shortcode
// 	add_shortcode('greeting', 'wpb_demo_shortcode');