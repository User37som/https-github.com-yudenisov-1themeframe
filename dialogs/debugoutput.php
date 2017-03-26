<?php include(dirname(__FILE__) . "/../functions.php"); ?> 
				<p class="menuinfo">To make sure the display below is 
				up to date, click the ThemeFrame logo on the top left once, and then the 
				"View Settings" button again. This requirement will be gone in the next release.</p>
				
			<h3>PHP settings</h3>
				PHP version: <code><?php echo phpversion(); ?></code><br /><br />
				PHP Memory Limit: <code><?php echo ( ini_get('memory_limit') == '' ? 
				'None set, so it should be the default of 32 MB' : ini_get('memory_limit')); ?></code><br />
				PHP Memory used by ThemeFrame: <code><?php 
				if( !function_exists('memory_get_usage') )
				{
				    function memory_get_usage()
				    {
				        //If it's Windows
				        //Tested on Win XP Pro SP2. Should work on Win 2003 Server too
				        //Doesn't work for 2000
				        //If you need it to work for 2000 look at http://us2.php.net/manual/en/function.memory-get-usage.php#54642
				        if ( substr(PHP_OS,0,3) == 'WIN')
				        {
				               if ( substr( PHP_OS, 0, 3 ) == 'WIN' )
				                {
				                    $output = array();
				                    exec( 'tasklist /FI "PID eq ' . getmypid() . '" /FO LIST', $output );
				       
				                    return preg_replace( '/[\D]/', '', $output[5] ) * 1024;
				                }
				        }else
				        {
				            //We now assume the OS is UNIX
				            //Tested on Mac OS X 10.4.6 and Linux Red Hat Enterprise 4
				            //This should work on most UNIX systems
				            $pid = getmypid();
				            exec("ps -eo%mem,rss,pid | grep $pid", $output);
				            $output = explode("  ", $output[0]);
				            //rss is given in 1024 byte units
				            return $output[1] / 1024;
				        }
				    }
				}  
				echo sprintf("%01.2f", memory_get_usage() / 1024 / 1024); ?> MB</code><br />
				<?php if (function_exists('memory_get_peak_usage')) { ?>
				PHP Memory Peak Usage: <code><?php echo memory_get_peak_usage(); ?></code><br />
				<?php } ?>
				<br />Loaded PHP Extensions:
				<?php $ext_yes = '<span style="color:green">YES</span>';
				$ext_no = '<span style="color:red">NO</span>'; ?>
				<table class="tablelist">
					<tr>
						<td><strong>Name</strong></td>
						<td><strong>Available?</strong></td>
						<td><strong>Info</strong></td>
						<td><strong>Purpose</strong></td>
					</tr>
					<tr>
						<td><code>zlib</code></td>
						<td><?php echo ( extension_loaded('zlib') ? $ext_yes : $ext_no ); ?></td>
						<td>Creating ZIP files</td>
						<td>Will be used in later TF versions</td>
					</tr>
					<tr>
						<td><code>ftp</code></td>
						<td><?php echo ( extension_loaded('ftp') ? $ext_yes : $ext_no ); ?></td>
						<td>Push/pull files with FTP</td>
						<td>May be used in later TF versions</td>
					</tr>
					<tr>
						<td><code>curl</code></td>
						<td><?php echo ( extension_loaded('curl') ? $ext_yes : $ext_no ); ?></td>
						<td>Alternative to FTP</td>
						<td>May be used in later TF versions</td>
					</tr>
					<tr>
						<td><code>gd</code></td>
						<td><?php echo ( extension_loaded('gd') ? $ext_yes : $ext_no ); ?></td>
						<td>Image processing</td>
						<td>Might be used in later TF versions</td>
					</tr>
				</table>
	

		 
		


				<h3>Paths and URLs:</h3>
				<table class="tablelist">
					<tr>
						<td>THFRUPLOADPATH</td>
						<td><code><?php echo THFRUPLOADPATH; ?></code></td>
					</tr>
					<tr>
						<td>THFR Uploads Dir writable?</td>
						<td><?php 
							if (is_writable(THFRUPLOADPATH)) { 
								echo '<span style="color:green">YES</span>'; } 
							else { echo '<span style="color:green">NO.</span> Either make it world writable or - 
							safer, but usually not available on shared hosting - make it owned by the web 
							server (i.e. <code>chown www:www ' . THFRUPLOADPATH . '</code> on the SSH command prompt. 
							It may be apache:apache on your web server, or something else)'; } ?>
						</td>
					</tr>
					<tr>
						<td>THFRUPLOADURL</td>
						<td><code><?php echo THFRUPLOADURL; ?></code></td>
					</tr>
					<tr>
						<td>RELATIVETHFRUPLOADURL</td>
						<td><code><?php echo RELATIVETHFRUPLOADURL; ?></code></td>
					</tr>
					<tr>
						<td>THFRPATH</td>
						<td><code><?php echo THFRPATH; ?></code></td>
					</tr>
					<tr>
						<td>THFRURL</td><td><code><?php echo THFRURL; ?></code></td>
					</tr>
					<tr>
						<td>THFRDIRNAME</td><td><code><?php echo THFRDIRNAME; ?></code></td>
					</tr>
					<tr>
						<td>THFRPATH</td><td><code><?php echo THFRPATH; ?></code></td>
					</tr>
				</table>  

			

				<h3>ThemeFrame settings</h3>
				<p class="menuinfo-gray">
				Note: For technical reasons, a few of the CSS selectors listed below will either get a different name or not appear at all in the actual stylesheet. 
				</p>

				<code>"Listed here as" &rarr; "Will become this in CSS stylesheet"</code>
				<ul>
					<li>div.index &rarr; <code>body</code></li>
					<li>div.home &rarr; <code>body.home</code></li>
					<li>div.single &rarr; <code>body.single</code></li>
					<li>div.page &rarr; <code>body.page</code></li>
					<li>li.hover &rarr; <code>li:hover, li.sfhover</code></li>
					<li>a.hover &rarr; <code>a:hover</code></li>
				</ul>
				<p class="menuinfo-gray">
				Also, strings like <code>margin-bottom-auto-or-value</code>, <code>width-auto-or-value</code> or 
				<code>height-unit</code> aren't valid CSS properties. They are just used here in the settings file but 
				won't appear in the created <code>style.css</code> file.</p>
				That being said, here's the list of current ThemeFrame settings:<br /><br />
				<table>
					<tr>
						<td align="right" style="padding-bottom:10px; border-bottom:solid 1px #ccc">
						<strong>SELECTOR</strong><br />or: <strong>TF SETTING</strong><br />
						or: <strong>PAGE TYPE</strong></td>
						<td style="padding-bottom:10px; border-bottom:solid 1px #ccc">PROPERTY: 
						<code>VALUE</code><br />TF VALUE<br />
						TF SETTING: <code>TF VALUE</code></td>
					</tr>	
					<?php foreach ($thfr_css as $name => $value) {
					# if (strpos($name, 'div.index') !== FALSE) $name = str_replace('div.index', '<span style="color:red">div.index</span>', $name);
					# if (strpos($name, 'div.index') !== FALSE) $name = str_replace('div.index', '<span style="color:red">div.index</span>', $name);
					echo "<tr><td align='right' valign='top'><strong>$name</strong></td><td>";
						if (is_array($value)) {
							foreach ($value as $value_name => $value_value) {
								if (is_array($value_value)) {
									foreach ($value_value as $value_value_name => $value_value_value) {
										echo "$value_name: $value_value_name: <code>" . htmlspecialchars($value_value_value) . "</code><br />";
									}
								} else {
									echo "$value_name: <code>$value_value</code><br />";
								}
							}
						} else {
							if (in_array($name, array(
							'customcss', 'customjs', 'customjquery', 'customphp', 'headerimages',
							'postinfo-index-kicker', 'postinfo-index-byline', 'postinfo-index-footer',
							'postinfo-single-kicker', 'postinfo-single-byline', 'postinfo-single-footer',
							'postinfo-home-kicker', 'postinfo-home-byline', 'postinfo-home-footer',	
							'postinfo-page-kicker', 'postinfo-page-byline', 'postinfo-page-footer',
							'multipagetitles', 'footercontent'
							))) {
								echo "<textarea cols='70' rows='10'>" . htmlspecialchars($value) . "</textarea>";
							} else {
								echo "<code>$value</code>";
							}
						}
					echo "</td></tr>";
					} ?>
				</table>		    

			


