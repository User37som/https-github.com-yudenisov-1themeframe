<?php require_once(dirname(__FILE__) . '/functions.php');
#date related issues with Mamp & Mac & PHP 5.3
#date_default_timezone_set('America/Los_Angeles');
#due to this turn off warning for now:
ini_set('display_errors', false);
$ziparray = $_POST['ziparray'];
$zipdir = $_POST['zipdir'];
$zip = new zipfile();
foreach( $ziparray as $file_name ) {
	// If not an image
	if (strpos($file_name, 'images/') === FALSE) {
		ob_start(); 
			if ($file_name == 'style.css' ) tf_print_css_code(0);
			elseif ($file_name == 'javascript.js' ) echo tf_print_js();
			elseif ($file_name == 'functions.php' ) tf_create_functions_file();
			else tf_create_php_file( str_replace('.php', '', $file_name) );
			$file_content = ob_get_contents(); 
		ob_end_clean();	
	// If image
	} else {	
		$filename = THFRPATH . 'uploads/' . str_replace('images/', '', $file_name); 
		$fsize = @filesize($filename); 
		$fh = fopen($filename, 'rb'); 
		$file_content = fread($fh, $fsize); 		
	}	
	
	$zip->addFile( $file_content, $zipdir . '/' . $file_name );
}
$zipcontents = $zip->file();
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"$zipdir.zip\"");
header("Content-length: " . strlen($zipcontents) . "\n\n");
echo $zipcontents;
die();
?>