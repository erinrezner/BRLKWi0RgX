<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
	<div class="featured-post">
		<?php _e( 'Featured post', 'lotwilabs' ); ?>
	</div>
<?php endif; ?>