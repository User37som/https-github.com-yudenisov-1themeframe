<div class="infocontainer-head">
	<h2 style="float:left;padding-right:30px">Menu Bars <strong>Menu 2</strong></h2>
	<a href="#" class="moreinfolink" id="hormenu2more">Show/Hide More Info</a>	
</div>
<div id="hormenu2more-container" class="infocontainer">
	<ul><li>This will be listed as "Menu 2" at WP Site Admin -> Appearance -> Menus -> Theme Locations</li>
	<li>In WordPress, configure a menu and assign it to one of the 2 "Theme Locations" Menu 1 or Menu 2</li>
		<li>The usual CSS Parent->Child inheritance applies throughout ThemeFrame, especially for the Menu Bar, 
		because they are built - like most navigation bars - with parent/child UL's (unordered lists)</li>
		<li>That means that styling a parent item affects its children</li>
		<li>For instance, when you style <code>ul.nav li</code> it will - here in the preview - <strong>seem</strong>
		 to affect the sub-level items like <code>ul.nav ul li</code> and <code>ul.nav ul li</code> as well</li>
		<li>Reload the preview often by clicking the <code>Menu 2</code> menu tabs on the left again, to get 
		an accurate preview. Reloading the preview will make the browser process ALL the CSS from top to bottom for an up-to-date preview.</li>
	</ul>
</div>

<?php if (!in_array($thisTemplate, array('global', 'themeinfo', 'layoutwidth', 'customwidgetareas', 'headerimages', 
	'postinfo', 'readmore', 'footercontent', 'multipagetitles', 'commenttext', 'nextprevnav', 'customcss', 'customjs', 
	'customjquery', 'customphp', 'customhead', 'custombodytag', 'custombodytop', 'custombodybottom'))) { ?>
<div class="livepreviewinfo">
	<div class="livepreview"><span>LIVE PREVIEW BELOW</span> <a href="#" class="dialogicon" id="livepreviewinfo">?</a></div>
	<div style="float:right">
		CSS Selector list <a href="#" class="dialogicon" id="selectorlistinfo">?</a>  
		<select style="margin-left:10px" name="tfcssselector" id="tfcssselector">
			<?php tf_selectors($thisTemplate); ?>
		</select>
	</div>
</div>
<?php } ?>


<!-- Preview Hormenu 2 -->
<div class="tf-preview-container tf-preview-hormenu2">

<div class="index" selector="div.index">
<div id="wrapper">
<div id="container" selector="div#container">

<table id="layout" border="0" cellspacing="0" cellpadding="0">
<tr>
<td id="td-header" colspan="3" selector="td#td-header">

<div class="hormenu2 clearfix" selector="div.hormenu2">
	<ul class="nav2" selector="ul.nav2">
		<li selector="ul.nav2 li"><a href="#" class="link" selector="ul.nav2 li a">First Level</a></li>
		<li selector="ul.nav2 li"><a href="#" class="link hover" selector="ul.nav2 li a.hover">Hover/Current</a></li>
		<li selector="ul.nav2 li"><a href="#" class="link parent" selector="ul.nav2 li a.parent">Parent</a>
			<ul selector="ul.nav2 ul">
				<li selector="ul.nav2 ul li"><a href="#" class="link" selector="ul.nav2 ul li a">Second Level</a></li>
				<li selector="ul.nav2 ul li"><a href="#" class="link hover" selector="ul.nav2 ul li a.hover">Hover/Current</a></li>
				<li selector="ul.nav2 ul li"><a href="#" class="link parent" selector="ul.nav2 ul li a.parent">Parent</a>
					<ul selector="ul.nav2 ul ul">
						<li selector="ul.nav2 ul ul li"><a href="#" class="link" selector="ul.nav2 ul ul li a">Third+ Level</a></li>
						<li selector="ul.nav2 ul ul li"><a href="#" class="link hover" selector="ul.nav2 ul ul li a.hover">Hover/Current</a></li>
						<li selector="ul.nav2 ul ul li"><a href="#" class="link parent" selector="ul.nav2 ul ul li a.parent">Parent</a>
							<ul selector="ul.nav2 ul ul">
								<li selector="ul.nav2 ul ul li"><a href="#" class="link" selector="ul.nav2 ul ul li a">Third+ Level</a></li>
								<li selector="ul.nav2 ul ul li"><a href="#" class="link hover" selector="ul.nav2 ul ul li a.hover">Hover/Current</a></li>
								<li selector="ul.nav2 ul ul li"><a href="#" class="link parent" selector="ul.nav2 ul ul li a.parent">Parent</a></li>
								<li selector="ul.nav2 ul ul li"><a href="#" class="link" selector="ul.nav2 ul ul li a">Third+ Level</a></li>
								<li selector="ul.nav2 ul ul li"><a href="#" class="link" selector="ul.nav2 ul ul li a">Third+ Level</a></li>
							</ul>								
						</li>
						<li selector="ul.nav2 ul ul li"><a href="#" class="link" selector="ul.nav2 ul ul li a">Third+ Level</a></li>
						<li selector="ul.nav2 ul ul li"><a href="#" class="link" selector="ul.nav2 ul ul li a">Third+ Level</a></li>
					</ul>
				</li>
				<li selector="ul.nav2 ul li"><a href="#" class="link" selector="ul.nav2 ul li a">Second Level</a></li>
				<li selector="ul.nav2 ul li"><a href="#" class="link" selector="ul.nav2 ul li a">Second Level</a></li>
			</ul>
		</li>
		<li selector="ul.nav2 li"><a href="#" class="link" selector="ul.nav2 li a">First Level</a></li>
		<li selector="ul.nav2 li"><a href="#" class="link" selector="ul.nav2 li a">First Level</a></li>
		<li selector="ul.nav2 li"><a href="#" class="link" selector="ul.nav2 li a">First Level</a></li>
	</ul>
</div>

</td>
</tr>
</table>
</div> <!-- / div#container -->
</div> <!-- / div#wrapper -->
</div> <!-- / div.body -->
</div><!-- / Preview Hormenu -->