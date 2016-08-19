<?php
/*
* 
Template: Home page
*
*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post();
				the_content();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.   
				 ?>
<?php			
	$args = array( 'numberposts' => 1 );
	$lastposts = get_posts( $args );
		foreach($lastposts as $post) : setup_postdata($post); ?>
	<h2>The design, I just finshed last night</h2>
	<h3><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'featured-thumb' ); ?></a></h3>
<?php endforeach; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
