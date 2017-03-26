<?php 
function tf_pagetemplate() {

	global $thfr_css;

	$thisTemplate = $_POST['selector']; 
	$thisParameter = $_POST['parameter']; 

	// inconsistency between WP body_class (error404) and page template name (404.php)
	if ($thisTemplate == '404') $body_class = 'div.error404 '; 
	else if ($thisTemplate == 'index') $body_class = ''; 
	else $body_class = 'div.' . $thisTemplate . ' '; 

	#include(THFRPATH . 'includes/tf_page_items.php');
	?>
	<style type="text/css">
	<?php tf_print_css_code(1); ?>
	</style>
	<?php
	$cur_sel = (!isset($thfr_css['tfcssselector']) ? "div#wrapper" : $thfr_css['tfcssselector']);
	# $cur_group = (!isset($thfr_css['selectorgroup']) ? 'index' : $thfr_css['selectorgroup']);
	?>

	<span style="display:none">
		<select name="selectorgroup" id="selectorgroup">
			<option value="themeinfo"<?php echo ($thisTemplate == 'themeinfo' ? ' selected="selected"' : ''); ?>>Theme Info</option>
			<option value="layoutwidth"<?php echo ($thisTemplate == 'layoutwidth' ? ' selected="selected"' : ''); ?>>Layout Width</option>
			<option value="excerpts"<?php echo ($thisTemplate == 'excerpts' ? ' selected="selected"' : ''); ?>>Excerpts & Teasers</option>
			<option value="headerimages"<?php echo ($thisTemplate == 'headerimages' ? ' selected="selected"' : ''); ?>>Header Images</option>
			<option value="text"<?php echo ($thisTemplate == 'text' ? ' selected="selected"' : ''); ?>>Text</option>
			<option value="images"<?php echo ($thisTemplate == 'images' ? ' selected="selected"' : ''); ?>>Images</option>
			<option value="lists"<?php echo ($thisTemplate == 'lists' ? ' selected="selected"' : ''); ?>>Lists</option>
			<option value="tables"<?php echo ($thisTemplate == 'tables' ? ' selected="selected"' : ''); ?>>Tables</option>
			<option value="blockquotes"<?php echo ($thisTemplate == 'blockquotes' ? ' selected="selected"' : ''); ?>>Blockquotes</option>
	
	<?php foreach($thfr_css['pagetemplates'] as $tpl) { ?>
			<option value="<?php echo $tpl; ?>"<?php echo ($thisTemplate == $tpl ? ' selected="selected"' : ''); ?>><?php echo $tpl; ?>.php</option>	
	<?php } ?>

			<option value="comments"<?php echo ($thisTemplate == 'comments' ? ' selected="selected"' : ''); ?>>comments.php</option>
			<option value="postcontainers"<?php echo ($thisTemplate == 'postcontainers' ? ' selected="selected"' : ''); ?>>postcontainers</option>
			<option value="custompage"<?php echo ($thisTemplate == 'custompage' ? ' selected="selected"' : ''); ?>>custompage</option>
			<option value="hormenu"<?php echo ($thisTemplate == 'hormenu' ? ' selected="selected"' : ''); ?>>Horiz. Menu</option>
			<option value="hormenu2"<?php echo ($thisTemplate == 'hormenu2' ? ' selected="selected"' : ''); ?>>Horiz. Menu 2</option>
			<option value="postinfo"<?php echo ($thisTemplate == 'postinfo' ? ' selected="selected"' : ''); ?>>Post Info</option>
			<option value="readmore"<?php echo ($thisTemplate == 'readmore' ? ' selected="selected"' : ''); ?>>Read More</option>
			<option value="footercontent"<?php echo ($thisTemplate == 'footercontent' ? ' selected="selected"' : ''); ?>>Footer Content</option>
			<option value="multipagetitles"<?php echo ($thisTemplate == 'multipagetitles' ? ' selected="selected"' : ''); ?>>Multi Post Page Titles</option>
			<option value="commenttext"<?php echo ($thisTemplate == 'commenttext' ? ' selected="selected"' : ''); ?>>Comment Text Bits</option>
			<option value="nextprevnav"<?php echo ($thisTemplate == 'nextprevnav' ? ' selected="selected"' : ''); ?>>Next / Prev. Nav.</option>
			<option value="customcss"<?php echo ($thisTemplate == 'customcss' ? ' selected="selected"' : ''); ?>>Custom CSS</option>
			<option value="customjs"<?php echo ($thisTemplate == 'customjs' ? ' selected="selected"' : ''); ?>>Custom Javascript</option>
			<option value="customjquery"<?php echo ($thisTemplate == 'customjquery' ? ' selected="selected"' : ''); ?>>Custom jQuery</option>
			<option value="customphp"<?php echo ($thisTemplate == 'customphp' ? ' selected="selected"' : ''); ?>>Custom PHP</option>
			<option value="customhead"<?php echo ($thisTemplate == 'customhead' ? ' selected="selected"' : ''); ?>>Custom Head</option>
			<option value="custombodytag"<?php echo ($thisTemplate == 'custombodytag' ? ' selected="selected"' : ''); ?>>Custom Body Tag</option>
			<option value="custombodytop"<?php echo ($thisTemplate == 'custombodytop' ? ' selected="selected"' : ''); ?>>Custom Body Top</option>
			<option value="custombodybottom"<?php echo ($thisTemplate == 'custombodybottom' ? ' selected="selected"' : ''); ?>>Custom Body Bottom</option>
		</select>

		<input type="text" size="5" name="left-left-width" id="left-left-width" value="<?php echo $thfr_css['left-left-width']; ?>" />
		<input type="text" size="5" name="left-right-width" id="left-right-width" value="<?php echo $thfr_css['left-right-width']; ?>" />
		<input type="text" size="5" name="right-left-width" id="right-left-width" value="<?php echo $thfr_css['right-left-width']; ?>" />
		<input type="text" size="5" name="right-right-width" id="right-right-width" value="<?php echo $thfr_css['right-right-width']; ?>" />
	</span>
		
	<?php
	if (in_array($thisTemplate, array('global', 'themeinfo', 'layoutwidth', 'excerpts', 'headerimages', 'text', 'images', 
		'lists', 'tables', 'blockquotes', 'content', 'comments', 'hormenu', 'hormenu2', 'postinfo', 'readmore', 'footercontent', 
		'multipagetitles', 'commenttext', 'nextprevnav', 'custompage', 'customcss', 'customjs', 'customjquery', 'customphp', 'customhead', 
		'custombodytag', 'custombodytop', 'custombodybottom', 'postcontainers'))) {
		echo "</div>";
		include (THFRPATH . 'templates/bytesforall/' . $thisTemplate . '.php');
		die();
	}
	?>

	
	<div id="dropitems">
	<br/>
		<span style="font-size:15px;font-weight:bold; color:#fff">DRAG &amp; DROP</span> 
			<a href="#" class="dialogicon" id="dragdropinfo">?</a><br />	<br/>
			<a href="#" class="highlightdropareas">Highlight Drop Areas</a>
			<!--
			<a href="#" id="save-dragndrop" class="save-button2">Save D&amp;D</a>
			-->
			<div id="dragdropsavesuccess"></div>
		<div id="availdrop">Available D&amp;D items:</div>
		
		<?php tf_drop_area($thisTemplate, "drop", $body_class); ?>
		
		<hr style="color:#444;background:#444;border: solid 1px #444" />
		<div style="color:#ccc;margin: 10px 0 3px 0"><strong style="color:#eee">Add new Drag &amp; Drop items:</strong></div>
		<a href="#" id="newdropimage" title="Add IMAGE">&nbsp;</a>
		<a href="#" id="newdroplink" title="Add LINK">&nbsp;</a>
		<!-- 
		<a href="#" id="newdropdiv" title="Add DIV element as new D&amp;D item">&nbsp;</a>
		-->
	</div>

	
	<?php if( in_array($thisTemplate, $thfr_css['pagetemplates']) ) {?>
	<div class="infocontainer-head">			
		<h2>Page Templates <strong><?php echo $thisTemplate; ?>.php</strong></h2>
		<a href="#" class="moreinfolink" id="<?php echo $thisTemplate; ?>stylemore">Show/Hide More Info</a>
	</div>	
	<?php } ?>

	
	<?php if ($thisTemplate == 'index') {?>
	<div id="indexstylemore-container" class="infocontainer">
		<p>index.php will be used for 
		all pages that do not have a better matching template. The matching is done based on the  
		<a href="http://codex.wordpress.org/images/1/18/Template_Hierarchy.png" target="_blank">WordPress 
		Template Hierarchy</a> and depends on whether a better matching page template exists in the directory 
		of the theme. index.php is the default template and must exist in the theme directory. </p>
		<p><strong>Style everything that you want to apply globally (throughout the whole web site) right here on this template.</strong> You should be 
		spending most of your time on this template here. On the other page templates (home.php, single.php...) 
		style only what you want to style differently on those page templates, compared to the global default style. 
		This can be as little as a background color of a certain DIV container, or even nothing at all.</p>
	</div>

	<?php } elseif ($thisTemplate == 'home') {?>
	<div id="homestylemore-container" class="infocontainer">
		<p>home.php will be used for the home page. If home.php doesn't exist, index.php 
		will be used instead. Here on home.php style only what you want to style differently on the front page of the 
		site compared to the overall style of the web site (which you should style on index.php).</p>
		<p>NOTE: While the CSS style will be inherited from index.php, the location of drag & drop items will 
		not be inherited. Arrange draggable items like menus, breadcrumbs etc. and <strong>click "Save" at least 
		once</strong> before downloading and using this page template in a theme.</p>
	</div>

	<?php } elseif ($thisTemplate == 'single') {?>
	<div id="singlestylemore-container" class="infocontainer">
		<p>single.php will be used for single post pages. If it doesn't exist index.php will be used instead. 
		single.php will also pull in the comments.php template at its bottom. Here on single.php style only 
		what you want to style differently on single post pages compared to the overall style of the web site 
		(which you should style on index.php).</p>
		<p>NOTE: While the CSS style will be inherited from index.php,
		 the location of drag & drop items will not be inherited. Arrange draggable items 
		like menus, breadcrumbs etc. and <strong>click "Save" at least once</strong> before downloading and 
		using this page template in a theme.</p>
	</div>

	<?php } elseif ($thisTemplate == 'page') {?>
	<div id="pagestylemore-container" class="infocontainer">
		<p>page.php will be used for static pages. If it doesn't exist index.php will be used instead. 
		Here on page.php style only what you want to style differently on static pages  
		 compared to the overall style of the web site (which you should style on index.php).</p>
		<p>NOTE: While the CSS style will be inherited from index.php,
		 the location of drag & drop items will not be inherited. Arrange draggable items like menus, breadcrumbs etc. 
		 and <strong>click "Save" at least once</strong> before downloading and using this page template in a theme.</p>
	</div>
	<?php } ?>

	<div class="templatesettings">
		<table style="width:100%;" cellpadding="0" cellspacing="0">
			<tr>
				<td width="240" style="border-right:solid 1px #444">
					<form id="sidebar-form" method="POST" action="">
						<strong>Sidebars</strong>: 
						<strong>Left</strong> <select name="sidebarsleft" id="sidebarsleft">
							<option value="0"<?php echo ($thfr_css[$thisTemplate]['sidebarsleft'] == '0' ? ' selected="selected"' : ''); ?>>0</option>
							<option value="1"<?php echo ($thfr_css[$thisTemplate]['sidebarsleft'] == '1' ? ' selected="selected"' : ''); ?>>1</option>
							<option value="2"<?php echo ($thfr_css[$thisTemplate]['sidebarsleft'] == '2' ? ' selected="selected"' : ''); ?>>2</option>
							<option value="3"<?php echo ($thfr_css[$thisTemplate]['sidebarsleft'] == '3' ? ' selected="selected"' : ''); ?>>3</option>
						</select>&nbsp;
						<strong>Right</strong> <select name="sidebarsright" id="sidebarsright">
							<option value="0"<?php echo ($thfr_css[$thisTemplate]['sidebarsright'] == '0' ? ' selected="selected"' : ''); ?>>0</option>
							<option value="1"<?php echo ($thfr_css[$thisTemplate]['sidebarsright'] == '1' ? ' selected="selected"' : ''); ?>>1</option>
							<option value="2"<?php echo ($thfr_css[$thisTemplate]['sidebarsright'] == '2' ? ' selected="selected"' : ''); ?>>2</option>
							<option value="3"<?php echo ($thfr_css[$thisTemplate]['sidebarsright'] == '3' ? ' selected="selected"' : ''); ?>>3</option>
						</select> <a href="#" class="dialogicon" id="sidebarinfo">?</a>
					</form>
				</td>
				<td width="100" style="border-left:solid 1px #888;">
					 &nbsp;&nbsp;<strong>Custom width:</strong>
				</td>
				<td width="120" style="border-right:solid 1px #444;">
					<input class="slidertext" type="text" style="text-align:right" size="4" name="uniquewidth" id="uniquewidth" 
					value="<?php echo $thfr_css[$thisTemplate]['uniquewidth']; ?>" /> <strong>px</strong>
					&nbsp;<a href="#" class="dialogicon" id="customwidthinfo">?</a>
				</td>
			<!--	
				<td>
					<div class="slider" id="uniquewidth-slider" slidermax="1280" slidermin="300" unitseparate="1"></div>
				</td>
			-->
			<!--				
				<td style="text-align:center;border-left:solid 1px #888;border-right:solid 1px #444;">
				<a href="#" id="save-sidebarsandcustomwidth" class="save-button">&larr; Save &rarr;</a>
				</td>
			-->
				<td style="border-left:solid 1px #888;">
					 &nbsp;&nbsp;<strong>Use Post Container:</strong>
					 <select name="usepostcontainer" id="usepostcontainer">
					 <?php foreach($thfr_css['postcontainers'] as $name => $value) { ?>
						<option value="<?php echo $name; ?>"<?php echo ($thfr_css[$thisTemplate]['usepostcontainer'] == $name ? ' selected="selected"' : ''); ?>><?php echo $name; ?></option>
					<?php } ?>
					</select>&nbsp;<a href="#" class="dialogicon" id="usepostcontainerinfo">?</a>
				</td>
			</tr>
		</table>
	</div>
		
	<?php if (!in_array($thisTemplate, array('global', 'themeinfo', 'layoutwidth', 'customwidgetareas', 'headerimages', 
		'postinfo', 'readmore', 'footercontent', 'multipagetitles', 'commenttext', 'nextprevnav', 'customcss', 'customjs', 
		'customjquery', 'customphp', 'customhead', 'custombodytag', 'custombodytop', 'custombodybottom'))) { ?>
	<div class="livepreviewinfo">
	<div class="livepreview"><span>LIVE PREVIEW BELOW</span>&nbsp;<a href="#" class="dialogicon" id="livepreviewinfo">?</a></div>
		<div style="float:right">
			CSS Selector list   
			<select style="margin-left:10px" name="tfcssselector" id="tfcssselector">
				<?php tf_selectors($thisTemplate); ?>
			</select>&nbsp;<a href="#" class="dialogicon" id="selectorlistinfo">?</a>
		</div>
	</div>
	<?php } ?>
		
	<!-- Preview Layout -->
	<div class="tf-preview-container tf-preview-<?php echo $thisTemplate; ?>">
		<?php tf_pagetemplate_include($thisTemplate, $body_class); ?>
	</div>
	<!-- / Preview Layout -->
	
<?php 
} 
?>