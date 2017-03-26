<?php include(dirname(__FILE__) . "/../functions.php"); ?> 
<script type="text/javascript">
	new AjaxUpload('#importSettings-upload', {
		action: THFRURL + 'upload.php',
		name: 'userfile',
		onComplete: function(file){
			jQuery('input#importSettings').val(RELATIVETHFRUPLOADURL + file);	
			// jQuery('ul.preview-tabs > li a').click();
		}
	});
</script>
<p class="menuinfo menuinfo-alert"><span class="ui-icon ui-icon-alert"></span>Importing a settings file 
will overwrite your existing settings. If you want to keep your existing settings, export them first (See menu tab "Export").</p>
<h3 style='margin-bottom:5px'>Select a settings file first:</h3>
Either an existing one from <strong>/themeframe/uploads/</strong> <em>(previously imported setting files should have been saved there)</em>, or browse your computer:<br /><br />
<a href="#" id="importSettings-open" class="filetreeopen">Select from <strong>/themeframe/uploads/</strong></a>
&nbsp; &nbsp; <span style='font-size: 20px;'>&larr; or &rarr;</span> &nbsp; &nbsp;<a href="#" id="importSettings-upload">Browse my computer</a><br />
<input type="text" size="40" name="importSettings" id="importSettings" value="<?php echo $thfr_css['importSettings']; ?>" />
<div id="fileTree-importSettings" class="demo"></div><br /><br />

<h3>Then, <a href="#" id="importsettingsnow">Import the Settings</a> of this <strong>.txt</strong> 
file.
<div id="importsuccesssettings"></div>


				
