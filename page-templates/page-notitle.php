<?php
/**
* Template Name: Page Without Title
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

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
			<?php the_content(); ?>
			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'lotwilabs' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'lotwilabs' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->

			<?php endwhile; // End of the loop. ?>

			<div class="paw-divider"></div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>