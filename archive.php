<?php get_header(); ?>
<div class="inner_banner">
  <h2><?php the_time('F Y'); ?></h2>
</div>

<div class="wrapper clearfix">
  <?php get_sidebar('blog'); ?>

<div id=blog-feed>

    <?php if (have_posts()) : ?>
    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    <?php while (have_posts()) : the_post(); ?>
      
  <article class="blog-post" <?php post_class() ?> id="post-<?php the_ID(); ?>"><!-- <p style="padding:0;font-size:12px;color:rgb(109, 109, 109)"><?php //the_time('F j, Y'); ?> at <?php// the_time('g:i a'); ?></p> -->
    <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    <div class="blog-text">
      <h5>
        <?php the_category(); ?> 
      </h5>
      <h3 class="blog"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
      <div class="entry">
        <p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 400, '...');?></p>
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
    
  <?php endwhile; endif;?>


</div>
</div>

<?php get_footer(); ?>