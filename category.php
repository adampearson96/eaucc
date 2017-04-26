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
	    	<h2 class="site-title">You are viewing all posts in the category of <?php the_category( ', ' ); ?></h2>
	    	<div class="main-content">	
    			<?php while ( have_posts() ) : the_post(); ?>
    				<div class="result">
	    				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	    				<p><?php the_excerpt(); ?></p>
    				</div>
    			<?php endwhile; ?>
    		</div>
				<?php else: ?>
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