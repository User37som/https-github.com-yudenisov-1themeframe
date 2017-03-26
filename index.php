<?php include(dirname(__FILE__) . "/functions.php"); 
if ($bla['jsjs'] == $x) echo $bla; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  dir="ltr" lang="en-US">
<head>
<meta http-equiv="Content-Type"  content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta http-equiv="Expires" content="Tue, 01 Jan 2000 12:12:12 GMT">
<meta http-equiv="Pragma" content="no-cache">
<title>TF Beta 18</title>
<link rel="shortcut icon" href="/themeframe/favicon.ico" />
<link rel="stylesheet" href="<?php echo THFRURL . 'css/jquery-ui-1.7.2.custom.css'; ?>" type="text/css" media="all" />
<!--
<link rel="stylesheet" href="<?php echo THFRURL . 'javascript/jPicker/jPicker.css'; ?>" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo THFRURL . 'javascript/jPicker/css/jPicker-1.1.2.css'; ?>" type="text/css" media="all" />
-->
<link rel="stylesheet" href="<?php echo THFRURL . 'css/themeframe.css'; ?>" type="text/css" media="all" />
<script type="text/javascript">
var THFRURL = '<?php echo THFRURL; ?>';
var THFRPATH = '<?php echo urlencode(THFRPATH); ?>';
var THFRUPLOADPATH = '<?php echo urlencode(THFRUPLOADPATH); ?>';
var RELATIVETHFRUPLOADURL = '<?php echo RELATIVETHFRUPLOADURL; ?>';
/* for codemirror 
var editor = undefined;
var editor2 = new Array();
var editor3 = new Array();
*/
<?php foreach (array(
	'jquery-1.4.2.min.js',
	'jquery-ui-1.7.2.custom.min.js',
	'jscolor/jscolor.js',
	// 'jPicker/jpicker-1.1.2.js',
	'ajaxupload.js',
	'jquery.fileTree.js',
	'globalVariables.js',
	'centerinViewport.js',
	'applySidebars.js',
	'translateBorderRadius.js',
	'createCssObject.js',
	'applyStyles.js',
	// 'CodeMirror-0.7/js/codemirror.js',
	'autoresize.jquery.js',
	'themeframe.js') as $jsfile) {
		include(dirname(__FILE__) . "/javascript/" . $jsfile); echo "\n\n";
	}
?>
</script>
<?php // Get current selector if available
$cur_sel = (!isset($thfr_css['tfcssselector']) ? "div#wrapper" : $thfr_css['tfcssselector']);
$cur_group = (!isset($thfr_css['selectorgroup']) ? 'index' : $thfr_css['selectorgroup']);
?>
</head>
<body>

<div id="masthead">
	<a id="logo" href="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']) ?>"></a>
	<a href="#" id="downloadzip">Get Whole<br/>Theme as ZIP</a>
	<a href="#" id="downloadfiles">Get Single<br/>Theme Files</a>
	<a href="#" id="ftptransfer">FTP-Transfer<br/>Theme</a></li>
	<a href="#" id="exportdialog">Export<br/>Theme</a>
	<a href="#" id="importdialog">Import<br/>Theme</a>
	<a href="#" id="debugoutput">View<br/>Settings</a>
	<a href="#" id="resetdialog">Reset<br/>Settings</a>
	<!--
	<a id="logout" href="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']) ?>?logout">Logout</a>
	-->
</div>
<div style=
<div id="resetsuccess" style="display:none;background:yellow;padding:5px"></div>

<div id="themeframe-form"></div>

<div id="tfleftmenu">

	
	<h3 id="global-settings" class="menutitle" style="padding-top:15px">Edit <i>Global Settings</i></h3>
	<ul class="clearfix preview-tabs" id="global-settings-menu">
		<li><a class="themeinfo">Theme Info</a></li>
		<li><a class="layoutwidth">Layout Widths</a></li>
		<li><a class="headerimages">Header Images</a></li>
	</ul>
	
	<h3 id="edit-content" class="menutitle">Edit <i>Content Options</i></h3>
	<ul class="clearfix preview-tabs" id="edit-content-menu">
		<li><a class="multipagetitles">Multi-Post-Page Titles</a></li>
		<li><a class="nextprevnav">Next/Prev. Navigation</a></li>
		<li><a class="excerpts">Automatic Excerpts</a></li>
		<li><a class="footercontent">Footer Content</a></li>
	</ul>
	
	<h3 id="global-styles" class="menutitle">Style <i>Typography</i></h3>
	<ul class="clearfix preview-tabs" id="global-styles-menu">
		<li><a class="text">Text</a></li>
		<!-- 
		<li><a class="tf-preview-headings headings">Headings</a></li>
		<li><a class="tf-preview-paragraphs paragraphs">Paragraphs</a></li>
		<li><a class="tf-preview-links links">Links</a></li>
		-->
		<li><a class="images">Images</a></li>
		<li><a class="lists">Lists</a></li>
		<li><a class="tables">Tables</a></li>
		<li><a class="blockquotes">Blockquotes</a></li>
	</ul>
	<h3 id="page-templates" class="menutitle">Style &amp; Layout <i>Page Templates</i></h3>
	<ul class="clearfix preview-tabs" id="page-templates-menu">
		<?php foreach($thfr_css['pagetemplates'] as $value) { ; ?>
			<li id="li-<?php echo $value; ?>"><!-- used to target item when deleted -->
				<a class="<?php echo $value; ?>"><?php echo $value; ?>.php
				<?php if ($value != 'index') { ?>
					<span title="Delete <?php echo $value; ?>.php" class="delpagetpl" id="del-<?php echo $value; ?>"></span>
				<?php } ?>
				</a>
			</li>
		<?php } ?>
		
		<li id="addtemplatelink"><a id="addpagetemplate">ADD TEMPLATE</a></li>
	</ul>
	<h3 id="post-containers" class="menutitle">Edit <i>Post Containers</i></h3>
	<ul class="clearfix preview-tabs" id="post-containers-menu">
		<?php foreach($thfr_css['postcontainers'] as $name => $value) { ; ?>
		<li><a class="postcontainers <?php echo $name; ?>"><?php echo $name; ?></a></li>		
		<?php } ?>
	</ul>
	<h3 id="menu-bars" class="menutitle">Style <i>Menu Bars</i></h3>
	<ul class="clearfix preview-tabs" id="menu-bars-menu">
		<li><a class="hormenu">Menu 1<br /></a></li>
		<li><a class="hormenu2">Menu 2<br /></a></li>
	</ul>
<!--
	<h3 id="slide-shows" class="menutitle">Slideshows</h3>
	<ul class="clearfix preview-tabs" id="slide-shows-menu">
		<li class="tf-preview-crossslide"><a class="tf-preview-crossslide crossslide">CrossSlide</a></li>
		<li class="tf-preview-cycle"><a class="tf-preview-cycle cycle">Cycle</a></li>
	</ul>
-->


	<h3 id="comment-templates" class="menutitle">Style &amp; Edit <i>Comment Section</i></h3>
	<ul class="clearfix preview-tabs" id="comment-sections-menu">
		<li><a class="comments">comments.php</a></li>
		<!-- <li><a class="commenttext">Comment Text Bits</a></li> -->
	</ul>
	
	<h3 id="code-inserts" class="menutitle">Advanced Use: <i>Code Inserts</i></h3>
	<ul class="clearfix preview-tabs" id="code-inserts-menu">
		<li><a class="custompage head">Page Templates &rarr; HEAD</a></li>
		<li><a class="custompage bodytag">Page Templates &rarr; BODY TAG</a></li>
		<li><a class="custompage bodytop">Page Templates &rarr; BODY TOP</a></li>
		<li><a class="custompage bodybottom">Page Templates &rarr; BODY BOTTOM</a></li>
		<li><a class="customcss">style.css</a></li>
		<li><a class="customjs">javascript.js</a></li>
		<li><a class="customphp">functions.php</a></li>
	</ul>
</div>

<!-- PREVIEW AREA STARTS HERE -->
<div id="tf-preview">
	<img src="<?php echo THFRURL; ?>images/defaultimg.png" style="margin: 30px 0 0 30px">
</div><!-- tf-preview -->
<!-- / PREVIEW -->

</body>
</html>