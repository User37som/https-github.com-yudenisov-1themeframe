function createCssObject(property) {
	var thiscssObject = '';
	var thiscssObject = Object();
	
	if (property == 'border') {
		var borderTopWidth = "0px";
		var borderRightWidth = "0px";
		var borderBottomWidth = "0px";
		var borderLeftWidth = "0px";
		var borderWidth = "0px";
		var borderTopStyle = "none";
		var borderRightStyle = "none";
		var borderBottomStyle = "none";
		var borderLeftStyle = "none";
		var borderStyle = "none";
		var borderTopColor = "transparent";
		var borderRightColor = "transparent";
		var borderBottomColor = "transparent";
		var borderLeftColor = "transparent";
		var borderColor = "transparent";
		
		var borderTopWidth = jQuery('input#border-top-width').val();
		var borderRightWidth = jQuery('input#border-right-width').val();
		var borderBottomWidth = jQuery('input#border-bottom-width').val();
		var borderLeftWidth = jQuery('input#border-left-width').val();
		var borderWidth = jQuery('input#border-width').val();
		if (borderWidth == '') { borderWidth = '0px'; }
		if (borderTopWidth == '') { borderTopWidth = borderWidth; }
		if (borderRightWidth == '') { borderRightWidth = borderWidth; }
		if (borderBottomWidth == '') { borderBottomWidth = borderWidth; }
		if (borderLeftWidth == '') { borderLeftWidth = borderWidth; }
		
		var borderTopStyle = jQuery('select#border-top-style').val();
		var borderRightStyle = jQuery('select#border-right-style').val();
		var borderBottomStyle = jQuery('select#border-bottom-style').val();
		var borderLeftStyle = jQuery('select#border-left-style').val();
		var borderStyle = jQuery('select#border-style').val();
		if (borderStyle == '' ) { borderStyle == 'none'; }
		if (borderTopStyle == '' ) { borderTopStyle = borderStyle; }
		if (borderRightStyle == '' ) { borderRightStyle = borderStyle; }
		if (borderBottomStyle == '' ) { borderBottomStyle = borderStyle; }
		if (borderLeftStyle == '' ) { borderLeftStyle = borderStyle; }
		
		var borderTopColor = jQuery('input#border-top-color').val();
		var borderRightColor = jQuery('input#border-right-color').val();
		var borderBottomColor = jQuery('input#border-bottom-color').val();
		var borderLeftColor = jQuery('input#border-left-color').val();
		var borderColor = jQuery('input#border-color').val();		
		if (borderColor == '') { borderColor == ''; }
		if (borderTopColor == '') { borderTopColor = borderColor; }
		if (borderRightColor == '') { borderRightColor = borderColor; }
		if (borderBottomColor == '') { borderBottomColor = borderColor; }
		if (borderLeftColor == '') { borderLeftColor = borderColor; }

		thiscssObject['border-top-width'] = borderTopWidth;
		thiscssObject['border-right-width'] = borderRightWidth;
		thiscssObject['border-bottom-width'] = borderBottomWidth;
		thiscssObject['border-left-width'] = borderLeftWidth;
		thiscssObject['border-top-style'] = borderTopStyle;
		thiscssObject['border-right-style'] = borderRightStyle;
		thiscssObject['border-bottom-style'] = borderBottomStyle;
		thiscssObject['border-left-style'] = borderLeftStyle;
		thiscssObject['border-top-color'] = borderTopColor;
		thiscssObject['border-right-color'] = borderRightColor;
		thiscssObject['border-bottom-color'] = borderBottomColor;
		thiscssObject['border-left-color'] = borderLeftColor;

	} else if (property == 'margin') {
		
		if (jQuery('input#margin-auto-or-value-value').attr('checked')) {
			var margin = jQuery('input#margin').val();
		} else if (jQuery('input#margin-auto-or-value-auto').attr('checked')) {
			var margin = "auto";
		} else {
			// This should "inherit" the browsers default margin
			var margin = "inherit";
		}
		
		if (jQuery('input#margin-top-auto-or-value-value').attr('checked')) {
			thiscssObject['margin-top'] = jQuery('input#margin-top').val();
		} else if (jQuery('input#margin-top-auto-or-value-auto').attr('checked')) {
			thiscssObject['margin-top'] = "auto";
		} else {
			thiscssObject['margin-top'] = margin;
		}
		
		if (jQuery('input#margin-right-auto-or-value-value').attr('checked')) {
			thiscssObject['margin-right'] = jQuery('input#margin-right').val();
		} else if (jQuery('input#margin-right-auto-or-value-auto').attr('checked')) {
			thiscssObject['margin-right'] = "auto";
		} else {
			thiscssObject['margin-right'] = margin;		
		}
		
		if (jQuery('input#margin-bottom-auto-or-value-value').attr('checked')) {
			thiscssObject['margin-bottom'] = jQuery('input#margin-bottom').val();
		} else if (jQuery('input#margin-bottom-auto-or-value-auto').attr('checked')) {
			thiscssObject['margin-bottom'] = "auto";
		} else {
			thiscssObject['margin-bottom'] = margin;				
		}
		
		if (jQuery('input#margin-left-auto-or-value-value').attr('checked')) {
			thiscssObject['margin-left'] = jQuery('input#margin-left').val();
		} else if (jQuery('input#margin-left-auto-or-value-auto').attr('checked')) {
			thiscssObject['margin-left'] = "auto";
		} else {
			thiscssObject['margin-left'] = margin;				
		}

	} else if (property == 'padding') {
		var paddingTop = '';
		var paddingRight = '';
		var paddingBottom = '';
		var paddingLeft = '';
		var padding = "";
		
		var paddingTop = jQuery('input#padding-top').val();
		var paddingRight = jQuery('input#padding-right').val();
		var paddingBottom = jQuery('input#padding-bottom').val();
		var paddingLeft = jQuery('input#padding-left').val();
		var padding = jQuery('input#padding').val();
		if (padding == '') { padding = "0px"; }
		if (paddingTop == '') { paddingTop = padding; }
		if (paddingRight == '') { paddingRight = padding; }
		if (paddingBottom == '') { paddingBottom = padding; }
		if (paddingLeft == '') { paddingLeft = padding; }
		
		thiscssObject['padding-top'] = paddingTop;
		thiscssObject['padding-right'] = paddingRight;
		thiscssObject['padding-bottom'] = paddingBottom;
		thiscssObject['padding-left'] = paddingLeft;
		
	} else if (property == 'corner') {
		var borderTopRightRadius = '';
		var borderBottomRightRadius = '';
		var borderBottomLeftRadius = '';
		var borderTopLeftRadius = '';
		var borderRadius = "";
		
		var borderTopRightRadius = jQuery('input#border-top-right-radius').val();
		var borderBottomRightRadius = jQuery('input#border-bottom-right-radius').val();
		var borderBottomLeftRadius = jQuery('input#border-bottom-left-radius').val();
		var borderTopLeftRadius = jQuery('input#border-top-left-radius').val();
		var borderRadius = jQuery('input#border-radius').val();
		if (borderRadius == '') { borderRadius = "0px"; }
		if (borderTopRightRadius == '') { borderTopRightRadius = borderRadius; }
		if (borderBottomRightRadius == '') { borderBottomRightRadius = borderRadius; }
		if (borderBottomLeftRadius == '') { borderBottomLeftRadius = borderRadius; }
		if (borderTopLeftRadius == '') { borderTopLeftRadius = borderRadius; }
		
		var borderTRName = translateBorderRadius('border-top-right-radius');
		var borderBRName = translateBorderRadius('border-bottom-right-radius');
		var borderBLName = translateBorderRadius('border-bottom-left-radius');
		var borderTLName = translateBorderRadius('border-top-left-radius');
		
		thiscssObject[borderTRName] = borderTopRightRadius;
		thiscssObject[borderBRName] = borderBottomRightRadius;
		thiscssObject[borderBLName] = borderBottomLeftRadius;
		thiscssObject[borderTLName] = borderTopLeftRadius;
	
	} else if (property == 'backgroundAll') {
		var backgrString = '';
		if (jQuery('input#background-color').val() != '') {
			backgrString = jQuery('input#background-color').val() + ' ';
		} else {
			backgrString = 'transparent ';
		}
		// Don't even start if there's no background image
		if (jQuery('input#background-image').val() != '') {	
			backgrString = backgrString + ' url("' + jQuery('input#background-image').val() + '") ' + 
			jQuery('select#background-repeat').val() + ' ' + jQuery('select#background-attachment').val() + ' '; 
			if (jQuery('input#backgr-pos-type-default').attr('checked')) {
				backgrString = backgrString + jQuery('select#background-position').val(); 
			} else if (jQuery('input#backgr-pos-type-precise').attr('checked')) {
				backgrString = backgrString + jQuery('input#background-position-x').val() + jQuery('select#background-position-x-unit').val() + ' ' + 
					jQuery('input#background-position-y').val() + jQuery('select#background-position-y-unit').val();
			}		
		}
		thiscssObject['background'] = backgrString;

	} else if (property == 'width') {
		if (jQuery('input#widthvalue').attr('checked') && jQuery('input#width').val() != '') {
			thiscssObject['width'] = jQuery('input#width').val() + jQuery('select#width-unit').val();
		} else {
			thiscssObject['width'] = 'auto';
		} 
	
	} else if (property == 'height') {
		if (jQuery('input#heightvalue').attr('checked') && jQuery('input#height').val() != '') {
			thiscssObject['height'] = jQuery('input#height').val() + jQuery('select#height-unit').val();
		} else {
			thiscssObject['height'] = 'auto';
		} 
	
	} else if (property == 'topbottom') {
		if (jQuery('input#topauto').attr('checked')) {
			thiscssObject['top'] = "auto";
			thiscssObject['bottom'] = '';
		} else if (jQuery('input#bottomauto').attr('checked')) {
			thiscssObject['bottom'] = "auto";
			thiscssObject['top'] = '';
		} else if (jQuery('input#topvalue').attr('checked')) {
			thiscssObject['top'] = jQuery('input#top').val() + jQuery('select#top-unit').val();
			thiscssObject['bottom'] = '';
		} else if (jQuery('input#bottomvalue').attr('checked')) {
			thiscssObject['bottom'] = jQuery('input#bottom').val() + jQuery('select#bottom-unit').val();
			thiscssObject['top'] = '';
		} else {
			thiscssObject['top'] = 'auto';
		}
	
	} else if (property == 'leftright') {
		if (jQuery('input#leftauto').attr('checked')) {
			thiscssObject['left'] = "auto";
			thiscssObject['right'] = '';
		} else if (jQuery('input#rightauto').attr('checked')) {
			thiscssObject['right'] = "auto";
			thiscssObject['left'] = '';
		} else if (jQuery('input#leftvalue').attr('checked')) {
			thiscssObject['left'] = jQuery('input#left').val() + jQuery('select#left-unit').val();
			thiscssObject['right'] = '';
		} else if (jQuery('input#rightvalue').attr('checked')) {
			thiscssObject['right'] = jQuery('input#right').val() + jQuery('select#right-unit').val();
			thiscssObject['left'] = '';
		} else {
			thiscssObject['left'] = 'auto';
		}
		
	} else if (property == 'fonts') {
		var string = '';
		if (jQuery('select#font-family').val() != '') {
			string = jQuery('select#font-family').val();
			if (string.match(' ') != 0) {
				string = '"' + string + '"';
			}
		} else if (jQuery('select#font-family2').val() != '') {
			string = jQuery('select#font-family2').val();
		} else if (jQuery('select#generic-family').val() != '') {
			string = jQuery('select#generic-family').val();
		} 
		if (string != '') { thiscssObject['font-family'] = string; }	
	}
	
	return thiscssObject;
}
