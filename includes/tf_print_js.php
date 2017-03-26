<?php 
function tf_print_js() {
	global $thfr_css;
	
	if ( is_array($thfr_css['iecorners']) AND !empty($thfr_css['iecorners'])) { 
		$string = include (THFRPATH . 'templates/javascript/DD_roundies_0.0.2a.js');
		foreach ( $thfr_css['iecorners'] as $sel ) {
			if ( $thfr_css[$sel]['border-radius'] != '' OR $thfr_css[$sel]['border-top-left-radius'] != '' OR 
			$thfr_css[$sel]['border-top-right-radius'] != '' OR $thfr_css[$sel]['border-bottom-right-radius'] != '' OR 
			$thfr_css[$sel]['border-bottom-left-radius'] != '') {
				$string .= "\nDD_roundies.addRule('" . $sel . "', '" . 
				($thfr_css[$sel]['border-top-left-radius'] != '' ? 
				$thfr_css[$sel]['border-top-left-radius'] : $thfr_css[$sel]['border-radius']) . ' ' .
				($thfr_css[$sel]['border-top-right-radius'] != '' ? 
				$thfr_css[$sel]['border-top-right-radius'] : $thfr_css[$sel]['border-radius']) . ' ' .
				($thfr_css[$sel]['border-bottom-right-radius'] != '' ? 
				$thfr_css[$sel]['border-bottom-left-radius'] : $thfr_css[$sel]['border-radius']) . ' ' .
				($thfr_css[$sel]['border-bottom-left-radius'] != '' ? 
				$thfr_css[$sel]['border-bottom-right-radius'] : $thfr_css[$sel]['border-radius']) . 	
				"');";
			}
		} 
	}
	
	if ( $thfr_css['headerimages'] != '' ) 
		$string .= include (THFRPATH . 'templates/javascript/jquery.cross-slide.js');
		
	if ($thfr_css['customjs'] != '') { 
		$string .= "\n\n" . $thfr_css['customjs'] . "\n\n"; 
	}
	
	$string .= "\njQuery(document).ready(function(){" . "\n";
	$string .= '/* sfhover for LI:HOVER support in IE6: */
	if (jQuery.browser.msie && /MSIE 6\.0/i.test(window.navigator.userAgent) && !/MSIE 7\.0/i.test(window.navigator.userAgent) && !/MSIE 8\.0/i.test(window.navigator.userAgent)) {
		jQuery("ul li").
			hover( function() {
					jQuery(this).addClass("sfhover")
				}, 
				function() {
					jQuery(this).removeClass("sfhover")
				} 
		); 
	}';
	
	if ($thfr_css['customjquery'] != '') {
		$string .= "\n\n" . $thfr_css['customjquery'] . "\n\n";
	}
	
	if ($thfr_css['headerimages'] != '') {
		$string .= "\n\n" . $thfr_css['headerimages'] . "\n\n";
	}
	
	$string .= "\n});";
	return $string;	
}
?>