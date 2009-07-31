<? get_header(); ?>
	
	<div id="content">
		<div id="archive">		
			<div id="posts">
				<div id="left">
					<?php if (have_posts()) { ?>
							
						<?php $post = $posts[0]; ?>
						<?php /* If this is a category archive */ if (is_category()) { ?>
							<h2 class="pagetitle">&#8216;<?php single_cat_title(); ?>&#8217; Category Archives</h2>
						<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
							<h2 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
						<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
							<h2 class="pagetitle"><?php the_time('F jS, Y'); ?> Archives</h2>
						<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
							<h2 class="pagetitle"><?php the_time('F, Y'); ?> Archives</h2>
						<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
							<h2 class="pagetitle"><?php the_time('Y'); ?> Archives</h2>
						<?php /* If this is an author archive */ } elseif (is_author()) { ?>
							<h2 class="pagetitle">Author Archive</h2>
						<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
							<h2 class="pagetitle">Blog Archives</h2>
						<?php } ?>
					 		
						<div class="navigation">
							<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
							<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
							<div style="clear:both">&nbsp;</div>
						</div>
						
						<?php while (have_posts()) {
							the_post(); 
						?>

							<div class="post main">		
								<div class="date-small">				
									<div class="background">
										<span class="day"><?php the_time('j') ?></span><br />
										<span class="month"><?php the_time('M') ?></span>
									</div>
								</div>
								<div class="detail-small">
									<h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

									<h4 class="subtitle">by <?php the_author() ?> in <?php the_category(', ') ?></h4>

									<div class="comments">
										<?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?> <img src="<?php bloginfo('template_url'); ?>/images/comment.png" alt="Comments" />
									</div>
				
									<div class="article">
										<?php echo the_content('Read the rest of this entry &raquo;'); ?>
									</div>
								</div>	
								<div style="clear:both"></div>			
							</div>
						<? } ?>					
					<?php } else { ?>

						<h2 class="center">Not Found</h2>
						<p class="center">Sorry, but you are looking for something that isn't here.</p>
						<?php get_search_form(); ?>

					<?php } ?>
			
				</div>
				<div id="right">
					<?php get_sidebar(); ?>
				</div>
			</div>		
		</div>


<? get_footer(); ?>


