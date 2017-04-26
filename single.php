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

					<div class="post-meta-data">
						<div class="previous-post">
							<?php previous_post_link(); ?>
						</div>
						<div class="next-post">
							<?php next_post_link(); ?>
						</div>
					</div>
				</div>
			<?php endwhile;
			else: ?>
  			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
		<div class="col-xs-12 col-sm-4" id="sidebar">
			<div class="post-meta-data">
				<span>Author: <?php the_author(); ?></span>
				<span>Published: <?php the_date(); ?></span>
				<span>Category: <?php the_category(', '); ?></span>
				<span><?php the_tags(); ?></span>
			</div>

			<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
				<?php dynamic_sidebar( 'sidebar' ); ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>