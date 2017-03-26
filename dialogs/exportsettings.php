<?php include(dirname(__FILE__) . "/../functions.php"); ?> 
<p class="menuinfo">Export the current settings and download them as a text file that you can import again later.</p>
<form method="post" action="<?php echo THFRURL; ?>download.php">
	<input type="hidden" name="thfruploadpath" value="<?php echo urlencode(THFRUPLOADPATH); ?>" />
	<input type="hidden" name="type" value="settings" /> 
	<input type="submit" id="settingsdownloadsubmit" class="downloadsubmit" 
	value="Export &amp; Download Current Theme Settings" />
</form>
<p>The file will be named <code>thfr-settings-domainamecom-date.txt</code>. You  
can rename it to something more meaningful, such as <code>blue-theme-3.txt</code>.</p>


