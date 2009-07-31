<?php get_header() ?>

	<div id="main-content">

<?php the_post() ?>

			<div id="post-<?php the_ID(); ?>" class="<?php sandbox_post_class(); ?>">
				
 				<div class="post-head">
 			
 					<h2 class="entry-title"><?php the_title(); ?></h2>
 					
 					<div class="left-sidebar">
 					 <div class="left-sidebar-arrow"></div>
 					
 						<ul class="post-meta">
 							<li class="post-date"><?php the_time('d M, y'); ?></li>
 							<li class="post-comment"><a href="<?php the_permalink(); ?>#comments"><?php comments_number('Comments (0)', 'Comments (1)', 'Comments (%)'); ?></a></li>
 							<li class="post-tag"><?php printf(__('%s', 'sandbox'), get_the_category_list(', ')) ?></li>
 						</ul>
 					
 					</div><!-- .left-sidebar --> 	
 				
 				</div><!-- .post-head --> 					
				
				<div class="entry-content">
<?php the_content(''.__('Read More <span class="meta-nav">&raquo;</span>', 'sandbox').''); ?>

					<?php wp_link_pages('before=<div class="page-link">' .__('Pages:', 'sandbox') . '&after=</div>&next_or_number=number') ?>
				</div>
				<div class="entry-meta">
					
<?php edit_post_link(__('Edit', 'sandbox'), "\n\t\t\t\t\t<span class=\"edit-link\">", "</span>"); ?>

				</div>
			</div><!-- .post -->

<?php comments_template('', true); ?>

	</div><!-- #main-content -->			

<?php get_sidebar() ?>
	
<?php get_footer() ?>