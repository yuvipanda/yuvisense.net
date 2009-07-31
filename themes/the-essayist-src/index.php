<? get_header(); ?>
	
	<div id="content">
		<div id="index">		
			<div id="posts">
				<div id="left">
					<?php 
						if (have_posts()) {  
							$postCount = 0;							
							while (have_posts()) {	
								the_post();							
								$postCount++;
								if ($postCount == 1 && !isset($_GET['paged'])) {
								
								?>							
								<div class="post main">		
									<div class="date">				
										<div class="background">
											<span class="day"><?php the_time('j') ?></span><br />
											<span class="month"><?php the_time('M') ?></span>
										</div>
									</div>
									<div class="detail">
										<h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
										
										<div class="info">
											<h4 class="subtitle">by <?php the_author() ?> in <?php the_category(', ') ?></h4>

											<div class="comments">
												<a href="<?php comments_link(); ?>"><span id="comment"><?php comments_popup_link('No Comments', '1 Comment', '% Comments', '', 'Comments are closed'); ?> <img src="<?php bloginfo('template_url'); ?>/images/comment.png" alt="Comments" /></span></a>
											</div>
											<div style="clear:both"></div>
										</div>
						
										<div class="article">
											<?php echo the_content('Keep reading &raquo;'); ?>
										</div>
									</div>	
									<div style="clear:both"></div>			
								</div>
							
								<? } else { ?>
							
								<div class="post main">		
									<div class="date-small">				
										<div class="background">
											<span class="day"><?php the_time('j') ?></span><br />
											<span class="month"><?php the_time('M') ?></span>
										</div>
									</div>
									<div class="detail-small">
										<h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
										
										<div class="info">
											<h4 class="subtitle">by <?php the_author() ?> in <?php the_category(', ') ?></h4>
											<div class="comments">
												<?php comments_popup_link('No Comments', '1 Comment', '% Comments', '', 'Comments closed'); ?> <img src="<?php bloginfo('template_url'); ?>/images/comment.png" alt="Comments" />
											</div>
											<div style="clear:both"></div>
										</div>			
										<div class="article">
											<?php echo the_content('Keep reading &raquo;'); ?>
										</div>
									</div>	
									<div style="clear:both"></div>			
								</div>
								<? } ?>
							<? } ?>
							<div class="navigation">
								<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
								<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
								<div style="clear:both">&nbsp;</div>
							</div>

					
					<?php } else { ?>

						<h1 style="font-size:2.0em">Sorry, but we can't find any posts!</h1>
						
					<?php } ?>
			
				</div>
				<div id="right">
					<?php get_sidebar(); ?>
				</div>
			</div>		
		</div>


<? get_footer(); ?>