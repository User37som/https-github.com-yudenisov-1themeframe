<?php 
function tf_create_php_file($thisTemplate) {

global $thfr_css;

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
<div class="headerimage"></div>
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

$pagetitle_item = $thfr_css['multipagetitles'];

$multinav_item = '
<div class="multinav clearfix" id="multinav1">
	<div class="older">
		' . $thfr_css['nextprevnav']['multi-left'] . '
	</div>
	<div class="newer">
		' . $thfr_css['nextprevnav']['multi-right'] . '
	</div>
</div>	
';

$multinav2_item = '
<div class="multinav clearfix" id="multinav2">
	<div class="older">
		' . $thfr_css['nextprevnav']['multi2-left'] . '
	</div>
	<div class="newer">
		' . $thfr_css['nextprevnav']['multi2-right'] . '
	</div>
</div>
';

$singlenav_item = '
<div class="singlenav clearfix" id="singlenav1">
	<div class="older">
		' . $thfr_css['nextprevnav']['single-left'] . '
	</div>
	<div class="newer">
		' . $thfr_css['nextprevnav']['single-right'] . '
	</div>
</div>	
';
$singlenav2_item = '
<div class="singlenav clearfix" id="singlenav2">
	<div class="older">
		' . $thfr_css['nextprevnav']['single2-left'] . '
	</div>
	<div class="newer">
		' . $thfr_css['nextprevnav']['single2-right'] . '
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
<a href="<?php bloginfo("rss2_url"); ?>" class="rsslink">Posts</a>
';
$rsscommentslink_item = '
<a href="<?php bloginfo("comments_rss2_url"); ?>" class="rsscommentslink">Comments</a>
';
$feedburner_item = '
<a href="#" class="feedburnerlink">By Email</a>
';
$twitter_item = '
<a href="#" class="twitterlink">Twitter</a>
';
$facebook_item = '
<a href="#" class="facebooklink">Facebook</a>
';
$footer_item = '
<div id="div-footer">' . $thfr_css['footercontent'] . '</div>
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

if($thisTemplate != 'comments') {

$colspan = 1;
if ($thfr_css[$thisTemplate]['sidebarsleft'] > 0) $colspan++;
if ($thfr_css[$thisTemplate]['sidebarsright'] > 0) $colspan++;

if ($thfr_css[$thisTemplate]['sidebarsleft'] > 1) {
	$col_left_width = str_replace('px','',$thfr_css['left-left-width']) + str_replace('px','',$thfr_css['left-right-width']) . 'px';
} else {
	$col_left_width = $thfr_css['left-left-width'];
}

if ($thfr_css[$thisTemplate]['sidebarsright'] > 1) {
	$col_right_width = str_replace('px','',$thfr_css['right-left-width']) + str_replace('px','',$thfr_css['right-right-width']) . 'px';
} else {
	$col_right_width = $thfr_css['right-right-width'];
}

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo("html_type"); ?>; charset=<?php bloginfo("charset"); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title><?php wp_title("&laquo;", true, "right"); ?> <?php bloginfo("name"); ?></title>
<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo("name"); ?> RSS Feed" href="<?php bloginfo("rss2_url"); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo("name"); ?> Atom Feed" href="<?php bloginfo("atom_url"); ?>" />
<link rel="pingback" href="<?php bloginfo("pingback_url"); ?>" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/javascript.js"></script>
<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
<?php wp_head(); ?>
';

# echo $thfr_css['customhead'];
// head insert
if ($thfr_css['codeinserts']['head'][$thisTemplate . '-global'] == 'on' 
	AND $thfr_css['codeinserts']['head']['global'] != '' ) 
{ 
	echo $thfr_css['codeinserts']['head']['global']; 
} 

if ($thfr_css['codeinserts']['head'][$thisTemplate . '-custom'] == 'on' 
	AND $thfr_css['codeinserts']['head'][$thisTemplate] != '' ) 
{ 
	echo $thfr_css['codeinserts']['head'][$thisTemplate]; 
} 

echo '
</head>
';

// bodytag insert
if ($thfr_css['codeinserts']['bodytag'][$thisTemplate . '-custom'] == 'on' 
	AND $thfr_css['codeinserts']['bodytag'][$thisTemplate] != '' ) 
{ 
	echo $thfr_css['codeinserts']['bodytag'][$thisTemplate]; 
} 
else if ($thfr_css['codeinserts']['bodytag'][$thisTemplate . '-global'] == 'on' 
	AND $thfr_css['codeinserts']['bodytag']['global'] != '' ) 
{ 
	echo $thfr_css['codeinserts']['bodytag']['global']; 
} 
else 
{
	echo '<body <?php body_class(); ?>>';
}

# echo $thfr_css['custombodytop'];
// bodytop insert
if ($thfr_css['codeinserts']['bodytop'][$thisTemplate . '-global'] == 'on' 
	AND $thfr_css['codeinserts']['bodytop']['global'] != '' ) 
{ 
	echo $thfr_css['codeinserts']['bodytop']['global']; 
} 

if ($thfr_css['codeinserts']['bodytop'][$thisTemplate . '-custom'] == 'on' 
	AND $thfr_css['codeinserts']['bodytop'][$thisTemplate] != '' ) 
{ 
	echo $thfr_css['codeinserts']['bodytop'][$thisTemplate]; 
} 


echo '<div id="wrapper"';
if ($thfr_css[$thisTemplate]['uniquewidth'] != '') echo ' style="width:' . $thfr_css[$thisTemplate]['uniquewidth'] . '"';
echo '>
<div id="container">
<table id="layout" border="0" cellspacing="0" cellpadding="0">
<colgroup>' . 
($thfr_css[$thisTemplate]['sidebarsleft'] > 0 ? '<col style="width:'. $col_left_width . '" />' : '') . '<col class="col-center" />' . 
($thfr_css[$thisTemplate]['sidebarsright'] > 0 ? '<col style="width:'. $col_right_width . '" />' : '') . 
'</colgroup>
<tr>
<td id="td-header" colspan="' . $colspan . '">
<div id="div-header">
'; 

$i = 0;
while ($thfr_css[$thisTemplate]['header-'.$i] != '') {
	echo $$thfr_css[$thisTemplate]['header-'.$i];
	$i++;
}

echo '
</div>
</td>
</tr>
<tr>';

if ($thfr_css[$thisTemplate]['sidebarsleft'] > 0) { echo 
'<td id="td-left">
	<table border="0" cellspacing="0" cellpadding="0">
	<colgroup><col class="col-left-left" />' . 
	($thfr_css[$thisTemplate]['sidebarsleft'] > 1 ? '<col class="col-left-right" />' : '') . 
	'</colgroup>' . 
	($thfr_css[$thisTemplate]['sidebarsleft'] == 3 ? '
		<tr>
			<td colspan="2" id="td-left3">
				<div id="div-left3">
				<?php dynamic_sidebar("LEFT-3"); ?>
				</div>
			</td>
		</tr>' : '') . 
		'<tr>
			<td id="td-left1">
				<div id="div-left1">					
				<?php dynamic_sidebar("LEFT-1"); ?>
				</div>
			</td>' . 
			($thfr_css[$thisTemplate]['sidebarsleft'] > 1 ? '
			<td id="td-left2">
				<div id="div-left2">	
				<?php dynamic_sidebar("LEFT-2"); ?>
				</div>
			</td>' : '') . 
		'</tr>
	</table>	
</td>'; }

echo '<td id="td-center">
	<div id="div-center">
';

$i = 0;
while ($thfr_css[$thisTemplate]['centerTop-'.$i] != '') {
	echo $$thfr_css[$thisTemplate]['centerTop-'.$i];
	$i++;
}

echo '


<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
';

if ($thfr_css['postinfo-' . $thisTemplate . '-kicker'] != '') {
	echo '<div class="post-kicker">' . $thfr_css['postinfo-' . $thisTemplate . '-kicker'] . '</div>';
}

echo '		
			<div class="post-headline">
				<h2>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h2>
			</div>
';			

if ($thfr_css['postinfo-' . $thisTemplate . '-byline'] != '') {
	echo '<div class="post-byline">' . $thfr_css['postinfo-' . $thisTemplate . '-byline'] . '</div>';
}


echo '
			<div class="post-bodycopy clearfix">
			
				<?php if (is_single() OR is_page()) { 
					$thfr_more_tag_final = str_replace("%title%", the_title("", "", false), "' . $thfr_css["read_more_text"] . '");
					the_content($thfr_more_tag_final); 
				} else { 
					if (function_exists("the_post_thumbnail") AND !function_exists("tfe_get_image")) the_post_thumbnail();
					the_excerpt(); 
				} 
				?>
	
			</div>
';

if ($thisTemplate != 'page') {
echo '	
			<div class="post-footer">
				<?php the_tags("Tags: ", ", ", "<br />"); ?> Posted in <?php the_category(", ") ?> | <?php edit_post_link("Edit", "", " | "); ?>  <?php comments_popup_link("No Comments &#187;", "1 Comment &#187;", "% Comments &#187;"); ?>
			</div>
';}

echo '
		</div>

	<?php endwhile; ?>

<?php if ( is_single() ) { comments_template(); } ?>

<?php else : ?>

	<h2 class="center">Not Found</h2>
	<p class="center">Sorry, but you are looking for something that is not here.</p>
	<?php get_search_form(); ?>

<?php endif; ?>
	
';



$i = 0;
while ($thfr_css[$thisTemplate]['centerBottom-'.$i] != '') {
	echo $$thfr_css[$thisTemplate]['centerBottom-'.$i];
	$i++;
}


echo '
		
	</div>
</td>';

if ($thfr_css[$thisTemplate]['sidebarsright'] > 0) { echo 
'<td id="td-right">
	<table border="0" cellspacing="0" cellpadding="0">
	<colgroup><col class="col-right-left" />' . 
	($thfr_css[$thisTemplate]['sidebarsright'] > 1 ? '<col class="col-right-right" />' : '') . 
	'</colgroup>' . 
	($thfr_css[$thisTemplate]['sidebarsright'] == 3 ? '
		<tr>
			<td colspan="2" id="td-right3">
				<div id="div-right3">
				<?php dynamic_sidebar("RIGHT-3"); ?>
				</div>
			</td>
		</tr>' : '') . 
		'<tr>' . 
			($thfr_css[$thisTemplate]['sidebarsright'] > 1 ? '
			<td id="td-right2">
				<div id="div-right2">					
				<?php dynamic_sidebar("RIGHT-2"); ?>
				</div>
			</td>' : '') . 
			'<td id="td-right1">
				<div id="div-right1">	
				<?php dynamic_sidebar("RIGHT-1"); ?>
				</div>
			</td>
		</tr>
	</table>	
</td>';
}

echo '</tr><tr>

<td id="td-footer" colspan="3">

';


$i = 0;
while ($thfr_css[$thisTemplate]['footer-'.$i] != '') {
	echo $$thfr_css[$thisTemplate]['footer-'.$i];
	$i++;
}


echo '

</td>

</tr></table><!-- layout -->
</div><!-- container -->
</div><!-- wrapper -->';

# echo $thfr_css['custombodybottom'];
// bodybottom insert
if ($thfr_css['codeinserts']['bodybottom'][$thisTemplate . '-global'] == 'on' 
	AND $thfr_css['codeinserts']['bodybottom']['global'] != '' ) 
{ 
	echo $thfr_css['codeinserts']['bodybottom']['global']; 
} 

if ($thfr_css['codeinserts']['bodybottom'][$thisTemplate . '-custom'] == 'on' 
	AND $thfr_css['codeinserts']['bodybottom'][$thisTemplate] != '' ) 
{ 
	echo $thfr_css['codeinserts']['bodybottom'][$thisTemplate]; 
} 

echo '
</body>
</html>
';

// Or: comments.php
} else {

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
' . $thfr_css['nextprevnav']['comments'] . '
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
' . $thfr_css['nextprevnav']['comments2'] . '
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


}

} ?>