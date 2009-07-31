<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">

	<title>
	<?php if ( is_home() ) { ?><?php bloginfo('name'); ?> &raquo; <?php bloginfo('description'); ?><?php } ?>
	<?php if ( is_search() ) { ?><?php bloginfo('name'); ?> &raquo; Search Results<?php } ?>
	<?php if ( is_author() ) { ?><?php bloginfo('name'); ?> &raquo; Author Archives<?php } ?>
	<?php if ( is_single() ) { ?><?php wp_title(''); ?> &raquo; <?php bloginfo('name'); ?><?php } ?>
	<?php if ( is_page() ) { ?><?php bloginfo('name'); ?> &raquo; <?php wp_title(''); ?><?php } ?>
	<?php if ( is_category() ) { ?><?php bloginfo('name'); ?> &raquo; Archive &raquo; <?php single_cat_title(); ?><?php } ?>
	<?php if ( is_month() ) { ?><?php bloginfo('name'); ?> &raquo; Archive &raquo; <?php the_time('F'); ?><?php } ?>
	<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?> &raquo; Tag Archive &raquo; <?php  single_tag_title("", true); } } ?>
	</title>	
	
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

	<!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/ie/ie6.css" />
	<![endif]-->
	
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery-1.3.1.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/scripts.js"></script>	

	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Posts RSS feed', 'sandbox'); ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Comments RSS feed', 'sandbox'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
	
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<?php wp_head() ?>

</head>

<body class="<?php sandbox_body_class() ?>">
 <div id="bg-wrapper">
  <div id="bg-wrapper-2">
 
 	<div id="header">
 	 <div class="wrapper-976">
		<h1><a href="<?php echo get_option('home') ?>/" title="<?php bloginfo('name') ?>" rel="home"><?php bloginfo('name') ?></a></h1>
		
    	<ul id="top-nav">
    		<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
    		<?php wp_list_pages('title_li=&depth=1'); ?>
    		<li><a href="<?php bloginfo('rss2_url') ?>" id="feed">RSS Feed</a></li>
    	</ul><!-- #top-nav --> 	 			
		
	 </div>
	</div><!--  #header -->
 	
 	<div id="content-wrapper-bg" class="clearfix">
 	 <div id="content-wrapper-bottom" class="clearfix">
 	  <div id="content-wrapper-top" class="clearfix">