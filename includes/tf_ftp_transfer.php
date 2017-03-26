<?php function tf_ftp_transfer() {

	global $thfr_css;
	
	$transfertype = $_POST['transfertype'];
	$file_array = $_POST['ftp_file_array'];
	$server_address = $_POST['ftp_server_address'];
	$user_name = $_POST['ftp_user_name'];
	$user_pass = $_POST['ftp_user_pass'];
	$theme_dirname = $_POST['ftp_theme_dirname'];
	$remote_path = $_POST['ftp_remote_path'];
	
	if (empty($file_array) AND $transfertype != 'ftptestsubmit') die("<span style='color:red'>No files selected for FTP transfer!</span>");
	if ($server_address == '') die("<span style='color:red'>FTP server address is missing!</span>");
	if ($user_name == '') die("<span style='color:red'>FTP user name is missing!</span>");
	if ($user_pass == '') die("<span style='color:red'>FTP user password is missing!</span>");
	if ($remote_path == '') die("<span style='color:red'>FTP remote path is missing!</span>");
	
	// set up basic connection
	$conn_id = @ftp_connect($server_address);
	if ( !$conn_id ) die("<span style='color:red'>Could not connect to FTP server !</span>");

	// login with username and password
	$login_result = @ftp_login($conn_id, $user_name, $user_pass);
	if ( !$login_result ) die("<span style='color:red'>Could not login into FTP account !</span>");

	// Turn passive mode on
	ftp_pasv($conn_id, true);
	
	// Display current directory
	echo "<span style='color:green'>Successfully logged in at <span style='color:blue'><code>$server_address</code></span><br />Current directory is: <span style='color:blue'><code> " . ftp_pwd($conn_id) . "</code></span><br />";
	
	// get contents of the current directory
	/*
	$contents = ftp_nlist($conn_id, ".");
	foreach ( $contents as $content ) {
		if ($content != '.' AND $content != '..')
		echo "<span style='color:blue'><code>" . $content . "</code></span><br />";
	}
	*/

	// try to change the directory to remote directory
	if ( @ftp_chdir($conn_id, $remote_path . $theme_dirname) ) {
	    echo "Successfully changed into directory: <br /><span style='color:blue'><code>" . ftp_pwd($conn_id) . "</code></span><br />";
	} else { 
		echo "Directory does not exist:<br /><span style='color:blue'><code>". $remote_path . $theme_dirname . "</code></span><br />";
		if( @ftp_mkdir($conn_id, $remote_path . $theme_dirname)) {
			echo "Successfully created directory:<br /><span style='color:blue'><code>". $remote_path . $theme_dirname . "</code></span><br />";
			if ( @ftp_chdir($conn_id, $remote_path . $theme_dirname)) {
				echo "Successfully changed into directory:<br /><span style='color:blue'><code>" . ftp_pwd($conn_id) . "</code></span><br />";		
			} else {
				echo "<span style='color:red'>Could not change to directory <code>$remote_path/$theme_dirname</code></span><br />";
			}
		} else {
			die("<span style='color:red'>Could not create <code>$theme_dirname</code> inside <code>$remote_path</code></span><br />");		
		}
	}

	if ($transfertype == 'ftpsubmit') {
		foreach( $file_array as $file_name ) {
			ob_start(); 
				if ($file_name == 'style.css' ) {
					tf_print_css_code(0);
				} elseif ($file_name == 'javascript.js' ) {
					// tf_print_js does just return, not echo
					echo tf_print_js();
				} elseif ($file_name == 'functions.php' ) {
					tf_create_functions_file();
				} else {
					tf_create_php_file( str_replace('.php', '', $file_name) );
				}
				$file_content = ob_get_contents(); 
			ob_end_clean();	
		

			// Create temporary file
			$temp = tmpfile();
			fwrite($temp, $file_content);
			fseek($temp, 0);

			// try to upload $file
			if (ftp_fput($conn_id, $file_name, $temp, FTP_ASCII)) {
				echo "Successfully transferred <span style='color:blue'><code>$file_name</code></span><br />";
			} else {
				echo "<span style='color:red'>There was a problem while uploading <code>$file_name</code></span><br />";
			}

			fclose($temp); // this removes the file
			
		}
	} else {
		// Create temporary file
		$temp = tmpfile();
		fwrite($temp, "Themeframe FTP test file: Test 1234. This file should be named text1234.txt and should have been transferred to your web hosting account, right into the direcotry of your ThemeFrame-created WP theme.");
		fseek($temp, 0);

		// try to upload $file
		if (ftp_fput($conn_id, 'test1234.txt', $temp, FTP_ASCII)) {
			echo "Successfully transferred <span style='color:blue'><code>test1234.txt</code></span><br />";
		} else {
			echo "<span style='color:red'>There was a problem while uploading <code>test1234.txt</code></span><br />";
		}

		fclose($temp); // this removes the file	
	
	}
	
	// get contents of the current directory
	/*
	echo "Listing contents of current directory:<br />";
	$contents = ftp_nlist($conn_id, ".");
	foreach ( $contents as $content ) {
		if ($content != '.' AND $content != '..') {
			echo "<span style='color:blue'><code>" . $before . $content . $after . "</code></span><br />";
		}
	}	
	*/
	
	// close the connection and the file handler
	ftp_close($conn_id);

	echo "FTP connection closed.";
	
	$thfr_css['ftp_server_address'] = $server_address;
	$thfr_css['ftp_user_name'] = $user_name;
	$thfr_css['ftp_theme_dirname'] = $theme_dirname;
	$thfr_css['ftp_remote_path'] = $remote_path;
	
	set_thfr();

}
?>