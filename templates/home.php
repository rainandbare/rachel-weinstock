<?php

/*
	Template Name: Home
*/

get_header();  ?>
<header class="banner">
	<div class="wrapper">
		<img src="<?php echo home_url( '/' ) . "wp-content/uploads/2017/02/Rainbow-Rachel-banner.png"; ?>" />
	</div>
</header>

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
				    <div class="mc-field-group">
				    	<input type="submit" value="Yes, please!" name="subscribe" id="mc-embedded-subscribe" class="button">
				    </div>
				</div>
			</form>
		</div>
		<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
		<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
		<!--End mc_embed_signup-->
	</div>
</section>

<div class="wrapper">
<section class="rachels_approach clearfix">
	<div class="half video">
		<iframe width="100%" height="100%" src="https://www.youtube.com/embed/bd_kYZQky70?showinfo=0" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="half text">
		<h3>Rachel’s Approach</h3>
		 <p><?php the_field('rachels_approach'); ?></p>
	</div>
</section>
<a class="button c-2-a" href="<?php echo home_url( '/' ) . "contact/"; ?>">Book A Free Consultation with rachel</a>
</div>


<section class="services clearfix">
	<ul class="clearfix">
	
		<li class="third">
			<a href="<?php echo home_url( '/' ) . "mentorship"; ?>">
				<div class="image" style="background: url(<?php echo home_url( '/' ) . "wp-content/uploads/2017/01/IMG_9642-e1485385094995.jpg";  ?>); background-size: cover; background-repeat: no-repeat;"></div>
				<h4>Kids Mentorship</h4>
			</a>
		</li>
	
	
		<li class="third">
			<a href="<?php echo home_url( '/' ) . "workshops"; ?>">
				<div class="image" style="background: url(<?php echo home_url( '/' ) . "wp-content/uploads/2015/06/kids2.jpg"; ?>); background-size: cover; background-repeat: no-repeat;"></div>
				<h4>Workshops</h4>
			</a>
		</li>
	
	
		<li class="third">
			<a href="<?php echo home_url( '/' ) . "transformational-talks"; ?>">
				<div class="image" style="background: url(<?php echo home_url( '/' ) . "wp-content/uploads/2015/09/The-perfect-Playschool.jpg"; ?>); background-size: cover; background-repeat: no-repeat;"></div>
				<h4>Transformational Talks</h4>
			</a>
		</li>
	</ul>
</section>

<section class="testimonials" style="background: url(<?php echo home_url( '/' ) . "wp-content/uploads/2015/07/blue-watercolor-background.jpg"; ?>); background-size: cover; background-repeat: no-repeat;">
	<div class="wrapper clearfix">
		<div class="testimonial half">
			<img src=<?php  echo home_url( '/' ) . "wp-content/uploads/2015/07/Testimonial_Madeleine.png"; ?>>
			
		</div>
		<div class="testimonial_video half">
			<iframe width="480" height="298" src="https://www.youtube.com/embed/ls54jCLbcGg?showinfo=0" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</section>
<section class="about clearfix">
	<div class="wrapper clearfix">
		<div class="about-text half">
			<h3>About Rachel</h3>
			<p>Rachel Weinstock, B.F.A & B.E.d., is an elementary school teacher, professional artist, public speaker, workshop facilitator & part real Rainbow Fairy. Kids inherently trust her, and she in turn empowers them to harness their best self. Rachel brings a spark to everything she touches and her healing approach to teaching weaves creativity, mentorship and self-esteem into a colourful and safe medicine for the soul. Rachel has developed a mentorship program for kids across many cultures that has become the building blocks of her Playfully Creative approach.</p>
		</div>
		<div class="about-image half">
			<img src="http://www.rachelweinstock.com/wp-content/uploads/2015/07/rachel.jpg">
		</div>
	</div>
	<a class="button" target="_blank" href="https://youtu.be/SqJmy9HPW2E">A Window into the power of play</a>
</section>

<div class="companies clearfix">
	<div class="wrapper">
		<h3>Organizations Rachel Has Worked With:</h3>
		<?php echo do_shortcode('[logooos columns="4" backgroundcolor="transparent" layout="slider" category="-1" orderby="date" order="DESC" marginbetweenitems="25px" tooltip="enabled" responsive="enabled"  grayscale="disabled" border="disabled" borderradius="logooos_no_radius" autoplay="true" scrollduration="1000" pauseduration="9000" buttonsbordercolor="#DCDCDC" buttonsbgcolor="#FFFFFF" buttonsarrowscolor="lightgray" hovereffect="effect4" ]'); ?>
	</div>
</div>

</div class="clear"></div>

<?php get_footer(); ?> 