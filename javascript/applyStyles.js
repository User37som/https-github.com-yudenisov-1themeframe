function applyStyles(selector, property, value) { 
	
	var cssObject = '';
	var cssObject = Object();
	
	if (jQuery.inArray(property,borders) != -1) {
		var cssObject = createCssObject('border');
	} else if (jQuery.inArray(property,margins) != -1) {
		var cssObject = createCssObject('margin');
	} else if (jQuery.inArray(property,paddings) != -1) {
		var cssObject = createCssObject('padding');
	} else if (jQuery.inArray(property,corners) != -1) {
		var cssObject = createCssObject('corner');
	} else if ( jQuery.inArray(property,backgroundAll) != -1 ) {
		var cssObject = createCssObject('backgroundAll');
	} else if (jQuery.inArray(property,widths) != -1) {
		var cssObject = createCssObject('width');
	} else if (jQuery.inArray(property,heights) != -1) {
		var cssObject = createCssObject('height');
	} else if (jQuery.inArray(property,topbottom) != -1) {
		var cssObject = createCssObject('topbottom');
	} else if (jQuery.inArray(property,leftright) != -1) {
		var cssObject = createCssObject('leftright');
	} else if (jQuery.inArray(property,fonts) != -1) {
		var cssObject = createCssObject('fonts');
	} else if (property == 'opacity') {
		if ( value == undefined || value == '' ) { 
			if ( jQuery.browser.msie ) { property = 'filter'; value = 'alpha(opacity=100)'; } 
			else if ( jQuery.browser.mozilla ) { property = '-moz-opacity'; value = '1'; } 
			else { value = 1; }
		} else {
			if ( jQuery.browser.msie ) { property = 'filter'; value = 'alpha(opacity=' + value + ')'; } 
			else if ( jQuery.browser.mozilla ) { property = '-moz-opacity'; value = '.' + value; } 
			else { value = '.' + value; }			
		}
		cssObject[property] = value;
	} else if ( property == 'font-weight' || property == 'font-style' || property == 'font-variant'  
		|| property == 'line-height' || property == 'letter-spacing' || property == 'word-spacing' ) {
		if ( value == undefined || value == '' ) { cssObject[property] = 'normal'; } 
		else { cssObject[property] = value; }
	} else if ( property == 'font-size' ) {
		if ( value == undefined || value == '' ) { cssObject[property] = 'medium'; } 
		else { cssObject[property] = value; }	
	} else if ( property == 'color' ) {
		if ( value == undefined || value == '' ) { cssObject[property] = 'inherit'; } 
		else { cssObject[property] = value; }	
	} else if ( property == 'text-indent' ) {
		if ( value == undefined || value == '' ) { cssObject[property] = '0px'; } 
		else { cssObject[property] = value; }	
	} else if ( property == 'text-align' ) {
		if ( value == undefined || value == '' ) { cssObject[property] = 'left';} 
		else { cssObject[property] = value; }		
	} else if ( property == 'text-decoration' || property == 'text-transform' || property == 'clear' || property == 'float' ) {
		if ( value == undefined || value == '' ) { cssObject[property] = 'none'; } 
		else { cssObject[property] = value; }		
	} else if (property == 'vertical-align') {
		if ( value == undefined || value == '' ) { cssObject[property] = 'baseline'; } 
		else { cssObject[property] = value; }
	} else if (property == 'position') {
		if ( value == undefined || value == '' ) { cssObject[property] = 'static'; }
		else { cssObject[property] = value; }
	} else if (property == 'list-style-type') {
		if ( value == undefined || value == '' ) { cssObject[property] = 'inherit'; }
		else { cssObject[property] = value; }
	} else {
			cssObject[property] = value; 
	}
	
	jQuery(selector).css(cssObject);
	if ( property != 'tfcssselector' ) { jQuery('input#themeframe-form-save, input#themeframe-form-save2').addClass('highlight-save'); }
}
