<?php 
	get_header(); 
	$counter = 1;
?>

	<div id="left">
	
	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
		
		<?php if ($counter == 1) { ?>
		
		<h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
		<p class="post-info-main" style="font-size:90%;">Posted on <?php the_time('F jS, Y'); ?> &#8226; Filed under <?php the_category(', ') ?> &#8226; <?php comments_number(); ?></p>

		<?php the_content('Read the rest of this entry &raquo;'); ?>
		
		<?php } ?>
		
		<?php if ($counter > 1) { ?>
		
		<h3 style="margin-top:50px;" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
		<p class="post-info-main-small" style="font-size:90%;">Posted on <?php the_time('F jS, Y'); ?> &#8226; Filed under <?php the_category(', ') ?> &#8226; <?php comments_number(); ?></p>

		<?php the_excerpt('Read More'); ?>
				
		<?php } $counter = $counter+1; ?>
		
		<?php endwhile; ?>
		
		
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
		
	
	<?php else : ?>
	
		<h1 style="font-size:40px;">Nothing to show</h1>

		<p>Sorry, but you are looking for something that isn't here.</p>
	
	<?php endif; ?>
	
	</div>
	
	<?php get_sidebar(); ?>
	<!--<div id="sidebar"></div>-->


</div>

<div class="comments-header" style="height:21px;"></div>
<div class="comments-slider-home" style="height:0px;"></div>

<div class="main-bottom" style="margin-top:-60px;"></div>



				
				
		
	




<?php get_footer(); ?>
