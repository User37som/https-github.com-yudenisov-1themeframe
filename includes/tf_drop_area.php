<?php 
function tf_drop_area($thisTemplate, $areaName, $body_class) { 
	global $thfr_css; 
	
	// page items for live preview
$sitetitle_item = <<<EOT
<li id="sitetitle_item">
	<span class="title">Site Title</span>
	<span class="content">
			<h1 id="sitetitle" selector="h1#sitetitle">
				<a href="#" selector="h1#sitetitle a">Site Name</a> <a class="hover" href="#" selector="h1#sitetitle a.hover">Hovered</a>
			</h1>
	</span>
</li>
EOT;

$tagline_item = <<<EOT
<li id="tagline_item">
	<span class="title">Tagline</span>
	<span class="content">
			<p id="tagline" selector="p#tagline">Site description or tagline here</p>
	</span>
</li>
EOT;

$hormenu2_item = <<<EOT
<li id="hormenu2_item"> 
	<span class="title">Hor. Menu 2</span>
	<span class="content">
		<div class="hormenu2 clearfix" selector="div.hormenu2">
			<ul class="nav2" selector="ul.nav2">
				<li selector="ul.nav2 li"><a href="#" selector="ul.nav2 li a">First Level</a></li>
				<li selector="ul.nav2 li"><a href="#" class="hover" selector="ul.nav2 li a.hover">Hover/Current</a></li>
				<li selector="ul.nav2 li"><a href="#" class="parent" selector="ul.nav2 li a.parent">Parent</a></li>
				<li selector="ul.nav2 li"><a href="#" selector="ul.nav2 li a">First Level</a></li>
				<li selector="ul.nav2 li"><a href="#" selector="ul.nav2 li a">First Level</a></li>
				<li selector="ul.nav2 li"><a href="#" selector="ul.nav2 li a">First Level</a></li>
			</ul>
		</div>
	</span>
</li> 
EOT;

$headerimage_item = <<<EOT
<li id="headerimage_item"> 
	<span class="title">Header Image</span>
	<span class="content">
		<div class="headerimage" selector="div.headerimage">
			Right-click this to style this container which will contain the header images. To set up the actual header 
			images (which images, how to rotate them...) click "Global Settings " -> "Header Images" on the top left.
		</div>
	</span>
</li> 
EOT;

$hormenu_item = <<<EOT
<li id="hormenu_item">
	<span class="title">Hor. Menu</span>
	<span class="content">
		<div class="hormenu clearfix" selector="div.hormenu">
			<ul class="nav" selector="ul.nav">
				<li selector="ul.nav li"><a href="#" selector="ul.nav li a">First Level</a></li>
				<li selector="ul.nav li"><a href="#" class="hover" selector="ul.nav li a.hover">Hover/Current</a></li>
				<li selector="ul.nav li"><a href="#" class="parent" selector="ul.nav li a.parent">Parent</a></li>
				<li selector="ul.nav li"><a href="#" selector="ul.nav li a">First Level</a></li>
				<li selector="ul.nav li"><a href="#" selector="ul.nav li a">First Level</a></li>
				<li selector="ul.nav li"><a href="#" selector="ul.nav li a">First Level</a></li>
			</ul>
		</div>
	</span>
</li>  
EOT;

$breadcrumb_item = <<<EOT
<li id="breadcrumb_item">
	<span class="title">Breadcrumb Nav.</span>
	<span class="content">
		<div class="breadcrumbs" id="breadcrumbs1" selector="div.breadcrumbs">
			<span class="bc-home"><a href="#" selector="div.breadcrumbs span.bc-home a">Site Name</a> 
			<a href="#" class="hover" selector="div.breadcrumbs span.bc-home a.hover">Site Name Hovered</a></span>  
			&raquo; <a href="#" selector="div.breadcrumbs a">Link</a> &raquo; 
			<a href="#" class="hover" selector="div.breadcrumbs a.hover">Hovered Link</a> &raquo; Title of page/post etc.
		</div>	
	</span>
</li> 
EOT;

$breadcrumb2_item = <<<EOT
<li id="breadcrumb2_item">
	<span class="title">Breadcrumb Nav. #2</span>
	<span class="content">
		<div class="breadcrumbs" id="breadcrumbs2" selector="div#breadcrumbs2">
			You are here: <span class="bc-home"><a href="#" selector="div#breadcrumbs2 span.bc-home a">Home</a> 
			<a href="#" class="hover" selector="div#breadcrumbs2 span.bc-home a.hover">Home Hovered</a></span>  
			&raquo; <a href="#" selector="div#breadcrumbs2 a">Link</a> &raquo; 
			<a href="#" class="hover" selector="div#breadcrumbs2 a.hover">Hovered Link</a> &raquo; Title of page/post etc.
		</div>	
	</span>
</li> 
EOT;

$pagetitle_item = <<<EOT
<li id="pagetitle_item">
	<span class="title">Page Title</span>
	<span class="content">
		<h3 class="pagetitle" selector="h3.pagetitle">
			Page Title, e.g. "Post filed under Category XY"
		</h3>
	</span>
</li>
EOT;

$multinav_item = <<<EOT
<li id="multinav_item">	
	<span class="title">Multi-Post-Page Nav.</span>
	<span class="content">	
		<div class="multinav clearfix" id="multinav1" selector="div.multinav">
			<div class="older" selector="div.multinav div.older">
				<a href="#" selector="div.multinav div.older a">&laquo; Older Entries</a> 
				<a class="hover" href="#" selector="div.multinav div.older a.hover">Older Hovered</a>
			</div>
			<div class="newer" selector="div.multinav div.newer">
				<a href="#" class="hover" selector="div.multinav div.newer a.hover">Newer Hovered</a>
				<a href="#" selector="div.multinav div.newer a">Newer Entries &raquo;</a> 
			</div>
		</div>	
	</span>
</li>
EOT;

$multinav2_item = <<<EOT
<li id="multinav2_item">
	<span class="title">Multi-Post-Page Nav. #2</span>
	<span class="content">
		<div class="multinav clearfix" id="multinav2" selector="div#multinav2">
			<div class="older" selector="div#multinav2 div.older">
				<a href="#" selector="div#multinav2 div.older a">&laquo; Older</a> 
				<a class="hover" href="#" selector="div#multinav2 div.older a.hover">Older Hovered</a>
			</div>
			<div class="newer" selector="div#multinav2 div.newer">
				<a href="#" class="hover" selector="div#multinav2 div.newer a.hover">Newer Hovered</a>
				<a href="#" selector="div#multinav2 div.newer a">Newer &raquo;</a> 
			</div>
		</div>	
	</span>
</li>
EOT;

$singlenav_item = <<<EOT
<li id="singlenav_item">	
	<span class="title">Single-Post-Page Nav.</span>
	<span class="content">	
		<div class="singlenav clearfix" id="singlenav1" selector="div.singlenav">
			<div class="older" selector="div.singlenav div.older">
				<a href="#" selector="div.singlenav div.older a">&laquo; Previous post title</a> 
				<a class="hover" href="#" selector="div.singlenav div.older a.hover">Hovered</a>
			</div>
			<div class="newer" selector="div.singlenav div.newer">
				<a href="#" class="hover" selector="div.singlenav div.newer a.hover">Hovered</a>
				<a href="#" selector="div.singlenav div.newer a">Next post title &raquo;</a> 
			</div>
		</div>	
	</span>
</li>
EOT;

$singlenav2_item = <<<EOT
<li id="singlenav2_item">	
	<span class="title">Single-Post-Page Nav. #2</span>
	<span class="content">	
		<div class="singlenav clearfix" id="singlenav2" selector="div#singlenav2">
			<div class="older" selector="div#singlenav2 div.older">
				<a href="#" selector="div#singlenav2 div.older a">&laquo; Previous post title</a> 
				<a class="hover" href="#" selector="div#singlenav2 div.older a.hover">Hovered</a>
			</div>
			<div class="newer" selector="div#singlenav2 div.newer">
				<a href="#" class="hover" selector="div#singlenav2 div.newer a.hover">Hovered</a>
				<a href="#" selector="div#singlenav2 div.newer a">Next post title &raquo;</a> 
			</div>
		</div>	
	</span>
</li>
EOT;

$searchform_item = <<<EOT
<li id="searchform_item">
	<span class="title">Search Form</span>
	<span class="content">
		<div class="searchform" selector="div.searchform">
			<form method="get" action="" selector="div.searchform form">
				<input class="searchfield" selector="div.searchform form input.searchfield" type="text" name="s" value="" />
				<input class="searchbutton" selector="div.searchform form input.searchbutton" type="submit" name="submit" value="Search" />
			</form>
		</div>
	</span>
</li>
EOT;

$rsslink_item = <<<EOT
<li id="rsslink_item">
	<span class="title">RSS Link</span>
	<span class="content">
		<a href="' . $home . '/feed/" class="rsslink" selector="a.rsslink">Posts</a>
	</span>
</li>
EOT;

$rsscommentslink_item = <<<EOT
<li id="rsscommentslink_item">
	<span class="title">RSS Comments Link</span>
	<span class="content">
		<a href="' . $home . '/comments/feed/" class="rsscommentslink" selector="a.rsscommentslink">Comments</a>
	</span>
</li>
EOT;

$feedburner_item = <<<EOT
<li id="feedburner_item">
	<span class="title">Feedburner Email Link</span>
	<span class="content">
		<a href="#" class="feedburnerlink" selector="a.feedburnerlink">By Email</a>
	</span>
</li>
EOT;

$twitter_item = <<<EOT
<li id="twitter_item">
	<span class="title">Twitter Link</span>
	<span class="content">
		<a href="#" class="twitterlink" selector="a.twitterlink">Twitter</a>
	</span>
</li>
EOT;

$facebook_item = <<<EOT
<li id="facebook_item">
	<span class="title">Facebook Link</span>
	<span class="content">
		<a href="#" class="facebooklink" selector="a.facebooklink">Facebook</a>
	</span>
</li>
EOT;

$footer_item = <<<EOT
<li id="footer_item">
	<span class="title">Footer</span>
	<span class="content">
		<div id="div-footer" selector="div#div-footer">
			Footer (div#div-footer) with <a selector="div#div-footer a" href="#">a link</a> and 
			<a class="hover" selector="div#div-footer a.hover" href="#">Hovered Link</a>. 
			Copyright &copy; 1999-2010 MySite.com &reg; and &trade;
		</div>
	</span>
</li>
EOT;


// Widget area blocks with only 1 widget area in a DIV, or 2-6 widget areas side-by-side, in a table:
// size (amount of widget areas in one block = in one table row) => amount (of widget area blocks of this type)
$widget_blocks = array(1 => 3, 2 => 2, 3 => 1, 4 => 1, 5 => 1, 6 => 1);

foreach( $widget_blocks as $size => $amount ) {

	// Create x amounts
	for ( $i=1; $i <= $amount; $i++ ) {
	
		if( $i > 1 ) { $num = $size . '-' . $i; $num2 = $size . '_' . $i; $hsh = ', #' . $i; }
		else { $num = $size; $num2 = $size; $hsh = ''; }
		
		$widgetAreaName = "widgetarea_" . $num2;
		
		// Start Widget Area Block:
		$$widgetAreaName = '
		<li id="widgetarea_'.$num2.'">
			<span class="title">'.$size.' Widget Areas'.$hsh.'</span>
			<span class="content">
			<div class="widgetarea" id="widgetarea'.$num.'" selector="div#widgetarea'.$num.'">
		';

		// Blocks with 2+ widgets areas get a table layout
		if ($size >= 2) {
			$$widgetAreaName .= '<table style="table-layout:fixed" width="100%" cellpadding="0" cellspacing="0"><colgroup>';	
			for ( $c=1; $c <= $size; $c++ ) {
				$$widgetAreaName .= '<col class="col'.$c.'" selector="div#widgetarea'.$num.' .col'.$c.'" />';
			}
			$$widgetAreaName .= '</colgroup><tr>';					
		}
			
		// Widget Areas
		for ( $td=1; $td <= $size; $td++ ) {
		
			if($size >= 2) $$widgetAreaName .= '<td class="td'.$td.'" selector="div#widgetarea'.$num.' td.td'.$td.'">';
			
			$$widgetAreaName .= '
				<div class="widget" selector="div#widgetarea'.$num.' div.widget">
					<h3 selector="div#widgetarea'.$num.' div.widget h3">Widget Title</h3>
					<ul selector="div#widgetarea'.$num.' div.widget ul">
						<li selector="div#widgetarea'.$num.' div.widget ul li">
							<a selector="div#widgetarea'.$num.' div.widget ul li a" href="#">UL list item</a>
						</li>
						<li selector="div#widgetarea'.$num.' div.widget ul li">
							<a selector="div#widgetarea'.$num.' div.widget ul li a" href="#">UL list item</a>
								<ul selector="div#widgetarea'.$num.' div.widget ul ul">
									<li selector="div#widgetarea'.$num.' div.widget ul li li">
										<a selector="div#widgetarea'.$num.' div.widget ul li li a" href="#">2nd level LI</a>
									</li>
									<li class="hover" selector="div#widgetarea'.$num.' div.widget ul li li.hover">
										<a class="hover" selector="div#widgetarea'.$num.' div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
									</li>
									<li selector="div#widgetarea'.$num.' div.widget ul li li">
										<a selector="div#widgetarea'.$num.' div.widget ul li li a" href="#">2nd level LI</a>
									</li>
								</ul>
						</li>
						<li selector="div#widgetarea'.$num.' div.widget ul li">
							<a selector="div#widgetarea'.$num.' div.widget ul li a" href="#">UL list item</a>
						</li>
					</ul>
				</div>
				<div class="widget" selector="div#widgetarea'.$num.' div.widget">
					<h3 selector="div#widgetarea'.$num.' div.widget h3">Widget Title</h3>
					Widget text with a <a selector="div#widgetarea'.$num.' div.widget a" href="#">Link</a> and a 
					<a class="hover" selector="div#widgetarea'.$num.' div.widget a.hover" href="#">Hovered Link</a> here.
				</div>
			';

			if($size >= 2) $$widgetAreaName .= '</td>';

		}

		if($size >= 2) $$widgetAreaName .= '</tr></table>';
		
		$$widgetAreaName .= '</div></span></li>';		

	}
}

/*
if (is_array($thfr_css['customdropimages']) and !empty($thfr_css['customdropimages'])) {
	foreach ($thfr_css['customdropimages'] as $img) {
		
	
	}

}
*/


	$string = '<ul id="drop-' . $areaName . '" class="connectedSortable">';
	
	$i = 0;
	while ($thfr_css[$thisTemplate][$areaName . '-' . $i] != '') {
		// If default item
		if (strpos($thfr_css[$thisTemplate][$areaName . '-' . $i], '_item') !== FALSE 
		OR strpos($thfr_css[$thisTemplate][$areaName . '-' . $i], 'widgetarea') !== FALSE) {
			if (!in_array($thfr_css[$thisTemplate][$areaName . '-' . $i], array('twitter_item', 'facebook_item', 'feedburner_item'))) // Remove twitter, facebook, feedburner
			
			$string .= $$thfr_css[$thisTemplate][$areaName . '-' . $i];
			
		} elseif (strpos($thfr_css[$thisTemplate][$areaName . '-' . $i], '_custimg') !== FALSE) {
		// custom drop images
			$string .= tf_custom_drop_image(str_replace('_custimg', '', $thfr_css[$thisTemplate][$areaName . '-' . $i])); // ('my-imagegif')
		} elseif (strpos($thfr_css[$thisTemplate][$areaName . '-' . $i], '_custlink') !== FALSE) {
		// custom drop links
			$string .= tf_custom_drop_link(str_replace('_custlink', '', $thfr_css[$thisTemplate][$areaName . '-' . $i])); 
		}
		$i++;
	}
	$string .= '</ul>';
	
	// Add Body class for page templates other than "index.php"
	$string = str_replace('selector="', 'selector="' . $body_class, $string);
	
	echo $string;
} 
?>