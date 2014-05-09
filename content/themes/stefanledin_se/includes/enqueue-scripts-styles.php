<?php
function enqueue_scripts_and_styles () {
	// wp_enqueue_style( $handle, $src, $deps, $ver, $media );
	if (ENVIRONMENT == 'production') {
		wp_enqueue_style( 'stylesheet', get_template_directory_uri().'/assets/css/styles.min.css', null, null, null );
	} else {
		wp_enqueue_style( 'stylesheet', get_template_directory_uri().'/assets/css/style.css', null, null, null );
	}
	
	// wp_enqueue_scripts($handle, $src, $deps, $ver, $in_footer);
	//wp_enqueue_script('jquery', null, null, null, true);
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_and_styles' );