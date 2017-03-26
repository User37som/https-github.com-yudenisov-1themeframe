<div style="font-family: arial; font-size: 13px">
<form method="post" action="<?php echo THFRURL; ?>download.php">
<div class="clearfix" style="padding: 5px 10px; background: #555; color: white; font-family: arial; font-size: 13px;">
	<div>
			<input type="hidden" name="thfruploadpath" value="<?php echo urlencode($thfruploadpath); ?>" />
			<input type="hidden" name="filename" value="comments" />
			<input type="hidden" name="type" value="php" />
			<input type="submit" id="phpdownloadsubmit" class="downloadsubmit" 
			value="Download style.css" />  to your computer. (Or use the "Export complete Theme..." tab to download a whole theme)
	</div>
</div>

<div style="padding: 10px; background: #eee">

<h2 style="margin-bottom: 3px">Settings for the file <code>style.css</code></h2>
The style.css file contains:
<ul><li>Optionally: Theme Info (Theme name, Author name...)</li>
<li>The CSS styles created by ThemeFrame, based on your settings.</li>
<li>Optionally: Custom, freestyle CSS from you, appended at the bottom of the file</li>
</ul> 
	<br /><br />
<div class="cssinfoform">
<img src="<?php echo THFRURL; ?>images/thfrwpviewer.gif" style="float:right;padding:5px;border:solid 1px #ccc" />
<img src="<?php echo THFRURL; ?>images/thfr-themeinfoadminarea.gif" style="float:right; margin-right: 10px;padding:5px;border:solid 1px #ccc" />
<h3>Theme Info</h3>
	This will be displayed at <code>WP Admin &raquo; Appearance &raquo; Themes</code>. 
	<br /><br />(Also at the <a href="http://wordpress.org/extend/themes/">WP theme viewer</a>, if you submit your theme there.)
	<br /><br />Without this info, it will read <strong>"[<i>theme's directory name</i>] by Anonymous"</strong>, at <code>WP Admin &raquo; Appearance &raquo; Themes</code>
	<br /><br />
	<div class="cssinfoform">
				<strong>Theme Name:</strong>
				<br /><input type="text" size="50" name="themename" value="<?php echo $thfr_css['themename']; ?>">
				<br />Example: <code>My New Theme</code>
	</div>
	<div class="cssinfoform">
				<strong>Theme URI:</strong>
				<br /><input type="text" size="90" name="themeuri" value="<?php echo $thfr_css['themeuri']; ?>">
				<br />Example: <code>http://www.domain-of-the-designer.com/my-new-theme/</code>
	</div>
	<div class="cssinfoform">
				<strong>Description:</strong>
				<br /><input type="text" size="150" name="themeuri" value="<?php echo $thfr_css['themeuri']; ?>">
				<br />Example: <code>A fluid width theme with 3 columns and very browser-compatible layout technique.</code>
	</div>
	<div class="cssinfoform">
				<strong>Version:</strong>
				<br /><input type="text" size="7" name="themeversion" value="<?php echo $thfr_css['themeversion']; ?>">
				<br />Example: <code>1.7</code>
	</div>
	<div class="cssinfoform">
				<strong>Author:</strong>
				<br /><input type="text" size="35" name="themeauthor" value="<?php echo $thfr_css['themeauthor']; ?>">
				<br />Example: <code>The Designer</code>
	</div>
	<div class="cssinfoform">
				<strong>Author URI:</strong>
				<br /><input type="text"  size="90" name="themeauthoruri" value="<?php echo $thfr_css['themeauthoruri']; ?>">
				<br />Example: <code>http://www.domain-of-the-designer.com/</code>
	</div>
	<div class="cssinfoform">
				<strong>Theme Tags:</strong>
				<br /><input type="text"  size="150" name="themetags" value="<?php echo $thfr_css['themetags']; ?>">
				<br />Example: <code>white, three-columns, flexible-width, custom-header, left-sidebar, right-sidebar, threaded-comments</code>
				<br /><small>These tags will be used by the <a href="http://wordpress.org/extend/themes/">WordPress theme viewer</a>, in case you want to you submit your theme there. 
				 Only certain, pre-defined tags are allowed, see <a href="http://wordpress.org/extend/themes/about/">http://wordpress.org/extend/themes/about/</a>.</small>
	</div>
</div>
	<div class="cssinfoform" style="width:97%">
	<h3>Custom CSS</h3>
				<strong>Custom CSS:</strong> Add your custom CSS here if you want. It will be appended to the <code>style.css</code> file.
				<br /><textarea rows="10" cols="80" style="width:99%" name="customcss"><?php echo $thfr_css['customcss']; ?></textarea>
				<br />Example: <code>div.mydiv { padding: 5px; background: #cccccc; border: solid 1px #000000; }</code>
	</div>
	<br style="clear:both" />

	
</div>
</form>
</div>
