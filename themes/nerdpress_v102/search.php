<?php get_header(); ?>


	<div id="left">

	<?php $posts=query_posts($query_string . '&posts_per_page=-1'); ?>
	<?php if (have_posts()) : ?>

		<h1 style="font-size:40px; margin-bottom:10px;">Search Results</h1>
		
		<p>You have searched the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog for <strong>'<?php the_search_query(); ?>'</strong>. The results are displayed below...</p>

		<div class="navigation">
			<div><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

		
		<h3 class="pagetitle">Page Search Results...</h3>
		<?php while (have_posts()) : the_post(); ?>
		
			<?php if ($post->post_type == 'page') : ?>

			<h4 style="margin-top:35px;" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
			<p class="post-info-main-small" style="font-size:90%;">Posted on <?php the_time('F jS, Y'); ?> &#8226; Filed under <?php the_category(', ') ?> &#8226; <?php comments_number(); ?></p>

			<?php the_excerpt('Read More'); ?>
		
			<?php endif; ?>
	
		<?php endwhile; ?>
	
	
		<?php rewind_posts(); ?>
		<h3 class="pagetitle" style="margin-top:60px;">Post Search Results...</h3>
		<?php while (have_posts()) : the_post(); ?>
			
			<?php if ($post->post_type != 'page') : ?>

			<h4 style="margin-top:35px;" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
			<p class="post-info-main-small" style="font-size:90%;">Posted on <?php the_time('F jS, Y'); ?> &#8226; Filed under <?php the_category(', ') ?> &#8226; <?php comments_number(); ?></p>

			<?php the_excerpt('Read More'); ?>
		
			<?php endif; ?>
		
		<?php endwhile; ?>
	

		<div class="navigation">
			<div><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h1>No posts / pages found.</h1>
		
		<h1>Try a different search...?</h1>
		
		<div class="search-small"><form method="get" id="searchform-small" action="<?php bloginfo('url'); ?>/">
		<input class="search-small-input" type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
		</form></div>
		
		<?php //include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

	</div>

	<?php get_sidebar(); ?>

</div>

<div class="comments-header"></div>
<div class="comments-slider"></div>

<div class="main-bottom"></div>

<?php get_footer(); ?>
