<?php 
/**
* Enqueueing theme styles and scripts
**/ 
function theme_styles_and_scripts() {
	wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles_and_scripts' );