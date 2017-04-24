<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
<head> 
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body class="<?php body_class(); ?>">
<header class="container-fluid">
	<div class="col-xs-3" id="logo">
		<?php if ( function_exists( 'the_custom_logo' ) )
		{
			the_custom_logo();
		} ?>
	</div>
	<div class="col-xs-9" id="navigation">
	<a class="toggle-mobile-menu">
		<i class="mobile-menu-icon fa fa-bars"></i>
	</a>
		<?php $args = array(
			'menu' => 'primary',
			'container'	=>	'',
		);
		wp_nav_menu( $args ) ?>
	</div>
</header>
