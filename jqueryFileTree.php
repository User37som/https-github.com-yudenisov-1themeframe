<?php require_once(dirname(__FILE__) . '/functions.php');
error_reporting (E_ALL ^ E_NOTICE);
//
// jQuery File Tree PHP Connector
//
// Version 1.01
//
// Cory S.N. LaViska
// A Beautiful Site (http://abeautifulsite.net/)
// 24 March 2008
//
// http://abeautifulsite.net/blog/2008/03/jquery-file-tree/#licensing :
// This plugin is dual-licensed under the GNU General Public License and the MIT License and is copyright 2008 A Beautiful Site, LLC.
//
// History:
//
// 1.01 - updated to work with foreign characters in directory/file names (12 April 2008)
// 1.00 - released (24 March 2008)
//
// Output a list of files for jQuery File Tree
//
$root = $_SERVER["DOCUMENT_ROOT"]; 
$_POST['dir'] = urldecode($_POST['dir']);
// Get array of extensions to search for
$type = $_GET['type'];
if ($type == 'txt') $type = array('txt');
else if ($type == 'css') $type = array('css');
else if ($type == 'js') $type = array('js');
else if ($type == 'php') $type = array('php');
else if ($type == 'image') $type = array('jpg', 'jpeg', 'gif', 'GIF', 'JPG', 'png', 'PNG');
else $type = array('txt', 'php', 'jpg', 'jpeg', 'gif', 'GIF', 'JPG', 'png', 'PNG');


if( file_exists($root . $_POST['dir']) ) {
	$files = scandir($root . $_POST['dir']);
	natcasesort($files);
	if( count($files) > 2 ) { /* The 2 accounts for . and .. */
		echo "<ul class=\"jqueryFileTree\" style=\"display: none;\">";
		// All dirs
		foreach( $files as $file ) {
			if( file_exists($root . $_POST['dir'] . $file) && $file != '.' && $file != '..' && is_dir($root . $_POST['dir'] . $file) ) {
				echo "<li class=\"directory collapsed\"><a href=\"#\" rel=\"" . htmlentities($_POST['dir'] . $file) . "/\">" . htmlentities($file) . "</a></li>";
			}
		}
		// All files
		foreach( $files as $file ) {
#			if( file_exists($root . $_POST['dir'] . $file) && $file != '.' && $file != '..' && in_array(file_extension($file),array('jpg','jpeg','gif','png')) && !is_dir($root . $_POST['dir'] . $file) ) {
			if( file_exists($root . $_POST['dir'] . $file) && $file != '.' && $file != '..' && in_array(file_extension($file),$type) && !is_dir($root . $_POST['dir'] . $file) ) {

			$ext = preg_replace('/^.*\./', '', $file);
				echo "<li class=\"file ext_$ext\"><a href=\"#\" rel=\"" . htmlentities($_POST['dir'] . $file) . "\">" . htmlentities($file) . "</a></li>";
			}
		}
		echo "</ul>";	
	}
}

?>