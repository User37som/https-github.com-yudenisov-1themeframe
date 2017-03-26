<?php function tf_print_css_code($preview_yesno) { 

global $thfr_css;

ob_start();

// Theme Info
if ($thfr_css['themename'] != '') {
	echo '/*
Theme Name: ' . $thfr_css['themename'] . '
Theme URI: ' . $thfr_css['themeuri'] . '
Description: ' . $thfr_css['themedescription'] . '
Version: ' . $thfr_css['themeversion'] . '
Author: ' . $thfr_css['themeauthor'] . '
Author URI: ' . $thfr_css['themeauthoruri'] . '
Tags: ' . $thfr_css['themetags'] . '
*/
' . "\n\n";
}

$available_selectors = tf_selectors();

if ($preview_yesno == 1) { 
	$tf_preview = "#tf-preview div.tf-preview-container "; 
	$divmenu = 'div.hormenu'; $divmenu2 = 'div.hormenu2';
	$ulnav = '#tf-preview ul.nav'; $ulnav2 = '#tf-preview ul.nav2';
	# $body = "body {margin:0;padding:0}\ndiv#body{width:100%;text-align:center;margin:0;padding:0}\n";
	# $body = "#tf-preview div.tf-preview-container div.index {\n\ttext-align: center; /*centering the page container */\n\tmargin: 0;\n\tpadding: 0;\n\t}\n";
} else { 
	$tf_preview = ""; 
	$divmenu = 'div#hormenu'; $divmenu2 = 'div#hormenu2';
	$ulnav = 'ul#nav'; $ulnav2 = 'ul#nav2';
	# $body = "body {\n\ttext-align: center; /*centering the page container */\n\tmargin: 0;\n\tpadding: 0;\n\t}\n";
}

// CSS Reset
echo 
$tf_preview . " html, " . 
$tf_preview . " body, " . 
$tf_preview . " div, " . 
$tf_preview . " span, " . 
$tf_preview . " applet, " . 
$tf_preview . " object, " . 
$tf_preview . " iframe, " . 
$tf_preview . " h1, " . 
$tf_preview . " h2, " . 
$tf_preview . " h3, " . 
$tf_preview . " h4, " . 
$tf_preview . " h5, " . 
$tf_preview . " h6, " . 
$tf_preview . " p, " . 
$tf_preview . " blockquote, " . 
$tf_preview . " pre, " . 
$tf_preview . " a, " . 
$tf_preview . " abbr, " . 
$tf_preview . " acronym, " . 
$tf_preview . " address, " . 
$tf_preview . " big, " . 
$tf_preview . " cite, " . 
$tf_preview . " code, " . 
$tf_preview . " del, " . 
$tf_preview . " dfn, " . 
$tf_preview . " em, " . 
$tf_preview . " font, " . 
$tf_preview . " img, " . 
$tf_preview . " ins, " . 
$tf_preview . " kbd, " . 
$tf_preview . " q, " . 
$tf_preview . " s, " . 
$tf_preview . " samp, " . 
$tf_preview . " small, " . 
$tf_preview . " strike, " . 
$tf_preview . " strong, " . 
$tf_preview . " sub, " . 
$tf_preview . " sup, " . 
$tf_preview . " tt, " . 
$tf_preview . " var, " . 
$tf_preview . " b, " . 
$tf_preview . " u, " . 
$tf_preview . " i, " . 
$tf_preview . " center, " . 
$tf_preview . " dl, " . 
$tf_preview . " dt, " . 
$tf_preview . " dd, " . 
$tf_preview . " ol, " . 
$tf_preview . " ul, " . 
$tf_preview . " ul ul, " . 
$tf_preview . " ul ul ul, " . 
$tf_preview . " li, " . 
$tf_preview . " li li, " . 
$tf_preview . " li li li, " . 
$tf_preview . " fieldset, " . 
$tf_preview . " form, " . 
$tf_preview . " label, " . 
$tf_preview . " legend, " . 
$tf_preview . " table, " . 
$tf_preview . " caption, " . 
$tf_preview . " tbody, " . 
$tf_preview . " tfoot, " . 
$tf_preview . " thead, " . 
$tf_preview . " tr, " . 
$tf_preview . " th, " . 
$tf_preview . " td {
	margin: 0; padding: 0; border: 0; outline: 0;
	vertical-align: baseline; 
}
" . $tf_preview . " body { line-height: 1.3;font-size: 13px; font-family: arial, sans-serif;}
" . $tf_preview . " ol, " . $tf_preview . " ul { list-style: none;}
" . $tf_preview . " blockquote, " . $tf_preview . " q { quotes: none;}
" . $tf_preview . " blockquote:before, " . $tf_preview . " blockquote:after, " . $tf_preview . " q:before, " . $tf_preview . " q:after { content: '';	content: none;}
" . $tf_preview . " :focus { outline: 0;}
" . $tf_preview . " ins {	text-decoration: none;}
" . $tf_preview . " del {	text-decoration: line-through;}
" . $tf_preview . " table { border-collapse: collapse; border-spacing: 0;}
";

# echo $body;

// div#wrapper is for layout width & min/max width and gets special treatment
if ( $thfr_css['div#container']['padding-left'] == 0 OR $thfr_css['div#container']['padding-left'] == '' )
	$pad_left = str_replace('px', '', $thfr_css['div#container']['padding']);
else $pad_left = str_replace('px', '', $thfr_css['div#container']['padding-left']);
if ( $thfr_css['div#container']['padding-right'] == 0 OR $thfr_css['div#container']['padding-right'] == '' )
	$pad_right = str_replace('px', '', $thfr_css['div#container']['padding']);
else $pad_right = str_replace('px', '', $thfr_css['div#container']['padding-right']);

$thfr_css['layout-min-width'] = $thfr_css['layout-minwidth'] + $pad_left + $pad_right;
$thfr_css['layout-max-width'] = $thfr_css['layout-maxwidth'] + $pad_left + $pad_right;

echo $tf_preview . 'div#wrapper {
	text-align: center; 
	margin-left: auto; 
	margin-right: auto;
	width:';
if ( $thfr_css['layout-width-type'] == 'flexible' ) { 
	echo $thfr_css['layout-percent'] . "%;\n";
	echo ($thfr_css['layout-minwidth'] == "" ? "" : "\tmin-width: " . $thfr_css['layout-min-width'] . "px;\n"); 
	echo ($thfr_css['layout-maxwidth'] == "" ? "" : "\tmax-width: " . $thfr_css['layout-max-width'] . "px;\n");	
} else {
	echo $thfr_css['layout-pixels'] . "px;\n";
}
echo "}\n";

// Still div#wrapper, now for IE6:
if ( $thfr_css['layout-width-type'] == 'flexible' && 
($thfr_css['layout-minwidth'] != "" OR $thfr_css['layout-maxwidth'] != "" ) ) { ?>
* html div#wrapper {
	<!--
	width:expression<?php if($thfr_css['layout-maxwidth'] != "") { ?>(((document.compatMode && 
	document.compatMode=='CSS1Compat') ? 
	document.documentElement.clientWidth : 
	document.body.clientWidth) 
	> <?php echo $thfr_css['layout-max-width'] +1; ?> ? "<?php echo $thfr_css['layout-max-width']; ?>px" : 
	<?php } if($thfr_css['layout-minwidth'] == "") { ?>"<?php echo $thfr_css['layout-percent'] . '%'; 
	?>"); -->}<?php } else { ?>
	(((document.compatMode && 
	document.compatMode=='CSS1Compat') ? 
	document.documentElement.clientWidth : 
	document.body.clientWidth) 
	< <?php echo $thfr_css['layout-min-width'] + 1; ?> ? "<?php echo $thfr_css['layout-min-width']; ?>px" : 
	"<?php echo $thfr_css['layout-percent'] . '%'; ?>")); 
	-->
}	
<?php 
	}
}
?>

<?php echo $tf_preview; ?> .alignleft 
{ 
	float:left 
}
<?php echo $tf_preview; ?> .alignright 
{ 
	float: right 
}
<?php echo $tf_preview; ?> .aligncenter, <?php echo $tf_preview; ?> div.aligncenter 
{
	display: block;
	margin-left: auto;
	margin-right: auto;
}

<?php echo $tf_preview; ?> img.alignleft, <?php echo $tf_preview; ?> div.alignleft 
{
	/* display:inline; */
	margin: 8px 10px 5px 0;
}

<?php echo $tf_preview; ?> img.alignright, <?php echo $tf_preview; ?> div.alignright 
{
	/* display:inline; */
	margin: 8px 0 5px 10px;
}

<?php echo $tf_preview; ?> p img {
	max-width: 100%;
	padding: 0;
}

<?php echo $tf_preview; ?> div#container {
	width: auto;
	margin-left: auto;
	margin-right: auto;
	text-align: left; /* resetting the "text-align: center" of "div#wrapper" */
}

/*-------------------- LAYOUT to keep it all together -----*/
	
<?php echo $tf_preview; ?> table#layout {
	font-size: 100%;
	width: 100%;
	table-layout: fixed;
}

<?php echo $tf_preview; ?> table#layout td {
	vertical-align: top;
}
	
.col-left { width: <?php echo str_replace('px','',$thfr_css['left-left-width']) + str_replace('px','',$thfr_css['left-right-width']) . 'px'; ?>}
.col-left-left { width: <?php echo $thfr_css['left-left-width']; ?>}
.col-left-right { width: <?php echo $thfr_css['left-right-width']; ?>}
.col-center {width: 100%}
.col-right { width: <?php echo str_replace('px','',$thfr_css['right-left-width']) + str_replace('px','',$thfr_css['right-right-width']) . 'px'; ?>}
.col-right-left { width: <?php echo $thfr_css['right-left-width']; ?>}
.col-right-right { width: <?php echo $thfr_css['right-right-width']; ?>}


/* Hor. Menus */

/* nav */

<?php echo $ulnav; ?>, <?php echo $ulnav; ?> ul {
	float: left; width: 100%; list-style: none;
	line-height: 1; margin: 0; padding: 0;
}

<?php echo $ulnav; ?> a { display: block; width: auto; text-decoration: none; padding: 6px 10px; }
<?php echo $ulnav; ?> li { float: left; padding: 0; width: auto; }

<?php echo $ulnav; ?> li ul {
	position: absolute;
	<?php if ($preview_yesno == 1) { ?>
		left: auto;
	<?php } else { ?>
		left: -999em;
	<?php } ?>
	height: auto;
	width: 150px;
	border-width: 1px;
	margin: 0;
}

<?php echo $ulnav; ?> li li { 
	width: 100%; 
	float: none; /* Konqueror */
	}
<?php echo $ulnav; ?> li ul a {	width: 100%; }
<?php echo $ulnav; ?> li ul ul { margin-left: 164px; margin-top: -54px; }

/* nav2 */
	
<?php echo $ulnav2; ?>, <?php echo $ulnav2; ?> ul {
	float: left; width: 100%; list-style: none;
	line-height: 1; margin: 0; padding: 0;
}

<?php echo $ulnav2; ?> a { display: block; width: auto; text-decoration: none; padding: 6px 10px; }
<?php echo $ulnav2; ?> li { float: left; padding: 0; width: auto; }

<?php echo $ulnav2; ?> li ul {
	position: absolute;
	<?php if ($preview_yesno == 1) { ?>
		left: auto;
	<?php } else { ?>
		left: -999em;
	<?php } ?>
	height: auto;
	width: 150px;
	border-width: 1px;
	margin: 0;
}

<?php echo $ulnav2; ?> li li { 
	width: 100%; 
	float: none; /* Konqueror */
	}
<?php echo $ulnav2; ?> li ul a { width: 100%; }
<?php echo $ulnav2; ?> li ul ul { margin-left: 164px; margin-top: -54px; }

/* nav + nav2 */

<?php if ($preview_yesno != 1) { ?>
	<?php echo $ulnav; ?> li:hover ul ul, 
	<?php echo $ulnav; ?> li:hover ul ul ul, 
	<?php echo $ulnav; ?> li.sfhover ul ul, 
	<?php echo $ulnav; ?> li.sfhover ul ul ul,
	<?php echo $ulnav2; ?> li:hover ul ul, 
	<?php echo $ulnav2; ?> li:hover ul ul ul, 
	<?php echo $ulnav2; ?> li.sfhover ul ul, 
	<?php echo $ulnav2; ?> li.sfhover ul ul ul {
		left: -999em;
	}

	<?php echo $ulnav; ?> li:hover ul, 
	<?php echo $ulnav; ?> li li:hover ul, 
	<?php echo $ulnav; ?> li li li:hover ul, 
	<?php echo $ulnav; ?> li.sfhover ul, 
	<?php echo $ulnav; ?> li li.sfhover ul, 
	<?php echo $ulnav; ?> li li li.sfhover ul,
	<?php echo $ulnav2; ?> li:hover ul, 
	<?php echo $ulnav2; ?> li li:hover ul, 
	<?php echo $ulnav2; ?> li li li:hover ul, 
	<?php echo $ulnav2; ?> li.sfhover ul, 
	<?php echo $ulnav2; ?> li li.sfhover ul, 
	<?php echo $ulnav2; ?> li li li.sfhover ul {
		left: auto;
	}
<?php } ?>


	
<?php
// all other selectors
foreach ($available_selectors as $sel ) {
	if (isset($thfr_css[$sel])) {
		echo tf_create_css_code($sel, $preview_yesno);
	}
} ?>


/* Clearfix fixes some floating issues */
.clearfix:after 	{
  	content: "."; 
  	display: block; 
  	height: 0; 
  	clear: both; 
  	visibility: hidden;
	}
	
.clearfix {
	min-width: 0;		/* trigger hasLayout for IE7 */
	display: inline-block;
	/* \*/	display: block;	/* Hide from IE Mac */
	}
	
* html .clearfix {
	/* \*/  height: 1%;	/* Hide from IE Mac */ 
	}


<?php echo $thfr_css['customcss']; 

		$css = ob_get_contents(); 
		ob_end_clean();
		if ($preview_yesno != 1) $css = str_replace('/themeframe/uploads/', 'images/', $css);
		echo $css;
		
} ?>