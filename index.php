<?php get_header(); ?>
<div class="container">	
	<div class="row">
		<div class="col-xs-12 col-sm-8" id="content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
	    		<?php if(function_exists('bcn_display'))
	    		{
	    			bcn_display();
	    		}?>
	    	</div>
	    	<h2 class="post-title"><?php the_title(); ?></h2>
	    	<div class="main-content">
	    		<?php echo get_the_post_thumbnail(); ?>
					<?php the_content(); ?>
				</div>
			<?php endwhile;
			else: ?>
  			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
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