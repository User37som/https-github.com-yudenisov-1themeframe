<?php function tf_create_css_code($sel, $preview_yesno) {

	global $thfr_css;
	// do nothing if no CSS saved yet for this selector
	if($thfr_css[$sel] == '') return;
	
	$string = ''; 
	
	$border = array();
	$margin = array();
	$padding = array();
	$backgr = array();
	$topbottom = array();
	$leftright = array();
	$width = array();
	$height = array();
	$fontfamily = array();
	
	
	// build groups of CSS properties such as "margin", "borders", etc, to create a shorthand CSS rule llater, and to 
	foreach ( $thfr_css[$sel] as $key => $value) {
		if (in_array($key, array('border-style', 'border-width', 'border-color', 
		'border-top-style', 'border-top-width', 'border-top-color',
		'border-right-style', 'border-right-width', 'border-right-color',
		'border-bottom-style', 'border-bottom-width', 'border-bottom-color',
		'border-left-style', 'border-left-width', 'border-left-color'))) 
			$border[$key] = $value;
		elseif ($key == 'border-radius') 
			$string .= "\n\t-moz-border-radius: " . $value . ";\n\t-webkit-border-radius: " . 
			$value . ";\n\tborder-radius: " . $value . ';'; 
		elseif ($key == 'border-top-right-radius') 
			$string .= "\n\t-moz-border-radius-topright: " . $value . ";\n\t-webkit-border-top-right-radius: " . 
			$value . ";\n\tborder-top-right-radius: " . $value . ';'; 
		elseif ($key == 'border-bottom-right-radius') 
			$string .= "\n\t-moz-border-radius-bottomright: " . $value . ";\n\t-webkit-border-bottom-right-radius: " . 
			$value . ";\n\tborder-bottom-right-radius: " . $value . ';'; 
		elseif ($key == 'border-bottom-left-radius') 
			$string .= "\n\t-moz-border-radius-bottomleft: " . $value . ";\n\t-webkit-border-bottom-left-radius: " . 
			$value . ";\n\tborder-bottom-left-radius: " . $value . ';'; 
		elseif ($key == 'border-top-left-radius') 
			$string .= "\n\t-moz-border-radius-topleft: " . $value . ";\n\t-webkit-border-top-left-radius: " . 
			$value . ";\n\tborder-top-left-radius: " . $value . ';'; 
		elseif ($key == 'opacity') 
			$string .= 'opacity:.' . $value . ';-moz-opacity:.' . 
			$value . ';filter:alpha(opacity=' . $value . ');';
		elseif (in_array($key, array('background-color', 'background-image', 'background-repeat', 
			'background-attachment', 'background-position', 'background-position-x', 'background-position-x-unit', 
			'background-position-y', 'background-position-y-unit', 'backgr-pos-type')))
				$backgr[$key] = $value;	
		elseif (in_array($key, array('height', 'height-unit', 'height-auto-or-value'))) $height[$key] = $value;
		elseif (in_array($key, array('width', 'width-unit', 'width-auto-or-value'))) $width[$key] = $value;		
		elseif (in_array($key, array('top', 'top-unit', 'bottom', 'bottom-unit', 'topbottom',))) $topbottom[$key] = $value;	
		elseif (in_array($key, array('right', 'right-unit', 'left', 'left-unit', 'leftright'))) $leftright[$key] = $value;				
		elseif (in_array($key, array('margin', 'margin-top', 'margin-right', 'margin-bottom', 'margin-left', 'margin-auto-or-value', 
			'margin-top-auto-or-value', 'margin-right-auto-or-value', 'margin-bottom-auto-or-value', 'margin-left-auto-or-value')))
				$margin[$key] = $value;	
		elseif (in_array($key, array('padding', 'padding-top', 'padding-right', 'padding-bottom', 'padding-left')))
				$padding[$key] = $value;
		elseif (in_array($key, array('font-family', 'font-family2', 'generic-family')))
				$fontfamily[$key] = $value;
		else $string .= "\n\t" . $key . ':' . $value . ';';
	}
	
	if (!empty($border)) $string .= tf_create_css_code_border($border); // borders
	if (!empty($margin)) $string .= tf_create_css_code_margin($margin); // margin
	if (!empty($padding)) $string .= tf_create_css_code_padding($padding); // padding
	if (!empty($backgr)) $string .= tf_create_css_code_background($backgr); // background
	if (!empty($topbottom)) $string .= tf_create_css_code_topbottom($topbottom); // top/bottom
	if (!empty($leftright)) $string .= tf_create_css_code_leftright($leftright); // left/right
	if (!empty($width)) $string .= tf_create_css_code_width($width); // width
	if (!empty($height)) $string .= tf_create_css_code_height($height); // height
	if (!empty($fontfamily)) $string .= tf_create_css_code_fontfamily($fontfamily); // font-family
	
	if ($string == '') return;

	if ($preview_yesno == 1) {
		return "#tf-preview div.tf-preview-container " . $sel . " {" . $string . "\n}\n";
	} else {
		// special treatment for hover A and LI
		if ( strpos($sel,'li.hover') !== FALSE ) {
			$sel = str_replace('li.hover', 'li:hover', $sel) . ', ' . str_replace('li.hover', 'li.sfhover', $sel) 
		#	. ', ' . str_replace('li.hover', 'li.current', $sel);
		# Since Beta 6:
			. ', ' . str_replace('li.hover', 'li.current_page_item', $sel) . ', ' . str_replace('li.hover', 'li.current-cat', $sel);
		}
		$sel = str_replace(array('a.hover', 'a.link', 'a.visited'), array('a:hover', 'a:link', 'a:visited'), $sel);
		// In the preview BODY is a DIV
		// special case: is_404 and 404.php but default WP body_class is 'error404' instead of 404
		/*
		$sel = str_replace(array('div.index', 'div.home', 'div.single', 'div.page', 'div.archive', 
			'div.category', 'div.tag', 'div.author', 'div.date', 'div.search', 'div.404'), 
			array('body', 'body.home', 'body.single', 'body.page', 'body.archive', 
			'body.category', 'body.tag', 'body.author', 'body.date', 'body.search', 'body.error404'), 
			$sel);
		*/
		/*
		$sel = str_replace(array('div.index ', 'div.home ', 'div.single ', 'div.page ', 'div.archive ', 
			'div.category ', 'div.tag ', 'div.author ', 'div.date ', 'div.search ', 'div.404 '), 
			array('body ', 'body.home ', 'body.single ', 'body.page ', 'body.archive ', 
			'body.category ', 'body.tag ', 'body.author ', 'body.date ', 'body.search ', 'body.error404 '), 
			$sel);
		*/
		/*
		$sel = preg_replace(array('/^div.index$/i', '/^div.home$/i', '/^div.single$/i', '/^div.page$/i', '/^div.archive$/i', 
			'/^div.category$/i', '/^div.tag$/i', '/^div.author$/i', '/^div.date$/i', '/^div.search$/i', '/^div.404$/i'), 
			array('body', 'body.home', 'body.single', 'body.page', 'body.archive', 
			'body.category', 'body.tag', 'body.author', 'body.date', 'body.search', 'body.error404'), 
			$sel);
		*/
		$sel = preg_replace(array('/\bdiv\.index\b/i', '/\bdiv\.home\b/i', '/\bdiv\.single\b/i', '/\bdiv\.page\b/i', 
			'/\bdiv\.archive\b/i', '/\bdiv\.category\b/i', '/\bdiv\.tag\b/i', '/\bdiv\.author\b/i', 
			'/\bdiv\.date\b/i', '/\bdiv\.search\b/i', '/\bdiv\.404\b/i'), 
			array('body', 'body.home', 'body.single', 'body.page', 
			'body.archive', 'body.category', 'body.tag', 'body.author', 
			'body.date', 'body.search', 'body.error404'), 
			$sel);
		// In the preview the menus have classes so they can be used multiple times (on multiple preview tabs) there. For the front end CSS the menus get ID's
		$sel = str_replace(array('div.hormenu', 'ul.nav', 'div.hormenu2', 'ul.nav2'), array('div#hormenu', 'ul#nav', 'div#hormenu2', 'ul#nav2'), $sel);
		return $sel . " {" . $string . "\n}\n";
	}
}

/*
function tf_create_css_code_border($border) {
	if (empty($border)) return;
	$string = '';
	if ($border['border-style'] != '' AND $border['border-width'] != '' AND $border['border-color'] != '') 
		$string .= 'border: ' . $border['border-style'] . ' ' . $border['border-width'] . ' ' . $border['border-color'] . ';';
	if ($border['border-top-style'] != '' OR $border['border-top-width'] != '' OR $border['border-top-color'] != '') 
		$string .= 'border-top: ' . 
			($border['border-top-style'] != '' ? $border['border-top-style'] : $border['border-style']) . ' ' .
			($border['border-top-width'] != '' ? $border['border-top-width'] : $border['border-width']) . ' ' .
			($border['border-top-color'] != '' ? $border['border-top-color'] : $border['border-color']) . ';';
	if ($border['border-right-style'] != '' OR $border['border-right-width'] != '' OR $border['border-right-color'] != '') 
		$string .= 'border-right: ' . 
			($border['border-right-style'] != '' ? $border['border-right-style'] : $border['border-style']) . ' ' .
			($border['border-right-width'] != '' ? $border['border-right-width'] : $border['border-width']) . ' ' .
			($border['border-right-color'] != '' ? $border['border-right-color'] : $border['border-color']) . ';';
	if ($border['border-bottom-style'] != '' OR $border['border-bottom-width'] != '' OR $border['border-bottom-color'] != '') 
		$string .= 'border-bottom: ' . 
			($border['border-bottom-style'] != '' ? $border['border-bottom-style'] : $border['border-style']) . ' ' .
			($border['border-bottom-width'] != '' ? $border['border-bottom-width'] : $border['border-width']) . ' ' .
			($border['border-bottom-color'] != '' ? $border['border-bottom-color'] : $border['border-color']) . ';';
	if ($border['border-left-style'] != '' OR $border['border-left-width'] != '' OR $border['border-left-color'] != '') 
		$string .= 'border-left: ' . 
			($border['border-left-style'] != '' ? $border['border-left-style'] : $border['border-style']) . ' ' .
			($border['border-left-width'] != '' ? $border['border-left-width'] : $border['border-width']) . ' ' .
			($border['border-left-color'] != '' ? $border['border-left-color'] : $border['border-color']) . ';';
	if ( $string != '') $string = "\n\t" . $string;
	return $string ;
}*/

function tf_create_css_code_border($border) {
	if (empty($border)) return;
	$string = '';
	if ( isset($border['border-style']) AND isset($border['border-width']) AND isset($border['border-color']) ) 
		$string .= 'border: ' . $border['border-style'] . ' ' . $border['border-width'] . ' ' . $border['border-color'] . ';';
	if ( isset($border['border-top-style']) OR isset($border['border-top-width']) OR isset($border['border-top-color']) ) 
		$string .= 'border-top: ' . 
			( isset($border['border-top-style']) ? $border['border-top-style'] : $border['border-style']) . ' ' .
			( isset($border['border-top-width']) ? $border['border-top-width'] : $border['border-width']) . ' ' .
			( isset($border['border-top-color']) ? $border['border-top-color'] : $border['border-color']) . ';';
	if ( isset($border['border-right-style']) OR isset($border['border-right-width']) OR isset($border['border-right-color']) ) 
		$string .= 'border-right: ' . 
			( isset($border['border-right-style']) ? $border['border-right-style'] : $border['border-style']) . ' ' .
			( isset($border['border-right-width']) ? $border['border-right-width'] : $border['border-width']) . ' ' .
			( isset($border['border-right-color']) ? $border['border-right-color'] : $border['border-color']) . ';';
	if ( isset($border['border-bottom-style']) OR isset($border['border-bottom-width']) OR isset($border['border-bottom-color']) ) 
		$string .= 'border-bottom: ' . 
			( isset($border['border-bottom-style']) ? $border['border-bottom-style'] : $border['border-style']) . ' ' .
			( isset($border['border-bottom-width']) ? $border['border-bottom-width'] : $border['border-width']) . ' ' .
			( isset($border['border-bottom-color']) ? $border['border-bottom-color'] : $border['border-color']) . ';';
	if ( isset($border['border-left-style']) OR isset($border['border-left-width']) OR isset($border['border-left-color']) ) 
		$string .= 'border-left: ' . 
			( isset($border['border-left-style']) ? $border['border-left-style'] : $border['border-style']) . ' ' .
			( isset($border['border-left-width']) ? $border['border-left-width'] : $border['border-width']) . ' ' .
			( isset($border['border-left-color']) ? $border['border-left-color'] : $border['border-color']) . ';';
	if ( $string != '') $string = "\n\t" . $string;
	return $string ;
}	

	

function tf_create_css_code_margin($margin) {
	if (empty($margin)) return;
	$string = '';
	
	if ( isset($margin['margin-auto-or-value']) ) {
		if ($margin['margin-auto-or-value'] == 'auto') $marginDefault = 'auto';
		else $marginDefault = $margin['margin'];
	} else {
		$marginDefault = '';
	}

	if ( isset($margin['margin-top-auto-or-value']) ) {
		if ($margin['margin-top-auto-or-value'] == 'auto') $marginTop = 'auto';
		else $marginTop = $margin['margin-top'];
	} else {
		$marginTop = $marginDefault;
	}

	if ( isset($margin['margin-right-auto-or-value']) ) {
		if ($margin['margin-right-auto-or-value'] == 'auto') $marginRight = 'auto';
		else $marginRight = $margin['margin-right'];
	} else {
		$marginRight = $marginDefault;
	}

	if ( isset($margin['margin-bottom-auto-or-value']) ) {
		if ($margin['margin-bottom-auto-or-value'] == 'auto') $marginBottom = 'auto';
		else $marginBottom = $margin['margin-bottom'];
	} else { 
		$marginBottom = $marginDefault;
	}

	if ( isset($margin['margin-left-auto-or-value']) ) {
		if ($margin['margin-left-auto-or-value'] == 'auto') $marginLeft = 'auto';
		else $marginLeft = $margin['margin-left'];
	} else {
		$marginLeft = $marginDefault;
	}
	
	if ($marginTop == $marginRight AND $marginTop == $marginBottom AND $marginTop == $marginLeft) {
		if ($marginTop != '') $string = 'margin:' . $marginTop . ';';
		else $string = '';
	} else if ($marginTop != '' AND $marginRight != '' AND $marginBottom != '' AND $marginLeft != '') {
		if ( $marginTop == $marginBottom AND $marginLeft == $marginRight ) 
			$string = 'margin:' . $marginTop . ' ' . $marginRight . ';'; 
		else $string = 'margin:' . $marginTop . ' ' . $marginRight . ' ' . $marginBottom . ' ' . $marginLeft . ';'; 
	} else {
		if ($marginTop != '') $string = 'margin-top:' . $marginTop . ';'; 
		if ($marginRight != '') $string .= 'margin-right:' . $marginRight . ';'; 
		if ($marginBottom != '') $string .= 'margin-bottom:' . $marginBottom . ';'; 
		if ($marginLeft != '') $string .= 'margin-left:' . $marginLeft . ';'; 	
	}	
	if ( $string != '') $string = "\n\t" . $string;
	return $string ;
}


function tf_create_css_code_padding($padding) {
	if (empty($padding)) return;
	$string = '';	
	$paddingDefault = ( $padding['padding'] == '' ? '' : $padding['padding'] );
	$paddingTop = ( $padding['padding-top'] == '' ? $paddingDefault : $padding['padding-top'] );
	$paddingRight = ( $padding['padding-right'] == '' ? $paddingDefault : $padding['padding-right'] );
	$paddingBottom = ( $padding['padding-bottom'] == '' ? $paddingDefault : $padding['padding-bottom'] );
	$paddingLeft = ( $padding['padding-left'] == '' ? $paddingDefault : $padding['padding-left'] );
	if ($paddingTop == $paddingRight AND $paddingTop == $paddingBottom AND $paddingTop == $paddingLeft) {
		if ($paddingTop != '') $string = 'padding:' . $paddingTop . ';';
		else $string = '';
	} else if ($paddingTop != '' AND $paddingRight != '' AND $paddingBottom != '' AND $paddingLeft != '') {
		if ( $paddingTop == $paddingBottom AND $paddingLeft == $paddingRight ) 
			$string = 'padding: ' . $paddingTop . ' ' . $paddingRight . ';'; 
		else $string = 'padding: ' . $paddingTop . ' ' . $paddingRight . ' ' . $paddingBottom . ' ' . $paddingLeft . ';'; 
	} else {
		if ($paddingTop != '') $string = 'padding-top: ' . $paddingTop . ';'; 
		if ($paddingRight != '') $string .= 'padding-right: ' . $paddingRight . ';'; 
		if ($paddingBottom != '') $string .= 'padding-bottom: ' . $paddingBottom . ';'; 
		if ($paddingLeft != '') $string .= 'padding-left: ' . $paddingLeft . ';'; 		
	}
	if ( $string != '') $string = "\n\t" . $string;
	return $string;
}


function tf_create_css_code_background($backgr) {
	if (empty($backgr)) return;
	$string = '';

	if ( $backgr['background-image'] != '' OR $backgr['background-color'] != '') {
		$string .= 'background: ' . ($backgr['background-color'] != '' ? $backgr['background-color'] : 'transparent');
			if ( $backgr['background-image'] != '') {
				$string .= ' url("' . $backgr['background-image'] . '")' .
					' ' . $backgr['background-repeat'] .
					' ' . $backgr['background-attachment'] . ' ';
				if ($backgr['background-position-x'] != '' OR $backgr['background-position-y'] != '') {
					$string .= ($backgr['background-position-x'] != '' ? $backgr['background-position-x'] . 
					$backgr['background-position-x-unit'] : '') . ' ' . 
					($backgr['background-position-y'] != '' ? $backgr['background-position-y'] . 
					$backgr['background-position-y-unit'] : '');
				} else {
					$string .= $backgr['background-position'];
				}
			}
		$string .= ';';
	}
	if ( $string != '') $string = "\n\t" . $string; 
	return $string;
}


function tf_create_css_code_topbottom($topbottom) {
	if (empty($topbottom)) return;	
	$string = '';
	switch($topbottom['topbottom']) {
		case 'topauto':		$string = "top: auto;"; break;
		case 'bottomauto':	$string = "bottom: auto;"; break;
		case 'topvalue':	$string = "top: " . $topbottom['top'] . $topbottom['top-unit'] . ';'; break;
		case 'bottomvalue':	$string = "bottom: " . $topbottom['bottom'] . $topbottom['bottom-unit'] . ';'; break;	
	}
	if ( $string != '') $string = "\n\t" . $string;
	return $string;
}


function tf_create_css_code_leftright($leftright) {
	if (empty($leftright)) return;
	$string = '';
	switch($leftright['leftright']) {
		case 'leftauto':	$string = "left: auto;"; break;
		case 'rightauto':	$string = "right: auto;"; break;
		case 'leftvalue':	$string = "left: " . $leftright['left'] . $leftright['left-unit'] . ';'; break;
		case 'rightvalue':	$string = "right: " . $leftright['right'] . $leftright['right-unit'] . ';'; break;
	}
	if ( $string != '') $string = "\n\t" . $string;
	return $string;
}


function tf_create_css_code_height($height) {
	if (empty($height)) return;
	$string = '';
	if ($height['height-auto-or-value'] == 'auto') $string .= 'height:auto;';
	else if ($height['height-auto-or-value'] == 'value' AND $height['height'] != '') 
		$string .= 'height:' . $height['height'] . $height['height-unit'] . ';';
	if ( $string != '') $string = "\n\t" . $string;
	return $string;
}
	
	
function tf_create_css_code_width($width) {
	if (empty($width)) return;
	$string = '';
	if ($width['width-auto-or-value'] == 'auto') $string .= 'width:auto;';
	else if ($width['width-auto-or-value'] == 'value' AND $width['width'] != '') 
		$string .= 'width:' . $width['width'] . $width['width-unit'] . ';';
	if ( $string != '') $string = "\n\t" . $string;
	return $string;
}


function tf_create_css_code_fontfamily($fontfamily) {
	if (empty($fontfamily)) return;
	$string = '';
	if ($fontfamily['font-family'] != '') $font_array[] = wrap_if_space($fontfamily['font-family']);
	if ($fontfamily['font-family2'] != '') $font_array[] = wrap_if_space($fontfamily['font-family2']);
	if ($fontfamily['generic-family'] != '') $font_array[] = wrap_if_space($fontfamily['generic-family']);
	if(!empty($font_array)) $string = "\n\tfont-family: " . implode(',', $font_array) . ';';
	return $string;
}	


function wrap_if_space($string) {
	if (strpos($string,' ') !== FALSE ) return '"' . $string . '"';
	else return $string;
}		
		
?>