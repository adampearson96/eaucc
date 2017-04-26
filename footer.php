<footer class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-4" id="footer-left">
			<?php if ( is_active_sidebar( 'footer_left' ) ) : ?>
				<?php dynamic_sidebar( 'footer_left' ); ?>
			<?php endif; ?>
		</div>
		<div class="col-xs-12 col-sm-4" id="footer-middle">
			<?php if ( is_active_sidebar( 'footer_middle' ) ) : ?>
				<?php dynamic_sidebar( 'footer_middle' ); ?>
			<?php endif; ?>
		</div>
		<div class="col-xs-12 col-sm-4" id="footer-right">
			<?php if ( is_active_sidebar( 'footer_right' ) ) : ?>
				<?php dynamic_sidebar( 'footer_right' ); ?>
			<?php endif; ?>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>