<?php require_once(dirname(__FILE__) . '/functions.php');

$file_type = $_POST['type'];
// For PHP files:
$file_name = $_POST['filename'];

if ( $file_type == 'css') {
	ob_start(); 
		tf_print_css_code(0);
		$file_content = ob_get_contents(); 
	ob_end_clean();	
	$file_extension = 'css'; $content_type = 'text/css';
} else if ( $file_type == 'js' ) {
	$file_content = tf_print_js();
	$file_extension = 'js';	$content_type = 'application/javascript';
} else if ( $file_type == 'settings' ) {
	$file_content = serialize($thfr_css);
	$file_extension = 'txt'; $content_type = 'text/plain';
} else if ( $file_type == 'php' ) {
	ob_start(); 
		if ($file_name == 'functions' ) tf_create_functions_file();
		else tf_create_php_file($file_name);
		$file_content = ob_get_contents(); 
	ob_end_clean();	
	$file_extension = 'php'; $content_type = 'text/plain';
} else if ( $file_type == 'zip' ) {
	ob_start(); 
		tf_create_php_file($file_name);
		$file_content = ob_get_contents(); 
	ob_end_clean();	
	$file_extension = 'php'; $content_type = 'text/plain';
}

if ( $file_type == 'php' ) $filename = $file_name . '.php'; 
elseif ( $file_type == 'css' ) $filename = 'style.css'; 
elseif ( $file_type == 'js' ) $filename = 'javascript.js'; 
else $filename = 'thfr-' . $file_type . '-' . str_replace('.','', $_SERVER['SERVER_NAME']) . '-' . 
	date('y') . '-' . date('m') . '-' . date('d') . '.' . $file_extension;

// output the header
header('Content-Description: File Transfer');
header("Content-Disposition: attachment; filename=\"$filename\"");
header('Content-Type: ' . $content_type . '; charset=utf-8');

// output the file
echo $file_content;
die();
?>