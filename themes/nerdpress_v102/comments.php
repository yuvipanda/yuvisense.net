<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">This post is password protected. Enter the password to view comments.</p>

			<?php
			return;
		}
	}
	
	/* This variable is for alternating comment background */
	$oddcomment = 'alt';
	
?>

<!-- comments start here -->
<div class="comments">

	<?php if ($comments) : ?>
	
	<h2 style="border-bottom:1px solid #ccc; margin-bottom:0; padding-bottom:25px;"><?php comments_number('No Reader Comments', 'One Reader Comment', '% Reader Comments' );?> <?php if ('open' == $post->comment_status){ ?><a href="#respond" style="font-size:90%;">(Reply Now)</a><?php } ?></h2>
	
	<ol class="comments-list">

		<?php foreach ($comments as $comment) : ?>
		
		<li id="comment-<?php comment_ID() ?>">
		
			<!-- one comment -->
			<div class="comment"<?php if ($comment->comment_author_email == get_the_author_email()) { echo ' id="author_comment"'; } ?>>
						
				<div class="comment-info">
					<p class="comment-date"><?php comment_date('F jS, Y') ?></p>
					<p class="comment-time">@ <?php comment_time() ?></p>
					
				</div>
			
				<div class="comment-content">
					<div class="author"><?php comment_author_link() ?> posted:</div>
					<div class="author-comment">
						
						<?php if ($comment->comment_approved == '0') : ?>
						 <span class="author-mod">Your comment is awaiting moderation.</span>
						<?php endif; ?>
						
						<?php comment_text() ?>
						
					</div>
				</div>
			</div>
			
		</li>
		

		<?php endforeach; /* end for each comment */ ?>

	</ol>

 	<?php else : // this is displayed if there are no comments so far ?>

		<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->
		<h2>No Reader Comments <a href="#respond" style="font-size:90%;">(Be The First?)</a></h2>

	 	<?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<h2>Sorry but Comments have been closed for this particular post.</h2>

		<?php endif; ?>

	<?php endif; ?>
		
	<div style="clear:both;"></div>
		
		
</div>		
		

<?php if ('open' == $post->comment_status) : ?>

<div class="form">
	
	<h2 id="respond" style="margin-bottom:0; padding:0;">Leave a Reply</h2>

	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
	
		<div class="form-section">

			<div>
				You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</label>
			</div>
		
		</div>
	
	<?php else : ?>
	

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php?test=1" method="post" id="commentform">
	
		<?php if ( $user_ID ) : ?>
		
		<div class="form-section">
		
			<div class="form-labels">
				<label for="author">Name</label>
			</div>
			
			<div class="form-box" style="color:#3C3C3C;">
				<div class="form-login">Currently logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. If this is not you, please <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">logout</a>.</p>
			</div>
		
		</div>

		<?php else : ?>
		
		<div class="form-section">

			<div class="form-labels">
				<label for="author">Name</label>
			</div>
			
			<div class="form-box">
				<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" class="form-name" tabindex="1" /> <?php if ($req) echo "(Required)"; ?>
			</div>
		
		</div>

		<div class="form-section">
		
			<div class="form-labels">
				<label for="email">Mail (Never Published)</label>
			</div>

			<div class="form-box">
				<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" class="form-email" tabindex="2" /> <?php if ($req) echo "(Required)"; ?>
			</div>
		
		</div>
		
		<div class="form-section">
		
			<div class="form-labels">
				<label for="url">Website</label>
			</div>
	
			<div class="form-box">
				<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" class="form-site" tabindex="3" />
			</div>

		</div>

		<?php endif; ?>

		<!--<p><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></p>-->
	
		<div class="form-section">

			<div class="form-labels">
				<label for="comment" style="align:right;">Comment</label>
			</div>
			
			<div class="form-box">
				<textarea name="comment" id="comment" class="form-textbox" tabindex="4"></textarea>
			</div>
		
		</div>
		
		<div class="form-section">

			<div class="form-box">
				<input name="submit" type="submit" id="submit" class="form-submit" tabindex="5" value="Submit Comment" />
				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
			</div>
		
		</div>

		<?php do_action('comment_form', $post->ID); ?>

	</form>
	
	<div style="clear:both;"></div>
	
</div>

	<?php endif; // If registration required and not logged in ?>

</div>

<?php endif; // if you delete this the sky will fall on your head ?>
