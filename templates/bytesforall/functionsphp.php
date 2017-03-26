<div style="font-family: arial; font-size: 13px">
<form method="post" action="<?php echo THFRURL; ?>download.php">
<div class="clearfix" style="padding: 5px 10px; background: #555; color: white; font-family: arial; font-size: 13px;">
	<div>
		<input type="hidden" name="thfruploadpath" value="<?php echo urlencode($thfruploadpath); ?>" />
		<input type="hidden" name="type" value="zip" /> ... or, 
		<input type="submit" id="settingsdownloadsubmit" class="downloadsubmit" 
		value="Download the Settings file" /> to your computer.
	</div>
</div>

<div style="padding: 10px; background: #eee">

	<h4 style="margin-bottom: 3px">This info will be written to the <code>style.css</code> file, and it will appear in the Wordpress admin area at <code>Appearance &raquo; Themes</code>:</h4>
	If you submit your theme to the <a href="http://wordpress.org/extend/themes/">WordPress theme viewer</a>, most of this info will be displayed there.
	<br /><br />
	<div class="cssinfoform">
				<strong>Activate these widget areas in the theme, and at WP Admin &raquo; Appearance &raquo; Widgets:</strong>
	<br /><input type="checkbox" name="WidgetArea-1"<?php if($thfr_css['WidgetArea-1'] == 'on') echo ' checked="checked"'; ?>> WidgetArea-1 ("1 Widget Area")
	<br /><input type="checkbox" name="WidgetArea-1-2"<?php if($thfr_css['WidgetArea-1-2'] == 'on') echo ' checked="checked"'; ?>> WidgetArea-1-2 ("1 Widget Area #2")
	<br /><input type="checkbox" name="WidgetArea-1-3"<?php if($thfr_css['WidgetArea-1-3'] == 'on') echo ' checked="checked"'; ?>> WidgetArea-1-3 ("1 Widget Area #3")
	<br /><input type="checkbox" name="WidgetArea-2"<?php if($thfr_css['WidgetArea-2'] == 'on') echo ' checked="checked"'; ?>> WidgetArea-2 ("2 Widget Areas")
	<br /><input type="checkbox" name="WidgetArea-2-2"<?php if($thfr_css['WidgetArea-2-2'] == 'on') echo ' checked="checked"'; ?>> WidgetArea-1-2 ("2 Widget Areas #2")
	<br /><input type="checkbox" name="WidgetArea-3"<?php if($thfr_css['WidgetArea-3'] == 'on') echo ' checked="checked"'; ?>> WidgetArea-1-2 ("3 Widget Areas")
	<br /><input type="checkbox" name="WidgetArea-4"<?php if($thfr_css['WidgetArea-4'] == 'on') echo ' checked="checked"'; ?>> WidgetArea-1-2 ("4 Widget Areas")
	<br /><input type="checkbox" name="WidgetArea-5"<?php if($thfr_css['WidgetArea-5'] == 'on') echo ' checked="checked"'; ?>> WidgetArea-1-2 ("5 Widget Areas")
	<br /><input type="checkbox" name="WidgetArea-6"<?php if($thfr_css['WidgetArea-6'] == 'on') echo ' checked="checked"'; ?>> WidgetArea-1-2 ("6 Widget Areas")

	</div>
	<br style="clear:both" />

	
</div>
</form>
</div>
