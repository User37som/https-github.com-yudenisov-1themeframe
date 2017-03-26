<?php function tf_create_functions_file() {
global $thfr_css;
echo '<?php
// Helper function to avoid repetitive code when creating widget areas
function register_these_widget_areas($names) {
	foreach($names as $name) {
		register_sidebar(array(
			"name" => $name, 
			"before_widget" => \'<div id="%1$s" class="widget %2$s">\', 
			"after_widget" => "</div>", 
			"before_title" => "<h3>", 
			"after_title" => "</h3>"
		));
	}
}

// 6 Default Sidebar Widget Areas
register_these_widget_areas(array("LEFT-1", "LEFT-2", "LEFT-3", "RIGHT-1", "RIGHT-2", "RIGHT-3"));
';

// Create Custom Widget Areas
$widgetAreaArray = array();
foreach ( array('index', 'home', 'page', 'single') as $pageTemplates ) {
	foreach ( array('header', 'centerTop', 'centerBottom', 'footer') as $dropArea ) {
		for ( $i = 0; $i <= 24; $i++ ) {
			switch ( $thfr_css[$pageTemplates][$dropArea . '-' . $i] ) {
				case "widgetarea_1"		: $widgetAreaArray[] = "WidgetArea-1"; break;
				case "widgetarea_1_2"	: $widgetAreaArray[] = "WidgetArea-1-2"; break;
				case "widgetarea_1_3"	: $widgetAreaArray[] = "WidgetArea-1-3"; break;
				case "widgetarea_2"		: array_push($widgetAreaArray , 'WidgetArea-2 Col-1', 'WidgetArea-2 Col-2'); break;
				case "widgetarea_2_2"	: array_push($widgetAreaArray , 'WidgetArea-2-2 Col-1', 'WidgetArea-2-2 Col-2'); break;
				case "widgetarea_3"		: array_push($widgetAreaArray , 'WidgetArea-3 Col-1', 'WidgetArea-3 Col-2', 'WidgetArea-3 Col-3'); break;
				case "widgetarea_4"		: array_push($widgetAreaArray , 'WidgetArea-4 Col-1', 'WidgetArea-4 Col-2', 'WidgetArea-4 Col-3', 'WidgetArea-4 Col-4'); break;
				case "widgetarea_5"		: array_push($widgetAreaArray , 'WidgetArea-5 Col-1', 'WidgetArea-5 Col-2', 'WidgetArea-5 Col-3', 'WidgetArea-5 Col-4', 'WidgetArea-5 Col-5'); break;
				case "widgetarea_6"		: array_push($widgetAreaArray , 'WidgetArea-6 Col-1', 'WidgetArea-6 Col-2', 'WidgetArea-6 Col-3', 'WidgetArea-6 Col-4', 'WidgetArea-6 Col-5', 'WidgetArea-6 Col-6'); break;
			}
		}
	}
}
if (isset($widgetAreaArray)) {
	// remove double entries:
	$widgetAreaArray = array_unique($widgetAreaArray);
	// print code for custom widget areas
	echo "register_these_widget_areas(array('" . implode("','", $widgetAreaArray) . "'));";
}

// Fallback for menus
echo '

function tf_pagemenu() {
	echo \'<div id="hormenu" class="clearfix"><ul id="nav" class="menu">\';
	wp_list_pages("title_li=");
	echo \'</ul></div>\';
}
function tf_catmenu() {
	echo \'<div id="hormenu2" class="clearfix"><ul id="nav2" class="menu">\';
	wp_list_categories("title_li=");
	echo \'</ul></div>\';
}
';

echo '
// Custom comments
function thfr_comments($comment, $args, $depth) {
$GLOBALS["comment"] = $comment; ?>
<li <?php comment_class($class="clearfix") ?> id="comment-<?php comment_ID(); ?>">
	<div id="div-comment-<?php comment_ID(); ?>" class="clearfix comment-container<?php 
	$comment = get_comment($comment_id);
	if ( $post = get_post($post_id) ) {
		if ( $comment->user_id === $post->post_author )
			echo " bypostauthor";
	} ?>">
		<?php if ($args["avatar_size"] != 0) echo get_avatar( $comment, $args["avatar_size"] ); ?>
		<span class="comment-author-name"><?php comment_author_link(); ?></span><br />
		<?php if ($comment->comment_approved == "0") : ?>
			<em><?php _e("Your comment is awaiting moderation.") ?></em><br />
		<?php endif; ?>
		<span class="comment-date-link">
			<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
			<?php echo get_comment_date() . " at " .  get_comment_time(); ?></a>
		</span>
		<?php echo comment_reply_link(array(
			"before" => " | <span class=\"comment-reply-link\">", 
			"after" => "</span>", 
			"reply_text" => "Reply", 
			"depth" => $depth, 
			"max_depth" => $args["max_depth"] 
			));  
		?>
		<?php edit_comment_link(__("Edit")," | <span class=\"comment-edit-link\">","</span>") ?> 
		<?php delete_comment_link(get_comment_ID()); ?>
		<?php comment_text() ?>
	</div>
<?php
}

// Excerpt Length:
function tf_excerpt_length($length) {
	return ' . $thfr_css['excerpt']['length'] . ';
}
add_filter("excerpt_length", "tf_excerpt_length");

// Excerpt Read More:
function tf_excerpt_more($more) {
	global $post;
	return str_replace( array( "%title%", "%url%" ), array( the_title("","",FALSE), get_permalink($post->ID) ), "' . str_replace('"', '\\"', $thfr_css['excerpt']['readmore']) . '" );
}
add_filter("excerpt_more", "tf_excerpt_more");



// Add Spam and Delete links to comments
function delete_comment_link($id) {  
	if (current_user_can("edit_post")) {  
		echo \' | <span class="comment-delete-link"><a href="\'.admin_url("comment.php?action=cdc&c=$id").\'">Delete</a></span>\';  
		echo \' | <span class="comment-spam-link"><a href="\'.admin_url("comment.php?action=cdc&dt=spam&c=$id").\'">Spam</a></span>\';  
	}  
}  

if ( function_exists( "add_theme_support" ) ) { 
	add_theme_support( "post-thumbnails" );
	set_post_thumbnail_size( 200, 200, true );
	add_image_size( "single-post-thumbnail", 400, 9999 ); // Permalink thumbnail size
}
	
if (function_exists("register_nav_menus")) {
add_action( "init", "register_new_menus" );
	function register_new_menus() {
		register_nav_menus(
			array(
				"menu1" => __( "Menu 1" ),
				"menu2" => __( "Menu 2" )
			)
		);
	}
}

' . $thfr_css['customphp'] . '?>'; 

} ?>