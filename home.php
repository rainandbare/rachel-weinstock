<?php get_header(); ?>
<div class="inner_banner">
	<h2>blog</h2>
</div>

<div class="wrapper clearfix">
<?php get_sidebar('blog'); ?>
<?php
// The Query
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$args = array(
  'posts_per_page' => 3,
  'paged'          => $paged
);
$the_query = new WP_query( $args );
// query_posts( $args );
?>
<div id="blog-feed">
	<?php if ( $the_query->have_posts() ) : ?>
	<?php

// next_posts_link() usage with max_num_pages
//next_posts_link( 'Older Entries', $the_query->max_num_pages );
//previous_posts_link( 'Newer Entries' );
?>
	<?php
	// the loop
	while ( $the_query->have_posts() ) : $the_query->the_post(); 
	?>
	<article class="blog-post" <?php post_class() ?> id="post-<?php the_ID(); ?>"><!-- <p style="padding:0;font-size:12px;color:rgb(109, 109, 109)"><?php //the_time('F j, Y'); ?> at <?php// the_time('g:i a'); ?></p> -->
		<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		<div class="blog-text">
			<h5>
				<?php the_category(); ?> 
			</h5>
			<h3 class="blog"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
			<div class="entry">
				<p>
				<?php $content = get_the_content(); echo mb_strimwidth($content, 0, 400, '...');?>
				</p>
			</div>
			<a class="button" href="<?php echo get_permalink(); ?>">Read More</a>
			<div class="post-footer">
				<div class="post-date half">
					<?php echo get_the_date(); ?>
				</div>
				<div class="post-social half">
					<section class="blog-follow">
				        <ul class="social clearfix">
				            <li><a target="blank" href="https://www.facebook.com/playfullycreativeworkshops"><i class="fa fa-facebook"></i></a></li>
				            <li><a target="blank" href="https://www.instagram.com/playfullycreativeworkshops"><i class="fa fa-instagram"></i></a></li>
				            <li><a target="blank" href="mailto:contact@rachelweinstock.com"><i class="fa fa-envelope-o"></i></a></li>
				            <li><a target="blank" href="https://www.youtube.com/channel/UCY5yts_HHbwHiKrJJqcqduA"><i class="fa fa-youtube"></i></a></li>
				        </ul>
   					</section>
				</div>
			</div>
		</div>
	</article>
	<?php endwhile; ?>
	</div>
	</div>
	<nav class="blog-pagination clearfix">
		<div>
			<?php
			// next_posts_link() usage with max_num_pages
			next_posts_link( 'Older Entries', $the_query->max_num_pages );
			?>
		</div>
		<div class="next">
			<?php
			previous_posts_link( 'Newer Entries' );
			?>
		</div>
	</nav>

<?php 
// clean up after the query and pagination
wp_reset_postdata(); 
?>


<?php else:  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
</div>
</div>
<?php endif; ?>




<?php get_footer(); ?>