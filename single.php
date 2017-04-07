<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

<div class="inner_banner">
  <a href="<?php echo home_url( '/' ) . "/blog"?>">
    <h2>blog</h2>
  </a>
</div>

<div class="wrapper clearfix">
<?php get_sidebar('blog'); ?>


  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article class="blog-post" <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <?php the_post_thumbnail(); ?>
      
      <div class="blog-text">
        <h5>
          <?php the_category(); ?> 
        </h5>
        <h3 class="blog">
          <?php the_title(); ?>  
        </h3>
        <div class="entry">
          <?php the_content(); ?>
        </div>
        <a href="<?php echo home_url( '/' ) . "/blog"?>" class="button">Back to Blog</a>
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


  <?php endwhile; endif; ?>

  
<?php get_sidebar('blog'); ?>

</div>

<?php get_footer(); ?>