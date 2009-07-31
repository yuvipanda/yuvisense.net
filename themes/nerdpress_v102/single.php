<?php get_header(); ?>
<?
/* This code retrieves all our admin options. */
global $options;
foreach ($options as $value) {
	if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>

<div class="main-full">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<!--Uncomment the following four lines if you want Next/Previous links to be displayed on Single post pages-->
		<!--<div class="navigation">
			<div class="navigation-left"><?php /*previous_post_link('&laquo; %link')*/ ?></div>
			<div class="navigation-right"><?php /*next_post_link('%link &raquo;')*/ ?></div>
		</div>-->

		<h1 style="font-size:40px;"><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
		
		<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

		<p style="color:#ccc; font-size:90%;">
			This entry was posted by <?php the_author() ?> on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?> and is filed under <?php the_category(', ') ?>. 
			You can follow any responses to this entry through the <?php comments_rss_link('RSS 2.0'); ?> feed.
			
			<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
				// Both Comments and Pings are open ?>
				You can leave a response below, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.

			<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
				// Only Pings are Open ?>
				Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

			<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
				// Comments are open, Pings are not ?>
				You can skip to the end and leave a response. Pinging is currently not allowed.

			<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
				// Neither Comments, nor Pings are open ?>
				Both comments and pings are currently closed.

			<?php } edit_post_link('Edit this entry.','',''); ?>
		</p>
		
		<!--Check if Show/Hide jQuery is enabled in the (Nerd)Press options-->
		<?php if ($np_commments_show_hide == "false") {?>
			<a href="#" id="showcomments" onclick="return false;" style="border:0px;"><h2>Show/Hide Comments (<?php comments_number('0', '1', '%' );?>)</h2></a>
		<?php } ?>
	
	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

</div>

</div>


<div class="comments-header"></div>
	
	<!--Check if Show/Hide jQuery is enabled in the (Nerd)Press options-->
	<?php if ($np_commments_show_hide == "false") { ?>
		<div class="comments-slider">
			<?php comments_template(); ?>
		</div>
	<?php } else { ?>
		<div class="comments-nonslider">
			<?php comments_template(); ?>
		</div>
	<?php } ?>


<div class="main-bottom"></div>


<?php get_footer(); ?>
