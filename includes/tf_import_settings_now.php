<?php
function tf_import_settings_now() {

	$thfruploadpath = urldecode($_POST['thfruploadpath']);
	$import_settings_file = $thfruploadpath . '/' . preg_replace('/^(.*)\//i', '', $_POST['importFile']);

	if (file_exists($import_settings_file)) {
		set_thfr($import_settings_file);
		echo "<span style='color:green;font-weight:bold;'>Successfully imported settings of ... $import_settings_file</span>";
	} else {
		echo "<span style='color:red;font-weight:bold;'>Could not find or import $import_settings_file</span>";
	}
	die();
}
?>
