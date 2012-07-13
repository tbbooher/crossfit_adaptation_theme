<?php
   /**
   * The Sidebar containing the main widget area.
   *
   * @package WordPress
   * @subpackage Twenty_Eleven
   * @since Twenty Eleven 1.0
   */

   $options = twentyeleven_get_theme_options();
   $current_layout = $options['theme_layout'];

   if ( 'content' != $current_layout ) :
   ?>
<div id="secondary" class="widget-area" role="complementary">

  <aside id="links" class="widget">
    <h3 class="empfehlung">Details</h3>
    <div class="teaser"> <a class="kettlebell" href="/"></a>
      <h4><a title="Benefits" href="/">Home</a></h4>
      <p>the Workout of the Day</p>
    </div>
    <div class="teaser"> <a class="kettlebell" href="/about_us/"></a>
      <h4><a title="Benefits" href="/about_us/">About Us</a></h4>
      <p>who we are. what we do. who we serve.</p>
    </div>
    <div class="teaser"> <a class="kettlebell" href="/yoga/"></a>
      <h4><a title="Benefits" href="/yoga/">Yoga for Athletes</a></h4>
      <p>flexibility, strength, balance, posture</p>
    </div>
    <div class="teaser"> <a class="kettlebell" href="/barbell_and_oly_lifting/"></a>
      <h4><a title="Benefits" href="/barbell_and_oly_lifting/">Olympic Lifting and the Barbell Club</a></h4>
      <p>Get stronger with premier coaching</p>
    </div>
    <!--
    <div class="teaser"> <a class="kettlebell" href="/category/kids/"></a>
      <h4><a title="CF Endurance" href="/cfendurance/">Endurance Training Program</a></h4>
      <p>our endurance sports training program</p>
    </div>
    -->
    <div class="teaser"> <a class="kettlebell" href="/location/"></a>
      <h4><a title="Location" href="/location/">Location</a></h4>
      <p>in Shirlington, near Alexandria and DC</p>
    </div>
    <!--
    <div class="teaser"> <a class="kettlebell" href="/paleo/"></a>
      <h4><a title="Paleo Diet" href="/paleo/">Paleo Diet</a></h4>
      <p>fuel your work. take the challenge.</p>
    </div>
    -->
    <div class="teaser"> <a class="kettlebell" href="/contact_us/"></a>
      <h4><a title="Paleo Diet" href="/contact_us/">Contact</a></h4>
      <p>let us answer your questions/concerns</p>
    </div>
    <div class="sb_termine"> 
      <!-- flickr -->
      <div id="flickr_badge_uber_wrapper">
        <div id="flickr_badge_wrapper"> 
          <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?show_name=1&amp;count=9&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=49396649%40N07"></script>
          <div id="flickr_badge_source">
            <div id="flickr_icon_td">&nbsp;</div>
            <div id="flickr_badge_source_txt">Go to <a href="http://www.flickr.com/photos/cfadaptation/">CFA's photostream</a></div>
          </div>
        </div>
      </div>
      <!-- End of Flickr Badge --> 
      <!-- /flickr --> 
    </div>
    <div style="padding:20px 0 0 50px;">
      <a href="http://www.youtube.com/subscription_center?add_user=CurtisCFA&feature=creators_cornier-http%3A//s.ytimg.com/yt/img/creators_corner/Subscribe_to_my_videos/YT_Subscribe_128x128_grey.png"><img src="http://s.ytimg.com/yt/img/creators_corner/Subscribe_to_my_videos/YT_Subscribe_128x128_grey.png" alt="Subscribe to me on YouTube"/></a><img src="http://www.youtube-nocookie.com/gen_204?feature=creators_cornier-http%3A//s.ytimg.com/yt/img/creators_corner/Subscribe_to_my_videos/YT_Subscribe_128x128_grey.png" style="display: none"/>
    </div>
  </aside>

	<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>


	<aside id="meta" class="widget">
		<h3 class="widget-title"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<?php wp_meta(); ?>
		</ul>
	</aside>

	<?php endif; // end sidebar widget area ?>
</div><!-- #secondary .widget-area -->
<?php endif; ?>
