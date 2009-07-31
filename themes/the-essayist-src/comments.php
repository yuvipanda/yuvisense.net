<div id="extra">	
	<?php if (is_single() || (is_page() && ('open' == $post->comment_status))) { ?>
		
		<div id="comments">
			<h3><?php comments_number('No Comments', '1 Comment', '% Comments'); ?> <?php if (paginate_comments_links('echo=0') != '') { ?>( <?php paginate_comments_links(); ?>  )<? } ?></h3>

			<?php if ( have_comments() ) { ?>
				<ul class="comment-list">
					<?php wp_list_comments('type=comment&callback=essayist_comment'); ?>			
					
					<?php if (!empty($comments_by_type['pings'])) { ?>
						<?php wp_list_comments('type=pings&callback=essayist_comment'); ?>				
					<?php } ?>
				</ul>
			<?php } ?>
		</div>
		
		<div id="left">
			&nbsp;			
			<?php if ( $user_ID ) { ?>
				<div>
					You are currently logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. 
					<a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a>
				</div>
			<? } ?>
			<?php if ('open' == $post->comment_status) { ?>
				<div id="respond">
					<div id="comment-reply">			
						<!-- <h3><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h3> -->				
						<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
							<?php if ( !$user_ID ) { ?>
					
								<div>
									<label for="author">Name</label>
									<input class="field" id="author" name="author" type="text" />
							   	</div>
								<div>
									<label for="email">Email</label>
									<input class="field" id="email" name="email" type="text" />
							   	</div>
								<div>
									<label for="url">Website</label>
									<input class="field" id="url" name="url" type="text" />
							   	</div>
							<?php } ?>
						<div>
							<label for="comment">Comment</label>
							<textarea id="comment" name="comment" rows="10" cols="20"></textarea>
					   	</div>
						<div id="reply-back">
							<p>						
								<?= cancel_comment_reply_button() ?>
								<input name="submit" type="submit" class="submit button" tabindex="5" value="Submit Comment" />
							<?php comment_id_fields(); ?>
							</p>
							<?php do_action('comment_form', $post->ID); ?>
					   	</div>
						</form>
					</div>
				</div>
			<? } else { ?>
				<p class="no-comments">Comments have been closed for this post.</p>
			<? } ?>		
			<div style="clear:both"></div>
		</div>
		<div id="right">
			<div id="feed-links">
				<? if (is_single()) { the_post(); } ?>
				<p>
					This entry is <em>filed under</em> <?php the_category(', ') ?><?php if (get_the_tags()) { ?> and <em>tagged with</em> <?php the_tags('',', ','')?><? } ?>.
				</p>
				<p>
					You can also follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.
				</p>
				<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) { ?>
					<p>
						Or perhaps you're just looking for the <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> and/or the <a href="<?php the_permalink(); ?>">permalink</a>.
					</p>
				<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) { ?>
					<p>
						Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.
					</p>
				<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) { ?>
					<p>
						You can skip to the end and leave a response. Pinging is currently not allowed.
					</p>
				<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) { ?>
					<p>
						Both comments and pings are currently closed.
					</p>
				<? } ?>
			</div>
			<div style="clear:both"></div>
		</div>
	<?php } ?>
</div>