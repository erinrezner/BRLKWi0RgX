<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<div class="dashes dashes-bottom"></div>
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<nav id="site-navigation" class="footer-navigation" role="navigation">
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'lotwilabs' ); ?>"><?php _e( 'Skip to content', 'lotwilabs' ); ?></a>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'menu_class'     => 'nav-menu',
				)
			);
			?>
		</nav>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
