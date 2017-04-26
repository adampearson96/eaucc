<?php 
/**
* Enqueueing theme styles and scripts
**/ 
function theme_styles_and_scripts() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'theme_styles_and_scripts' );

/** 
* Theme Support
**/
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

/** 
* Registering Widget Areas
**/
function registering_widgets() 
{
	register_sidebar( array(
		'name'          => 'Home Page - Full Width',
		'id'            => 'home_page_full_width',
		'description'		=> __( 'Area for displaying general information full width at the top of the home page.', 'text_domain' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Home Page - Weekly Activity',
		'id'            => 'home_page_weekly_activity',
		'description'		=> __( 'Area for displaying the clubs weekly activity.', 'text_domain' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Home Page - Next Event',
		'id'            => 'home_page_next_event',
		'description'		=> __( 'Area for displaying the clubs next event on the home page.', 'text_domain' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Footer - Left',
		'id'            => 'footer_left',
		'description'		=> __( 'Display information on the left hand side of the footer (top of the footer on smaller screens)', 'text_domain' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Footer - Middle',
		'id'            => 'footer_middle',
		'description'		=> __( 'Display information on the middle hand side of the footer (middle of the footer on smaller screens)', 'text_domain' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Footer - Right',
		'id'            => 'footer_right',
		'description'		=> __( 'Display information on the right hand side of the footer (bottom of the footer on smaller screens)', 'text_domain' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar',
		'description'		=> __( 'Display information on the right hand side of inner pages', 'text_domain' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'registering_widgets' );

/**
* Registering new post types
*/
function registering_post_types() {
    $args = array(
      'public' => true,
      'label'  => 'Sponsors',
      'supports'	=> array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
    );
    register_post_type( 'sponsors', $args );
}
add_action( 'init', 'registering_post_types' );