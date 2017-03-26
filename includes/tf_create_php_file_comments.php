<?php 
function tf_create_php_file_comments() {

$sitetitle_item = '
<h1 id="sitetitle"><a href="<?php echo get_option("home"); ?>/"><?php bloginfo("name"); ?></a></h1>
';	
$tagline_item = '
<p id="tagline"><?php bloginfo("description"); ?></p>
';	
$hormenu_item = '
<div id="hormenu" class="clearfix">
	<ul id="nav">
		<?php wp_list_pages("title_li="); ?>
	</ul>
</div>
';
$hormenu2_item = '
<div id="hormenu2" class="clearfix">
	<ul id="nav2">
		<?php wp_list_categories("title_li="); ?>
	</ul>
</div>
';
$headerimage_item = '
<div class="headerimage">
Header Images
</div>
';
$breadcrumb_item = '
<?php if ( function_exists("bcn_display") AND !is_front_page() ) { ?>
<div class="breadcrumbs" id="breadcrumbs1">
	<?php bcn_display(); ?>
</div>
<?php } ?>
';
$breadcrumb2_item = '
<?php if ( function_exists("bcn_display") AND !is_front_page() ) { ?>
<div class="breadcrumbs" id="breadcrumbs2">
	<?php bcn_display(); ?>
</div>
<?php } ?>
';
$pagetitle_item = '
<?php if ( is_archive() ) { ?>
 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h3 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h3>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h3 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h3>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h3 class="pagetitle">Archive for <?php the_time("F jS, Y"); ?></h3>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h3 class="pagetitle">Archive for <?php the_time("F, Y"); ?></h3>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h3 class="pagetitle">Archive for <?php the_time("Y"); ?></h3>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h3 class="pagetitle">Author Archive</h3>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET["paged"]) && !empty($_GET["paged"])) { ?>
		<h3 class="pagetitle">Blog Archives</h3>
 	  <?php } ?>
<?php } ?>
';
$multinav_item = '
<div class="multinav clearfix" id="multinav1">
	<div class="older">
		<?php next_posts_link("&laquo; Older Entries") ?>
	</div>
	<div class="newer">
		<?php previous_posts_link("Newer Entries &raquo;") ?>
	</div>
</div>	
';
$multinav2_item = '
<div class="multinav clearfix" id="multinav2">
	<div class="older">
		<?php next_posts_link("&laquo; Older Entries") ?>
	</div>
	<div class="newer">
		<?php previous_posts_link("Newer Entries &raquo;") ?>
	</div>
</div>
';
$singlenav_item = '
<div class="singlenav clearfix" id="singlenav1">
	<div class="older">
		<?php previous_post_link("&laquo; %link") ?>
	</div>
	<div class="newer">
		<?php next_post_link("%link &raquo;") ?>
	</div>
</div>	
';
$singlenav2_item = '
<div class="singlenav clearfix" id="singlenav2">
	<div class="older">
		<?php previous_post_link("&laquo; %link") ?>
	</div>
	<div class="newer">
		<?php next_post_link("%link &raquo;") ?>
	</div>
</div>	
';
$searchform_item = '
<div class="searchform">
	<form method="get" action="" >
		<input class="searchfield" type="text" name="s" value="" />
		<input class="searchbutton" type="submit" name="submit" value="Search" />
	</form>
</div>
';
$rsslink_item = '
<a href="#" class="rsslink">Posts</a>
';
$rsscommentslink_item = '
<a href="#" class="rsscommentslink">Comments</a>
';
$footer_item = '
<div id="div-footer">
	Footer - put your text here - <a href="http://mydomain.com/">My Site</a><br />
	Copyright &copy; 1999-2010 MySite.com &reg; and &trade;
</div>
';
// Widget Areas
$widgetarea_1 = '
<div class="widgetarea" id="widgetarea1">
	<?php dynamic_sidebar("WidgetArea-1"); ?>
</div>
';
$widgetarea_1_2 = '
<div class="widgetarea" id="widgetarea1-2">
	<?php dynamic_sidebar("WidgetArea-1-2"); ?>
</div>
';
$widgetarea_1_3 = '
<div class="widgetarea" id="widgetarea1-3">
	<?php dynamic_sidebar("WidgetArea-1-3"); ?>
</div>
';
$widgetarea_2 = '
<div class="widgetarea" id="widgetarea2">
	<table style="table-layout:fixed" width="100%" cellpadding="0" cellspacing="0">
	<colgroup><col class="col1" /><col class="col2" />
	</colgroup>
	<tr>
		<td class="td1">
			<?php dynamic_sidebar("WidgetArea-2 Col-1"); ?>
		</td>
		<td class="td2">
			<?php dynamic_sidebar("WidgetArea-2 Col-2"); ?>
		</td>
	</tr>
	</table>
</div>
';
$widgetarea_2_2 = '
<div class="widgetarea" id="widgetarea2-2">
	<table style="table-layout:fixed" width="100%" cellpadding="0" cellspacing="0">
	<colgroup><col class="col1" /><col class="col2" />
	</colgroup>
	<tr>
		<td class="td1">
			<?php dynamic_sidebar("WidgetArea-2-2 Col-1"); ?>
		</td>
		<td class="td2">
			<?php dynamic_sidebar("WidgetArea-2-2 Col-2"); ?>
		</td>
	</tr>
	</table>
</div>
';
$widgetarea_3 = '
<div class="widgetarea" id="widgetarea3">
	<table style="table-layout:fixed" width="100%" cellpadding="0" cellspacing="0">
	<colgroup><col class="col1" /><col class="col2" /><col class="col3" /></colgroup>
	<tr>
	<td class="td1">
		<?php dynamic_sidebar("WidgetArea-3 Col-1"); ?>
	</td>
	<td class="td2">
		<?php dynamic_sidebar("WidgetArea-3 Col-2"); ?>
	</td>
	<td class="td3">
		<?php dynamic_sidebar("WidgetArea-3 Col-3"); ?>
	</td>
	</tr>
	</table>
</div>
';
$widgetarea_4 = '
<div class="widgetarea" id="widgetarea4">
	<table style="table-layout:fixed" width="100%" cellpadding="0" cellspacing="0">
	<colgroup><col class="col1" /><col class="col2" />
	<col class="col3" /><col class="col4" />
	</colgroup>
	<tr>
	<td class="td1">
		<?php dynamic_sidebar("WidgetArea-4 Col-1"); ?>
	</td>
	<td class="td2">
		<?php dynamic_sidebar("WidgetArea-4 Col-2"); ?>
	</td>
	<td class="td3">
		<?php dynamic_sidebar("WidgetArea-4 Col-3"); ?>
	</td>
	<td class="td4">
		<?php dynamic_sidebar("WidgetArea-4 Col-4"); ?>
	</td>
	</tr>
	</table>
</div>
';
$widgetarea_5 = '
<div class="widgetarea" id="widgetarea5">
	<table style="table-layout:fixed" width="100%" cellpadding="0" cellspacing="0">
	<colgroup><col class="col1" /><col class="col2" />
	<col class="col3" /><col class="col4" /><col class="col5" />
	</colgroup>
	<tr>
	<td class="td1">
		<?php dynamic_sidebar("WidgetArea-5 Col-1"); ?>
	</td>
	<td class="td2">
		<?php dynamic_sidebar("WidgetArea-5 Col-2"); ?>
	</td>
	<td class="td3">
		<?php dynamic_sidebar("WidgetArea-5 Col-3"); ?>
	</td>
	<td class="td4">
		<?php dynamic_sidebar("WidgetArea-5 Col-4"); ?>
	</td>
	<td class="td5">
		<?php dynamic_sidebar("WidgetArea-5 Col-5"); ?>
	</td>
	</tr>
	</table>
</div>
';
$widgetarea_6 = '
<div class="widgetarea" id="widgetarea6">
	<table style="table-layout:fixed" width="100%" cellpadding="0" cellspacing="0">
	<colgroup><col class="col1" /><col class="col2" />
	<col class="col3" /><col class="col4" />
	<col class="col5" /><col class="col6" />
	</colgroup>
	<tr>
	<td class="td1">
		<?php dynamic_sidebar("WidgetArea-6 Col-1"); ?>
	</td>
	<td class="td2">
		<?php dynamic_sidebar("WidgetArea-6 Col-2"); ?>
	</td>
	<td class="td3">
		<?php dynamic_sidebar("WidgetArea-6 Col-3"); ?>
	</td>
	<td class="td4">
		<?php dynamic_sidebar("WidgetArea-6 Col-4"); ?>
	</td>
	<td class="td5">
		<?php dynamic_sidebar("WidgetArea-6 Col-5"); ?>
	</td>
	<td class="td6">
		<?php dynamic_sidebar("WidgetArea-6 Col-6"); ?>
	</td>
	</tr>
	</table>
</div>
';

global $thfr_css;

echo '
<?php
// Do not delete these lines
	if (!empty($_SERVER["SCRIPT_FILENAME"]) && "comments.php" == basename($_SERVER["SCRIPT_FILENAME"]))
		die ("Please do not load this page directly. Thanks!");

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<a name="comments"></a><!-- named anchor for skip links -->
	<h3 id="comments">
		<?php comments_number("No Responses", "One Response", "% Responses" );?> to &#8220;<?php the_title(); ?>&#8221;
	</h3>
	<?php $paginateCommentsLinks = paginate_comments_links("echo=0"); 
	if ($paginateCommentsLinks != "") { ?>
	<div class="commentnav" id="commentnav1">
		<?php echo $paginateCommentsLinks; ?>
	</div>
	<?php } ?>
	<ul class="commentlist">
		<?php wp_list_comments(array(
			"avatar_size" => 50,
			"reply_text" => " &middot; Reply",
			"login_text" => "Log in to Reply",
			"callback" => thfr_comments, 
			"type" => "all"
			));
		?>
	</ul>
	<?php $paginateCommentsLinks = paginate_comments_links("echo=0"); 
	if ($paginateCommentsLinks != "") { ?>
	<div class="commentnav" id="commentnav2">
		<?php echo $paginateCommentsLinks; ?>
	</div>
	<?php } ?>
<?php else : // this is displayed if there are no comments so far ?>
	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->
	<?php else : // comments are closed ?>
		<!-- If comments are closed. -->
	<?php endif; ?>
<?php endif; ?>

<?php if ( comments_open() ) : ?>
	<div id="respond">
		<a name="commentform"></a><!-- named anchor for skip links -->
		<h3 class="reply">
			<?php comment_form_title( "Leave a Reply", "Leave a Reply to %s" ); ?>
		</h3>
		<div id="cancel-comment-reply">
			<?php cancel_comment_reply_link(); ?>
		</div>
		<?php if ( get_option("comment_registration") && !is_user_logged_in() ) : ?>
			<p>
				You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.
			</p>	
		<?php else : ?>
			<form action="<?php echo get_option("siteurl"); ?>/wp-comments-post.php" method="post" id="commentform">	
				<?php if ( is_user_logged_in() ) : ?>
					<p>
						Logged in as <a href="<?php echo get_option("siteurl"); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. 
						<a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a>
					</p>
				<?php else : ?>
					<p>
						<input class="text author" type="text" name="author" id="author-input" value="<?php echo esc_attr($comment_author); ?>" size="30" tabindex="1" <?php if ($req) echo "aria-required=\"true\""; ?> />&nbsp;
						<label for="author"> <strong>Name</strong> <?php if ($req) echo "(required)"; ?></label>
					</p>
					<p>
						<input class="text email" type="text" name="email" id="email-input" value="<?php echo esc_attr($comment_author_email); ?>" size="30" tabindex="2" <?php if ($req) echo "aria-required=\"true\""; ?> />&nbsp;
						<label id="email-label" for="email"> <strong>Mail</strong> (will not be published) <?php if ($req) echo "(required)"; ?></label>
					</p>
					<p>
						<input class="text url" type="text" name="url" id="url-input" value="<?php echo esc_attr($comment_author_url); ?>" size="30" tabindex="3" />&nbsp;
						<label id="url-label" for="url">Website</label>
					</p>		
				<?php endif; ?>

				<p class="thesetags clearfix">
					You can use these HTML tags:
				</p>	
				<p class="xhtml-tags">
						<code><?php echo allowed_tags(); ?></code>
				</p>
				<p>
					<textarea name="comment" id="comment-textarea" rows="10" cols="60" tabindex="4"></textarea>
				</p>
				<p>
					<input name="submit" type="submit" class="button" id="comment-submit" tabindex="5" value="Submit Comment" />
					<?php comment_id_fields(); ?>
				</p>	
				<?php do_action("comment_form", $post->ID); ?>		
			</form>
		<?php endif; // If registration required and not logged in ?>
	</div><!-- div#respond -->
<?php endif; // If comments are open ?>
';

} ?>