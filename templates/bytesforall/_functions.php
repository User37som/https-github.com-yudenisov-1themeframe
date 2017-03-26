<?php
// Helper function to avoid repetitive code when creating widget areas
function register_these_widget_areas($names) {
	foreach($names as $name) {
		register_sidebar(array(
			'name' => $name, 
			'before_widget' => '<div id="%1$s" class="widget %2$s">', 
			'after_widget' => '</div>', 
			'before_title' => '<h3>', 
			'after_title' => '</h3>'
		));
	}
}

// 6 Default Sidebar Widget Areas - Don't Edit
register_these_widget_areas(array('LEFT-1', 'LEFT-2', 'LEFT-3', 'RIGHT-1', 'RIGHT-2', 'RIGHT-3'));

// Up to 25 custom Widget Areas in 9 widget area groups:
// ACTIVATE / DEACTIVATE any of the following 9 custom widget area groups by putting/removing one hash character # in front of the corresponding line:
// See this example in the following line:
#    ... this code here is ignored ... because of the hash # character at the beginning of this line.

register_these_widget_areas(array(

	'WidgetArea-1',
#	'WidgetArea-1-2',
#	'WidgetArea-1-3',
#	'WidgetArea-2 Col-1', 'WidgetArea-2 Col-2',
#	'WidgetArea-2-2 Col-1', 'WidgetArea-2-2 Col-2',	
#	'WidgetArea-3 Col-1', 'WidgetArea-3 Col-2', 'WidgetArea-3 Col-3',	
#	'WidgetArea-4 Col-1', 'WidgetArea-4 Col-2', 'WidgetArea-4 Col-3', 'WidgetArea-4 Col-4',
#	'WidgetArea-5 Col-1', 'WidgetArea-5 Col-2', 'WidgetArea-5 Col-3', 'WidgetArea-5 Col-4', 'WidgetArea-5 Col-5',
#	'WidgetArea-6 Col-1', 'WidgetArea-6 Col-2', 'WidgetArea-6 Col-3', 'WidgetArea-6 Col-4', 'WidgetArea-6 Col-5', 'WidgetArea-6 Col-6',

));
// After you've changed the custom widget area settings, reload one page of your site


// Custom comments
function thfr_comments($comment, $args, $depth) {
$GLOBALS['comment'] = $comment; ?>
<li <?php comment_class($class='clearfix') ?> id="comment-<?php comment_ID(); ?>">
	<div id="div-comment-<?php comment_ID(); ?>" class="clearfix comment-container<?php 
	$comment = get_comment($comment_id);
	if ( $post = get_post($post_id) ) {
		if ( $comment->user_id === $post->post_author )
			echo ' bypostauthor';
	} ?>">
		<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['avatar_size'] ); ?>
		<span class="comment-author-name"><?php comment_author_link(); ?></span><br />
		<?php if ($comment->comment_approved == '0') : ?>
			<em><?php _e('Your comment is awaiting moderation.') ?></em><br />
		<?php endif; ?>
		<span class="comment-date-link">
			<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
			<?php trim(printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time())); ?></a>
		</span>
		<?php echo comment_reply_link(array(
			'before' => ' | <span class="comment-reply-link">', 
			'after' => '</span>', 
			'reply_text' => 'Reply', 
			'depth' => $depth, 
			'max_depth' => $args['max_depth'] 
			));  
		?>
		<?php edit_comment_link(__('Edit'),' | <span class="comment-edit-link">','</span>') ?> 
		<?php delete_comment_link(get_comment_ID()); ?>
		<?php comment_text() ?>
	</div>
<?php
}

// Add Spam and Delete links to comments
function delete_comment_link($id) {  
	if (current_user_can('edit_post')) {  
		echo ' | <span class="comment-delete-link"><a href="'.admin_url("comment.php?action=cdc&c=$id").'">Delete</a></span>';  
		echo ' | <span class="comment-spam-link"><a href="'.admin_url("comment.php?action=cdc&dt=spam&c=$id").'">Spam</a></span>';  
	}  
}  
 
?>