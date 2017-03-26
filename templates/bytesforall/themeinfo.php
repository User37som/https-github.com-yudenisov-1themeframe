<div class="infocontainer-head">
	<h2 style="float:left;padding-right:30px">Global Settings <strong>Theme Info</strong></h2>
	<a href="#" class="moreinfolink" id="themeinfomore">Show/Hide More Info</a>	
</div>
<div id="themeinfomore-container" class="infocontainer">
	<ul>
		<li>This "theme info" is <strong>optional</strong>. If you leave the form below empty, your theme will be listed as "<code>[Theme-Directory-Name] by Anonymous</code>", at <code>WP Admin &rarr; Appearance &rarr; Themes</code></li>
		<li>This info will be printed at the top of the <code>style.css</code> file</li>
		<li>Wordpress displays most of it at <code>WP Admin &rarr; Appearance &rarr; Themes</code></li>
		<li>The Wordpress.org <a href="http://wordpress.org/extend/themes/">theme directory</a> uses this info when listing your submitted theme.</li>
	</ul>
</div>
<div id="multisettingpage" style="padding:20px;font-size: 13px" >
	<form name="themeinfo" id="themeinfo" action="">
	<table id="themeinfotable" class="valigntop" width="100%">
	<tr>
		<td align="right"><strong>Theme Name:</strong></td>
		<td><input type="text" size="50" name="themename" value="<?php echo $thfr_css['themename']; ?>">
		<br /><em>My New Theme</em><br /><br />
		</td>
	</tr><tr>
		<td align="right"><strong>Version:</strong></td>
		<td><input type="text" size="10" name="themeversion" value="<?php echo $thfr_css['themeversion']; ?>">
		<br /><em>1.7</em><br /><br />
		</td>
	</tr><tr>
		<td align="right"><strong>Theme URI:</strong></td>
		<td><input type="text" size="80" name="themeuri" value="<?php echo $thfr_css['themeuri']; ?>">
		<br /><em>http://www.mysite.com/my-new-theme/</em><br /><br />
		</td>
	</tr><tr>
		<td align="right"><strong>Description:</strong></td>
		<td><input type="text" size="120" style="width: 99%" name="themedescription" value="<?php echo $thfr_css['themedescription']; ?>">
		<br /><em>A fluid width WordPress theme with 3 columns and many widget areas.</em><br /><br />
		</td>
	</tr><tr>
		<td align="right"><strong>Author:</strong></td>
		<td><input type="text" size="50" name="themeauthor" value="<?php echo $thfr_css['themeauthor']; ?>">
		<br /><em>The Designer</em><br /><br />
		</td>
	</tr><tr>
		<td align="right"><strong>Author URI:</strong></td>
		<td><input type="text"  size="90" name="themeauthoruri" value="<?php echo $thfr_css['themeauthoruri']; ?>">
		<br /><em>http://www.mysite.com/</em><br /><br />
		</td>
	</tr><tr>
		<td align="right"><strong>Theme Tags:</strong><br/>(very optional)</td>
		<td><input type="text"  size="120" style="width: 99%" name="themetags" value="<?php echo $thfr_css['themetags']; ?>">
		<br /><em>white, three-columns, flexible-width, custom-header, left-sidebar, right-sidebar, threaded-comments</em><br /><br />
		</td>
	</tr>
	</table>
	</form>
	<a href="#" id="save-themeinfo" class="save-button">Save</a>
	<div class="formstatus"></div>	
</div>



