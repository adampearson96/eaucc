<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12" id="content">
			<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    		<?php if(function_exists('bcn_display'))
    		{
    			bcn_display();
    		}?>
    	</div>
			<h2>Error 404 - Page not found.</h2>
			<h3>This is somewhat embarrassing, isn’t it?</h3>

			<h4><a href="<?php echo get_bloginfo('url' ); ?>"><i class="fa fa-arrow-circle-left"></i> return to home</a></h4>

			<p>It looks like nothing was found at this location. Maybe try a search?</p>

			<?php get_search_form(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>