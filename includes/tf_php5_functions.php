<?php
// file_get_contents/file_put_contents for PHP4
if (!function_exists('file_get_contents')) {

	function file_get_contents($filename) {
		$fhandle = fopen($filename, "r");
		if (!$fhandle) {
			return false; 
		} else {
			$fcontents = fread($fhandle, filesize($filename));
			fclose($fhandle);
		}
		return $fcontents;
	}

	function file_put_contents($filename, $data) {
		$fhandle = @fopen($filename, 'w');
		if (!$fhandle) {
			return false;
		} else {
			$fcontents = fwrite($fhandle, $data);
			fclose($fhandle);
		}
		return $fcontents;
	}
	
}
?>