<? get_header(); ?>

<div id="content">
	<div id="single">
		
		<?php 
		if (have_posts()) {
			
			while (have_posts()) {
			 the_post(); 
		?>
			<div class="pagination">
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
			<div id="post">
				<h2 class="title"><?php the_title(); ?></h2>
				
				<div id="user-bar"> 
					<div id="user"><?php the_time('M jS, Y') ?> by <?php the_author() ?> in <?php the_category(', ') ?></div>
					<div id="comment-no"><a href="<?php comments_link(); ?>"><?php comments_number('No Comments', '1 Comment', '% Comments'); ?> <img src="<?php bloginfo('template_url'); ?>/images/comment.png" alt="Comments" /></a></div>
					<div style="clear:both;"></div>
				</div>

				<div class="article">
					<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
					<div style="clear:both"></div> 
				</div>				
			</div>
			<div class="pagination">
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
			
		
		<?
			}
		}
		?>
	</div>
	
	<?php comments_template('', true); ?>
</div>

<? get_footer(); ?>