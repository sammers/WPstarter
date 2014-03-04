<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. --> 


<html>
 <head>
  <title><?php wp_title('|', true, 'right'); bloginfo('name');?></title>
  <meta name="viewport" content="width=device-width, initial-scale = 1.0">

  <?php wp_head(); ?>

 </head>
 <body>

 <div>

  <header id="masthead" class="container site-header" role="banner">
   <div class="site-branding">
    <hgroup>
     <h1 class="site-title"><a href="<?php bloginfo('siteurl');?>"><?php bloginfo('name');?></a></h1>
     <h2 class="site-description"><?php bloginfo('description');?></h2>
    </hgroup>
   </div>
    <nav id="site-navigation" class="main-navigation" role="navigation">
      <h1 class="menu-toggle"><?php _e( 'menu' ); ?></h1>

     <?php
 	 $args = array('menu' => 'main-menu', 'echo' => false );
 	 echo strip_tags(wp_nav_menu($args), '<a><ul><li>');
 	 ?>
    </nav><!-- #site-navigation -->
  </header><!-- #masthead -->




</div>





