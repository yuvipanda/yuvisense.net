<?php get_header() ?>

	<div id="main-content">

<?php while ( have_posts() ) : the_post() ?>
			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
			
 				<div class="post-head">
 			
 					<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf(__('Permalink to %s', 'sandbox'), wp_specialchars(get_the_title(), 1)) ?>" rel="bookmark"><?php the_title() ?></a></h2>
 					
 					<div class="left-sidebar">
 					 <div class="left-sidebar-arrow"></div>
 					
 						<ul class="post-meta">
 							<li class="post-date"><?php the_time('d M, y'); ?></li>
 							<li class="post-comment"><?php comments_popup_link(__('Comments (0)', 'sandbox'), __('Comments (1)', 'sandbox'), __('Comments (%)', 'sandbox')) ?></li>
 							<li class="post-tag"><?php printf(__('%s', 'sandbox'), get_the_category_list(', ')) ?></li>
 						</ul>
 					
 					</div><!-- .left-sidebar --> 	
 				
 				</div><!-- .post-head --> 				
				
				<div class="entry-content">
<?php the_content(''.__('Read More <span class="meta-nav">&raquo;</span>', 'sandbox').''); ?>

				<?php wp_link_pages('before=<div class="page-link">' .__('Pages:', 'sandbox') . '&after=</div>') ?>
				<?php edit_post_link(__('Edit', 'sandbox'), "\t\t\t\t\t<span class=\"edit-link\">", "</span>"); ?>
				</div>

			</div><!-- .post -->

<?php comments_template() ?>
<?php endwhile ?>

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__('Older posts', 'sandbox')) ?></div>
				<div class="nav-next"><?php previous_posts_link(__('Newer posts', 'sandbox')) ?></div>
			</div>
			
	</div><!-- #main-content -->			

<?php get_sidebar() ?>
	
<?php get_footer() ?>