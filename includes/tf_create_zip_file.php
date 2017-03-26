<?php function tf_create_zip_fille() {
	$zip = new zipfile();
	foreach( array('index', 'single', 'page', 'home', 'comments', 'functions') as $file_name) {
		ob_start(); 
		if ($file_name == 'functions' ) {
			tf_create_functions_file();
		} else {
			tf_create_php_file($file_name);
		}
		$file_content = ob_get_contents(); 
		ob_end_clean();	
		$zip->addFile( $file_content, $filename . '.php' );	
	}
	$zipcontents = $zip->file();
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=\"TheZip.zip\"");
	header("Content-length: " . strlen($zipcontents) . "\n\n");
	// output data
	echo $zipcontents;
}
?>