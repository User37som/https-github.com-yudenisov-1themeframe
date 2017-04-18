<?php
// Save various non-CSS options
function tf_save_options_single() {

	global $thfr_css;
	
	// which page template
	$cur_group = $_POST['selectorgroup'];
	// which Save button
	$button = $_POST['thisID'];

	
	// extra routine for postcontainers
	if( $cur_group == "postcontainers" ) {
	
		$containername = $_POST['postcontainername'];
		
		foreach( array_keys($_POST) as $key ) {
			if( isset($_POST[$key]) AND $_POST[$key] != '' ) $thfr_css['postcontainers'][$containername][$key] = $_POST[$key];
			else {
				if( isset($thfr_css['postcontainers'][$containername][$key]) ) 
					unset($thfr_css['postcontainers'][$containername][$key]);
			}
		}	

		// delete unchecked checkboxes:
		foreach(array('thumbcheck', 'kickercheck', 'headlinecheck', 'bylinecheck', 'contentcheck', 'footercheck') as $key) {
			if( !isset($_POST[$key]) ) unset($thfr_css['postcontainers'][$containername][$key]);
		}
	
		$thfr_css['savedonce'] = 'yes';
		set_thfr();
		echo 'Option saved...';
		die();
	}

	// Custom Drop Images
	if ( $button == 'save-newdropimage' OR $button == 'edit-newdropimage' ) {
		
		// $_POST['newimage'] = my-image.gif
		
		$cssid = str_replace('.', '', $_POST['newimage']); // my-imagegif
		
		if(!isset($thfr_css['customdropimages'])) {
			$thfr_css['customdropimages'] = array();
		}
		
		if(!isset($thfr_css['customdropimages'][$cssid])) {	
		
			$thfr_css['customdropimages'][$cssid] = array();
			
			foreach (array('alt', 'alttext', 'link', 'linktype', 'customurl', 'linktitle', 'linktarget', 'linkrel') as $option) {
				$thfr_css['customdropimages'][$cssid][$option] = $_POST[$option];
			}
			
			// 'file' added here, not sent through form
			$thfr_css['customdropimages'][$cssid]['file'] = $_POST['newimage'];
			
			// Delete checkboxes that were not set
			foreach(array('alt', 'link') as $key) {
				if( !isset($_POST[$key]) ) unset($thfr_css['customdropimages'][$cssid][$key]);
			}
				
			// Add new drop item to the end of existing items in "avail. items" drop area
			foreach($thfr_css['pagetemplates'] as $template) {
				$i = 0;
				while($thfr_css[$template]['drop-' . $i] != '') {
					$i++;
				}
				// Add item as [pagetemplate_name][drop-$i]
				$thfr_css[$template]['drop-' . $i] = $cssid . '_custimg';
			}
			
			
			# $thfr_css['savedonce'] = 'yes';
			set_thfr();
			echo 'Image "' . $_POST['newimage'] . '" added as new Drag & Drop item. See bottom right ->';
			
		} else {
		
			if ( $button == 'edit-newdropimage' ) {

				// Just edit existing values:
				foreach (array('alt', 'alttext', 'link', 'linktype', 'customurl', 'linktitle', 'linktarget', 'linkrel') as $option) {
					$thfr_css['customdropimages'][$cssid][$option] = $_POST[$option];
				}
				// 'file' added here, not sent through form
				$thfr_css['customdropimages'][$cssid]['file'] = $_POST['newimage'];
				// Delete checkboxes that were not set
				foreach(array('alt', 'link') as $key) {
					if( !isset($_POST[$key]) ) unset($thfr_css['customdropimages'][$cssid][$key]);
				}
				set_thfr();
				echo 'Image "' . $_POST['newimage'] . '" settings updated...';
				
			} else {
			
				// Image already exists
				echo '<span style="color:red">Image "' . $_POST['newimage'] . '" already exists!</span>';
				
			}
			
		}
		die();
	}


	// Custom Drop Links
	if ( $button == 'save-newdroplink' OR $button == 'edit-newdroplink' ) {
		
		$cssid = str_replace('.', '', $_POST['linkid']); // my-imagegif
		
		if(!isset($thfr_css['customdroplinks'])) {
			$thfr_css['customdroplinks'] = array();
		}
		
		if(!isset($thfr_css['customdroplinks'][$cssid])) {
		
			$thfr_css['customdroplinks'][$cssid] = array();
		
			foreach (array('linktext', 'linkurl', 'linktitle', 'linktarget', 'linkrel') as $option) {
				$thfr_css['customdroplinks'][$cssid][$option] = $_POST[$option];
			}
			
			// Add new drop item to the end of existing items in "avail. items" drop area
			foreach($thfr_css['pagetemplates'] as $template) {
				$i = 0;
				while($thfr_css[$template]['drop-' . $i] != '') {
					$i++;
				}
				// Add item as [pagetemplate_name][drop-$i]
				$thfr_css[$template]['drop-' . $i] = $cssid . '_custlink';
			}
			
			# $thfr_css['savedonce'] = 'yes';
			set_thfr();
			echo 'Link "' . $cssid . '" added as new Drag & Drop item. See bottom right ->';
			
		} else {
		
			echo 'Link "' . $cssid . '" added as new Drag & Drop item. See bottom right ->';
			
		}
		die();
	}

	
	// New page templates:
	if ( $button == 'save-newpagetemplate' ) {
		
		$new_tpl = $_POST['templatetype'];
		$copy_tpl = $_POST['copyof'];

		// MIME_type becomes video/audio etc.
		if($new_tpl == 'MIME_type') { 
			$new_tpl = $_POST[$new_tpl . '-value'];
		}
		
		// author-ID becomes author-13:
		elseif( in_array($new_tpl, array(
								'author-ID',
								'author-NICENAME',
								'category-ID',
								'category-SLUG',
								'MIME_type',
								'page-ID',
								'page-SLUG',
								'single-POSTTYPE',
								'tag-ID',
								'tag-SLUG',
								'taxonomy-TAXONOMY',
								'taxonomy-TAXONOMY-TERM'
								))) {
			$tpl_parts = explode('-', $new_tpl);
			$new_tpl = $tpl_parts[0] . '-' . $_POST[$new_tpl . '-value'];
		}
		
		// anything.php
		elseif( $new_tpl == 'custom' ) {
			$new_tpl = $_POST['filename'];
		}
		
		// If template doesn't exist:
		if( !in_array($new_tpl, $thfr_css['pagetemplates']) )  {
		
			$thfr_css['pagetemplates'][] = $new_tpl;
			$thfr_css[$new_tpl] = array();

			// Copy all setting from prototpye template:
			foreach($thfr_css[$copy_tpl] as $option => $value) {
				$thfr_css[$new_tpl][$option] = $value;
			}
			
			# $thfr_css['savedonce'] = 'yes';
			set_thfr();
			echo 'Template "' . $new_tpl . '".php created.<br />&larr; See new menu item on the left.';
			
		} else {
		
			echo 'template exists';
			
		}
		die();
	}
	
	
	// Sidebar settings & custom layout width
	if ( $button == 'save-sidebarsandcustomwidth' ) {
		// Template specific values
		if ( $cur_group != 'undefined' ) {
			$thfr_css[$cur_group]['sidebarsleft'] = $_POST['sidebarsleft'];
			$thfr_css[$cur_group]['sidebarsright'] = $_POST['sidebarsright'];
			$thfr_css[$cur_group]['usepostcontainer'] = $_POST['usepostcontainer'];
			
			if ( isset($_POST['uniquewidth']) AND $_POST['uniquewidth'] != '' ) {
				$thfr_css[$cur_group]['uniquewidth'] = $_POST['uniquewidth'];
			} else {
				if ( isset($thfr_css[$cur_group]['uniquewidth']) ) unset( $thfr_css[$cur_group]['uniquewidth'] );
			}
		}
		
		$thfr_css['savedonce'] = 'yes';
		set_thfr();
		echo 'Option saved...';
		die();
	}
	
	// nextprevnav
	if( $cur_group == "nextprevnav" ) {
	
		foreach( array('multi-left', 'multi-right', 'multi2-left', 'multi2-right', 
					'single-left', 'single-right', 'single2-left', 'single2-right',
					'comments', 'comments2') as $key ) {
			$thfr_css['nextprevnav'][$key] = $_POST[$key];
		}	
	
		$thfr_css['savedonce'] = 'yes';
		set_thfr();
		echo 'Option saved...';
		die();
	}

	// excerptsteasers
	if( $cur_group == "excerpts" ) {
	
		foreach( array('length', 'readmore') as $key ) {
			$thfr_css['excerpt'][$key] = $_POST[$key];
		}	
	
		$thfr_css['savedonce'] = 'yes';
		set_thfr();
		echo 'Option saved...';
		die();
	}
	
	// extra routine for page code inserts
	if( $cur_group == "custompage" ) {
	
		$codeinsertarea = $_POST['codeinsertarea'];
		
		foreach($thfr_css['pagetemplates'] as $pagetemplate) {
			$thfr_css['codeinserts'][$codeinsertarea][$pagetemplate] = $_POST[$pagetemplate];
		}		
		
		// 1 value for all templates
		$thfr_css['codeinserts'][$codeinsertarea]['global'] = $_POST['global'];
		
		
		foreach($thfr_css['pagetemplates'] as $pagetemplate) {
			// delete unchecked checkboxes:
			foreach(array('-global', '-custom') as $key) {
				if( !isset($_POST[$pagetemplate . $key]) ) unset($thfr_css['codeinserts'][$codeinsertarea][$pagetemplate . $key]);
				else $thfr_css['codeinserts'][$codeinsertarea][$pagetemplate . $key] = $_POST[$pagetemplate . $key];
			}
			
		}
		
		$thfr_css['savedonce'] = 'yes';
		set_thfr();
		echo 'Option saved...';
		die();
	}
	
	
	// The rest: All global (non template specific) values first
	foreach( array_keys($_POST) as $key ) {
			if ( isset($_POST[$key]) AND $_POST[$key] != '' ) {
				#$thfr_css[$key] = $_POST[$key];
				// For Ajax text areas encoded with encodeURIComponent
				$thfr_css[$key] = rawurldecode($_POST[$key]);
			} else {
				if ( isset($thfr_css[$key]) ) unset($thfr_css[$key]);
			}
	}	


	
	$thfr_css['savedonce'] = 'yes';
	set_thfr();
	echo 'Option saved...';
	die();
}



// Save drag & drop settings for the given page template
function tf_save_dragdrop() {

	global $thfr_css;
	
	// which page template
	$cur_group = $_POST['selectorgroup'];

	// Drag Drop items:
	foreach(array('header', 'centerTop', 'centerBottom', 'footer', 'drop') as $dragdropitem) {
	
		// Clear all existing values:
		for ($i = 0 ; $i < 31 ; $i++){
			if (isset($thfr_css[$cur_group][$dragdropitem . '-' . $i])) 
				unset($thfr_css[$cur_group][$dragdropitem . '-' . $i]);
		}

		// Add new values 
		$i=0;
		while($_POST[$dragdropitem . '-' . $i] != '') {
			$thfr_css[$cur_group][$dragdropitem . '-' . $i] = $_POST[$dragdropitem . '-' . $i];
			$i++;
		}
	}

	$thfr_css['savedonce'] = 'yes';
	set_thfr();
	echo '<div style="background:yellow;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;color:black;padding:5px;font-size:14px;">Drag & Drop Positions Saved...</div>';
	die();
}


function tf_save_options() {

	global $thfr_css;

	$thfrpath = urldecode($_POST['thfrpath']);
	$thfruploadpath = urldecode($_POST['thfruploadpath']);

	$cur_sel = $_POST['tfcssselector'];
	$cur_group = $_POST['selectorgroup'];
	
	foreach (array_keys($_POST) as $key) {
		// exclude some form fields from regular CSS "selector{property:value}" processing
		if ( !in_array($key, array('themename', 'themeversion', 'themeuri', 'themedescription', 'themeauthor', 
		'themeauthoruri', 'themetags', 'headerimg-sleep', 'headerimg-fade', 'jquery-headerimg1', 'jquery-headerimg2', 
		'jquery-headerimg3', 'customcss', 'customjs', 'customjquery', 'customphp', 
		'WidgetArea-1', 'WidgetArea-1-2', 'WidgetArea-1-3', 'WidgetArea-2', 
		'WidgetArea-2-2', 'WidgetArea-3', 'WidgetArea-4', 'WidgetArea-5', 'WidgetArea-6', 
		'thfrpath', 'thfruploadpath', 'thfrpath', 'tfcssselector', 'selectorgroup', 
		'uniquewidth', 'sidebarsleft', 'sidebarsright', 'left-left-width', 'left-right-width', 'right-left-width', 
		'right-right-width', 'layout-width-type', 'layout-pixels', 'layout-percent', 'layout-minwidth', 
		'layout-maxwidth', 'action', '_ajax_nonce', 'exportCSS', 'exportJS', 'exportSettings', 'importFile',
		'index', 'home', 'single', 'page', 'archive', 'category', 'tag', 'author', 'date', 'search', '404')) AND 
		!preg_match("/^(header-|centerTop-|centerBottom-|footer-|drop-)/i",$key) ) {
		
			// If form field (value) is empty for a particular propery, delete the poperty:value pair from the options array if it exists.
			if ($_POST[$key] == '') { 
				if (isset($thfr_css[$cur_sel][$key])) unset($thfr_css[$cur_sel][$key]); 
				
			// If IE Corners are turned on, add this selector name to IE Corners array
			} else if ($key == 'iecorners') {
				if ($_POST[$key] == 'yes') { 
					if ( is_array($thfr_css['iecorners'])) {
						if (!in_array($cur_sel, $thfr_css['iecorners'])) $thfr_css['iecorners'][] = $cur_sel;
					} else $thfr_css['iecorners'][] = $cur_sel;
				} else {
					if ( is_array($thfr_css['iecorners'])) {
						// remove array item by value, by building new array
						$new_iecorners_array = '';
						foreach($thfr_css['iecorners'] as $item) {
						    if($item != $cur_sel) $new_iecorners_array[] = $item;
						}
						$thfr_css['iecorners'] = $new_iecorners_array;
					}
				}
				// If no selector is left in 'iecorners' array, remove it altogether
				if (empty($thfr_css['iecorners'])) unset($thfr_css['iecorners']);
			// Collect background options for later processing
			} else if (in_array($key, array('background-color', 'background-image', 'background-repeat', 
			'background-attachment', 'backgr-pos-type', 'background-position', 'background-position-x', 
			'background-position-x-unit', 'background-position-y', 'background-position-y-unit', ))) 
				$cur_backgr[$key] = urldecode( $_POST[$key] );
			else if (in_array($key, array('width', 'width-unit'))) $cur_width[$key] = urldecode( $_POST[$key] );
			else if (in_array($key, array('height', 'height-unit'))) $cur_height[$key] = urldecode( $_POST[$key] );
			else if (in_array($key, array('top', 'top-unit', 'right', 'right-unit', 'bottom', 'bottom-unit', 'left', 'left-unit'))) 
				$cur_pos[$key] = urldecode( $_POST[$key] );
			else $thfr_css[$cur_sel][$key] = urldecode( $_POST[$key] );
		}
	}
	// Avoid saving unnecessary background options:
	if ($cur_backgr['background-color'] != '' ) {
		$thfr_css[$cur_sel]['background-color'] = $cur_backgr['background-color'];
	}
	if ($cur_backgr['background-image'] != '' ) {
		$thfr_css[$cur_sel]['background-image'] = $cur_backgr['background-image'];
		$thfr_css[$cur_sel]['background-repeat'] = $cur_backgr['background-repeat'];
		$thfr_css[$cur_sel]['background-attachment'] = $cur_backgr['background-attachment'];
		if ($cur_backgr['backgr-pos-type'] == 'precise') {
		#if ($cur_backgr['background-position-x'] != '' OR $cur_backgr['background-position-y'] != '') {
			if ($cur_backgr['background-position-x'] != '') {
				$thfr_css[$cur_sel]['background-position-x'] = $cur_backgr['background-position-x'];
				$thfr_css[$cur_sel]['background-position-x-unit'] = $cur_backgr['background-position-x-unit'];
			} else {
				if (isset($thfr_css[$cur_sel]['background-position-x'])) unset($thfr_css[$cur_sel]['background-position-x']);
				if (isset($thfr_css[$cur_sel]['background-position-x-unit'])) unset($thfr_css[$cur_sel]['background-position-x-unit']);
			}
			if ($cur_backgr['background-position-y'] != '') {
				$thfr_css[$cur_sel]['background-position-y'] = $cur_backgr['background-position-y'];
				$thfr_css[$cur_sel]['background-position-y-unit'] = $cur_backgr['background-position-y-unit'];
			} else {
				if (isset($thfr_css[$cur_sel]['background-position-y'])) unset($thfr_css[$cur_sel]['background-position-y']);
				if (isset($thfr_css[$cur_sel]['background-position-y-unit'])) unset($thfr_css[$cur_sel]['background-position-y-unit']);
			}
		} else {
			$thfr_css[$cur_sel]['background-position'] = $cur_backgr['background-position'];
		}
	} else {
		unset(
			$thfr_css[$cur_sel]['background-position-x'], $thfr_css[$cur_sel]['background-position-x-unit'], 
			$thfr_css[$cur_sel]['background-position-y'], $thfr_css[$cur_sel]['background-position-y-unit'], 
			$thfr_css[$cur_sel]['background-attachment'], $thfr_css[$cur_sel]['background-position'], 
			$thfr_css[$cur_sel]['backgr-pos-type'], $thfr_css[$cur_sel]['background-repeat']);
	}
	// Avoid saving unnecessary width / height options.
	if ( $cur_height['height'] != '') { 
		$thfr_css[$cur_sel]['height'] = $cur_height['height'];
		$thfr_css[$cur_sel]['height-unit'] = $cur_height['height-unit'];
	} else {
		if (isset($thfr_css[$cur_sel]['height-unit'])) unset($thfr_css[$cur_sel]['height-unit']);
	}
	if ( $cur_width['width'] != '') { 
		$thfr_css[$cur_sel]['width'] = $cur_width['width'];
		$thfr_css[$cur_sel]['width-unit'] = $cur_width['width-unit'];
	} else {
		if (isset($thfr_css[$cur_sel]['width-unit'])) unset($thfr_css[$cur_sel]['width-unit']);
	}
	
	// Save top-unit, right-unit, bottom-unit, left-unit only if the corresponding width value is set
	if ( $cur_pos['top'] != '') { 
		$thfr_css[$cur_sel]['top'] = $cur_pos['top'];
		$thfr_css[$cur_sel]['top-unit'] = $cur_pos['top-unit'];
	} else {
		if (isset($thfr_css[$cur_sel]['top-unit'])) unset($thfr_css[$cur_sel]['top-unit']);
	}
	
	if ( $cur_pos['right'] != '') { 
		$thfr_css[$cur_sel]['right'] = $cur_pos['right'];
		$thfr_css[$cur_sel]['right-unit'] = $cur_pos['right-unit'];
	} else {
		if (isset($thfr_css[$cur_sel]['right-unit'])) unset($thfr_css[$cur_sel]['right-unit']);
	}
	
	if ( $cur_pos['bottom'] != '') { 
		$thfr_css[$cur_sel]['bottom'] = $cur_pos['bottom'];
		$thfr_css[$cur_sel]['bottom-unit'] = $cur_pos['bottom-unit'];
	} else {
		if (isset($thfr_css[$cur_sel]['bottom-unit'])) unset($thfr_css[$cur_sel]['bottom-unit']);
	}
	
	if ( $cur_pos['left'] != '') { 
		$thfr_css[$cur_sel]['left'] = $cur_pos['left'];
		$thfr_css[$cur_sel]['left-unit'] = $cur_pos['left-unit'];
	} else {
		if (isset($thfr_css[$cur_sel]['left-unit'])) unset($thfr_css[$cur_sel]['left-unit']);
	}

	foreach (array_keys($_POST) as $key) {	
		if ($_POST[$key] == '') { 
			if (isset($thfr_css[$cur_sel][$key])) {
				unset($thfr_css[$cur_sel][$key]); 
			}
		}
	}

	// Delete values for radio button that have been unchecked	
	foreach (array('margin-auto-or-value', 'margin-top-auto-or-value', 'margin-right-auto-or-value', 
			'margin-bottom-auto-or-value', 'margin-left-auto-or-value', 
			'height-auto-or-value', 'width-auto-or-value', 'topbottom', 'leftright') as $key) {
		if ($_POST[$key] == '') { 
			if (isset($thfr_css[$cur_sel][$key])) {
				unset($thfr_css[$cur_sel][$key]); 
			}
		}			
	}
	
	
	// Save the current selector, too, will be used to choose "last used selector" when user returns to work on the CSS on e.g. the next day
	if ($_POST['tfcssselector'] != 'undefined') {
		$thfr_css['tfcssselector'] = $_POST['tfcssselector'];
	}
	if ($_POST['selectorgroup'] != 'undefined') {
		$thfr_css['selectorgroup'] = $_POST['selectorgroup'];
	}

	$thfr_css['savedonce'] = 'yes';
	set_thfr();
	echo 'Option saved...';
	die();

}
?>
<?php tf_save_options(); ?>