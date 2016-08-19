<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ishabnam
 */

?>

	</div><!-- #content -->
</div> <!-- #page -->
		
		<div id="footer-menu">
			<?php wp_nav_menu(array ('theme_location' => 'secondary','menu_class' => 'foot-menu') ); ?>
					<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ishabnam' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'ishabnam' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by Israt Shabnam', 'ishabnam' ), 'ishabnam', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
		</div> <!-- #footer-menu -->
		
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
