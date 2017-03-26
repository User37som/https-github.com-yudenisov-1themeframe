<?php include(dirname(__FILE__) . "/../functions.php"); ?> 
				<p class="menuinfo">Download individual theme files.</p>
			<p class="menuinfo">To make sure the display below is 
				up to date, click the ThemeFrame logo on the top left once, and then the 
				"Get Single Theme Files" button again. This requirement will be gone in the next release.</p>
				<table>
				<tr>
				<td style="vertical-align:top; width:200px">
					<p class="menuinfo-gray">Download single theme files:</p>
					Click the button(s) of the file(s) you want to download:<br /><br />
					<form method="post" action="<?php echo THFRURL; ?>download.php">
						<input type="hidden" name="thfruploadpath" value="<?php echo urlencode(THFRUPLOADPATH); ?>" />
						<input type="hidden" name="type" value="css" />
						<input type="submit" id="downloadsubmit" class="downloadsubmit" value="style.css" /> 
					</form>
					<br />
					<form method="post" action="<?php echo THFRURL; ?>download.php">
						<input type="hidden" name="thfruploadpath" value="<?php echo urlencode(THFRUPLOADPATH); ?>" />
						<input type="hidden" name="type" value="js" />
						<input type="submit" id="downloadsubmit" class="downloadsubmit" value="javascript.js" /> 
					</form>
					<br />
					<form method="post" action="<?php echo THFRURL; ?>download.php">
						<input type="hidden" name="thfruploadpath" value="<?php echo urlencode(THFRUPLOADPATH); ?>" />
						<input type="hidden" name="filename" value="functions" />
						<input type="hidden" name="type" value="php" />
						<input type="submit" id="downloadsubmit" class="downloadsubmit" value="functions.php" />
					</form>

					<!--
					options.php is not ready yet. It will contain an options page for the theme.<br />
					<form method="post" action="<?php echo THFRURL; ?>download.php">
						<input type="hidden" name="thfruploadpath" value="<?php echo urlencode(THFRUPLOADPATH); ?>" />
						<input type="hidden" name="filename" value="options" />
						<input type="hidden" name="type" value="php" />
						<input type="submit" id="downloadsubmit" class="downloadsubmit" value="options.php" />
					</form>
					<br />
					-->
					<br />
					<form method="post" action="<?php echo THFRURL; ?>download.php">
						<input type="hidden" name="thfruploadpath" value="<?php echo urlencode(THFRUPLOADPATH); ?>" />
						<input type="hidden" name="filename" value="comments" />
						<input type="hidden" name="type" value="php" />
						<input type="submit" id="downloadsubmit" class="downloadsubmit" value="comments.php" />
					</form>
					<br />
					<?php foreach ($thfr_css['pagetemplates'] as $pagetemplate) { ?>
					<form method="post" action="<?php echo THFRURL; ?>download.php">
						<input type="hidden" name="thfruploadpath" value="<?php echo urlencode(THFRUPLOADPATH); ?>" />
						<input type="hidden" name="filename" value="<?php echo $pagetemplate; ?>" />
						<input type="hidden" name="type" value="php" />
						<input type="submit" id="downloadsubmit" class="downloadsubmit" value="<?php echo $pagetemplate; ?>.php" />
					</form><br />	
					<?php } ?>
				</td>
				<td style="vertical-align:top; padding-left: 20px">				
					<p class="menuinfo-gray">After you downloaded the file(s):</p>
					<strong>If you want to update one or a few files of an existing theme:</strong>
					<ol>
						<li>Upload the file(s) into the directory of the theme on the WordPress installation.<br /><br /></li>
						<li>This will overwrite (= update) the old files.<br /><br /></li>
						<li>Reload a page on the front end of your site to check the changes.</li>
					</ol>
					<strong>If you're building a new theme:</strong>
					<br /><br/>
					<em>If you're downloading individual files to build a new theme then you probably cannot or don't want to 
					download the whole theme as a single ZIP file (See menu tab on the top left) which might be more convenient.
					</em>
					<ol>
						<li>Create a directory such as <code>my-new-theme</code> on your computer.<br /><br /></li>
						<li>Put all downloaded files into that directory (i.e. <code>my-new-theme</code>).<br /><br /></li>
						<li>Upload the directory <code>my-new-theme</code> with all its files to the themes directory on your 
						WordPress installation, which usually is <code>/wp-content/themes/</code>, so that you end up with 
						<code>/wp-content/themes/my-new-theme/</code>.<br /><br /></li>
						<li>Choose and activate the theme in the WordPress admin area, at <code>Appearance &rarr; Themes</code>
						</li>
					</ol>
				</td>
				</tr>
				</table>					
