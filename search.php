<?php get_header(); ?>
<div class="container">	
	<div class="row">
		<div class="col-xs-12 col-sm-8" id="content">
			<?php if ( have_posts() ) : ?>
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
	    		<?php if(function_exists('bcn_display'))
	    		{
	    			bcn_display();
	    		}?>
	    	</div>
	    	<div class="main-content">	
	    		<h3>You have searched for: <strong><?php echo get_search_query(); ?></strong>, which has returned <?php echo $wp_query->found_posts; ?> result(s).</h3>

	    		<?php get_search_form(); ?>

	    		<div class="search-results">
	    			<?php while ( have_posts() ) : the_post(); ?>
	    				<div class="result">
		    				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		    				<p><?php the_excerpt(); ?></p>
	    				</div>
	    			<?php endwhile; ?>
	    		</div>
				</div>
				<?php else: ?>
  			<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
	    		<?php if(function_exists('bcn_display'))
	    		{
	    			bcn_display();
	    		}?>
	    	</div>
	    	<div class="main-content">
	    		<h3>You have searched for: <strong><?php echo get_search_query(); ?></strong>, which unfortunately returned 0 results.</h3>
	    		<p>Please try searching for something else, and hopefully this time you will find what you're looking for.</p>
		    	<?php get_search_form(); ?>
				</div>
			<?php endif; ?>
		</div>
		<div class="col-xs-12 col-sm-4" id="sidebar">
			<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
				<?php dynamic_sidebar( 'sidebar' ); ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>