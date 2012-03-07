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
        <a href="http://dc.mypowersupply.com/"><img src="/wp-content/themes/crossfit_adaptation_theme/images/powersupply-crest.png" alt="catalyst meals" width="170" height="69" title="Power Supply Meals" style="border:none;"></a>
      </div>
      <div class="btn_adv">
        <img src="/wp-content/uploads/2012/03/Erin_logo.jpg" alt="erin logo">
      </div>
      <div class="btn_adv">
        <img src="/wp-content/uploads/2012/03/i_love_my_spine.png" alt="i love my spine">
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
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
