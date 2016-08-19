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
			
	//Custom posts for homepage
	
	$featuredPost=new WP_Query('cat=36&posts_per_page=1&orderby=ran');
			
	if ($featuredPost->have_post()):
	
		while($featuredPost->have_posts()) : $featuredPost->the_post();
	?>
		<h2><a href="<?php the_permalink(); ?>"<?php the_title(); ?></h2>
	<?php
		endwhile;
		
		else:
		
	endif;
	
	wp_reset_postdata();	

?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
