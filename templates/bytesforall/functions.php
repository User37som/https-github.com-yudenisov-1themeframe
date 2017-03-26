<div style="font-family: arial; font-size: 13px">
<form method="post" action="<?php echo THFRURL; ?>download.php">
<div class="clearfix" style="padding: 5px 10px; background: #555; color: white; font-family: arial; font-size: 13px;">
	<div>
			<input type="hidden" name="thfruploadpath" value="<?php echo urlencode($thfruploadpath); ?>" />
			<input type="hidden" name="filename" value="functions" />
			<input type="hidden" name="type" value="php" />
			<input type="submit" id="phpdownloadsubmit" class="downloadsubmit" 
			value="Download functions.php" />  to your computer. (Or use the "Export complete Theme..." tab to download multiple files as a ZIP file)
	</div>
</div>

<div style="padding: 10px; background: #eee">

	<h2 style="margin-bottom: 3px">Settings for the file <code>functions.php</code></h2>
	The <code>functions.php</code> file is a standard WordPress file - Wordpress will look for it and include it automatically if available. It contains the 
	code for activating widget areas plus additional bits of PHP code that are better kept in a separate file. See the text area at the bottom 
	if you want to append your own PHP code to the bottom of the <code>functions.php</code> file. <br /><br />
	<div class="cssinfoform">
	<h3>Activate custom widget area blocks</h3>
	With ThemeFrame, creating and displaying custom widget areas is a <strong>2-step-process</strong>. 
	<ul><li><strong>STEP 1 - At the menu tabs "index.php", "home.php", "single.php", "page.php"</strong>: Drag and Drop custom widget areas into page templates - see the tabs above.</li>
	<li><strong>STEP 2 - Here at "functions.php"</strong>: Activate those widget areas inside WordPress (= in the functions.php file that you will create and use in your theme) by clicking their checkboxes below:</li>
	</ul>
	<p><input type="checkbox" name="WidgetArea-1"<?php if($thfr_css['WidgetArea-1'] == 'on') echo ' checked="checked"'; ?>>  <strong>1 Widget Area</strong>
	<br />Activates 1 widget area, named <code>WidgetArea-1</code> at <code>WP Admin &raquo; Appearance &raquo; Widgets</code>
	</p><p><input type="checkbox" name="WidgetArea-1-2"<?php if($thfr_css['WidgetArea-1-2'] == 'on') echo ' checked="checked"'; ?>> <strong>1 Widget Area #2</strong>
	<br />Activates 1 widget area, named <code>WidgetArea-1-2</code> at <code>WP Admin &raquo; Appearance &raquo; Widgets</code>
	</p><p><input type="checkbox" name="WidgetArea-1-3"<?php if($thfr_css['WidgetArea-1-3'] == 'on') echo ' checked="checked"'; ?>> <strong>1 Widget Area #3</strong>
	<br />Activates 1 widget area, named <code>WidgetArea-1-3</code> at <code>WP Admin &raquo; Appearance &raquo; Widgets</code>
	</p><p><input type="checkbox" name="WidgetArea-2"<?php if($thfr_css['WidgetArea-2'] == 'on') echo ' checked="checked"'; ?>> <strong>2 Widget Areas</strong>
	<br />Activates 2 widget areas, named <code>WidgetArea-2 Col-1</code> and <code>WidgetArea-2 Col-2</code> at <code>WP Admin &raquo; Appearance &raquo; Widgets</code>
	</p><p><input type="checkbox" name="WidgetArea-2-2"<?php if($thfr_css['WidgetArea-2-2'] == 'on') echo ' checked="checked"'; ?>> <strong>2 Widget Areas #2</strong>
	<br />Activates 2 widget areas, named <code>WidgetArea-2-2 Col-1</code> and <code>WidgetArea-2-2 Col-2</code> at <code>WP Admin &raquo; Appearance &raquo; Widgets</code>
	</p><p><input type="checkbox" name="WidgetArea-3"<?php if($thfr_css['WidgetArea-3'] == 'on') echo ' checked="checked"'; ?>> <strong>3 Widget Areas</strong>
	<br />Activates 3 widget areas, named <code>WidgetArea-3 Col-1</code>, <code>WidgetArea-3 Col-2</code> and <code>WidgetArea-3 Col-3</code> at <code>WP Admin &raquo; Appearance &raquo; Widgets</code>
	</p><p><input type="checkbox" name="WidgetArea-4"<?php if($thfr_css['WidgetArea-4'] == 'on') echo ' checked="checked"'; ?>> <strong>4 Widget Areas</strong>
	<br />Activates 4 widget areas, named <code>WidgetArea-4 Col-1</code>, <code>WidgetArea-4 Col-2</code>, <code>WidgetArea-4 Col-3</code> and <code>WidgetArea-4 Col-4</code> at <code>WP Admin &raquo; Appearance &raquo; Widgets</code>
	</p><p><input type="checkbox" name="WidgetArea-5"<?php if($thfr_css['WidgetArea-5'] == 'on') echo ' checked="checked"'; ?>> <strong>5 Widget Areas</strong>
	<br />Activates 5 widget areas, named <code>WidgetArea-5 Col-1</code>, <code>WidgetArea-5 Col-2</code>, <code>WidgetArea-5 Col-3</code>, <code>WidgetArea-5 Col-4</code> and <code>WidgetArea-5 Col-5</code> at <code>WP Admin &raquo; Appearance &raquo; Widgets</code>
	</p><p><input type="checkbox" name="WidgetArea-6"<?php if($thfr_css['WidgetArea-6'] == 'on') echo ' checked="checked"'; ?>> <strong>6 Widget Areas</strong>
	<br />Activates 6 widget areas, named <code>WidgetArea-6 Col-1</code>, <code>WidgetArea-6 Col-2</code>, <code>WidgetArea-6 Col-3</code>, <code>WidgetArea-6 Col-4</code>, <code>WidgetArea-6 Col-5</code> and <code>WidgetArea-6 Col-6</code> at <code>WP Admin &raquo; Appearance &raquo; Widgets</code>
	</p>
	</div>
	<br style="clear:both" />

	
</div>
</form>
</div>
