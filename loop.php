<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>

		<article class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
       	<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
       	<div class="blog-text">
       		<h5>
				<?php the_category(); ?> 
			</h5>
			<h3 class="blog"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
			</h3>
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
		</article><!-- #post-## -->

		<?php comments_template( '', true ); ?>


<?php endwhile; ?>

	<?php post_navigation(); ?>

	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>
