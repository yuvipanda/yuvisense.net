<?
/* This code retrieves all our admin options. */
global $options;
foreach ($options as $value) {
	if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>

<div class="footer">		
	
	<div class="footer-left">
	
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer-Left Sidebar") ) : ?>
		
			<h2>Delicious Links</h2>
			<ul class="delicious-posts">
				<?php if($np_delicious) { ?>
					<?php $delicious = "http://feeds.delicious.com/v2/js/". $np_delicious. "?title=&count=5&sort=date"; ?>
					<script type="text/javascript" src="<?php echo $delicious; ?>"></script>
				<?php } else { ?>
					<li>No Delicious Username Found.</li>
				<?php } ?>
			</ul>
			
		<?php endif; ?>
	
	</div>
	
	<div class="footer-center">
	
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer-Middle Sidebar") ) : ?>
	
			<h2>Categories</h2>
			<ul class="category-footer" style="width:270px;">
				<?php wp_list_categories('hierarchical=0&orderby=count&order=DESC&title_li=&hide_empty=0&show_count=1&number=14'); ?>
			</ul>
		
		<?php endif; ?>
	
	</div>
	
	<div class="footer-right">
	
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer-Right Sidebar") ) : ?>
		
			<h2>Latest Tweet</h2>
			<ul class="twitter-posts">
				<div id="twitter_div">
					
					<?php if($np_twitter) { ?>
						<ul id="twitter_update_list"></ul>
					<?php } else { ?>
						<ul><li>No Twitter Username Found.</li></ul>
					<?php } ?>
					
				</div>
			</ul>

		<?php endif; ?>
	
	</div>
	 
	<div id="footer-spacer"></div>
	
	<div id="footer-disc">
		<span style="float:left;"><img src="<?php bloginfo('siteurl'); ?>/wp-content/themes/nerdpress-v1/images/icons/wordpress.png" style="vertical-align:text-top; margin-top:-8px;" /> Powered by <a href="http://wordpress.org" target="_blank">Wordpress</a>.&nbsp;&nbsp;&copy; <?php echo date("Y"); ?> <a href="http://nerdpress.co.uk" target="_blank">(Nerd)Press</a>.&nbsp;&nbsp;Developed by <a href="http://selfconclusion.co.uk" target="_blank">Stu Greenham</a> of <a href="http://createdsomething.com" target="_blank" title="Web Design Hull">CreatedSomething.com</a></span>
		<span style="float:right;">WC3 Standards 
		<img src="<?php bloginfo('siteurl'); ?>/wp-content/themes/nerdpress-v1/images/icons/tick.png" style="vertical-align:middle;" alt=""> CSS 
		<img src="<?php bloginfo('siteurl'); ?>/wp-content/themes/nerdpress-v1/images/icons/tick.png" style="vertical-align:middle;" alt=""> XHTML</span>
	</div>
	

</div>


<?php $twitter = "http://twitter.com/statuses/user_timeline/". $np_twitter. ".json?callback=twitterCallback2&amp;count=3"; ?>
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="<?php echo $twitter; ?>"></script>
</body>

</html>