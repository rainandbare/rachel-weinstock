<?php
/**
/* 
Template Name: Contact
*/

 get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="inner_banner">
	<h2><?php the_title(); ?></h2>
</div>
<div class="wrapper">
<section class="contact clearfix">
<!-- 	<p>Please use the following form or the information on the right to get in contact with me.</p> -->
	<section class="contact-form half">
		<?php the_content(); ?>
	</section>
	<section class="consultation half">
	<h3>Book a FREE phone intro consultation with Rachel today.</h3>					
	<p>I offer a free initial 20-minute phone consultation to all potential clients. I believe it’s important for parents to choose who they want to work with. My free consultation provides parents with the opportunity to ask questions, learn about my services, and decide if the Playfully Creative approach is the right fit.</p>
	
	<div class="contact_box">
		<ul class="social clearfix">
		    <li><a target="blank" href="https://www.facebook.com/playfullycreativeworkshops"><i class="fa fa-facebook"></i></a></li>
		    <li><a target="blank" href="https://www.instagram.com/playfullycreativeworkshops"><i class="fa fa-instagram"></i></a></li>
		    <li><a target="blank" href="mailto:contact@rachelweinstock.com"><i class="fa fa-envelope-o"></i></a></li>
		    <li><a target="blank"href="https://www.youtube.com/channel/UCY5yts_HHbwHiKrJJqcqduA"><i class="fa fa-youtube"></i></a></li>
		</ul>
		<p class="email">contact@rachelweinstock.com</p>
	</div>	
	</section>
</section>
</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
