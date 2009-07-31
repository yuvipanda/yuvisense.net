<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--[if IE 6]><script type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascripts/basic.js"></script><script> DD_belatedPNG.fix('img, .sidebar li, #footer li');</script><![endif]-->
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>

<body>
<div id="nav">
	<div class="container">
		<?php if (wp_list_pages('echo=0')) { ?>
		<ul id="custom-pages">
			<?php wp_list_pages('depth=2&title_li=0&sort_column=menu_order'); ?>			
		</ul>
		<? } ?>
		<div id="rss">
			<a href="<?php bloginfo('rss2_url'); ?>">subscribe</a> <a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/rss_icon.gif" class="icon" alt="RSS Feed" /></a>
		</div>
		<div style="clear:both"></div>
	</div>
</div>

<div class="container">
	<div id="header">
		<div id="title">
			<h1><a href="<?php bloginfo('url'); ?>/"><?php get_name(); ?></a></h1>
			<p id="subtitle"><?php bloginfo('description'); ?></p>
		</div>
		<div style="clear:both"></div>
	</div>
	
