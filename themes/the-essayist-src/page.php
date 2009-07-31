<? get_header(); ?>
	
	<? get_header(); ?>

	<div id="content">
		<div id="single">

			<?php 
			if (have_posts()) {

				while (have_posts()) {
				 the_post(); 
			?>

				<div id="post">
					<h2 class="title"><?php the_title(); ?></h2>

					<div id="user-bar">
						<span id="user">Posted on <?php the_time('l, F jS, Y') ?> by <?php the_author() ?></span>
						<?php if ('open' == $post->comment_status) { ?><a href="<?php comments_link(); ?>"><span id="comment-no"><?php comments_number('No Comments', '1 Comment', '% Comments'); ?> <img src="<?php bloginfo('template_url'); ?>/images/comment.png" alt="Comments" /></span></a><? } ?>
					</div>

					<div class="article">
						<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
					</div>
					
					<div class="pagination">
						<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					</div>
				</div>


			<?
				}
			}
			?>
		</div>

		<?php comments_template(); ?>
	</div>

	<? get_footer(); ?>
	
	


<? get_footer(); ?>