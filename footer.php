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
      <div class="btn_adv">
        <a href="http://www.crossfitfallschurch.com/">
          <img src="/wp-content/themes/crossfit_adaptation_theme/images/CrossFit_FallsChurch_Logo.jpg" width="150" height="72" title="CrossFit Falls Church">
        </a>
      </div>
      <div class="btn_adv">
        <a href="http://journal.crossfit.com/start.tpl?version=CFJ-graphic123x63" title="CrossFit Journal: The Performance-Based Lifestyle Resource"><img src="http://journal.crossfit.com/templates/images/graphic-125x63.jpg" width="125" height="63" alt="CrossFit Journal: The Performance-Based Lifestyle Resource" /></a>
      </div>
      <!-- jackson clinics logo -->
      <div class="btn_adv">
        <a href="http://www.thejacksonclinics.com/services/health/crossfit-program">
          <img src="/wp-content/themes/crossfit_adaptation_theme/images/tjc_web_banner.jpg" alt="the jackson clinics" width="150" height="100" title="The Jackson Clinics" style="border:1px solid black;">
        </a>
      </div>   
<!--       <div class="btn_adv">
          <a href="http://kids.crossfitfallschurch.com/">
            <img src="/wp-content/themes/crossfit_adaptation_theme/images/CFFC_kids_logo.jpg" width="150px" height="49px">
          </a>
      </div> -->
      <div class="btn_adv">      
        <a href="http://dc.mypowersupply.com/">
          <img src="/wp-content/themes/crossfit_adaptation_theme/images/powersupply-crest.png" alt="catalyst meals" width="170" height="69" title="Power Supply Meals" style="border:none;">
        </a>          
      </div>
      <div class="btn_adv">
        <a href="https://www.customfitmeals.com/order-meals">
          <img src="/wp-content/themes/crossfit_adaptation_theme/images/CFM-LOGO-w-tag.gif" alt="Custom Fit Meals" width="150px" height="63px" title="Custom Fit Meals" style="border:none;">
        </a>
      </div>   
      <div class="btn_adv">
          <a target="_blank" href="http://www.shareasale.com/r.cfm?b=326747&u=662935&m=34288&urllink=&afftrack=">
             <img src="http://www.shareasale.com/image/34288/125x125_performance.jpg" alt="Crossfit Store" border="0">
          </a>       
      </div>
      <div class="btn_adv">
          <a target="_blank" href="http://www.ptpnova.com/">
             <img src="/wp-content/themes/crossfit_adaptation_theme/images/cross_functional.png" alt="Crossfit Store" style="border:none;">
          </a>       
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
