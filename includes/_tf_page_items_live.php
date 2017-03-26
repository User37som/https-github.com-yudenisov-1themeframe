<?php
$sitetitle_item = '
<h1 id="sitetitle"><a href="<?php echo get_option("home"); ?>/"><?php bloginfo("name"); ?></a></h1>
';	
$tagline_item = '
<p id="tagline"><?php bloginfo("description"); ?></p>
';	
$hormenu2_item = '
<div class="hormenu2 clearfix">
	<ul class="nav2">
		<?php wp_list_categories("title_li="); ?>
	</ul>
</div>
';
$headerimage_item = '
<div class="headerimage">
Header Images
</div>
';
$hormenu_item = '
<div class="hormenu clearfix">
	<ul class="nav">
		<?php wp_list_pages("title_li="); ?>
	</ul>
</div>
';
$breadcrumb_item = '
<div class="breadcrumbs" id="breadcrumbs1">
	<?php bcn_display(); ?>
</div>	
';
$breadcrumb2_item = '
<div class="breadcrumbs" id="breadcrumbs2">
	<?php bcn_display(); ?>
</div>	
';
$pagetitle_item = '
<h3 class="pagetitle">
	Page Title, e.g. "Post filed under Category XY"
</h3>
';
$multinav_item = '
<div class="multinav clearfix" id="multinav1">
	<div class="older">
		<?php next_posts_link("&laquo; Older") ?>
	</div>
	<div class="newer">
		<?php previous_posts_link("Newer &raquo;") ?>
	</div>
</div>	
';
$multinav2_item = '
<div class="multinav clearfix" id="multinav2">
	<div class="older">
		<?php next_posts_link("&laquo; Older") ?>
	</div>
	<div class="newer">
		<?php previous_posts_link("Newer &raquo;") ?>
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
?>