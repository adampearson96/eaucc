<?php 
/**
* Enqueueing theme styles and scripts
**/ 
function theme_styles_and_scripts() {
	wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'theme_styles_and_scripts' );