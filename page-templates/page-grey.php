<?php
/**
* Template Name: Grey Paw Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main" class="greypaw">

			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // End of the loop. ?>

			<div class="paw-divider"></div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>