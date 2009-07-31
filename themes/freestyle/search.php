<?php get_header() ?>

	<div id="main-content">

<?php if (have_posts()) : ?>

		<h2 class="page-title"><?php _e('Search Results for:', 'sandbox') ?> <span id="search-terms"><?php the_search_query() ?></span></h2>

<?php while ( have_posts() ) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" class="<?php sandbox_post_class() ?> post">
			
 				<div class="post-head">
 			
 					<h3 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf(__('Permalink to %s', 'sandbox'), wp_specialchars(get_the_title(), 1)) ?>" rel="bookmark"><?php the_title() ?></a></h3>
 					
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
<?php the_excerpt(''.__('Read More <span class="meta-nav">&raquo;</span>', 'sandbox').'') ?>

				</div>
				
			</div><!-- .post -->

<?php endwhile; ?>

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__('Older posts', 'sandbox')) ?></div>
				<div class="nav-next"><?php previous_posts_link(__('Newer posts', 'sandbox')) ?></div>
			</div>

<?php else : ?>

			<div id="post-0" class="post noresults">
				<h2 class="entry-title"><?php _e('Nothing Found', 'sandbox') ?></h2>
				<div class="entry-content">
					<p><?php _e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'sandbox') ?></p>
				</div>
			</div><!-- .post -->

<?php endif; ?>

	</div><!-- #main-content -->			

<?php get_sidebar() ?>
	
<?php get_footer() ?>