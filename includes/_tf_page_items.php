<?php
// prepare header items
$sitetitle_item = '
<li id="sitetitle_item">
	<span class="title">Site Title</span>
	<span class="content">
			<h1 id="sitetitle" selector="' . $body_class . 'h1#sitetitle"><a href="#" selector="' . $body_class . 'h1#sitetitle a">Site Name</a> <a class="hover" href="#" selector="' . $body_class . 'h1#sitetitle a.hover">Hovered</a></h1>
	</span>
</li>
';	
$tagline_item = '
<li id="tagline_item">
	<span class="title">Tagline</span>
	<span class="content">
			<p id="tagline" selector="' . $body_class . 'p#tagline">Site description or tagline here</p>
	</span>
</li>
';	
$hormenu2_item = '
<li id="hormenu2_item"> 
	<span class="title">Hor. Menu 2</span>
	<span class="content">
		<div class="hormenu2 clearfix" selector="' . $body_class . 'div.hormenu2">
			<ul class="nav2" selector="' . $body_class . 'ul.nav2">
				<li selector="' . $body_class . 'ul.nav2 li"><a href="#" selector="' . $body_class . 'ul.nav2 li a">First Level</a></li>
				<li selector="' . $body_class . 'ul.nav2 li"><a href="#" class="hover" selector="' . $body_class . 'ul.nav2 li a.hover">Hover/Current</a></li>
				<li selector="' . $body_class . 'ul.nav2 li"><a href="#" class="parent" selector="' . $body_class . 'ul.nav2 li a.parent">Parent</a></li>
				<li selector="' . $body_class . 'ul.nav2 li"><a href="#" selector="' . $body_class . 'ul.nav2 li a">First Level</a></li>
				<li selector="' . $body_class . 'ul.nav2 li"><a href="#" selector="' . $body_class . 'ul.nav2 li a">First Level</a></li>
				<li selector="' . $body_class . 'ul.nav2 li"><a href="#" selector="' . $body_class . 'ul.nav2 li a">First Level</a></li>
			</ul>
		</div>
	</span>
</li> 
';
$headerimage_item = '
<li id="headerimage_item"> 
	<span class="title">Header Image</span>
	<span class="content">
		<div class="headerimage" selector="' . $body_class . 'div.headerimage">
		Right-click this to style this container which will contain the header images. To set up the actual header 
		images (which images, how to rotate them...) click the menu tab "Header Images" at the top of this page.
		</div>
	</span>
</li> 
';
$hormenu_item = '
<li id="hormenu_item">
	<span class="title">Hor. Menu</span>
	<span class="content">
		<div class="hormenu clearfix" selector="' . $body_class . 'div.hormenu">
			<ul class="nav" selector="' . $body_class . 'ul.nav">
				<li selector="' . $body_class . 'ul.nav li"><a href="#" selector="' . $body_class . 'ul.nav li a">First Level</a></li>
				<li selector="' . $body_class . 'ul.nav li"><a href="#" class="hover" selector="' . $body_class . 'ul.nav li a.hover">Hover/Current</a></li>
				<li selector="' . $body_class . 'ul.nav li"><a href="#" class="parent" selector="' . $body_class . 'ul.nav li a.parent">Parent</a></li>
				<li selector="' . $body_class . 'ul.nav li"><a href="#" selector="' . $body_class . 'ul.nav li a">First Level</a></li>
				<li selector="' . $body_class . 'ul.nav li"><a href="#" selector="' . $body_class . 'ul.nav li a">First Level</a></li>
				<li selector="' . $body_class . 'ul.nav li"><a href="#" selector="' . $body_class . 'ul.nav li a">First Level</a></li>
			</ul>
		</div>
	</span>
</li>  
';
$breadcrumb_item = '
<li id="breadcrumb_item">
	<span class="title">Breadcrumb Nav.</span>
	<span class="content">
		<div class="breadcrumbs" id="breadcrumbs1" selector="' . $body_class . 'div.breadcrumbs">
		<span class="bc-home"><a href="#" selector="' . $body_class . 'div.breadcrumbs span.bc-home a">Site Name</a> 
		<a href="#" class="hover" selector="' . $body_class . 'div.breadcrumbs span.bc-home a.hover">Site Name Hovered</a></span>  
		&raquo; <a href="#" selector="' . $body_class . 'div.breadcrumbs a">Link</a> &raquo; 
		<a href="#" class="hover" selector="' . $body_class . 'div.breadcrumbs a.hover">Hovered Link</a> &raquo; Title of page/post etc.
		</div>	
	</span>
</li> 
';
$breadcrumb2_item = '
<li id="breadcrumb2_item">
	<span class="title">Breadcrumb Nav. #2</span>
	<span class="content">
		<div class="breadcrumbs" id="breadcrumbs2" selector="' . $body_class . 'div#breadcrumbs2">
		You are here: <span class="bc-home"><a href="#" selector="' . $body_class . 'div#breadcrumbs2 span.bc-home a">Home</a> 
		<a href="#" class="hover" selector="' . $body_class . 'div#breadcrumbs2 span.bc-home a.hover">Home Hovered</a></span>  
		&raquo; <a href="#" selector="' . $body_class . 'div#breadcrumbs2 a">Link</a> &raquo; 
		<a href="#" class="hover" selector="' . $body_class . 'div#breadcrumbs2 a.hover">Hovered Link</a> &raquo; Title of page/post etc.
		</div>	
	</span>
</li> 
';
$pagetitle_item = '
<li id="pagetitle_item">
	<span class="title">Page Title</span>
	<span class="content">
		<h3 class="pagetitle" selector="' . $body_class . 'h3.pagetitle">
			Page Title, e.g. "Post filed under Category XY"
		</h3>
	</span>
</li>
';
$multinav_item = '
<li id="multinav_item">	
	<span class="title">Multi-Post-Page Nav.</span>
	<span class="content">	
		<div class="multinav clearfix" id="multinav1" selector="' . $body_class . 'div.multinav">
			<div class="older" selector="' . $body_class . 'div.multinav div.older">
				<a href="#" selector="' . $body_class . 'div.multinav div.older a">&laquo; Older Entries</a> 
				<a class="hover" href="#" selector="' . $body_class . 'div.multinav div.older a.hover">Older Hovered</a>
			</div>
			<div class="newer" selector="' . $body_class . 'div.multinav div.newer">
				<a href="#" class="hover" selector="' . $body_class . 'div.multinav div.newer a.hover">Newer Hovered</a>
				<a href="#" selector="' . $body_class . 'div.multinav div.newer a">Newer Entries &raquo;</a> 
			</div>
		</div>	
	</span>
</li>
';
$multinav2_item = '
<li id="multinav2_item">
	<span class="title">Multi-Post-Page Nav. #2</span>
	<span class="content">
		<div class="multinav clearfix" id="multinav2" selector="' . $body_class . 'div#multinav2">
			<div class="older" selector="' . $body_class . 'div#multinav2 div.older">
				<a href="#" selector="' . $body_class . 'div#multinav2 div.older a">&laquo; Older</a> 
				<a class="hover" href="#" selector="' . $body_class . 'div#multinav2 div.older a.hover">Older Hovered</a>
			</div>
			<div class="newer" selector="' . $body_class . 'div#multinav2 div.newer">
				<a href="#" class="hover" selector="' . $body_class . 'div#multinav2 div.newer a.hover">Newer Hovered</a>
				<a href="#" selector="' . $body_class . 'div#multinav2 div.newer a">Newer &raquo;</a> 
			</div>
		</div>	
	</span>
</li>
';
$singlenav_item = '
<li id="singlenav_item">	
	<span class="title">Single-Post-Page Nav.</span>
	<span class="content">	
		<div class="singlenav clearfix" id="singlenav1" selector="' . $body_class . 'div.singlenav">
			<div class="older" selector="' . $body_class . 'div.singlenav div.older">
				<a href="#" selector="' . $body_class . 'div.singlenav div.older a">&laquo; Previous post title</a> 
				<a class="hover" href="#" selector="' . $body_class . 'div.singlenav div.older a.hover">Hovered</a>
			</div>
			<div class="newer" selector="' . $body_class . 'div.singlenav div.newer">
				<a href="#" class="hover" selector="' . $body_class . 'div.singlenav div.newer a.hover">Hovered</a>
				<a href="#" selector="' . $body_class . 'div.singlenav div.newer a">Next post title &raquo;</a> 
			</div>
		</div>	
	</span>
</li>
';
$singlenav2_item = '
<li id="singlenav2_item">	
	<span class="title">Single-Post-Page Nav. #2</span>
	<span class="content">	
		<div class="singlenav clearfix" id="singlenav2" selector="' . $body_class . 'div#singlenav2">
			<div class="older" selector="' . $body_class . 'div#singlenav2 div.older">
				<a href="#" selector="' . $body_class . 'div#singlenav2 div.older a">&laquo; Previous post title</a> 
				<a class="hover" href="#" selector="' . $body_class . 'div#singlenav2 div.older a.hover">Hovered</a>
			</div>
			<div class="newer" selector="' . $body_class . 'div#singlenav2 div.newer">
				<a href="#" class="hover" selector="' . $body_class . 'div#singlenav2 div.newer a.hover">Hovered</a>
				<a href="#" selector="' . $body_class . 'div#singlenav2 div.newer a">Next post title &raquo;</a> 
			</div>
		</div>	
	</span>
</li>
';
$searchform_item = '
<li id="searchform_item">
	<span class="title">Search Form</span>
	<span class="content">
		<div class="searchform" selector="' . $body_class . 'div.searchform">
			<form method="get" action="" selector="' . $body_class . 'div.searchform form">
				<input class="searchfield" selector="' . $body_class . 'div.searchform form input.searchfield" type="text" name="s" value="" />
				<input class="searchbutton" selector="' . $body_class . 'div.searchform form input.searchbutton" type="submit" name="submit" value="Search" />
			</form>
		</div>
	</span>
</li>
';
$rsslink_item = '
<li id="rsslink_item">
	<span class="title">RSS Link</span>
	<span class="content">
		<a href="' . $home . '/feed/" class="rsslink" selector="' . $body_class . 'a.rsslink">Posts</a>
	</span>
</li>
';
$rsscommentslink_item = '
<li id="rsscommentslink_item">
	<span class="title">RSS Comments Link</span>
	<span class="content">
		<a href="' . $home . '/comments/feed/" class="rsscommentslink" selector="' . $body_class . 'a.rsscommentslink">Comments</a>
	</span>
</li>
';
$feedburner_item = '
<li id="feedburner_item">
	<span class="title">Feedburner Email Link</span>
	<span class="content">
		<a href="#" class="feedburnerlink" selector="' . $body_class . 'a.feedburnerlink">By Email</a>
	</span>
</li>
';
$twitter_item = '
<li id="twitter_item">
	<span class="title">Twitter Link</span>
	<span class="content">
		<a href="#" class="twitterlink" selector="' . $body_class . 'a.twitterlink">Twitter</a>
	</span>
</li>
';
$facebook_item = '
<li id="facebook_item">
	<span class="title">Facebook Link</span>
	<span class="content">
		<a href="#" class="facebooklink" selector="' . $body_class . 'a.facebooklink">Facebook</a>
	</span>
</li>
';
$footer_item = '
<li id="footer_item">
	<span class="title">Footer</span>
	<span class="content">
		<div id="div-footer" selector="' . $body_class . 'div#div-footer">
			Footer (div#div-footer) with <a selector="' . $body_class . 'div#div-footer a" href="#">a link</a> and 
			<a class="hover" selector="' . $body_class . 'div#div-footer a.hover" href="#">Hovered Link</a>. 
			Copyright &copy; 1999-2010 MySite.com &reg; and &trade;
		</div>
	</span>
</li>
';
// Widget Areas
$widgetarea_1 = '
<li id="widgetarea_1">
	<span class="title">1 Widget Area</span>
	<span class="content">
	<div class="widgetarea" id="widgetarea1" selector="' . $body_class . 'div#widgetarea1">
		<div class="widget" selector="' . $body_class . 'div#widgetarea1 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea1 div.widget h3">Widget Title</h3>
			<ul selector="' . $body_class . 'div#widgetarea1 div.widget ul">
				<li selector="' . $body_class . 'div#widgetarea1 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea1 div.widget ul li a" href="#">UL list item</a>
				</li>
				<li selector="' . $body_class . 'div#widgetarea1 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea1 div.widget ul li a" href="#">UL list item</a>
						<ul selector="' . $body_class . 'div#widgetarea1 div.widget ul ul">
							<li selector="' . $body_class . 'div#widgetarea1 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea1 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
							<li class="hover" selector="' . $body_class . 'div#widgetarea1 div.widget ul li li.hover">
								<a class="hover" selector="' . $body_class . 'div#widgetarea1 div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
							</li>
							<li selector="' . $body_class . 'div#widgetarea1 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea1 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
						</ul>
				</li>
				<li selector="' . $body_class . 'div#widgetarea1 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea1 div.widget ul li a" href="#">UL list item</a>
				</li>
			</ul>
		</div>
		<div class="widget" selector="' . $body_class . 'div#widgetarea1 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea1 div.widget h3">Widget Title</h3>
			Widget text with a <a selector="' . $body_class . 'div#widgetarea1 div.widget a" href="#">Link</a> and a 
			<a class="hover" selector="' . $body_class . 'div#widgetarea1 div.widget a.hover" href="#">Hovered Link</a> here.
		</div>
	</div>
	</span>
</li>
';
$widgetarea_1_2 = '
<li id="widgetarea_1_2">
	<span class="title">1 Widget Area #2</span>
	<span class="content">
	<div class="widgetarea" id="widgetarea1-2" selector="' . $body_class . 'div#widgetarea1-2">
		<div class="widget" selector="' . $body_class . 'div#widgetarea1-2 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea1-2 div.widget h3">Widget Title</h3>
			<ul selector="' . $body_class . 'div#widgetarea1-2 div.widget ul">
				<li selector="' . $body_class . 'div#widgetarea1-2 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea1-2 div.widget ul li a" href="#">UL list item</a>
				</li>
				<li selector="' . $body_class . 'div#widgetarea1-2 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea1-2 div.widget ul li a" href="#">UL list item</a>
						<ul selector="' . $body_class . 'div#widgetarea1-2 div.widget ul ul">
							<li selector="' . $body_class . 'div#widgetarea1-2 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea1-2 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
							<li class="hover" selector="' . $body_class . 'div#widgetarea1-2 div.widget ul li li.hover">
								<a class="hover" selector="' . $body_class . 'div#widgetarea1-2 div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
							</li>
							<li selector="' . $body_class . 'div#widgetarea1-2 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea1-2 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
						</ul>
				</li>
				<li selector="' . $body_class . 'div#widgetarea1-2 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea1-2 div.widget ul li a" href="#">UL list item</a>
				</li>
			</ul>
		</div>
		<div class="widget" selector="' . $body_class . 'div#widgetarea1-2 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea1-2 div.widget h3">Widget Title</h3>
			Widget text with a <a selector="' . $body_class . 'div#widgetarea1-2 div.widget a" href="#">Link</a> and a 
			<a class="hover" selector="' . $body_class . 'div#widgetarea1-2 div.widget a.hover" href="#">Hovered Link</a> here.
		</div>
	</div>
	</span>
</li>
';
$widgetarea_1_3 = '
<li id="widgetarea_1_3">
	<span class="title">1 Widget Area #3</span>
	<span class="content">
	<div class="widgetarea" id="widgetarea1-3" selector="' . $body_class . 'div#widgetarea1-3">
		<div class="widget" selector="' . $body_class . 'div#widgetarea1-3 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea1-3 div.widget h3">Widget Title</h3>
			<ul selector="' . $body_class . 'div#widgetarea1-3 div.widget ul">
				<li selector="' . $body_class . 'div#widgetarea1-3 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea1-3 div.widget ul li a" href="#">UL list item</a>
				</li>
				<li selector="' . $body_class . 'div#widgetarea1-3 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea1-3 div.widget ul li a" href="#">UL list item</a>
						<ul selector="' . $body_class . 'div#widgetarea1-3 div.widget ul ul">
							<li selector="' . $body_class . 'div#widgetarea1-3 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea1-3 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
							<li class="hover" selector="' . $body_class . 'div#widgetarea1-3 div.widget ul li li.hover">
								<a class="hover" selector="' . $body_class . 'div#widgetarea1-3 div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
							</li>
							<li selector="' . $body_class . 'div#widgetarea1-3 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea1-3 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
						</ul>
				</li>
				<li selector="' . $body_class . 'div#widgetarea1-3 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea1-3 div.widget ul li a" href="#">UL list item</a>
				</li>
			</ul>
		</div>
		<div class="widget" selector="' . $body_class . 'div#widgetarea1-3 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea1-3 div.widget h3">Widget Title</h3>
			Widget text with a <a selector="' . $body_class . 'div#widgetarea1-3 div.widget a" href="#">Link</a> and a 
			<a class="hover" selector="' . $body_class . 'div#widgetarea1-3 div.widget a.hover" href="#">Hovered Link</a> here.
		</div>
	</div>
	</span>
</li>
';
$widgetarea_2 = '
<li id="widgetarea_2">
	<span class="title">2 Widget Areas</span>
	<span class="content">
	<div class="widgetarea" id="widgetarea2" selector="' . $body_class . 'div#widgetarea2">
	<table style="table-layout:fixed" width="100%" cellpadding="0" cellspacing="0">
	<colgroup><col class="col1" selector="' . $body_class . 'div#widgetarea2 .col1" /><col class="col2" selector="' . $body_class . 'div#widgetarea2 .col2" />
	</colgroup>
	<tr>
	<td class="td1" selector="' . $body_class . 'div#widgetarea2 td.td1">
		<div class="widget" selector="' . $body_class . 'div#widgetarea2 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea2 div.widget h3">Widget Title</h3>
			<ul selector="' . $body_class . 'div#widgetarea2 div.widget ul">
				<li selector="' . $body_class . 'div#widgetarea2 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea2 div.widget ul li a" href="#">UL list item</a>
				</li>
				<li selector="' . $body_class . 'div#widgetarea2 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea2 div.widget ul li a" href="#">UL list item</a>
						<ul selector="' . $body_class . 'div#widgetarea2 div.widget ul ul">
							<li selector="' . $body_class . 'div#widgetarea2 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea2 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
							<li class="hover" selector="' . $body_class . 'div#widgetarea2 div.widget ul li li.hover">
								<a class="hover" selector="' . $body_class . 'div#widgetarea2 div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
							</li>
							<li selector="' . $body_class . 'div#widgetarea2 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea2 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
						</ul>
				</li>
				<li selector="' . $body_class . 'div#widgetarea2 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea2 div.widget ul li a" href="#">UL list item</a>
				</li>
			</ul>
		</div>
		<div class="widget" selector="' . $body_class . 'div#widgetarea2 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea2 div.widget h3">Widget Title</h3>
			Widget text with a <a selector="' . $body_class . 'div#widgetarea2 div.widget a" href="#">Link</a> and a 
			<a class="hover" selector="' . $body_class . 'div#widgetarea2 div.widget a.hover" href="#">Hovered Link</a> here.
		</div>
	</td>
	<td class="td2" selector="' . $body_class . 'div#widgetarea2 td.td2">
		<div class="widget" selector="' . $body_class . 'div#widgetarea2 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea2 div.widget h3">Widget Title</h3>
			<ul selector="' . $body_class . 'div#widgetarea2 div.widget ul">
				<li selector="' . $body_class . 'div#widgetarea2 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea2 div.widget ul li a" href="#">UL list item</a>
				</li>
				<li selector="' . $body_class . 'div#widgetarea2 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea2 div.widget ul li a" href="#">UL list item</a>
						<ul selector="' . $body_class . 'div#widgetarea2 div.widget ul ul">
							<li selector="' . $body_class . 'div#widgetarea2 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea2 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
							<li class="hover" selector="' . $body_class . 'div#widgetarea2 div.widget ul li li.hover">
								<a class="hover" selector="' . $body_class . 'div#widgetarea2 div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
							</li>
							<li selector="' . $body_class . 'div#widgetarea2 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea2 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
						</ul>
				</li>
				<li selector="' . $body_class . 'div#widgetarea2 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea2 div.widget ul li a" href="#">UL list item</a>
				</li>
			</ul>
		</div>
		<div class="widget" selector="' . $body_class . 'div#widgetarea2 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea2 div.widget h3">Widget Title</h3>
			Widget text with a <a selector="' . $body_class . 'div#widgetarea2 div.widget a" href="#">Link</a> and a 
			<a class="hover" selector="' . $body_class . 'div#widgetarea2 div.widget a.hover" href="#">Hovered Link</a> here.
		</div>
	</td>
	</tr>
	</table>
	</div>
	</span>
</li>
';
$widgetarea_2_2 = '
<li id="widgetarea_2_2">
	<span class="title">2 Widget Areas #2</span>
	<span class="content">
	<div class="widgetarea" id="widgetarea2-2" selector="' . $body_class . 'div#widgetarea2-2">
	<table style="table-layout:fixed" width="100%" cellpadding="0" cellspacing="0">
	<colgroup><col class="col1" selector="' . $body_class . 'div#widgetarea2-2 .col1" /><col class="col2" selector="' . $body_class . 'div#widgetarea2-2 .col2" />
	</colgroup>
	<tr>
	<td class="td1" selector="' . $body_class . 'div#widgetarea2-2 td.td1">
		<div class="widget" selector="' . $body_class . 'div#widgetarea2-2 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea2-2 div.widget h3">Widget Title</h3>
			<ul selector="' . $body_class . 'div#widgetarea2-2 div.widget ul">
				<li selector="' . $body_class . 'div#widgetarea2-2 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea2-2 div.widget ul li a" href="#">UL list item</a>
				</li>
				<li selector="' . $body_class . 'div#widgetarea2-2 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea2-2 div.widget ul li a" href="#">UL list item</a>
						<ul selector="' . $body_class . 'div#widgetarea2-2 div.widget ul ul">
							<li selector="' . $body_class . 'div#widgetarea2-2 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea2-2 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
							<li class="hover" selector="' . $body_class . 'div#widgetarea2-2 div.widget ul li li.hover">
								<a class="hover" selector="' . $body_class . 'div#widgetarea2-2 div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
							</li>
							<li selector="' . $body_class . 'div#widgetarea2-2 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea2-2 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
						</ul>
				</li>
				<li selector="' . $body_class . 'div#widgetarea2-2 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea2-2 div.widget ul li a" href="#">UL list item</a>
				</li>
			</ul>
		</div>
		<div class="widget" selector="' . $body_class . 'div#widgetarea2-2 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea2-2 div.widget h3">Widget Title</h3>
			Widget text with a <a selector="' . $body_class . 'div#widgetarea2-2 div.widget a" href="#">Link</a> and a 
			<a class="hover" selector="' . $body_class . 'div#widgetarea2-2 div.widget a.hover" href="#">Hovered Link</a> here.
		</div>
	</td>
	<td class="td2" selector="' . $body_class . 'div#widgetarea2-2 td.td2">
		<div class="widget" selector="' . $body_class . 'div#widgetarea2-2 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea2-2 div.widget h3">Widget Title</h3>
			<ul selector="' . $body_class . 'div#widgetarea2-2 div.widget ul">
				<li selector="' . $body_class . 'div#widgetarea2-2 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea2-2 div.widget ul li a" href="#">UL list item</a>
				</li>
				<li selector="' . $body_class . 'div#widgetarea2-2 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea2-2 div.widget ul li a" href="#">UL list item</a>
						<ul selector="' . $body_class . 'div#widgetarea2-2 div.widget ul ul">
							<li selector="' . $body_class . 'div#widgetarea2-2 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea2-2 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
							<li class="hover" selector="' . $body_class . 'div#widgetarea2-2 div.widget ul li li.hover">
								<a class="hover" selector="' . $body_class . 'div#widgetarea2-2 div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
							</li>
							<li selector="' . $body_class . 'div#widgetarea2-2 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea2-2 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
						</ul>
				</li>
				<li selector="' . $body_class . 'div#widgetarea2-2 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea2-2 div.widget ul li a" href="#">UL list item</a>
				</li>
			</ul>
		</div>
		<div class="widget" selector="' . $body_class . 'div#widgetarea2-2 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea2-2 div.widget h3">Widget Title</h3>
			Widget text with a <a selector="' . $body_class . 'div#widgetarea2-2 div.widget a" href="#">Link</a> and a 
			<a class="hover" selector="' . $body_class . 'div#widgetarea2-2 div.widget a.hover" href="#">Hovered Link</a> here.
		</div>
	</td>
	</tr>
	</table>
	</div>
	</span>
</li>
';
$widgetarea_3 = '
<li id="widgetarea_3">
	<span class="title">3 Widget Areas</span>
	<span class="content">
	<div class="widgetarea" id="widgetarea3" selector="' . $body_class . 'div#widgetarea3">
	<table style="table-layout:fixed" width="100%" cellpadding="0" cellspacing="0">
	<colgroup><col class="col1" selector="' . $body_class . 'div#widgetarea3 .col1" /><col class="col2" selector="' . $body_class . 'div#widgetarea3 .col2" />
	<col class="col3" selector="' . $body_class . 'div#widgetarea3 .col3" />
	</colgroup>
	<tr>
	<td class="td1" selector="' . $body_class . 'div#widgetarea3 td.td1">
		<div class="widget" selector="' . $body_class . 'div#widgetarea3 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea3 div.widget h3">Widget Title</h3>
			<ul selector="' . $body_class . 'div#widgetarea3 div.widget ul">
				<li selector="' . $body_class . 'div#widgetarea3 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea3 div.widget ul li a" href="#">UL list item</a>
				</li>
				<li selector="' . $body_class . 'div#widgetarea3 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea3 div.widget ul li a" href="#">UL list item</a>
						<ul selector="' . $body_class . 'div#widgetarea3 div.widget ul ul">
							<li selector="' . $body_class . 'div#widgetarea3 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea3 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
							<li class="hover" selector="' . $body_class . 'div#widgetarea3 div.widget ul li li.hover">
								<a class="hover" selector="' . $body_class . 'div#widgetarea3 div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
							</li>
							<li selector="' . $body_class . 'div#widgetarea3 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea3 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
						</ul>
				</li>
				<li selector="' . $body_class . 'div#widgetarea3 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea3 div.widget ul li a" href="#">UL list item</a>
				</li>
			</ul>
		</div>
		<div class="widget" selector="' . $body_class . 'div#widgetarea3 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea3 div.widget h3">Widget Title</h3>
			Widget text with a <a selector="' . $body_class . 'div#widgetarea3 div.widget a" href="#">Link</a> and a 
			<a class="hover" selector="' . $body_class . 'div#widgetarea3 div.widget a.hover" href="#">Hovered Link</a> here.
		</div>
	</td>
	<td class="td2" selector="' . $body_class . 'div#widgetarea3 td.td2">
		<div class="widget" selector="' . $body_class . 'div#widgetarea3 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea3 div.widget h3">Widget Title</h3>
			<ul selector="' . $body_class . 'div#widgetarea3 div.widget ul">
				<li selector="' . $body_class . 'div#widgetarea3 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea3 div.widget ul li a" href="#">UL list item</a>
				</li>
				<li selector="' . $body_class . 'div#widgetarea3 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea3 div.widget ul li a" href="#">UL list item</a>
						<ul selector="' . $body_class . 'div#widgetarea3 div.widget ul ul">
							<li selector="' . $body_class . 'div#widgetarea3 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea3 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
							<li class="hover" selector="' . $body_class . 'div#widgetarea3 div.widget ul li li.hover">
								<a class="hover" selector="' . $body_class . 'div#widgetarea3 div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
							</li>
							<li selector="' . $body_class . 'div#widgetarea3 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea3 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
						</ul>
				</li>
				<li selector="' . $body_class . 'div#widgetarea3 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea3 div.widget ul li a" href="#">UL list item</a>
				</li>
			</ul>
		</div>
		<div class="widget" selector="' . $body_class . 'div#widgetarea3 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea3 div.widget h3">Widget Title</h3>
			Widget text with a <a selector="' . $body_class . 'div#widgetarea3 div.widget a" href="#">Link</a> and a 
			<a class="hover" selector="' . $body_class . 'div#widgetarea3 div.widget a.hover" href="#">Hovered Link</a> here.
		</div>
	</td>
	<td class="td3" selector="' . $body_class . 'div#widgetarea3 td.td3">
		<div class="widget" selector="' . $body_class . 'div#widgetarea3 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea3 div.widget h3">Widget Title</h3>
			<ul selector="' . $body_class . 'div#widgetarea3 div.widget ul">
				<li selector="' . $body_class . 'div#widgetarea3 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea3 div.widget ul li a" href="#">UL list item</a>
				</li>
				<li selector="' . $body_class . 'div#widgetarea3 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea3 div.widget ul li a" href="#">UL list item</a>
						<ul selector="' . $body_class . 'div#widgetarea3 div.widget ul ul">
							<li selector="' . $body_class . 'div#widgetarea3 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea3 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
							<li class="hover" selector="' . $body_class . 'div#widgetarea3 div.widget ul li li.hover">
								<a class="hover" selector="' . $body_class . 'div#widgetarea3 div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
							</li>
							<li selector="' . $body_class . 'div#widgetarea3 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea3 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
						</ul>
				</li>
				<li selector="' . $body_class . 'div#widgetarea3 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea3 div.widget ul li a" href="#">UL list item</a>
				</li>
			</ul>
		</div>
		<div class="widget" selector="' . $body_class . 'div#widgetarea3 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea3 div.widget h3">Widget Title</h3>
			Widget text with a <a selector="' . $body_class . 'div#widgetarea3 div.widget a" href="#">Link</a> and a 
			<a class="hover" selector="' . $body_class . 'div#widgetarea3 div.widget a.hover" href="#">Hovered Link</a> here.
		</div>
	</td>
	</tr>
	</table>
	</div>
	</span>
</li>
';
$widgetarea_4 = '
<li id="widgetarea_4">
	<span class="title">4 Widget Areas</span>
	<span class="content">
	<div class="widgetarea" id="widgetarea4" selector="' . $body_class . 'div#widgetarea4">
	<table style="table-layout:fixed" width="100%" cellpadding="0" cellspacing="0">
	<colgroup><col class="col1" selector="' . $body_class . 'div#widgetarea4 .col1" /><col class="col2" selector="' . $body_class . 'div#widgetarea4 .col2" />
	<col class="col3" selector="' . $body_class . 'div#widgetarea4 .col3" /><col class="col4" selector="' . $body_class . 'div#widgetarea4 .col4" />
	</colgroup>
	<tr>
	<td class="td1" selector="' . $body_class . 'div#widgetarea4 td.td1">
		<div class="widget" selector="' . $body_class . 'div#widgetarea4 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea4 div.widget h3">Widget Title</h3>
			<ul selector="' . $body_class . 'div#widgetarea4 div.widget ul">
				<li selector="' . $body_class . 'div#widgetarea4 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea4 div.widget ul li a" href="#">UL list item</a>
				</li>
				<li selector="' . $body_class . 'div#widgetarea4 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea4 div.widget ul li a" href="#">UL list item</a>
						<ul selector="' . $body_class . 'div#widgetarea4 div.widget ul ul">
							<li selector="' . $body_class . 'div#widgetarea4 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea4 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
							<li class="hover" selector="' . $body_class . 'div#widgetarea4 div.widget ul li li.hover">
								<a class="hover" selector="' . $body_class . 'div#widgetarea4 div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
							</li>
							<li selector="' . $body_class . 'div#widgetarea4 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea4 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
						</ul>
				</li>
				<li selector="' . $body_class . 'div#widgetarea4 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea4 div.widget ul li a" href="#">UL list item</a>
				</li>
			</ul>
		</div>
		<div class="widget" selector="' . $body_class . 'div#widgetarea4 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea4 div.widget h3">Widget Title</h3>
			Widget text with a <a selector="' . $body_class . 'div#widgetarea4 div.widget a" href="#">Link</a> and a 
			<a class="hover" selector="' . $body_class . 'div#widgetarea4 div.widget a.hover" href="#">Hovered Link</a> here.
		</div>
	</td>
	<td class="td2" selector="' . $body_class . 'div#widgetarea4 td.td2">
		<div class="widget" selector="' . $body_class . 'div#widgetarea4 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea4 div.widget h3">Widget Title</h3>
			<ul selector="' . $body_class . 'div#widgetarea4 div.widget ul">
				<li selector="' . $body_class . 'div#widgetarea4 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea4 div.widget ul li a" href="#">UL list item</a>
				</li>
				<li selector="' . $body_class . 'div#widgetarea4 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea4 div.widget ul li a" href="#">UL list item</a>
						<ul selector="' . $body_class . 'div#widgetarea4 div.widget ul ul">
							<li selector="' . $body_class . 'div#widgetarea4 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea4 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
							<li class="hover" selector="' . $body_class . 'div#widgetarea4 div.widget ul li li.hover">
								<a class="hover" selector="' . $body_class . 'div#widgetarea4 div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
							</li>
							<li selector="' . $body_class . 'div#widgetarea4 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea4 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
						</ul>
				</li>
				<li selector="' . $body_class . 'div#widgetarea4 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea4 div.widget ul li a" href="#">UL list item</a>
				</li>
			</ul>
		</div>
		<div class="widget" selector="' . $body_class . 'div#widgetarea4 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea4 div.widget h3">Widget Title</h3>
			Widget text with a <a selector="' . $body_class . 'div#widgetarea4 div.widget a" href="#">Link</a> and a 
			<a class="hover" selector="' . $body_class . 'div#widgetarea4 div.widget a.hover" href="#">Hovered Link</a> here.
		</div>
	</td>
	<td class="td3" selector="' . $body_class . 'div#widgetarea4 td.td3">
		<div class="widget" selector="' . $body_class . 'div#widgetarea4 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea4 div.widget h3">Widget Title</h3>
			<ul selector="' . $body_class . 'div#widgetarea4 div.widget ul">
				<li selector="' . $body_class . 'div#widgetarea4 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea4 div.widget ul li a" href="#">UL list item</a>
				</li>
				<li selector="' . $body_class . 'div#widgetarea4 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea4 div.widget ul li a" href="#">UL list item</a>
						<ul selector="' . $body_class . 'div#widgetarea4 div.widget ul ul">
							<li selector="' . $body_class . 'div#widgetarea4 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea4 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
							<li class="hover" selector="' . $body_class . 'div#widgetarea4 div.widget ul li li.hover">
								<a class="hover" selector="' . $body_class . 'div#widgetarea4 div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
							</li>
							<li selector="' . $body_class . 'div#widgetarea4 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea4 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
						</ul>
				</li>
				<li selector="' . $body_class . 'div#widgetarea4 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea4 div.widget ul li a" href="#">UL list item</a>
				</li>
			</ul>
		</div>
		<div class="widget" selector="' . $body_class . 'div#widgetarea4 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea4 div.widget h3">Widget Title</h3>
			Widget text with a <a selector="' . $body_class . 'div#widgetarea4 div.widget a" href="#">Link</a> and a 
			<a class="hover" selector="' . $body_class . 'div#widgetarea4 div.widget a.hover" href="#">Hovered Link</a> here.
		</div>
	</td>
	<td class="td4" selector="' . $body_class . 'div#widgetarea4 td.td4">
		<div class="widget" selector="' . $body_class . 'div#widgetarea4 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea4 div.widget h3">Widget Title</h3>
			<ul selector="' . $body_class . 'div#widgetarea4 div.widget ul">
				<li selector="' . $body_class . 'div#widgetarea4 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea4 div.widget ul li a" href="#">UL list item</a>
				</li>
				<li selector="' . $body_class . 'div#widgetarea4 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea4 div.widget ul li a" href="#">UL list item</a>
						<ul selector="' . $body_class . 'div#widgetarea4 div.widget ul ul">
							<li selector="' . $body_class . 'div#widgetarea4 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea4 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
							<li class="hover" selector="' . $body_class . 'div#widgetarea4 div.widget ul li li.hover">
								<a class="hover" selector="' . $body_class . 'div#widgetarea4 div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
							</li>
							<li selector="' . $body_class . 'div#widgetarea4 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea4 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
						</ul>
				</li>
				<li selector="' . $body_class . 'div#widgetarea4 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea4 div.widget ul li a" href="#">UL list item</a>
				</li>
			</ul>
		</div>
		<div class="widget" selector="' . $body_class . 'div#widgetarea4 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea4 div.widget h3">Widget Title</h3>
			Widget text with a <a selector="' . $body_class . 'div#widgetarea4 div.widget a" href="#">Link</a> and a 
			<a class="hover" selector="' . $body_class . 'div#widgetarea4 div.widget a.hover" href="#">Hovered Link</a> here.
		</div>
	</td>
	</tr>
	</table>
	</div>
	</span>
</li>
';
$widgetarea_5 = '
<li id="widgetarea_5">
	<span class="title">5 Widget Areas</span>
	<span class="content">
	<div class="widgetarea" id="widgetarea5" selector="' . $body_class . 'div#widgetarea5">
	<table style="table-layout:fixed" width="100%" cellpadding="0" cellspacing="0">
	<colgroup><col class="col1" selector="' . $body_class . 'div#widgetarea5 .col1" /><col class="col2" selector="' . $body_class . 'div#widgetarea5 .col2" />
	<col class="col3" selector="' . $body_class . 'div#widgetarea5 .col3" /><col class="col4" selector="' . $body_class . 'div#widgetarea5 .col4" />
	<col class="col5" selector="' . $body_class . 'div#widgetarea5 .col5" />
	</colgroup>
	<tr>
	<td class="td1" selector="' . $body_class . 'div#widgetarea5 td.td1">
		<div class="widget" selector="' . $body_class . 'div#widgetarea5 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea5 div.widget h3">Widget Title</h3>
			<ul selector="' . $body_class . 'div#widgetarea5 div.widget ul">
				<li selector="' . $body_class . 'div#widgetarea5 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea5 div.widget ul li a" href="#">UL list item</a>
				</li>
				<li selector="' . $body_class . 'div#widgetarea5 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea5 div.widget ul li a" href="#">UL list item</a>
						<ul selector="' . $body_class . 'div#widgetarea5 div.widget ul ul">
							<li selector="' . $body_class . 'div#widgetarea5 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea5 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
							<li class="hover" selector="' . $body_class . 'div#widgetarea5 div.widget ul li li.hover">
								<a class="hover" selector="' . $body_class . 'div#widgetarea5 div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
							</li>
							<li selector="' . $body_class . 'div#widgetarea5 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea5 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
						</ul>
				</li>
				<li selector="' . $body_class . 'div#widgetarea5 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea5 div.widget ul li a" href="#">UL list item</a>
				</li>
			</ul>
		</div>
		<div class="widget" selector="' . $body_class . 'div#widgetarea5 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea5 div.widget h3">Widget Title</h3>
			Widget text with a <a selector="' . $body_class . 'div#widgetarea5 div.widget a" href="#">Link</a> and a 
			<a class="hover" selector="' . $body_class . 'div#widgetarea5 div.widget a.hover" href="#">Hovered Link</a> here.
		</div>
	</td>
	<td class="td2" selector="' . $body_class . 'div#widgetarea5 td.td2">
		<div class="widget" selector="' . $body_class . 'div#widgetarea5 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea5 div.widget h3">Widget Title</h3>
			<ul selector="' . $body_class . 'div#widgetarea5 div.widget ul">
				<li selector="' . $body_class . 'div#widgetarea5 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea5 div.widget ul li a" href="#">UL list item</a>
				</li>
				<li selector="' . $body_class . 'div#widgetarea5 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea5 div.widget ul li a" href="#">UL list item</a>
						<ul selector="' . $body_class . 'div#widgetarea5 div.widget ul ul">
							<li selector="' . $body_class . 'div#widgetarea5 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea5 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
							<li class="hover" selector="' . $body_class . 'div#widgetarea5 div.widget ul li li.hover">
								<a class="hover" selector="' . $body_class . 'div#widgetarea5 div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
							</li>
							<li selector="' . $body_class . 'div#widgetarea5 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea5 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
						</ul>
				</li>
				<li selector="' . $body_class . 'div#widgetarea5 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea5 div.widget ul li a" href="#">UL list item</a>
				</li>
			</ul>
		</div>
		<div class="widget" selector="' . $body_class . 'div#widgetarea5 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea5 div.widget h3">Widget Title</h3>
			Widget text with a <a selector="' . $body_class . 'div#widgetarea5 div.widget a" href="#">Link</a> and a 
			<a class="hover" selector="' . $body_class . 'div#widgetarea5 div.widget a.hover" href="#">Hovered Link</a> here.
		</div>
	</td>
	<td class="td3" selector="' . $body_class . 'div#widgetarea5 td.td3">
		<div class="widget" selector="' . $body_class . 'div#widgetarea5 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea5 div.widget h3">Widget Title</h3>
			<ul selector="' . $body_class . 'div#widgetarea5 div.widget ul">
				<li selector="' . $body_class . 'div#widgetarea5 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea5 div.widget ul li a" href="#">UL list item</a>
				</li>
				<li selector="' . $body_class . 'div#widgetarea5 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea5 div.widget ul li a" href="#">UL list item</a>
						<ul selector="' . $body_class . 'div#widgetarea5 div.widget ul ul">
							<li selector="' . $body_class . 'div#widgetarea5 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea5 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
							<li class="hover" selector="' . $body_class . 'div#widgetarea5 div.widget ul li li.hover">
								<a class="hover" selector="' . $body_class . 'div#widgetarea5 div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
							</li>
							<li selector="' . $body_class . 'div#widgetarea5 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea5 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
						</ul>
				</li>
				<li selector="' . $body_class . 'div#widgetarea5 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea5 div.widget ul li a" href="#">UL list item</a>
				</li>
			</ul>
		</div>
		<div class="widget" selector="' . $body_class . 'div#widgetarea5 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea5 div.widget h3">Widget Title</h3>
			Widget text with a <a selector="' . $body_class . 'div#widgetarea5 div.widget a" href="#">Link</a> and a 
			<a class="hover" selector="' . $body_class . 'div#widgetarea5 div.widget a.hover" href="#">Hovered Link</a> here.
		</div>
	</td>
	<td class="td4" selector="' . $body_class . 'div#widgetarea5 td.td4">
		<div class="widget" selector="' . $body_class . 'div#widgetarea5 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea5 div.widget h3">Widget Title</h3>
			<ul selector="' . $body_class . 'div#widgetarea5 div.widget ul">
				<li selector="' . $body_class . 'div#widgetarea5 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea5 div.widget ul li a" href="#">UL list item</a>
				</li>
				<li selector="' . $body_class . 'div#widgetarea5 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea5 div.widget ul li a" href="#">UL list item</a>
						<ul selector="' . $body_class . 'div#widgetarea5 div.widget ul ul">
							<li selector="' . $body_class . 'div#widgetarea5 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea5 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
							<li class="hover" selector="' . $body_class . 'div#widgetarea5 div.widget ul li li.hover">
								<a class="hover" selector="' . $body_class . 'div#widgetarea5 div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
							</li>
							<li selector="' . $body_class . 'div#widgetarea5 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea5 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
						</ul>
				</li>
				<li selector="' . $body_class . 'div#widgetarea5 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea5 div.widget ul li a" href="#">UL list item</a>
				</li>
			</ul>
		</div>
		<div class="widget" selector="' . $body_class . 'div#widgetarea5 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea5 div.widget h3">Widget Title</h3>
			Widget text with a <a selector="' . $body_class . 'div#widgetarea5 div.widget a" href="#">Link</a> and a 
			<a class="hover" selector="' . $body_class . 'div#widgetarea5 div.widget a.hover" href="#">Hovered Link</a> here.
		</div>
	</td>
	<td class="td5" selector="' . $body_class . 'div#widgetarea5 td.td5">
		<div class="widget" selector="' . $body_class . 'div#widgetarea5 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea5 div.widget h3">Widget Title</h3>
			<ul selector="' . $body_class . 'div#widgetarea5 div.widget ul">
				<li selector="' . $body_class . 'div#widgetarea5 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea5 div.widget ul li a" href="#">UL list item</a>
				</li>
				<li selector="' . $body_class . 'div#widgetarea5 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea5 div.widget ul li a" href="#">UL list item</a>
						<ul selector="' . $body_class . 'div#widgetarea5 div.widget ul ul">
							<li selector="' . $body_class . 'div#widgetarea5 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea5 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
							<li class="hover" selector="' . $body_class . 'div#widgetarea5 div.widget ul li li.hover">
								<a class="hover" selector="' . $body_class . 'div#widgetarea5 div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
							</li>
							<li selector="' . $body_class . 'div#widgetarea5 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea5 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
						</ul>
				</li>
				<li selector="' . $body_class . 'div#widgetarea5 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea5 div.widget ul li a" href="#">UL list item</a>
				</li>
			</ul>
		</div>
		<div class="widget" selector="' . $body_class . 'div#widgetarea5 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea5 div.widget h3">Widget Title</h3>
			Widget text with a <a selector="' . $body_class . 'div#widgetarea5 div.widget a" href="#">Link</a> and a 
			<a class="hover" selector="' . $body_class . 'div#widgetarea5 div.widget a.hover" href="#">Hovered Link</a> here.
		</div>
	</td>
	</tr>
	</table>
	</div>
	</span>
</li>
';
$widgetarea_6 = '
<li id="widgetarea_6">
	<span class="title">6 Widget Areas</span>
	<span class="content">
	<div class="widgetarea" id="widgetarea6" selector="' . $body_class . 'div#widgetarea6">
	<table style="table-layout:fixed" width="100%" cellpadding="0" cellspacing="0">
	<colgroup><col class="col1" selector="' . $body_class . 'div#widgetarea6 .col1" /><col class="col2" selector="' . $body_class . 'div#widgetarea6 .col2" />
	<col class="col3" selector="' . $body_class . 'div#widgetarea6 .col3" /><col class="col4" selector="' . $body_class . 'div#widgetarea6 .col4" />
	<col class="col5" selector="' . $body_class . 'div#widgetarea6 .col5" /><col class="col6" selector="' . $body_class . 'div#widgetarea6 .col6" />
	</colgroup>
	<tr>
	<td class="td1" selector="' . $body_class . 'div#widgetarea6 td.td1">
		<div class="widget" selector="' . $body_class . 'div#widgetarea6 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea6 div.widget h3">Widget Title</h3>
			<ul selector="' . $body_class . 'div#widgetarea6 div.widget ul">
				<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li a" href="#">UL list item</a>
				</li>
				<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li a" href="#">UL list item</a>
						<ul selector="' . $body_class . 'div#widgetarea6 div.widget ul ul">
							<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
							<li class="hover" selector="' . $body_class . 'div#widgetarea6 div.widget ul li li.hover">
								<a class="hover" selector="' . $body_class . 'div#widgetarea6 div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
							</li>
							<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
						</ul>
				</li>
				<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li a" href="#">UL list item</a>
				</li>
			</ul>
		</div>
		<div class="widget" selector="' . $body_class . 'div#widgetarea6 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea6 div.widget h3">Widget Title</h3>
			Widget text with a <a selector="' . $body_class . 'div#widgetarea6 div.widget a" href="#">Link</a> and a 
			<a class="hover" selector="' . $body_class . 'div#widgetarea6 div.widget a.hover" href="#">Hovered Link</a> here.
		</div>
	</td>
	<td class="td2" selector="' . $body_class . 'div#widgetarea6 td.td2">
		<div class="widget" selector="' . $body_class . 'div#widgetarea6 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea6 div.widget h3">Widget Title</h3>
			<ul selector="' . $body_class . 'div#widgetarea6 div.widget ul">
				<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li a" href="#">UL list item</a>
				</li>
				<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li a" href="#">UL list item</a>
						<ul selector="' . $body_class . 'div#widgetarea6 div.widget ul ul">
							<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
							<li class="hover" selector="' . $body_class . 'div#widgetarea6 div.widget ul li li.hover">
								<a class="hover" selector="' . $body_class . 'div#widgetarea6 div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
							</li>
							<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
						</ul>
				</li>
				<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li a" href="#">UL list item</a>
				</li>
			</ul>
		</div>
		<div class="widget" selector="' . $body_class . 'div#widgetarea6 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea6 div.widget h3">Widget Title</h3>
			Widget text with a <a selector="' . $body_class . 'div#widgetarea6 div.widget a" href="#">Link</a> and a 
			<a class="hover" selector="' . $body_class . 'div#widgetarea6 div.widget a.hover" href="#">Hovered Link</a> here.
		</div>
	</td>
	<td class="td3" selector="' . $body_class . 'div#widgetarea6 td.td3">
		<div class="widget" selector="' . $body_class . 'div#widgetarea6 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea6 div.widget h3">Widget Title</h3>
			<ul selector="' . $body_class . 'div#widgetarea6 div.widget ul">
				<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li a" href="#">UL list item</a>
				</li>
				<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li a" href="#">UL list item</a>
						<ul selector="' . $body_class . 'div#widgetarea6 div.widget ul ul">
							<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
							<li class="hover" selector="' . $body_class . 'div#widgetarea6 div.widget ul li li.hover">
								<a class="hover" selector="' . $body_class . 'div#widgetarea6 div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
							</li>
							<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
						</ul>
				</li>
				<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li a" href="#">UL list item</a>
				</li>
			</ul>
		</div>
		<div class="widget" selector="' . $body_class . 'div#widgetarea6 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea6 div.widget h3">Widget Title</h3>
			Widget text with a <a selector="' . $body_class . 'div#widgetarea6 div.widget a" href="#">Link</a> and a 
			<a class="hover" selector="' . $body_class . 'div#widgetarea6 div.widget a.hover" href="#">Hovered Link</a> here.
		</div>
	</td>
	<td class="td4" selector="' . $body_class . 'div#widgetarea6 td.td4">
		<div class="widget" selector="' . $body_class . 'div#widgetarea6 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea6 div.widget h3">Widget Title</h3>
			<ul selector="' . $body_class . 'div#widgetarea6 div.widget ul">
				<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li a" href="#">UL list item</a>
				</li>
				<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li a" href="#">UL list item</a>
						<ul selector="' . $body_class . 'div#widgetarea6 div.widget ul ul">
							<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
							<li class="hover" selector="' . $body_class . 'div#widgetarea6 div.widget ul li li.hover">
								<a class="hover" selector="' . $body_class . 'div#widgetarea6 div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
							</li>
							<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
						</ul>
				</li>
				<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li a" href="#">UL list item</a>
				</li>
			</ul>
		</div>
		<div class="widget" selector="' . $body_class . 'div#widgetarea6 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea6 div.widget h3">Widget Title</h3>
			Widget text with a <a selector="' . $body_class . 'div#widgetarea6 div.widget a" href="#">Link</a> and a 
			<a class="hover" selector="' . $body_class . 'div#widgetarea6 div.widget a.hover" href="#">Hovered Link</a> here.
		</div>
	</td>
	<td class="td5" selector="' . $body_class . 'div#widgetarea6 td.td5">
		<div class="widget" selector="' . $body_class . 'div#widgetarea6 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea6 div.widget h3">Widget Title</h3>
			<ul selector="' . $body_class . 'div#widgetarea6 div.widget ul">
				<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li a" href="#">UL list item</a>
				</li>
				<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li a" href="#">UL list item</a>
						<ul selector="' . $body_class . 'div#widgetarea6 div.widget ul ul">
							<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
							<li class="hover" selector="' . $body_class . 'div#widgetarea6 div.widget ul li li.hover">
								<a class="hover" selector="' . $body_class . 'div#widgetarea6 div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
							</li>
							<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
						</ul>
				</li>
				<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li a" href="#">UL list item</a>
				</li>
			</ul>
		</div>
		<div class="widget" selector="' . $body_class . 'div#widgetarea6 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea6 div.widget h3">Widget Title</h3>
			Widget text with a <a selector="' . $body_class . 'div#widgetarea6 div.widget a" href="#">Link</a> and a 
			<a class="hover" selector="' . $body_class . 'div#widgetarea6 div.widget a.hover" href="#">Hovered Link</a> here.
		</div>
	</td>
	<td class="td6" selector="' . $body_class . 'div#widgetarea6 td.td6">
		<div class="widget" selector="' . $body_class . 'div#widgetarea6 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea6 div.widget h3">Widget Title</h3>
			<ul selector="' . $body_class . 'div#widgetarea6 div.widget ul">
				<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li a" href="#">UL list item</a>
				</li>
				<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li a" href="#">UL list item</a>
						<ul selector="' . $body_class . 'div#widgetarea6 div.widget ul ul">
							<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
							<li class="hover" selector="' . $body_class . 'div#widgetarea6 div.widget ul li li.hover">
								<a class="hover" selector="' . $body_class . 'div#widgetarea6 div.widget ul li li a.hover" href="#">2nd l. LI HOVER/CURR.</a>
							</li>
							<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li li">
								<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li li a" href="#">2nd level LI</a>
							</li>
						</ul>
				</li>
				<li selector="' . $body_class . 'div#widgetarea6 div.widget ul li">
					<a selector="' . $body_class . 'div#widgetarea6 div.widget ul li a" href="#">UL list item</a>
				</li>
			</ul>
		</div>
		<div class="widget" selector="' . $body_class . 'div#widgetarea6 div.widget">
			<h3 selector="' . $body_class . 'div#widgetarea6 div.widget h3">Widget Title</h3>
			Widget text with a <a selector="' . $body_class . 'div#widgetarea6 div.widget a" href="#">Link</a> and a 
			<a class="hover" selector="' . $body_class . 'div#widgetarea6 div.widget a.hover" href="#">Hovered Link</a> here.
		</div>
	</td>
	</tr>
	</table>
	</div>
	</span>
</li>
';
?>