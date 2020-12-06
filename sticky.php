<?php
$sticky = get_option( 'sticky_posts' ); //Get all Sticky Posts
rsort( $sticky ); //Sort Sticky Posts, newest at the top
$sticky = array_slice( $sticky, 0, 5 );  //Pull 5 sticky posts so a published post will show when another is scheduled
if ( isset($sticky[0]) )
{
  /* Query sticky posts */
  $args = query_posts( array(
      'posts_per_page' => 1, // Only display 1
      'post__in' => $sticky,
      'ignore_sticky_posts' => 1,
      'post_status' => 'publish',
    )
  );
  $the_query = new WP_Query( $args ); ?>
   <?php if ( have_posts() ) : ?>
      <section id="sticky" class="greypaw">
        <?php while ( have_posts() ) : the_post(); ?>
        	<div class="stickyinner">
        		<div class="entry-header">
        			<a href="<?php the_permalink(); ?>" rel="bookmark"><h1 class="entry-title"><?php the_title(); ?></h1></a>
        		</div>
        		<div class="entry-content">
        			<?php //the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'lotwilabs' ) ); ?>
        			<?php the_excerpt(); ?>
        		</div>
        	</div>
        <?php endwhile; ?>
      </section>
   <?php endif; ?>
<?php
  wp_reset_query();
} ?>