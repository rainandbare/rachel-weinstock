
<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>

<footer id="footer">
<section class="sign-up">
	<div class="wrapper clearfix">
		<div class="sign-up-text">
			<h4>Join my community</h4>
			<p>Sign up to receive latest news and updates!</p>
		</div>
		
		<!-- Begin MailChimp Signup Form -->
	<div id="mc_embed_signup">
	<form action="//rainbowspritecreations.us10.list-manage.com/subscribe/post?u=b1de96066ed9881057f3356f3&amp;id=431ea41fe3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate clearfix" target="_blank" novalidate>
	<div id="mce-responses">
			<div class="response" id="mce-error-response" style="display:none"></div>
			<div class="response" id="mce-success-response" style="display:none"></div>
	</div> 
	<div id="mc_embed_signup_scroll clearfix">
		<div class="mc-field-group">
			<input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="FIRST NAME">
		</div>
		<div class="mc-field-group">
			<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="EMAIL">
		</div>
		   <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
	    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b1de96066ed9881057f3356f3_431ea41fe3" tabindex="-1" value=""></div>
	    <div class="mc-field-group"><input type="submit" value="Yes, please!" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
	    </div>
	</form>
	</div>
	<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
	<!--End mc_embed_signup-->
</section>

<div class="wrapper clearfix footer-wrapper">
	<div class="footer_box contact-links third">
		 <div class="logo">
	        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
	         <img src="<?php echo home_url( '/' ) . "wp-content/uploads/2017/01/logo.png"; ?>" />
	        </a>
	    </div>
		<ul class="social clearfix">
		    <li><a target="blank" href="https://www.facebook.com/playfullycreativeworkshops"><i class="fa fa-facebook"></i></a></li>
		    <li><a target="blank" href="https://www.instagram.com/playfullycreativeworkshops"><i class="fa fa-instagram"></i></a></li>
		    <li><a target="blank" href="mailto:contact@rachelweinstock.com"><i class="fa fa-envelope-o"></i></a></li>
		    <li><a href="https://www.youtube.com/channel/UCY5yts_HHbwHiKrJJqcqduA"><i class="fa fa-youtube"></i></a></li>
		</ul>
		<p class="email">contact@rachelweinstock.com</p>
	</div>

<div class="footer_box insta third">
<h3>#INSTAGRAM</h3>
<?php echo do_shortcode("[instagram-feed]"); ?>
</div>

<div class="footer_box fbook third">
<h3>FACEBOOK</h3>
<div class="fb-page" data-href="https://www.facebook.com/playfullycreativeworkshops/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/playfullycreativeworkshops/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/playfullycreativeworkshops/">Playfully Creative Workshops</a></blockquote></div>
</div>


</div>

<div class="clear"></div>
<div class="small">
	<p>&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?> </p>
	<p>
		| Site by <a href="http://suzettemccanny.com">Suzette McCanny</a>
	</p>
	
</div>

		</footer>

	</div>
</div>
<?php wp_footer(); ?>
<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

</body>
</html>