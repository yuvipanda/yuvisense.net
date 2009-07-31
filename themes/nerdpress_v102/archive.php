<?php get_header(); ?>

<div class="main-full">

<?php is_tag(); ?>
	<?php if (have_posts()) : ?>

		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 		<?php /* If this is a category archive */ if (is_category()) { ?>
	<h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
		<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
	<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
	<h2>Archive for <?php the_time('F jS, Y'); ?></h2>
 		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
	<h2>Archive for <?php the_time('F, Y'); ?></h2>
 		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
	<h2>Archive for <?php the_time('Y'); ?></h2>
		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
	<h2>Author Archive</h2>
		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
	<h2>Blog Archives</h2>
		<?php } ?>
		

	<?php while (have_posts()) : the_post(); ?>
	
		<h1 style="font-size:40px;"><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
		
		<p class="post-info-main" style="font-size:90%;">Posted on <?php the_time('F jS, Y'); ?> &#8226; Filed under <?php the_category(', ') ?> &#8226; <?php comments_number(); ?></p>
		
		<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
		
		<p style="height:20px;">&nbsp;</p>
			
	<?php endwhile; ?>


<?php endif; ?>

</div>

</div>

<div class="comments-header"></div>
<!--<div class="comments-slider"></div>-->

<div class="main-bottom"></div>


<?php get_footer(); ?>
