<?php // Turn off PHP notices for now:
error_reporting(E_ALL & ~E_NOTICE);

// Define various constants:
define('THFRPATH', dirname(__FILE__) . '/');
define('THFRDIRNAME', basename(dirname(__FILE__)));
define('THFRURL', '/' . THFRDIRNAME . '/');
define('RELATIVETHFRURL', '/' . THFRDIRNAME . '/');
define('THFRUPLOADPATH', THFRPATH . 'uploads');
define('RELATIVETHFRUPLOADURL', RELATIVETHFRURL . 'uploads/');
define('THFRUPLOADURL', RELATIVETHFRURL . 'uploads/');

// Checks if table XY exists
function sql_table_exist(&$sqlite, $table) {
   $sql = "SELECT * FROM " . $table;
   try {
     $sqlite->query($sql);
   } catch (PDOExeption $e ) {
     return FALSE;
   }
   return TRUE;
}

// Check if DB "thfrdb" exists, else create it or display error

try {
    $db = new PDO(
	'sqlite:'.dirname(__FILE__).'/sqlite/thfrdb.sqlite3'
	);
} catch (PDOException $e) {
    print "Ошибка соединеия!: " . $e->getMessage() . "<br/>";
    die();
}
  // if table "default" does not exist, create it
if(sql_table_exist( $db, 'newdefault') === FALSE ){
  try {
	// Create table
    $sql = "CREATE TABLE newdefault (
      id           INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
      option_name  TEXT,
      option_value TEXT
      )";
    $db->query($sql);
  } catch(PDOExeption $e){
    print "Ошибка создания таблицы!: " . $e->getMessage() . "<br/>";
    die();
  }
}


$thfr_css = get_thfr();

function get_thfr() {
	global $db;
  $sql = "
    SELECT option_value
	    FROM newdefault
	    WHERE option_name like 'thfr'
  ";
	$result = $db->query($sql);
	$row = $result->fetchAll(PDO::FETCH_ASSOC);
	return(unserialize($row[0]));
	# return(json_decode($row[0], TRUE));
}

function set_thfr($import_file = '') {
	global $db;
	if ($import_file != '') {
		$thfr_css = $thfr_css = file_get_contents($import_file);
	} else {
		global $thfr_css; $thfr_css = serialize($thfr_css);
		# global $thfr_css; $thfr_css = json_encode($thfr_css);
	}
	$thfr_css_prepared = sqlite_escape_string(stripslashes($thfr_css));
	$sql =  "
    UPDATE newdefault
  		SET option_value = :thfr_css_prepared
      WHERE option_name like 'thfr'
  ";
	$stmt = $db->prepare($sql);
	$stmt->bindValue(':thfr_css_prepared', $thfr_css_prepared, PDO::PARAM_STR);
	$stmt->execute();
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	if( $result->numRows() == 0 )
	{
		$sql = "
      INSERT into newdefault
	      (option_name, option_value)
	      VALUES( 'thfr', :thfr_css_prepared );
    ";
		$stmt = $db->prepare($sql);
		$stmt->bindValue(':thfr_css_prepared', $thfr_css_prepared, PDO::PARAM_STR);
		$stmt->execute();
	}
	return;
}

function reset_thfr() {
	global $db;
	$thfr_css = '';
	$sql = "
    UPDATE newdefault
  		SET option_value = :thfr_css
      WHERE option_name like 'thfr'
  ";
	$stmt = $db->prepare($sql);
	$stmt->bindValue(':thfr_css', $thfr_css, PDO::PARAM_STR);
	$stmt->execute();
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	if( $result->numRows() == 0 )
	{
		$sql = "
      INSERT into newdefault
	      (option_name, option_value)
	      VALUES( 'thfr', :thfr_css );
    ";
		$stmt = $db->prepare($sql);
		$stmt->bindValue(':thfr_css', $thfr_css, PDO::PARAM_STR);
		$stmt->execute();
	}
	echo "Settings have been reset...";
	return;
}

function delete_drop_item() {
	global $thfr_css;
	$itemgroup = $_POST['itemgroup'];
	$itemname = $_POST['itemname'];
	//
	switch ($itemgroup) {
		case "customdroplinks": $extension = '_custlink'; break;
		case "customdropimages": $extension = '_custimg'; break;
	}
	$dropitemname = $itemname . $extension;
	//
	if (isset($thfr_css[$itemgroup][$itemname])) unset($thfr_css[$itemgroup][$itemname]);

	$temparray = array('header', 'centerTop', 'centerBottom', 'footer', 'drop');

	foreach($thfr_css['pagetemplates'] as $template) {
		$newdroparea = array();
		foreach($temparray as $droparea) {
			$newdroparea[$droparea] = array();
			$i = 0;
			while ($thfr_css[$template][$droparea . '-' . $i] != '') {
				if ($thfr_css[$template][$droparea . '-' . $i] != $dropitemname) {
					$newdroparea[$droparea][] = $thfr_css[$template][$droparea . '-' . $i];
				}
				$i++;
			}
			// Clear all existing values:
			for ($i = 0 ; $i < 31 ; $i++){
				if (isset($thfr_css[$template][$droparea . '-' . $i]))
					unset($thfr_css[$template][$droparea . '-' . $i]);
			}
			// Create new values:
			$i = 0;
			foreach($newdroparea[$droparea] as $dropitem) {
				$thfr_css[$template][$droparea . '-' . $i] = $dropitem;
				$i++;
			}
		}
	}


	set_thfr();
	echo $itemname . " has been deleted...";
	return;
}

function delete_page_template() {
	global $thfr_css;
	$tplname = $_POST['tplname'];

	// remove item by value
	if( in_array($tplname, $thfr_css['pagetemplates']))
	$thfr_css['pagetemplates'] = array_diff($thfr_css['pagetemplates'], array($tplname));

	// remove this too
	if (isset($thfr_css[$tplname])) unset($thfr_css[$tplname]);

	set_thfr();
	echo $tplname . ".php has been deleted...";

	return;
}

function tf_new_postcontainer($newPostContainer, $model) {
	global $thfr_css;

	if ( isset($thfr_css['postcontainers'][$model]) ) {
		if( isset($thfr_css['postcontainers'][$newPostContainer]) ) {
			echo "<span style='color:green'>Successfully created new post container type '$newPostContainer'</span>";
			return;
		} else {
			$thfr_css['postcontainers'][$newPostContainer] = $thfr_css['postcontainers'][$model];
			set_thfr();
			echo "<span style='color:green'>Successfully created new post container type '$newPostContainer'</span>";
			return;
		}
	}

	echo "The post container '$model' does not exist";
	return;
}

//
function file_extension($filename) {
	$path_info = pathinfo($filename);
	return $path_info['extension'];
}


// Default settings
if (!isset($thfr_css['savedonce'])) {

	$thfr_css = '';
	$thfr_css = unserialize(file_get_contents(THFRPATH . 'styles/default.txt'));

	# $thfr_css['read_more_text'] = "Continue reading &raquo; <a href='%permalink%'>%title%</a>";
	/*
	$thfr_css['read_more_text'] = "Read More &raquo;";


	$thfr_css['index']['sidebarsleft'] = "1";
	$thfr_css['index']['sidebarsright'] = "1";
	$thfr_css['index']['header-0'] = "searchform_item";
	$thfr_css['index']['header-1'] = "sitetitle_item";
	$thfr_css['index']['header-2'] = "rsscommentslink_item";
	$thfr_css['index']['header-3'] = "rsslink_item";
	$thfr_css['index']['header-4'] = "tagline_item";
	$thfr_css['index']['header-5'] = "hormenu2_item";
	$thfr_css['index']['header-6'] = "headerimage_item";
	$thfr_css['index']['header-7'] = "hormenu_item";
	$thfr_css['index']['header-8'] = "breadcrumb_item";
	$thfr_css['index']['centerTop-0'] = "pagetitle_item";
	$thfr_css['index']['centerTop-1'] = "multinav_item";
	$thfr_css['index']['centerBottom-0'] = "multinav2_item";
	$thfr_css['index']['footer-0'] = "footer_item";
	$thfr_css['index']['drop-0'] = "breadcrumb2_item";
	$thfr_css['index']['drop-1'] = "twitter_item";
	$thfr_css['index']['drop-2'] = "facebook_item";
	$thfr_css['index']['drop-3'] = "feedburner_item";
	$thfr_css['index']['drop-4'] = "widgetarea_1";
	$thfr_css['index']['drop-5'] = "widgetarea_1_2";
	$thfr_css['index']['drop-6'] = "widgetarea_1_3";
	$thfr_css['index']['drop-7'] = "widgetarea_2";
	$thfr_css['index']['drop-8'] = "widgetarea_2_2";
	$thfr_css['index']['drop-9'] = "widgetarea_3";
	$thfr_css['index']['drop-10'] = "widgetarea_4";
	$thfr_css['index']['drop-11'] = "widgetarea_5";
	$thfr_css['index']['drop-12'] = "widgetarea_6";

	$thfr_css['home']['sidebarsleft'] = "1";
	$thfr_css['home']['sidebarsright'] = "1";
	$thfr_css['home']['header-0'] = "searchform_item";
	$thfr_css['home']['header-1'] = "sitetitle_item";
	$thfr_css['home']['header-2'] = "rsscommentslink_item";
	$thfr_css['home']['header-3'] = "rsslink_item";
	$thfr_css['home']['header-4'] = "tagline_item";
	$thfr_css['home']['header-5'] = "hormenu2_item";
	$thfr_css['home']['header-6'] = "headerimage_item";
	$thfr_css['home']['header-7'] = "hormenu_item";
	$thfr_css['home']['header-8'] = "breadcrumb_item";
	$thfr_css['home']['centerTop-0'] = "pagetitle_item";
	$thfr_css['home']['centerTop-1'] = "multinav_item";
	$thfr_css['home']['centerBottom-0'] = "multinav2_item";
	$thfr_css['home']['footer-0'] = "footer_item";
	$thfr_css['home']['drop-0'] = "breadcrumb2_item";
	$thfr_css['home']['drop-1'] = "twitter_item";
	$thfr_css['home']['drop-2'] = "facebook_item";
	$thfr_css['home']['drop-3'] = "feedburner_item";
	$thfr_css['home']['drop-4'] = "widgetarea_1";
	$thfr_css['home']['drop-5'] = "widgetarea_1_2";
	$thfr_css['home']['drop-6'] = "widgetarea_1_3";
	$thfr_css['home']['drop-7'] = "widgetarea_2";
	$thfr_css['home']['drop-8'] = "widgetarea_2_2";
	$thfr_css['home']['drop-9'] = "widgetarea_3";
	$thfr_css['home']['drop-10'] = "widgetarea_4";
	$thfr_css['home']['drop-11'] = "widgetarea_5";
	$thfr_css['home']['drop-12'] = "widgetarea_6";

	$thfr_css['single']['sidebarsleft'] = "1";
	$thfr_css['single']['sidebarsright'] = "1";
	$thfr_css['single']['header-0'] = "searchform_item";
	$thfr_css['single']['header-1'] = "sitetitle_item";
	$thfr_css['single']['header-2'] = "rsscommentslink_item";
	$thfr_css['single']['header-3'] = "rsslink_item";
	$thfr_css['single']['header-4'] = "tagline_item";
	$thfr_css['single']['header-5'] = "hormenu2_item";
	$thfr_css['single']['header-6'] = "headerimage_item";
	$thfr_css['single']['header-7'] = "hormenu_item";
	$thfr_css['single']['header-8'] = "breadcrumb_item";
	$thfr_css['single']['centerTop-0'] = "singlenav_item";
	$thfr_css['single']['centerBottom-0'] = "singlenav2_item";
	$thfr_css['single']['footer-0'] = "footer_item";
	$thfr_css['single']['drop-0'] = "breadcrumb2_item";
	$thfr_css['single']['drop-1'] = "twitter_item";
	$thfr_css['single']['drop-2'] = "facebook_item";
	$thfr_css['single']['drop-3'] = "feedburner_item";
	$thfr_css['single']['drop-4'] = "widgetarea_1";
	$thfr_css['single']['drop-5'] = "widgetarea_1_2";
	$thfr_css['single']['drop-6'] = "widgetarea_1_3";
	$thfr_css['single']['drop-7'] = "widgetarea_2";
	$thfr_css['single']['drop-8'] = "widgetarea_2_2";
	$thfr_css['single']['drop-9'] = "widgetarea_3";
	$thfr_css['single']['drop-10'] = "widgetarea_4";
	$thfr_css['single']['drop-11'] = "widgetarea_5";
	$thfr_css['single']['drop-12'] = "widgetarea_6";

	$thfr_css['page']['sidebarsleft'] = "1";
	$thfr_css['page']['sidebarsright'] = "1";
	$thfr_css['page']['header-0'] = "searchform_item";
	$thfr_css['page']['header-1'] = "sitetitle_item";
	$thfr_css['page']['header-2'] = "rsscommentslink_item";
	$thfr_css['page']['header-3'] = "rsslink_item";
	$thfr_css['page']['header-4'] = "tagline_item";
	$thfr_css['page']['header-5'] = "hormenu2_item";
	$thfr_css['page']['header-6'] = "headerimage_item";
	$thfr_css['page']['header-7'] = "hormenu_item";
	$thfr_css['page']['header-8'] = "breadcrumb_item";
	$thfr_css['page']['footer-0'] = "footer_item";
	$thfr_css['page']['drop-0'] = "breadcrumb2_item";
	$thfr_css['page']['drop-1'] = "twitter_item";
	$thfr_css['page']['drop-2'] = "facebook_item";
	$thfr_css['page']['drop-3'] = "feedburner_item";
	$thfr_css['page']['drop-4'] = "widgetarea_1";
	$thfr_css['page']['drop-5'] = "widgetarea_1_2";
	$thfr_css['page']['drop-6'] = "widgetarea_1_3";
	$thfr_css['page']['drop-7'] = "widgetarea_2";
	$thfr_css['page']['drop-8'] = "widgetarea_2_2";
	$thfr_css['page']['drop-9'] = "widgetarea_3";
	$thfr_css['page']['drop-10'] = "widgetarea_4";
	$thfr_css['page']['drop-11'] = "widgetarea_5";
	$thfr_css['page']['drop-12'] = "widgetarea_6";

	$thfr_css['postcontainers'] = array( 'Default-Multi-Posts' => '',
										'Default-Single-Posts' => '',
										'Default-Static-Pages' => '');
	$thfr_css['pagetemplates'] = array( 'index', 'home', 'single', 'page' );
	$thfr_css['thumbsizes'] = array( 'thumbnail', 'medium', 'large' );
	$thfr_css['codeinserts'] = array( 'head' => '',
									'bodytag' => '',
									'bodytop' => '',
									'bodybottom' => '');
	$thfr_css['nextprevnav'] =array( 'multi-left' => '',
									'multi-right' => '',
									'multi2-left' => '',
									'multi2-right' => '',
									'single-left' => '',
									'single-right' => '',
									'single2-left' => '',
									'single2-right' => '',
									'comments' => '',
									'comments2' => '');
	*/
	# $thfr_css['readmore'] = 'Continue Reading <a href=\'". get_permalink() . "\'>" . get_the_title('', '', false) . "</a>"';


}

include(THFRPATH . 'includes/tf_create_css_code.php');
include(THFRPATH . 'includes/tf_create_php_file.php');
# include(THFRPATH . 'includes/tf_create_php_file_comments.php');
include(THFRPATH . 'includes/tf_create_functions_file.php');
include(THFRPATH . 'includes/tf_import_settings_now.php');
include(THFRPATH . 'includes/tf_print_css_code.php');
include(THFRPATH . 'includes/tf_print_form.php');
include(THFRPATH . 'includes/tf_print_js.php');
include(THFRPATH . 'includes/tf_save_options.php');
include(THFRPATH . 'includes/tf_pagetemplate.php');
include(THFRPATH . 'includes/tf_pagetemplate_include.php');
include(THFRPATH . 'includes/tf_drop_area.php');
include(THFRPATH . "includes/tf_selectors.php");
# include(THFRPATH . "includes/tf_selectors_new.php");
include(THFRPATH . "includes/zip.lib.php");
include(THFRPATH . "includes/tf_ftp_transfer.php");
include(THFRPATH . "includes/tf_postcontainer_preview.php");
include(THFRPATH . "includes/tf_postcontainer_code.php");

include(THFRPATH . "includes/tf_custom_drop_image.php");
include(THFRPATH . "includes/tf_custom_drop_link.php");

# when using later (move from pagetemplate.php) define $body_class
#include(THFRPATH . 'functions/tf_page_items.php');
#include(THFRPATH . "selectors.php");
?>