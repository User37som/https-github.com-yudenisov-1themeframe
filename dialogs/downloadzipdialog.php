<?php include(dirname(__FILE__) . "/../functions.php"); ?> 
<p class="menuinfo">Download the whole theme in one step, as a ZIP file.</p>
<p class="menuinfo">To make sure the display below is 
up to date, click the ThemeFrame logo on the top left once, and then the 
"Get Whole Theme as ZIP file" button again. This requirement will be gone in the next release.</p>
<table>
<tr>
	<td style="vertical-align:top; width:250px">
	<p class="menuinfo-gray">Configure &amp; download the ZIP file:</p>
	<form id="zipform" method="post" action="<?php echo THFRURL; ?>download-zip.php">
		<ol class="graphicol">
			<li><input type="hidden" name="thfruploadpath" value="<?php echo urlencode(THFRUPLOADPATH); ?>" />
			Set the <strong>Theme Directory Name</strong>:<br /><br />
			<input type="text" size="30" id="zipdir" name="zipdir" value="<?php 
			echo strtolower(str_replace(' ', '-', preg_replace("/[^a-zA-Z0-9\s]/", "", $thfr_css['themename']))); ?>" /> 
			<ul>
				<li><code>my-new-theme</code></li>
				<li><code>mynewtheme174</code></li>
			</ul>
			<p class="menuinfo-alert"><span class="ui-icon ui-icon-alert"></span>No spaces or special characters</p>
			<br />
			</li>
			<li>
			Choose the files you want to include in the ZIP file:<br /><br />
			<span class="ui-icon ui-icon-circle-check"></span><input style="display:none" type="checkbox" id="zipcheckall1" class="zipcheckall" name="zipcheckall1" checked="checked" /> <label for="zipcheckall1" style="cursor:pointer;text-decoration:underline">Check/Uncheck Everything</label><br /><br />
			<br /><strong>Global</strong> special files:<br />
			<input type="checkbox" id="zipstylecss" name="ziparray[]" value="style.css" checked="checked" />  <label for="zipstylecss"><code>style.css</code></label><br />
			<input type="checkbox" id="zipjavascript" name="ziparray[]" value="javascript.js" checked="checked" />  <label for="zipjavascript"><code>javascript.js</code></label><br />
			<input type="checkbox" id="zipfunctions" name="ziparray[]" value="functions.php" checked="checked" />  <label for="zipfunctions"><code>functions.php</code></label><br />
			<!-- <input type="checkbox" name="ziparray[]" value="options.php" checked="checked" /> <code>options.php</code><br /> -->
			<br /><strong>Comments</strong> Template:<br />
			<input type="checkbox" id="zipcomments" name="ziparray[]" value="comments.php" checked="checked" /> <label for="zipcomments"><code>comments.php</code></label><br />
			<br /><strong>Page</strong> Templates:<br />
			<?php foreach ($thfr_css['pagetemplates'] as $pagetemplate) { ?>
				<input type="checkbox" id="zip<?php echo $pagetemplate; ?>" name="ziparray[]" value="<?php 
				echo $pagetemplate; ?>.php" checked="checked" /> <label for="zip<?php echo $pagetemplate; ?>"><code><?php echo $pagetemplate; ?>.php</code></label><br />
			<?php } ?>
			<br />
						
						
						
<?php 
// Check which images are used in the CSS:
$cssImagesArray = array();
$available_selectors = tf_selectors();
foreach ($available_selectors as $sel ) {
	if (isset($thfr_css[$sel])) {
		if ( $thfr_css[$sel]['background-image'] != '' ) {
			/*
			$cssImagesArray[] = preg_replace("/(.*)url\(\/themeframe\/uploads\/(.*?)\)(.*)/i", "\${2}", 
								$thfr_css[$sel]);
			*/
			$cssImagesArray[] = str_replace("/themeframe/uploads/", "", $thfr_css[$sel]['background-image']);
		}
	}
}
$cssImagesArray = array_unique($cssImagesArray);


	$files = scandir(THFRUPLOADPATH . '/');
	natcasesort($files);
	if( count($files) > 2 ) { /* The 2 accounts for . and .. */
		// All files
		$imgext = array('jpg', 'JPG', 'JPEG', 'jpeg', 'gif', 'GIF', 'png', 'PNG', 'bmp', 'BMP');
		foreach( $files as $file ) {
			if( file_exists(THFRUPLOADPATH . '/' . $file) 
			&& $file != '.' && $file != '..' && in_array(file_extension($file),$imgext) 
			&& !is_dir(THFRUPLOADPATH . '/' . $file) ) {
				if(in_array($file, $cssImagesArray)) $cssImages[] = $file;
				else $otherImages[] = $file;
			}
		}
		
		if(!empty($cssImages)) { ?>
			<strong>Images</strong> used in the CSS Stylesheet<br />
			<input style="display:none" type="checkbox" id="cssimagecheckall" name="cssimagecheckall" checked="checked" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<label for="cssimagecheckall" style="cursor:pointer;text-decoration:underline">Check/Uncheck All</label>)<br />
		<?php  
		echo "<div id='zipcssimages'>";
			foreach( $cssImages as $image ) {
				?>	
				<input type="checkbox" id="images-<?php echo $image; ?>" name="ziparray[]" value="images/<?php echo $image; ?>" checked="checked" /> 
				<label for="images-<?php echo $image; ?>">
				<code><?php echo $image; ?></code></label>
				<br />				
				<?php 		
			}
		echo "</div><br />";
		}
		if(!empty($otherImages)) { ?>
			<strong>Images</strong> found in /themeframe/uploads/:<br />
			<input style="display:none" type="checkbox" id="otherimagecheckall" name="otherimagecheckall" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<label for="otherimagecheckall" style="cursor:pointer;text-decoration:underline">Check/Uncheck All</label>)<br />
		<?php  
		echo "<div id='zipotherimages'>";
			foreach( $otherImages as $image ) {
				?>	
				<input type="checkbox" id="images-<?php echo $image; ?>" name="ziparray[]" value="images/<?php echo $image; ?>" checked="checked" /> 
				<label for="images-<?php echo $image; ?>">
				<code><?php echo $image; ?></code></label>
				<br />				
				<?php 			
			}
		echo "</div>";
		}

	} else {
		echo "You aren't using any custom images in the theme so there's nothing to choose here";
	}
?>		

						<br /><span class="ui-icon ui-icon-circle-check"></span><input style="display:none" type="checkbox" id="zipcheckall2" class="zipcheckall" name="zipcheckall2" checked="checked"> <label for="zipcheckall2" style="cursor:pointer;text-decoration:underline">Check/Uncheck Everything</label><br /><br />
			
						</li>
						
						
						<li><input type="submit" id="zipsubmit" class="downloadsubmit" value="Download ZIP file" />
						</li>
					</ol>
</form><br />
				</td>
				<td style="vertical-align:top; padding-left: 20px">
					<p class="menuinfo-gray">After you downloaded the ZIP file:</p>
					<strong>Quick How-To:</strong><br /><br />(1) Extract the ZIP file, (2) upload the theme directory with all files inside 
					to the themes directory on your WordPress installation and (3) activate the theme in the WP Admin area.<br /><br />
					<strong>Detailed How-To:</strong>
					<ol id="ziphowto" class="graphicol2">
						<li>Extract the ZIP-file on your computer. When you double-click or right-click on it, there should be an option 
						to "extract", "uncompress" or "unzip" the file in the context menu or wizard that pops up.  
						Or else, use a program like <a href="http://www.7-zip.org/">7-zip</a> (Windows, Free).<br /><br />
						</li>
						<li>Now you should have a directory on your computer, with the name that you put into "Theme Directory Name" 
						(see the form field on the left hand side, here on this page).<br /><br />
						</li>
						<li>Depending on the ZIP program or Operating System (Windows, Mac) you used, the directory we need may be <strong>inside</strong> another directory. For instance, 
						the built in Extract wizard in Windows XP does this:<br /><br />
						<code>/my-new-theme/my-new-theme/</code><br />
						<code>/my-new-theme/my-new-theme/style.css</code><br />
						<code>/my-new-theme/my-new-theme/... etc ...</code><br />
						<br/>
						As you can see, the extracted directory was put as a "child" directory <strong>inside</strong> a "parent" directory with the same name. 
						If this happens to you, make sure that in the next step you upload only the "child" or "inner" directory in the next step.<br /><br />
						</li>
						<li>Upload the directory, including all files inside it, to the theme directory on your WordPress installation, which usually is <code>/wp-content/themes/</code> 
						so that you end up with:<br /><br />
						<code>/wp-content/themes/my-new-theme/</code><br />
						<code>/wp-content/themes/my-new-theme/style.css</code><br />
						<code>/wp-content/themes/my-new-theme/index.php</code><br />
						<code>/wp-content/themes/my-new-theme/... etc ...</code><br /><br />
						</li>
						<li>Choose and activate the theme in the WordPress admin area, at <code>Appearance &rarr; Themes</code>
						</li>
					</ol>
				</td>
				</tr>
				</table>
