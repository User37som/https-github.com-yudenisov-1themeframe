<?php include(dirname(__FILE__) . "/../functions.php"); ?>
<form id="ftpform" method="post" action="">
				<p class="menuinfo">Transfer theme files directly into the theme directory, even on another web server, per FTP</p>
				<table>
				<tr>
				<td style="vertical-align:top; width:350px">
					<p class="menuinfo-gray">Choose Files to transfer</p>
					<ol class="graphicol">
						<li>
						Choose the files you want to transfer per FTP:<br /><br />
						<span class="ui-icon ui-icon-circle-check"></span><input style="display:none" type="checkbox" id="ftpcheckall1" class="ftpcheckall" name="ftpcheckall1" checked="checked"> <label for="ftpcheckall1" style="cursor:pointer;text-decoration:underline">Check/Uncheck All</label><br /><br />
						<input type="checkbox" id="lbstylecss" name="ftp_file_array[]" value="style.css" checked="checked"> <label for="lbstylecss"><code>style.css</code></label><br />
						<input type="checkbox" id="lbjavascript" name="ftp_file_array[]" value="javascript.js" checked="checked"> <label for="lbjavascript"><code>javascript.js</code></label><br />
						<input type="checkbox" id="lbfunctions" name="ftp_file_array[]" value="functions.php" checked="checked"> <label for="lbfunctions"><code>functions.php</code></label><br />
						<!-- <input type="checkbox" name="ziparray[]" value="options.php" checked="checked"> <code>options.php</code><br /> -->
						<input type="checkbox" id="lbindex" name="ftp_file_array[]" value="index.php" checked="checked"> <label for="lbindex"><code>index.php</code></label><br />
						<input type="checkbox" id="lbcomments" name="ftp_file_array[]" value="comments.php" checked="checked"> <label for="lbcomments"><code>comments.php</code></label><br />
						<?php foreach ($thfr_css['pagetemplates'] as $pagetemplate) { ?>
							<input type="checkbox" id="lb<?php echo $pagetemplate; ?>" name="ftp_file_array[]" value="<?php 
							echo $pagetemplate; ?>.php" checked="checked"> <label for="lb<?php echo $pagetemplate; ?>"><code><?php echo $pagetemplate; ?>.php</code></label><br />
						<?php } ?>
						<br />
						<span class="ui-icon ui-icon-circle-check"></span><input style="display:none" type="checkbox" id="ftpcheckall2" class="ftpcheckall" name="ftpcheckall2" checked="checked"> <label for="ftpcheckall2" style="cursor:pointer;text-decoration:underline">Check/Uncheck All</label>
						<br />
						<br />
						</li>
						<li>Fill out the <strong>FTP Settings</strong> on the right side &rarr;<br /><br /></li>
						<li><span style="color:green">If you already made this test proceed to <strong>Step 5</strong>.</span> 
						<br />Click the following button to test-transfer <code>test1234.txt</code>:<br /><br />
						<a href="#" id="ftptestsubmit" class="downloadsubmit">Test transfer <code>test1234.txt</code></a>
						<br />
						<div id="ftptestsubmit-loading"><br /><span style="color:red">This may take between 5 - 20 seconds.</span><br /><br /></div>
						<div id="ftptestmessages"><br /></div>
						</li>
						<li>Check the transfer log above (it should be displayed a few seconds after you clicked the button). See if there are red error messages. <br /><br /><em>Also, if you are using this 
						FTP function for the first time, check your web hosting account (through a FTP client software or through the file manager of your web hosting control panel, i.e. CPanel) 
						whether the test file <code>test1234.txt</code> is there, at the right place, in the right directory.</em><br />
						<br /></li>
						<li>Transfer the selected files now:<br /><br />
						<a href="#" id="ftpsubmit" class="downloadsubmit">TRANSFER FILES NOW</a>
						<br />
						<div id="ftpsubmit-loading"><br /><span style="color:red">This may take between 10 - 30 seconds.</span><br /><br /></div>
						<div id="ftpmessages"><br /></div>
						</li>
					</ol>
					<br />		
				</td>
				<td style="vertical-align:top; padding-left: 20px">	
					<p class="menuinfo-gray">FTP Settings:</p>
					If you do not have the following info, look into your web hosting control panel (the info may be there, or you may be able to create 
					a FTP account and set this info), or ask your web hosting provider.<br /><br />
					<strong>FTP host name:</strong> (or: "FTP server address", etc...)<br />
					<input class="ftpinput" type="text" size="50" name="ftp_server_address" value="<?php echo $thfr_css['ftp_server_address']; ?>" />
					<br /><span class="example">Examples:</span> 
					<ul>
					<li>A subdomain of your domain, i.e. "ftp": <code>ftp.mydomain.com</code></li>
					<li>Your domain, with www: <code>www.mydomain.com</code></li>
					<li>Your domain, without www: <code>mydomain.com</code></li>
					<li>Do <strong>not</strong> include <code>http://</code> anywhere.</li>
					</ul>
					<br /><br />
					<strong>FTP user name</strong>:<br />
					<input class="ftpinput" type="text" name="ftp_user_name" value="<?php echo $thfr_css['ftp_user_name']; ?>" />
					 <span class="example">Example:</span> <code>myusername</code><br /><br />
					<strong>FTP password</strong>:<br />
					<input class="ftpinput" type="password" name="ftp_user_pass" value="" />
					 <span class="example">Example:</span> <code>mypassword</code><br /><em>Currently not saved (You need to re-type it if empty)</em><br /><br />
					<strong>Theme Directory Name</strong>:<br />
					<input class="ftpinput" type="text" size="40" name="ftp_theme_dirname" value="<?php echo $thfr_css['ftp_theme_dirname']; ?>" />
					<br /><span class="example">Example:</span> <code>my-new-theme</code>
					<ul>
					<li>Note the <span style="color:green">green</span> part: <code><strong>public_html/mydomain.com/wp-content/themes/<span style="color:green">my-new-theme</span></strong></code></li>
					<li>If this directory doesn't exist yet, use a unique, not too short name, without spaces or special characters. ThemeFrame will try to create it</li>
					<li>Do not use the names <code>default</code> or <code>classic</code></li>
					<li>All theme files will be transferred into this directory</li>
					</ul>
					<br />
					<strong>Path to WordPress Themes directory</strong>:<br />
					<input class="ftpinput" type="text" size="70" name="ftp_remote_path" value="<?php echo $thfr_css['ftp_remote_path']; ?>" />
					<br /><span class="example">Example:</span> <code>public_html/mydomain.com/wp-content/themes/</code>
					<ul>
					<li>Note the <span style="color:green">green</span> part: <code><strong><span style="color:green">public_html/mydomain.com/wp-content/themes/</span>my-new-theme</strong></code></li>
					<li>This starts WITHOUT slash and ends WITH a slash</li>
					<li>Usually <strong>ends</strong> on <code>.../mydomain.com/wp-content/themes/</code> or, if your WordPress installation is in a subdirectory such as "blog", <code>.../mydomain.com/blog/wp-content/themes/</code></li>
					<li>It is the path to the WordPress themes directory, relative to (usually) your FTP home directory.</li>
					<li>Your FTP home directory is usually the directory you are in after you logged in with a FTP client software.</li>
					<li>For instance, if you see a directory named "public_html" immediately after you logged in through 
					FTP (with a FTP client software), then your "Path to Theme Directory" probably starts with <code>public_html/</code></li>
					<li>Do a test transaction first (see step 3 on the left) before using this FTP transfer function for the first time.</li>
					</ul>
				</td>
				</tr>
				</table>
			</div>
		</div>
</form>
