<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>

<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />	
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
<?php wp_head(); ?>
	
<script type="text/javascript" src="http://stugreenham.com/scripts/jquery/jquery-1.2.6.js"></script>          
	
<script type="text/javascript">
	$(document).ready(function() {
		$('#j').click(function() {
			$(".search").slideToggle("slow");
		});
	});                    
</script> 
	
<script type="text/javascript">
	$(document).ready(function(){
		$(".delicious li").click(function(){
			window.location=$(this).find("a").attr("href"); return false;
		});
	});
</script>
			
<script>
	$(document).ready(function() {
  		if (!document.location.hash.match('comment'))
     	{
			$(".comments-slider").css('display', 'none');
    	}	
    	$('#showcomments').click(function() {
        	$(".comments-slider").slideToggle("fast");
        	$(".comments-slider2").slideToggle("fast");
      	});
		$('#leaveresponse').click(function() {
        	$(".comments-slider").show("fast");
        	$(".comments-slider2").show("fast");
      	});
	});     
</script>
	
<? global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
	
</head>


<body>

<div class="top">
		
	<ul class="main-menu">
		<li><a href="<?php echo get_option('home'); ?>/" id="active">home</a></li>
		<?php wp_list_pages('title_li='); ?>
		<li><a href="#" id="j" onclick="return false;">search</a></li>
	</ul>
			
	<p class="main-logo">
		
		<!--check for custom logo URL, otherwise display default (Nerd)Press logo-->
		<?php if($np_logo){
			echo "<img src=\"$np_logo\" alt=\"\" />\n";		
		} else { ?>
			<img src="<?php bloginfo('template_url'); ?>/images/logotext.png" alt="<?php bloginfo('name'); ?>" />
		<?php } ?>
		
		<!--check for custom strapline, otherwise display default (Nerd)Press tagline-->
		<?php if($np_tagline){
			echo $np_tagline;		
		} else {
			echo "a kick-ass wordpress theme developed by Stu Greenham\n";
		} ?>
		
	</p>

</div>


<div class="main">

	<div class="search">
		<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
			<input class="search-input" type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
		</form>
	</div>