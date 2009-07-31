<?php get_header(); ?>


	<div class="main-full">
	

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<h1 style="font-size:40px;" id="post-<?php the_ID(); ?>"><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
		
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			
		<?php endwhile; endif; ?>
		<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

	
	</div>

	

</div>

<div class="comments-header"></div>

<div class="main-bottom"></div>

<?php get_footer(); ?>
