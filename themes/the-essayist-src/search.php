<? get_header(); ?>
	
	<div id="content">
		<div id="archive">		
			<div id="posts">
				<div id="left">
					<?php if (have_posts()) { ?>
							
						<?php $post = $posts[0]; ?>						
							<h2 class="pagetitle">Search Results</h2>

					 		
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

						<h2 class="pagetitle">Sorry, no posts marked with '<?php echo $_POST['s']?>'.</h2>
						
					<?php } ?>
			
				</div>
				<div id="right">
					<?php get_sidebar(); ?>
				</div>
			</div>		
		</div>


<? get_footer(); ?>


