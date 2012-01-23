<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

  <!-- tbb add eieio -->
    <div id="advertise">
      <div class="btn_adv"> <a href="http://journal.crossfit.com/start.tpl?version=CFJ-graphic123x63" title="CrossFit Journal: The Performance-Based Lifestyle Resource"><img src="http://journal.crossfit.com/templates/images/graphic-125x63.jpg" width="125" height="63" alt="CrossFit Journal: The Performance-Based Lifestyle Resource" /></a></div>
      <div class="btn_adv">
        <a href="http://www.catalyst-meals.com/"><img src="/wp-content/themes/cfa2/images/catalyst.gif" alt="catalyst meals" width="150" height="41" title="catalyst meals" /></a>
      </div>
    </div><!-- advertise -->
  <!-- end tbb -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<?php do_action( 'twentyeleven_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

</body>
</html>
