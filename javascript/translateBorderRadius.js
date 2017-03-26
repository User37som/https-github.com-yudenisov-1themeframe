function translateBorderRadius(property) {
	if (property == 'border-radius') {
		if (jQuery.browser.mozilla) { property = '-moz-border-radius'; }
		else if (jQuery.browser.safari) { property = '-webkit-border-radius'; }
	}
	else if (property == 'border-top-right-radius') {
		if (jQuery.browser.mozilla) { property = '-moz-border-radius-topright'; }
		else if (jQuery.browser.safari) { property = '-webkit-border-top-right-radius'; }		
	}
	else if (property == 'border-bottom-right-radius') {
		if (jQuery.browser.mozilla) { property = '-moz-border-radius-bottomright'; }
		else if (jQuery.browser.safari) { property = '-webkit-border-bottom-right-radius'; }	
	}
	else if (property == 'border-bottom-left-radius') {
		if (jQuery.browser.mozilla) { property = '-moz-border-radius-bottomleft'; }
		else if (jQuery.browser.safari) { property = '-webkit-border-bottom-left-radius'; }		
	}
	else if (property == 'border-top-left-radius') {
		if (jQuery.browser.mozilla) { property = '-moz-border-radius-topleft'; }
		else if (jQuery.browser.safari) { property = '-webkit-border-top-left-radius'; }	
	}
	return property;
}
