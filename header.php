<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- <meta property="og:image" content="http://www.rachelweinstock.com"/>
  <meta property="og:site_name" content="David Walsh Blog"/>
  <meta property="og:description" content="Facebook's Open Graph protocol allows for web developers to turn their websites into Facebook "graph" objects, allowing a certain level of customization over how information is carried over from a non-Facebook website to Facebook when a page is 'recommended', 'liked', or just generally shared."/> -->
  
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<header class="main-header clearfix">
  <div class="wrapper">
    <div class="logo">
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
         <img src="<?php echo home_url( '/' ) . "wp-content/uploads/2017/01/logo.png"; ?>" />
        </a>
      
    </div>
    <nav class="main-nav">
      <div class="mobile-icon">
        <svg viewBox="0 0 20 20" fill="#333">
          <g>
            <rect x="1.6" y="2.7" width="16.8" height="2.1"/>
            <rect x="1.6" y="15.2" width="16.8" height="2.1"/>
            <rect x="1.6" y="8.9" width="16.8" height="2.1"/>
          </g>
        </svg>
      </div>
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
    </nav>
    </div> <!-- /.container -->
  </div>
</header><!--/.header-->

