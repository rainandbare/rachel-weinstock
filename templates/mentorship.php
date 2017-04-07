<?php
/**
/* 
Template Name: Mentorship
*/

 get_header(); ?>
<div class="inner_banner">
	<h2><?php the_title(); ?></h2>
</div>
<div class="wrapper">
<section class="mentorship">
<h3>Think of Rachel’s Playfully Creative Mentorship Program sessions as part expressive arts, part mentorship and mix in some loving support for both your kids and family.</h3> 

<!-- <h2>Packages</h2> -->
	<ul class="prices clearfix">
		<li> 
			 <h4>1 session</h4>
			 <h5>Playfully Creative Mentorship</h5>
			 <h4 class="price">$<?php the_field("one_session_price"); ?></h4>
			 <p>Give Rachel’s approach a test-drive. Kick start healthy connections for kids - with themselves, their parents and their siblings. </p> 
		 </li>
		<li>
			<h4>4 sessions </h4>
			<h5>Playfully Creative Mentorship</h5>
			<h4 class="price">$<?php the_field("four_session_price"); ?></h4>
			<p> Real change doesn’t happen overnight. Work with Rachel over several sessions to weave more harmony into your lives.</p>
		</li>
	</ul>
	<section class="includes">
	<div class="wrapper">
		<h2>Each Session will: </h2>
		<ul>
			<li>Be 60 mins</li>
			<li>Include one-on-one play with your kids </li>
	 		<li>Activate parent and child communication after mentorship session and provide tangible tips and tools to use within the family unit</li>
	 	</ul>
	 </div>
	</section>
	</div>
	<section class="testimonial clearfix">
		<div class="text-wrapper half">
			<div class="testimonial-content">&ldquo;I am amazed at how much Rachel has helped me with my relationship with my daughter. She sees kids for who they are and brings out the best in them. I highly recommend working with Rachel to deepen family connection and communication.&rdquo;
			</div>
			<div class="testimonial-attribute">
			-Justine Brown,<br> Brielle's Mom, Age 6
			</div>
		</div>
		<img class="testimonial-pic half" src="<?php echo home_url( '/' ) . "wp-content/uploads/2017/02/Rachel-Mentorship-pic.jpg"; ?>" alt=""/>
	</section>
	<!-- <section class="testimonial">
		<div class="wrapper">
			<div class="testimonial-content"> Rachel immediately connects with Cole by engaging him by telling stories from her own personal experiences. Her creative and unique methodology leaves my child wishing for more. Strongly recommended!
			</div>
			<div class="testimonial-attribute">
			-Dana Harper, Cole's Mom (age 10)
			</div>
		</div>
	</section> -->
	<a class="button c-2-a" href="<?php echo home_url( '/' ) . "contact/"; ?>">Work with Rachel</a>
</section>


<?php get_footer(); ?>
