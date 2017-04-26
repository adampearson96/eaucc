<?php get_header(); ?>
<div class="container-fluid">
	<?php if ( is_active_sidebar( 'home_page_full_width' ) ) : ?>
		<div class="row" id="home-page-full-width">
			<?php dynamic_sidebar( 'home_page_full_width' ); ?>
		</div>
	<?php endif; ?>

	<div class="row" id="front-page-featured">
		<?php if ( is_active_sidebar( 'home_page_weekly_activity' ) ) : ?>
			<div class="col-xs-12 col-sm-6" id="activity">
				<?php dynamic_sidebar( 'home_page_weekly_activity' ); ?>
			</div>
		<?php endif; ?>

		<div class="col-xs-12 col-sm-6" id="news-items">
			<ul>
				<?php global $post;
				$args = array(
					'category_name'	=>	'news',
					'orderby'	=>	'date',
					'numberposts'	=>	5,
					'post_status'	=>	'publish'
				);
				$newsposts = get_posts( $args); 

				foreach( $newsposts as $post ) : setup_postdata ( $post ); ?>
					<li>
						<h5><?php the_title(); ?></h5>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="read-more">Read more</a>
					</li>
				<?php endforeach; 
				wp_reset_postdata();?>
			</ul>
		</div>
	</div>
	<div class="row" id="club-vision-and-ethos">
		<div class="col-xs-12" id="content">
			<?php 
			$vision = get_post(883); 
			$content = wpautop( $vision->post_content );
			echo '<h3>'. $vision->post_title . '</h3>';
			echo $content; ?>
		</div>
	</div>
	<?php if ( is_active_sidebar( 'home_page_next_event' ) ) : ?>
		<div class="row" id="next-event">
			<?php dynamic_sidebar( 'home_page_next_event' ); ?>
		</div>
	<?php endif; ?>
	<div class="row" id="our-sponsors">
		<div class="col-xs-12" id="sponsors-list">
			<h3>Our Sponsors</h3>
				<ul>
					<?php global $post;
					$args = array(
						'orderby'	=>	'date',
						'post_type'	=>	'sponsors',
						'numberposts'	=>	5,
						'post_status'	=>	'publish'
					);
					$sponsors = get_posts( $args); 

					foreach( $sponsors as $post ) : setup_postdata ( $post ); ?>
						<li>
							<a><?php echo get_the_post_thumbnail(); ?></a>
						</li>
					<?php endforeach; 
					wp_reset_postdata();?>
				</ul>
		</div>
	</div>
</div>
<?php get_footer(); ?>