<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package kirkwood
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'kirkwood' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'kirkwood' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'kirkwood' ), 'The <a href="http://kirkwooddemo.wordpress.com/">Kirkwood Theme</a>', '<a href="http://choycedesign.com/" rel="designer">Mel Choyce</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
