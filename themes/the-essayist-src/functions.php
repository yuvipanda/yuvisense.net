<?php

$content_width = 635;

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
		'name' => 'Left Sidebar',
        'before_widget' => '<div id="%1$s" class="left">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
	register_sidebar(array(
		'name' => 'Footer',
	    'before_widget' => '<li class="left"><div id="%1$s" class="footer section">',
	    'after_widget' => '</div></li>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>'
	));
    
}


function cancel_comment_reply_button($text = '') {
	if ( empty($text) )
		$text = __('Click here to cancel reply.');

	$style = isset($_GET['replytocom']) ? '' : ' style="display:none;"';
	$link = wp_specialchars( remove_query_arg('replytocom') ) . '#respond';	
	echo apply_filters('cancel_comment_reply_link', '<input name="cancel" id="cancel-comment-reply-link" type="button" class="cancel button" value="Cancel Reply" ' . $style . ' />', $link, $text);
}


function get_name() {
	$title = get_bloginfo('name');
	if ($parts = explode(' ', $title)) {
		$new_title = '<span class="bold">' . array_shift($parts) . '</span> ';
		$new_title .= '<span class="italic">' . implode(' ', $parts) .'</span>';
		echo $new_title;
	}
	else {
		echo '<span class="bold">' . $title .'</span>';
	}
}

function essayist_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; 	
	?>	
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">		
		<div id="comment-<?php comment_ID(); ?>">
			<div>
			<div class="comment-author vcard">
				<?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>
				<cite class="fn">
					<?php comment_author_link() ?>
					<span class="comment-meta commentmetadata">
						<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?>
					</span>
				</cite>
				<div style="clear:both"></div>
			</div>		

			
			</div>

			<?php comment_text() ?>
			
			<?php if ($comment->comment_approved == '0') : ?>
				<em>(<?php _e('Your comment is awaiting moderation.') ?>)</em>
				<br />
			<?php endif; ?>

			<div class="reply">
				<?php comment_reply_link(array_merge( $args, array('reply_text' => 'Reply', 'login_text' => 'Log in to reply.', 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
			</div>
		</div>		
		<?php		
}

?>