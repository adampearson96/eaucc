<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
<head> 
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="container-fluid">
	<div class="row">
		<div class="col-xs-10 col-sm-7" id="logo">
			<?php if ( function_exists( 'the_custom_logo' ) )
			{
				the_custom_logo();
			} ?>
			<h1 id="site-title"><a href="<?php echo get_bloginfo( 'url' ); ?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
		</div>
		<div class="col-xs-3" id="searchform">
			<?php echo get_search_form(); ?>
		</div>
		<div class="col-xs-2" id="navigation">
		<a class="toggle-mobile-menu">
			<i class="mobile-menu-icon fa fa-bars"></i>
		</a>
			<?php $args = array(
				'menu' => 'primary',
				'container'	=>	'',
			);
			wp_nav_menu( $args ) ?>
		</div>
	</div>
</header>
