// Do after page load and after Ajax:
function doAfterPageLoad() {


	jQuery("#drop-drop, #drop-header, #drop-centerTop, #drop-centerBottom, #drop-footer").sortable({
		connectWith: '.connectedSortable',
		tolerance: 'pointer',
		cursor: 'crosshair',
		start: function(event, ui) { 
			// ui.item.addClass('highlightDrag'); 
			/*
			jQuery("#tf-preview blockquote, #tf-preview table, #tf-preview caption, #tf-preview thead, #tf-preview th, #tf-preview tbody, #tf-preview tfoot, #tf-preview tr, #tf-preview td, #tf-preview div, #tf-preview span, #tf-preview td, #tf-preview ul, #tf-preview ol, #tf-preview li, #tf-preview h1, #tf-preview h2, #tf-preview h3, #tf-preview h4, #tf-preview h5, #tf-preview h6, #tf-preview p, #tf-preview a, #tf-preview form, #tf-preview input, #tf-preview textarea, #tf-preview code, #tf-preview img, #tf-preview label")
			.tooltipOut().die('mouseover').die('mousemove');
			*/
			var currentEl = ui.item;
			currentEl.removeClass('highlight-selector').parents().removeClass('highlight-selector');
			jQuery("#tooltipX").hide().remove();
			currentEl.parents().filter('div.marginbehind').hide().remove();
			currentEl.parents().filter('div.paddingontop').hide().remove();
			jQuery('div.marginbehind').hide().remove();
			jQuery('div.paddingontop').hide().remove();
	
		},
		update: function(event, ui) { 
			
			// jQuery('a#save-dragndrop').addClass('save-highlight');
			
			// Save 
			var selectorgroup = jQuery('select#selectorgroup').val();
			var header = jQuery('#drop-header').sortable('toArray');
			var centerTop = jQuery('#drop-centerTop').sortable('toArray');
			var centerBottom = jQuery('#drop-centerBottom').sortable('toArray');
			var footer = jQuery('#drop-footer').sortable('toArray');
			var drop = jQuery('#drop-drop').sortable('toArray');
			
			var headerStr = ''; var centerTopStr = ''; var centerBottomStr = ''; var footerStr = ''; var dropStr = '';
			
			for ( var i = 0; i < header.length; i++ ) { headerStr += '&header-' + i + '=' + header[i]; }
			for ( var i = 0; i < centerTop.length; i++ ) { centerTopStr += '&centerTop-' + i + '=' + centerTop[i]; }
			for ( var i = 0; i < centerBottom.length; i++ ) { centerBottomStr += '&centerBottom-' + i + '=' + centerBottom[i]; }
			for ( var i = 0; i < footer.length; i++ ) { footerStr += '&footer-' + i + '=' + footer[i]; }		
			for ( var i = 0; i < drop.length; i++ ) { dropStr += '&drop-' + i + '=' + drop[i]; }		
			
			var dataString = 'thfrpath=' + THFRPATH + '&thfruploadpath=' + THFRUPLOADPATH 
			+ headerStr + centerTopStr + centerBottomStr + footerStr + dropStr 
			+ '&selectorgroup=' + selectorgroup + '&action=tf_save_dragdrop';
		
			jQuery.ajax({
				type: 		"post", 
				url: 		THFRURL + "ajax.php",
				data: 		dataString,
				success: 	function(html) { 
								jQuery("div#dragdropsavesuccess").html(html).fadeIn("fast").fadeOut(2000); 
								jQuery("ul.preview-tabs li a." + selectorgroup).click();
							}
			}); 

			// Turn on tooltip & element highlighting again
			/*
			jQuery("#tf-preview blockquote, #tf-preview table, #tf-preview caption, #tf-preview thead, #tf-preview th, #tf-preview tbody, #tf-preview tfoot, #tf-preview tr, #tf-preview td, #tf-preview div, #tf-preview span, #tf-preview td, #tf-preview ul, #tf-preview ol, #tf-preview li, #tf-preview h1, #tf-preview h2, #tf-preview h3, #tf-preview h4, #tf-preview h5, #tf-preview h6, #tf-preview p, #tf-preview a, #tf-preview form, #tf-preview input, #tf-preview textarea, #tf-preview code, #tf-preview img, #tf-preview label")
			.live('mouseover', tooltipOver);		
*/			
			ui.item.removeClass('highlightDrag');		
		}
	}).disableSelection();

	jQuery('div#tf-preview textarea').each(function() {
		jQuery(this).autoResize({
			extraSpace : 15
		});
		jQuery(this).keydown();
	});


	
	// (Width-) Sliders in html body (not Ajax form)
	jQuery("div.slider").each(function (i) {
		var property = jQuery(this).attr('id').replace('-slider', '');
		var unitSep = parseInt(jQuery(this).attr('unitseparate'));
		var unitVal = '';
		if ( jQuery('input#' + property).val() != '') {
			if (unitSep == "1") {
				var thisvalue = parseInt(jQuery('input#' + property).val());
				var unitVal = '';
			} else {
				var thisvalue = parseInt(jQuery('input#' + property).val().replace('px',''));
				var unitVal = "px";
			}
		} else { 
			var thisvalue = ''; 
			if (unitSep == "1") {
				var unitVal = '';
			} else {
				var unitVal = "px";
			}
		}
		var slidermax = parseInt(jQuery(this).attr('slidermax'));
		var slidermin = parseInt(jQuery(this).attr('slidermin'));
		jQuery(this).slider({
			min: slidermin,
			max: slidermax,
			value: thisvalue,
			slide:  function(event,ui){ 
				jQuery('input#' + property).val(ui.value + unitVal);
				// applyStyles(selector, property, ui.value + unitVal);
				applySidebars();
				// jQuery('input#themeframe-form-save, input#themeframe-form-save2').addClass('highlight-save');
				jQuery('a#save-layoutwidth').addClass('save-highlight');
			}
		});
	});



			
	// setting the tabs for Preview hide and show, setting the current tab
	jQuery('div.tf-preview-container').hide();
	var CurGroup = jQuery('select#selectorgroup').val();
	jQuery('div.tf-preview-' + CurGroup).show();
	// jQuery('ul.mainsetting-tabs li.tf-mainsettings-widths a').addClass('tab-current');

	// initial active tab for mainsettings
	jQuery('div.tf-mainsettings-container').hide();
	// jQuery('div.tf-mainsettings-widths').show();
	jQuery('ul.preview-tabs li.tf-preview-' + CurGroup + ' a').addClass('tab-current');
		
	jQuery("select#sidebarsright, select#sidebarsleft").each(applySidebars);

	// Close/Hide custom text areas
	jQuery('input.checkcustom').each(function() {
		var displayValue = jQuery(this).attr('checked') ? 'block' : 'none';
		jQuery(this).parents('li:eq(0)').find('textarea').css("display", displayValue);		
	});


} // End doAfterPageLoad
				

jQuery(document).ready(function(){


	jQuery('form#newimageform').live('change', function() {
		jQuery('a#save-newdropimage, a#edit-newdropimage').addClass('save-highlight');
	});
	
	jQuery('form#themeinfo input').live('change', function() {
		jQuery('a#save-themeinfo').addClass('save-highlight');
	});

	jQuery('form#layout-form input').live('change', function() {
		jQuery('a#save-layoutwidth').addClass('save-highlight');
	});

	jQuery('textarea#headerimages').live('change', function() {
		jQuery('a#save-headerimages').addClass('save-highlight');
	});	

	jQuery('textarea#multipagetitles').live('change', function() {
		jQuery('a#save-multipagetitles').addClass('save-highlight');
	});	

	jQuery('form#nextprevnavform textarea').live('change', function() {
		jQuery('a#save-nextprevnav').addClass('save-highlight');
	});	

	jQuery('form#excerptsform input').live('change', function() {
		jQuery('a#save-excerpts').addClass('save-highlight');
	});

	jQuery('textarea#footercontent').live('change', function() {
		jQuery('a#save-footercontent').addClass('save-highlight');
	});

	jQuery('form#postcontainerform input, form#postcontainerform textarea').live('change', function() {
		jQuery('a#save-postcontainers').addClass('save-highlight');
	});

	jQuery('form#codeinsertform input, form#codeinsertform textarea').live('change', function() {
		jQuery('a#save-codeinserts').addClass('save-highlight');
	});

	jQuery('textarea#customcss').live('change', function() {
		jQuery('a#save-customcss').addClass('save-highlight');
	});	

	jQuery('textarea#customjs').live('change', function() {
		jQuery('a#save-customjs').addClass('save-highlight');
	});	

	jQuery('textarea#customphp').live('change', function() {
		jQuery('a#save-customphp').addClass('save-highlight');
	});	
	
	// Populate CSS Selector select menu on change of selectorgroup menu		
	jQuery("select#selectorgroup").live('change', function(){
		jQuery.ajax({
			type: "post", 
			url: THFRURL + "templates/bytesforall/pagetemplate.php",
			data: 'thfrpath=' + THFRPATH  + '&selector=' + jQuery("select#selectorgroup").val(),
			success: function(html){ jQuery("div#tf-preview").html(html); }
		});
		jQuery.ajax({
			type: "post", 
			url: THFRURL + "ajax.php",
			data: 'action=tf_selectors&ajax=true&id=' + jQuery("select#selectorgroup").val(),
			success: function(html){ jQuery("select#tfcssselector").html(html); }
		});				
		jQuery('div.tf-preview-container').hide();
		jQuery('div.tf-preview-' + jQuery(this).val()).show();
		jQuery('ul.preview-tabs li a').removeClass('tab-current');
		jQuery('ul.preview-tabs li a.' + jQuery(this).val()).addClass('tab-current');
	});
	
	jQuery("select#sidebarsright, select#sidebarsleft, input#uniquewidth, select#usepostcontainer")
	.live('change', function() {

		var selectorgroup = jQuery('select#selectorgroup').val();
		var uniquewidth = jQuery('input#uniquewidth').val();
		var thisID = 'save-sidebarsandcustomwidth';
		var usePostContainer = jQuery('select#usepostcontainer').val();
		
		var dataString = jQuery('form#sidebar-form').serialize() + '&uniquewidth=' + uniquewidth 
		+ "&usepostcontainer=" + usePostContainer;
		
		jQuery.ajax({
			type: 	"post", 
			url: 	THFRURL + "ajax.php",
			data: 	dataString + '&selectorgroup=' + selectorgroup + '&thisID=' + thisID + '&action=tf_save_options_single',
			success: function(html){ 
				jQuery(".formstatus").html(html).fadeIn("fast").fadeOut(1000); 
				// Reload Page
				jQuery('ul.preview-tabs li a.' + selectorgroup).click();
			}
		}); 


		
	});


	jQuery('input.checkcustom').live('click' , function() {
		var displayValue = jQuery(this).attr('checked') ? 'block' : 'none';
		jQuery(this).parents('li:eq(0)').find('textarea').css("display", displayValue);
	});

	jQuery('input#checkuseglobal').live('click', function(){
		var checkedValue = jQuery(this).attr('checked') ? 'checked' : '';
		jQuery('input.checkglobal').attr('checked', checkedValue);
	}); 
	jQuery('input#checkaddcustom').live('click', function(){
		var checkedValue = jQuery(this).attr('checked') ? 'checked' : '';
		jQuery('input.checkcustom').attr('checked', checkedValue);
		if (checkedValue == 'checked') {
			jQuery('textarea.onoff').css('display', 'block'); 
		} else {
			jQuery('textarea.onoff').css('display', 'none');
		}
	}); 
	

	jQuery('a.slidemore').live('click', function() {
		jQuery(this).parent().find('ul').toggleClass('block');
		return false;
	});
	
	jQuery('a.close').live('click', function() {
		jQuery("div#themeframe-form").empty().css("display","none");
		return false;
	});

	jQuery("a.highlightdropareas").live('click', function() {
		jQuery("ul.connectedSortable").toggleClass("connectedSortable-highlight");
		return false;
	});
	
	jQuery('select#tfcssselector').live('change', function() {
		var selector = jQuery(this).val();
		jQuery.ajax({
			type: "post", 
			dataType: "html",
			url: THFRURL + "ajax.php",
			data: 'selector=' + selector + '&action=tf_print_form&thfrpath=' + THFRPATH + '&thfruploadpath=' + THFRUPLOADPATH,
			success: function(html){
				jQuery("div#themeframe-form").html(html).show().centerInClient().draggable({ handle: 'h2' });
				jQuery("div#showselector").
				html('<small style="font-size:12px;color:#444">selector:</small><br /><strong>'+selector+'</strong> <a id="highlightselector" href="#">&nbsp;</a>');
				// setting the tabs for Form hide and show, setting the current tab
				jQuery('div.tf-option-container').hide();
				jQuery('div.tf-borders').show();
				jQuery('ul.tabs li.tf-borders a').addClass('tab-current');
				// Sliders
				jQuery("div.slider").each(function (i) {
					var property = jQuery(this).attr('id').replace('-slider', '');
					var unitSep = parseInt(jQuery(this).attr('unitseparate'));
					var slidermax = parseInt(jQuery(this).attr('slidermax'));
					var slidermin = parseInt(jQuery(this).attr('slidermin'));
					var unitVal = '';
					if ( jQuery('input#' + property).val() != '') {
						if (unitSep == "1") {
							var thisvalue = parseInt(jQuery('input#' + property).val());
							var unitVal = '';
						} else {
							var thisvalue = parseInt(jQuery('input#' + property).val().replace('px',''));
							var unitVal = "px";
						}
					} else { 
						var thisvalue = ''; 
						if (unitSep == "1") {
							var unitVal = '';
						} else {
							var unitVal = "px";
						}
					}
					jQuery(this).slider({
						min: slidermin,
						max: slidermax,
						value: thisvalue,
						slide:  function(event,ui){ 
							jQuery('input#' + property).val(ui.value + unitVal);
							applyStyles(selector, property, ui.value + unitVal);
						}
					});
				});
				// Bind Jscolor again after the Ajax action
				// jscolor.bind();
				jscolor.init();
				/* jscolorinc.js */
				
				new AjaxUpload('#backgrImage-upload', {
					action: THFRURL + 'upload.php',
					name: 'userfile',
					onComplete: function(file){
						jQuery('input#background-image').val(RELATIVETHFRUPLOADURL + file);	
						applyStyles(selector, 'background-image');
					}
				});
				
			}
		}); 		
		return false;	
	});	

	
	
	

	// Context menus
	jQuery('#tf-preview blockquote, #tf-preview table, #tf-preview caption, #tf-preview thead, #tf-preview th, #tf-preview tbody, #tf-preview tfoot, #tf-preview tr, #tf-preview td, #tf-preview div, #tf-preview span, #tf-preview td, #tf-preview ul, #tf-preview ol, #tf-preview li, #tf-preview h1, #tf-preview h2, #tf-preview h3, #tf-preview h4, #tf-preview h5, #tf-preview h6, #tf-preview p, #tf-preview a, #tf-preview form, #tf-preview input, #tf-preview textarea, #tf-preview code, #tf-preview img, #tf-preview label')
	.live('contextmenu', function(){	
		if(jQuery(this).attr("selector") != undefined) {
		

		var selector = jQuery(this).attr("selector");
		jQuery('select[name=tfcssselector]').val(selector);
		
			jQuery.ajax({
				type: "post", 
				url: THFRURL + "ajax.php",
				dataType: "html",
				data: 'selector=' + selector + '&action=tf_print_form&thfrpath=' + THFRPATH + '&thfruploadpath=' + THFRUPLOADPATH,
				success: function(html){ 
					jQuery("div#themeframe-form").html(html).show().centerInClient().draggable({ handle: 'h2' });
					// jQuery("div#themeframe-form").html(html).show().draggable({ handle: 'h2' }); 
					jQuery("div#showselector").
					html('<small style="font-size:12px;color:#444">selector:</small><br /><strong>'+selector+'</strong> <a id="highlightselector" href="#">&nbsp;</a>');
					// setting the tabs for Form hide and show, setting the current tab
					jQuery('div.tf-option-container').hide();
					jQuery('div.tf-borders').show();
					jQuery('ul.tabs li.tf-borders a').addClass('tab-current');
					// Sliders
				    jQuery("div.slider").each(function (i) {
						var property = jQuery(this).attr('id').replace('-slider', '');
						var unitSep = parseInt(jQuery(this).attr('unitseparate'));
						var unitVal = '';
						if ( jQuery('input#' + property).val() != '') {
							if (unitSep == "1") {
								var thisvalue = parseInt(jQuery('input#' + property).val());
								var unitVal = '';
							} else {
								var thisvalue = parseInt(jQuery('input#' + property).val().replace('px',''));
								var unitVal = "px";
							}
						} else { 
							var thisvalue = ''; 
							if (unitSep == "1") {
								var unitVal = '';
							} else {
								var unitVal = "px";
							}
						}
						var slidermax = parseInt(jQuery(this).attr('slidermax'));
						var slidermin = parseInt(jQuery(this).attr('slidermin'));
						jQuery(this).slider({
							min: slidermin,
							max: slidermax,
							value: thisvalue,
							slide:  function(event,ui){ 
								jQuery('input#' + property).val(ui.value + unitVal);
								applyStyles(selector, property, ui.value + unitVal);
							}
						});
				    });

					// jscolor.bind();
					jscolor.init();
					
				/*
				jspickerincl.js
				*/

					new AjaxUpload('#backgrImage-upload', {
						action: THFRURL + 'upload.php',
						name: 'userfile',
						onComplete: function(file){
							jQuery('input#background-image').val(RELATIVETHFRUPLOADURL + file);	
							applyStyles(selector, 'background-image');
						}
					});


				}
			}); 

			
		// }
		return false;		
		}

	});

// For jpickerincl
/*
jQuery('a#showjscolorgrid').live('click', function() {
	jQuery('div.Grid').slideToggle();
	}
	);
*/

function tooltipOver() {
	if(jQuery(this).attr("selector") != undefined) {
	
		var currentEl = jQuery(this);
		jQuery("#tooltipX").hide().remove();
		currentEl.parents().filter('div.marginbehind').hide().remove();
		currentEl.parents().filter('div.paddingontop').hide().remove();
		
		currentEl.addClass('highlight-selector').parents().removeClass('highlight-selector');

		
		var thisHeight = currentEl.outerHeight(true);
		var thisWidth = currentEl.outerWidth(true);
		// var thisPosition = currentEl.position();
		// position() doesn't work well with absolute positioned parents (ul.nav ul li a)
		var thisPosition = currentEl.offset();
		var thisMarginTop = parseInt(currentEl.css("margin-top").replace('px',''));
		var thisMarginLeft = parseInt(currentEl.css("margin-left").replace('px',''));
		
		var thisMarginRight = parseInt(currentEl.css("margin-right").replace('px',''));
		var thisMarginBottom = parseInt(currentEl.css("margin-bottom").replace('px',''));
		
		var thisBorderLeftWidth = parseInt(currentEl.css("border-left-width").replace('px',''));
		var thisBorderTopWidth = parseInt(currentEl.css("border-top-width").replace('px',''));
		
		var thisBorderRightWidth = parseInt(currentEl.css("border-right-width").replace('px',''));
		var thisBorderBottomWidth = parseInt(currentEl.css("border-bottom-width").replace('px',''));
		
		var thisPaddingTop = parseInt(currentEl.css("padding-top").replace('px',''));
		var thisPaddingRight = parseInt(currentEl.css("padding-right").replace('px',''));
		var thisPaddingBottom = parseInt(currentEl.css("padding-bottom").replace('px',''));
		var thisPaddingLeft = parseInt(currentEl.css("padding-left").replace('px',''));
		var thisInnerHeight = currentEl.innerHeight() - thisPaddingTop - thisPaddingBottom;
		var thisInnerWidth = currentEl.innerWidth() - thisPaddingLeft - thisPaddingRight;
		
		jQuery("div#tf-preview").append("<div class='tooltip' id='tooltipX'><p>"+currentEl.attr('selector')+
		"</p><table><tr><td>Margin:</td><td>top <strong>" + thisMarginTop + "</strong></td><td>right <strong>" + thisMarginRight + "</strong></td><td>bottom <strong>" + thisMarginBottom + "</strong></td><td>left <strong>" + thisMarginLeft + 
		"</strong></td></tr><tr><td>Padding:</td><td>top <strong>" + thisPaddingTop + "</strong></td><td>right <strong>" + thisPaddingRight + "</strong></td><td>bottom <strong>" + thisPaddingBottom + "</strong></td><td>left <strong>" + thisPaddingLeft + "</strong></td></tr>" + 
		"<tr><td>Borders:</td><td>top <strong>" + thisBorderTopWidth + "</strong></td><td>right <strong>" + thisBorderRightWidth + "</strong></td><td>bottom <strong>" + thisBorderBottomWidth + "</strong></td><td>left <strong>" + thisBorderLeftWidth + "</strong></td></tr></table></div>");
		jQuery("#tooltipX").css("display", "none").show();
		
		//jQuery(this).css({'z-index': 100, 'position':'relative'});
		jQuery("div#tf-preview").append("<div class='marginbehind'></div>")
		.append("<div class='paddingontop'></div>");
		jQuery("div.marginbehind").css({
			'display':	'none',
			'position':	'absolute',
			'top':		thisPosition.top - thisMarginTop + 'px',
			'left':		thisPosition.left - thisMarginLeft + 'px',
			'width':	thisWidth + 'px',
			'height':	thisHeight + 'px',
			'background-color':	'#66ccff',
			'z-index':	2,
			'opacity': '0.6'
		}).show();
		jQuery("div.paddingontop").css({
			'display':	'none',
			'position':	'absolute',
			'top':		thisPosition.top + thisPaddingTop + thisBorderTopWidth + 'px',
			'left':		thisPosition.left + thisPaddingLeft + thisBorderLeftWidth + 'px',
			'width':	thisInnerWidth + 'px',
			'height':	thisInnerHeight + 'px',
			'background-color':	'#ff00ff',
			'z-index':	50,
			'opacity': '0.6'
		}).show();				
	}
}

function tooltipMove(kmouse) {
	var tipX = kmouse.pageX + 12;
	var tipY = kmouse.pageY + 25;
	var tipWidth = jQuery("#tooltipX").outerWidth(true);
	var tipHeight = jQuery("#tooltipX").outerHeight(true);
	if( tipX + tipWidth > jQuery(window).scrollLeft() + jQuery(window).width() ) { 
		tipX = kmouse.pageX - tipWidth; 
	}
	if( jQuery(window).height() + jQuery(window).scrollTop() < tipY + tipHeight ) { 
		tipY = kmouse.pageY - tipHeight; 
	}
	jQuery("#tooltipX").css({left:tipX, top:tipY});
}
			
function tooltipOut() {
	var currentEl = jQuery(this);
	currentEl.removeClass('highlight-selector').parents().removeClass('highlight-selector');
	jQuery("#tooltipX").hide().remove();
	currentEl.parents().filter('div.marginbehind').hide().remove();
	currentEl.parents().filter('div.paddingontop').hide().remove();
	jQuery('div.marginbehind').hide().remove();
	jQuery('div.paddingontop').hide().remove();
}


	jQuery("#tf-preview blockquote, #tf-preview table, #tf-preview caption, #tf-preview thead, #tf-preview th, #tf-preview tbody, #tf-preview tfoot, #tf-preview tr, #tf-preview td, #tf-preview div, #tf-preview span, #tf-preview td, #tf-preview ul, #tf-preview ol, #tf-preview li, #tf-preview h1, #tf-preview h2, #tf-preview h3, #tf-preview h4, #tf-preview h5, #tf-preview h6, #tf-preview p, #tf-preview a, #tf-preview form, #tf-preview input, #tf-preview textarea, #tf-preview code, #tf-preview img, #tf-preview label")
		.live('mouseover', tooltipOver)
		.live('mousemove', tooltipMove)
		.live('mouseout', tooltipOut);


	jQuery('a.moreinfolink').live('click', function() {
		var container = this.id;
		jQuery('div#' + container + '-container').slideToggle(200);
		return false;
	});

	/*
	jQuery('h3.menutitle').live('click', function() {
		var menu = this.id;
		jQuery('ul#' + menu + '-menu').slideToggle(200);
		return false;
	});
	*/

	jQuery('ul.preview-tabs').hide();
	jQuery('h3.menutitle').live('click', function() {
		jQuery(this).next('ul').slideToggle(200)
		.siblings('ul:visible').slideUp('fast');;
		return false;
	});

	jQuery('#resetdialog').live('click', function() {
		jQuery('#curresetdialog').remove();
		jQuery('<div id="curresetdialog"></div>').html('<span style="color:red">WARNING! This will reset all settings!</span><br /><br /><a href="#" id="resetall" style="font-weight:bold">Yes, reset all settings</a>')
		.dialog({
			title: 'Reset all settings',
			buttons: { "Close": function() { jQuery(this).dialog("close"); jQuery('#curresetdialog').remove();} }
		});
		return false;
	});

	jQuery('#dragdropinfo').live('click', function() {
		jQuery('#curdragdropinfo').remove();
		jQuery('<div id="curdragdropinfo"></div>').load(THFRURL + 'dialogs/dragdrop.html')
		.dialog({
			title: 'Drag &amp; Drop Items',
			width: 900,	height: 500,
			buttons: { "Close": function() { jQuery(this).dialog("close"); jQuery('#curdragdropinfo').remove();} }
		});
		return false;
	});

	jQuery('#livepreviewinfo').live('click', function() {
		jQuery('#curlivepreviewinfo').remove();
		jQuery('<div id="curlivepreviewinfo"></div>').load(THFRURL + 'dialogs/livepreviewinfo.php')
		.dialog({
			title: 'Live Preview with Right-Click Editing of CSS',
			width: 600,	height: 450,
			buttons: { "Close": function() { jQuery(this).dialog("close"); jQuery('#curlivepreviewinfo').remove();} }
		});
		return false;
	});
	
	jQuery('#customwidthinfo').live('click', function() {
		jQuery('#curcustomwidthinfo').remove();
		jQuery('<div id="curcustomwidthinfo"></div>').load(THFRURL + 'dialogs/customwidthinfo.php')
		.dialog({
			title: 'Set a custom width for this page template',
			width: 400,	height: 300,
			buttons: { "Close": function() { jQuery(this).dialog("close"); jQuery('#curcustomwidthinfo').remove();} }
		});
		return false;
	});

	jQuery('#sidebarinfo').live('click', function() {
		jQuery('#cursidebarinfo').remove();
		jQuery('<div id="cursidebarinfo"></div>').load(THFRURL + 'dialogs/sidebarinfo.php')
		.dialog({
			title: 'Configure sidebars for this page template',
			width: 400, height: 300,
			buttons: { "Close": function() { jQuery(this).dialog("close"); jQuery('#cursidebarinfo').remove();} }
		});
		return false;
	});
	
	jQuery('#usepostcontainerinfo').live('click', function() {
		jQuery('#curusepostcontainerinfo').remove();
		jQuery('<div id="curusepostcontainerinfo"></div>').load(THFRURL + 'dialogs/usepostcontainerinfo.php')
		.dialog({
			title: 'Choose a post container template',
			width: 400,	height: 300,
			buttons: { "Close": function() { jQuery(this).dialog("close"); jQuery('#curusepostcontainerinfo').remove();} }
		});
		return false;
	});

	jQuery('#selectorlistinfo').live('click', function() {
		jQuery('#curselectorlistinfo').remove();
		jQuery('<div id="curselectorlistinfo"></div>').load(THFRURL + 'dialogs/selectorlistinfo.php')
		.dialog({
			title: 'Choosing page elements from the CSS Selector list',
			width: 400,	height: 300,
			buttons: { "Close": function() { jQuery(this).dialog("close"); jQuery('#curselectorlistinfo').remove();} }
		});
		return false;
	});
	
	jQuery('#debugoutput').live('click', function() {
		jQuery('#curdebugoutput').remove();
		jQuery('<div id="curdebugoutput"></div>').load(THFRURL + 'dialogs/debugoutput.php')
		.dialog({
			title: 'View current ThemeFrame Settings',
			width: 700,	height: 500,
			buttons: { "Close": function() { jQuery(this).dialog("close"); jQuery('#curdebugoutput').remove();} }
		});
		return false;
	});

	jQuery('#importdialog').click(function() {
		jQuery('#curimportdialog').remove();
		jQuery('<div id="curimportdialog"></div>').load(THFRURL + 'dialogs/importsettings.php')
		.dialog({
			title: 'Import a ThemeFrame settings file',
			width: 600,	height: 400,
			buttons: { "Close": function() { jQuery(this).dialog("close"); jQuery('#curimportdialog').remove();} }
		});
		return false;
	});

	jQuery('#exportdialog').live('click', function() {
		jQuery('#curexportdialog').remove();
		jQuery('<div id="curexportdialog"></div>').load(THFRURL + 'dialogs/exportsettings.php')
		.dialog({
			title: 'Export Current Settings',
			width: 400,	height: 300,
			buttons: { "Close": function() { jQuery(this).dialog("close"); jQuery('#curexportdialog').remove();} }
		});
		return false;
	});

	jQuery('#downloadzip').live('click', function() {
		jQuery('#curdownloadzip').remove();
		jQuery('<div id="curdownloadzip"></div>').load(THFRURL + 'dialogs/downloadzipdialog.php')
		.dialog({
			title: 'Download whole Theme as a ZIP file',
			width: 900,	height: 500,
			buttons: { "Close": function() { jQuery(this).dialog("close"); jQuery('#curdownloadzip').remove(); } }
		});
		jQuery("#zipform ol > li").each(function (i) {
			i = i+1;
			jQuery(this).addClass("item" + i);
		});
		jQuery("ol#ziphowto > li").each(function (i) {
			i = i+1;
			jQuery(this).addClass("item" + i);
		});
		return false;
	});

	jQuery('#downloadfiles').live('click', function() {
		jQuery('#curdownloadfiles').remove();
		jQuery('<div id="curdownloadfiles"></div>').load(THFRURL + 'dialogs/downloadfilesdialog.php')
		.dialog({
			title: 'Download Single Theme Files',
			width: 700,	height: 500,
			buttons: { "Close": function() { jQuery(this).dialog("close"); jQuery('#curdownloadfiles').remove();} }
		});
		return false;
	});
	
	jQuery('#newdropimage').live('click', function() {
		jQuery('#curnewdropimage').remove();
		//.load(THFRURL + 'dialogs/newdropimage.php')
		jQuery.ajax({
			cache: false,
			type: "post", 
			dataType: "html",
			url: THFRURL + 'dialogs/newdropimage.php',
			// data: 'selector=' + selector + '&action=tf_print_form&thfrpath=' + THFRPATH + '&thfruploadpath=' + THFRUPLOADPATH,
			success: function(html){
				jQuery('<div id="curnewdropimage"></div>').html(html).dialog({	
				title: 'Add a new image as Drag & Drop item',
				width: 900, height: 500,
				buttons: { "Close": function() { jQuery(this).dialog("destroy"); jQuery('#curnewdropimage').remove(); } }
				});

				jQuery('input#alt').each(function() {
					var displayValue = jQuery(this).attr('checked') ? 'block' : 'none';
					jQuery('div#altmore').css("display", displayValue);		
				});
				jQuery('input#link').each(function() {
					var displayValue = jQuery(this).attr('checked') ? 'block' : 'none';
					jQuery('div#linkmore').css("display", displayValue);		
				});
				jQuery('input#alt').live('click' , function() {
					var displayValue = jQuery(this).attr('checked') ? 'block' : 'none';
					jQuery('div#altmore').css("display", displayValue);
				});
				jQuery('input#link').live('click' , function() {
					var displayValue = jQuery(this).attr('checked') ? 'block' : 'none';
					jQuery('div#linkmore').css("display", displayValue);
				});
		
				new AjaxUpload('#newImage-upload', {
					action: THFRURL + 'upload.php',
					name: 'userfile',
					onComplete: function(file){
						// Image size:
						/* 
						doesn't work in Chrome:
						var img = new Image();
						img.src = '/themeframe/uploads/' + file;
						...
						img.width
						img.height
						*/
						jQuery('input#newimage').val(file);	
						// jQuery('ul.preview-tabs > li a').click();
						var imageID = file.replace('.','');
						jQuery('input#imageid').val(imageID);
						jQuery('div#newimageinstruct, p.menuinfo').css('display', 'none');
						jQuery('div#newimageinfo')
							.html('<strong style="color:green">' + file + 
							'</strong>').css('display', 'block');
						jQuery('div#newimagepreview').html('<img src="' + RELATIVETHFRUPLOADURL + file + '" />').slideDown();
						jQuery('#newImage-upload').html('Wrong image? Select another one...').addClass('imguploadabsolute');
						jQuery('form#newimageform').slideDown();
						
					}
				});		
		
			}
		})	

		// Clear Values: text fields
		jQuery('input#newimage, input#alttext, input#customurl, input#linktitle').val('');
		// selects
		jQuery('select#linktarget, select#linkrel').val('');
		// checkboxes & radio buttons
		jQuery('input#alt, input#link, input#linktype-custom').attr('checked', false);
		jQuery('input#linktype-home').attr('checked', true);
		jQuery('div.formstatus').empty();
		jQuery('a#save-newdropimage, a#edit-newdropimage').removeClass('save-highlight');
		jQuery('div#newimagepreview').empty().css('display', 'none');
		jQuery('div#newimageinfo').empty().css('display', 'none');
		jQuery('div#newimageinstruct').css('display', 'block');
		jQuery('form#newimageform').css('display', 'none');
		// jQuery('#newImage-upload').empty().html('Select an image').removeClass('imguploadabsolute');
		jQuery('#newImage-upload').html('Select an image').removeClass('imguploadabsolute');		
		return false;
	});

	jQuery("a#newdroplink").live("click", function() {
		jQuery('#curnewdroplink').remove();
		jQuery('<div id="curnewdroplink"></div>').load(THFRURL + 'dialogs/newlink.php')
		.dialog({
			title: 'Add a link as new Drag & Drop item',
			width: 900, height: 500,
			buttons: { "Close": function() { jQuery(this).dialog("close"); jQuery('#curnewdroplink').remove();} }
		});
		return false;
	});

	jQuery('.dropitem-delete').live('click', function() {
		jQuery('#curdropitem-delete').remove();
		var itemID = jQuery(this).attr('id');
		var itemgroup = jQuery(this).attr('dropgroup');
		jQuery('<div id="curdropitem-delete"></div>').html('Delete <strong>' + itemID + '</strong> from all page templates?<br /><br /><button type="button" class="ui-state-default ui-corner-all" id="itemdelete" itemgroup="' + itemgroup + '" itemname="' + itemID + '" style="font-weight:bold;padding:5px 10px">Delete</a>')
		.dialog({
			title: 'Delete: ' + itemID,
			buttons: { "Cancel": function() { jQuery(this).dialog("close"); jQuery('#curdropitem-delete').remove(); } }
		});
		return false;
	});

	jQuery('.dropitem-edit').live('click', function() {
		jQuery('#curdropitem-edit').remove();
		var itemname = jQuery(this).attr('id');
		var itemgroup = jQuery(this).attr('dropgroup');
		if (itemgroup == 'customdropimages') { titlevar = 'IMAGE'; }
		else if (itemgroup == 'customdroplinks') { titlevar = 'LINK'; }
		jQuery('<div id="curdropitem-edit"></div>').load(THFRURL + 'dialogs/edititem.php?name=' + itemname + '&group=' + itemgroup)
		.dialog({
			title: 'Edit ' + titlevar + ' ' + itemname,
			width: 900, height: 500,
			buttons: { "Close": function() { jQuery(this).dialog("close"); jQuery('#curdropitem-edit').remove(); } }
		});
		return false;
	});

	jQuery('span.delpagetpl').live('click', function() {
		jQuery('#curdelpagetpl').remove();
		var tplName = jQuery(this).attr('id').replace('del-', '');
		jQuery('<div id="curdelpagetpl"></div>').html('Delete page template <strong>' + tplName + '.php</strong>?<br /><br /><button type="button" class="ui-state-default ui-corner-all" id="tpldelete" tplname="' + tplName + '" style="font-weight:bold;padding:5px 10px">Delete</a>')
		.dialog({
			title: 'Delete: ' + tplName + '.php',
			buttons: { "Cancel": function() { jQuery(this).dialog("close"); jQuery('#curdelpagetpl').remove(); } }
		});
		return false;
	});
	
	jQuery('#itemdelete').live('click', function() {
		var itemname = jQuery(this).attr('itemname');
		var itemgroup = jQuery(this).attr('itemgroup');
		var selectorgroup = jQuery('select#selectorgroup').val();
		jQuery.ajax({
			type: 	"post", 
			url: 	THFRURL + "ajax.php",
			data: 	'itemgroup=' + itemgroup + '&itemname=' + itemname + '&action=delete_drop_item',
			success: function(html){ 
				jQuery("div#resetsuccess").html(html).fadeIn("fast").fadeOut(2500); 
				// Reload Page
				jQuery('ul.preview-tabs li a.' + selectorgroup).click();
				jQuery('#curdropitem-delete').dialog("close");
			}
		}); 
		return false;
	});
	
	jQuery('#tpldelete').live('click', function() {
		var tplname = jQuery(this).attr('tplname');
		jQuery.ajax({
			type: 	"post", 
			url: 	THFRURL + "ajax.php",
			data: 	'tplname=' + encodeURIComponent(tplname) + '&action=delete_page_template',
			success: function(html){ 
				jQuery("div#resetsuccess").html(html).fadeIn("fast").fadeOut(2500); 
				// Remore item in menu
				jQuery('#li-' + tplname).empty().remove();
				jQuery('#curdelpagetpl').dialog("close");
			}
		}); 
		return false;
	});
	
	jQuery('#ftptransfer').live('click', function() {
		jQuery('#curftptransfer').remove();
		jQuery('<div id="curftptransfer"></div>')
		.load(THFRURL + 'dialogs/ftptransfer.php')
		.dialog({
			title: 'Transfer Theme Files through FTP',
			width: 900, height: 500,
			buttons: { 
				"Close": function() { jQuery(this).dialog("close"); jQuery('#curaddtpl').remove(); } 
			}
		});
		jQuery('input.ftpcheckall').live('click', function() {
			var checkedValue = jQuery(this).attr('checked') ? 'checked' : '';
			jQuery('form#ftpform :checkbox').attr('checked', checkedValue);
		}); 
		jQuery("#ftpform ol > li").each(function (i) {
			i = i+1;
			jQuery(this).addClass("item" + i);
		});
		return false;
	});

	jQuery('input.zipcheckall').live('click', function() {
		var checkedValue = jQuery(this).attr('checked') ? 'checked' : '';
		jQuery('form#zipform :checkbox').attr('checked', checkedValue);
	});
	jQuery('input#cssimagecheckall').live('click', function() {
		var checkedValue = jQuery(this).attr('checked') ? 'checked' : '';
		jQuery('div#zipcssimages :checkbox').attr('checked', checkedValue);
	});
	jQuery('input#otherimagecheckall').live('click', function() {
		var checkedValue = jQuery(this).attr('checked') ? 'checked' : '';
		jQuery('div#zipotherimages :checkbox').attr('checked', checkedValue);
	});
	jQuery('input#zipsubmit').live('click', function() {
		if( jQuery('input#zipdir').val() == '') {
			alert('Please fill in a "Theme Directory Name" (for instance: "mytheme3") into the form field on the top left');
			return false;
		}
	});	
	
	
	jQuery('#templatetype').live('change', function() {
		jQuery('.templateinfosection').css('display','none');
		var curTpl = jQuery(this).val();
		jQuery('#more-' + curTpl).slideDown();
	});	
		
	jQuery('#addpagetemplate').live('click', function() {
		// Only one dialog of this type at a time:
		jQuery('#curaddtpl').remove();
		jQuery('<div id="curaddtpl"></div>').load(THFRURL + 'dialogs/addpagetemplates.php')
		.dialog({
			title: 'Add a page template',
			width: 750,	height: 550,
			buttons: { 
				"Close": function() { jQuery(this).dialog("destroy"); jQuery('#curaddtpl').remove();} 
			}
		});
		jQuery('#diffcustdefault').live('click', function() {
			jQuery(this).next('div').slideToggle(400)
			return false;	
		});
		return false;
	});

	
	doAfterPageLoad();
	
	jQuery('a.togglemainsettings').live('click', function() {
		if (jQuery('a.togglemainsettings').hasClass('mainsettingsclosed')) {
			jQuery('div#tf-mainsettings').slideDown('fast');
		} else {
			jQuery('div#tf-mainsettings').slideUp('fast');
		}
		jQuery('a.togglemainsettings').toggleClass('mainsettingsclosed');
		return false;
	});


				
	// Highlight selector from within form ("Show" link)
	jQuery('a#highlightselector').live('click', function() {
		var selector = jQuery('select#tfcssselector').val();
		jQuery(selector).effect("pulsate", { times: 4 }, 500); 
		return false;
	});	

	// Add hover action to Save Button
	jQuery('input#themeframe-form-save, input#themeframe-form-save2').live('mouseover', function() {
		if ( jQuery(this).hasClass('highlight-save') ) {
			jQuery(this).removeClass('highlight-save');
			jQuery(this).addClass('highlight-hover');
		}
	}).live('mouseout', function() {
		if ( jQuery(this).hasClass('highlight-hover') ) {
			jQuery(this).removeClass('highlight-hover');
			jQuery(this).addClass('highlight-save');
		}
	});		
	  	  
	jQuery('a.propdelete').live('click', function() {

			var propertyBase = '';
			//var propertyBase = jQuery(this).attr('id').replace('-delete', '');
			var propertyBase = this.id.replace('-delete', '');
			var selector = jQuery('select#tfcssselector').val();
			
			if (jQuery.inArray(propertyBase, borders) != -1) {
				// Reset input fields
				jQuery('input#'+propertyBase+'-width').val(''); 
				jQuery('input#'+propertyBase+'-color').val('').css('background', 'white'); 
				jQuery('select#'+propertyBase+'-style').val(''); 
				// Reset slider
				jQuery('div#'+propertyBase+'-width-slider').slider('option', 'value', '');

			} else if (jQuery.inArray(propertyBase, margins) != -1) {
				// Reset input field
				jQuery('input#'+propertyBase).val(''); 
				// Uncheck radio buttons
				jQuery('input#'+propertyBase+'-auto-or-value-auto').attr('checked', false);
				jQuery('input#'+propertyBase+'-auto-or-value-value').attr('checked', false);
				// Reset slider
				jQuery('div#'+propertyBase+'-slider').slider('option', 'value', '');
				// Prepare new CSS based on main settings
				//var cssObject = createCssObject('margin');
					
			} else if (jQuery.inArray(propertyBase, paddings) != -1) {
				// Reset input field
				jQuery('input#'+propertyBase).val(''); 
				// Reset slider
				jQuery('div#'+propertyBase+'-slider').slider('option', 'value', '');
				// Prepare new CSS based on main settings
				//cssObject[propertyBase] = jQuery('input#padding').val();
				
			} else if (jQuery.inArray(propertyBase, corners) != -1) {
				// Reset input field
				jQuery('input#'+propertyBase).val(''); 
				// Reset slider
				jQuery('div#'+propertyBase+'-slider').slider('option', 'value', '');
				// Translate radius property name based on browser type
				/*
				var property = translateBorderRadius(propertyBase);
				cssObject[property] = jQuery('input#border-radius').val();
				*/

			} else if (jQuery.inArray(propertyBase, widths) != -1) {
				jQuery('input#width').val(''); 
				jQuery('div#width-slider').slider('option', 'value', '');
				// Uncheck radio buttons
				jQuery('input#widthauto').attr('checked', false);
				jQuery('input#widthvalue').attr('checked', false);
				//cssObject[propertyBase] = 'auto';			

			} else if (jQuery.inArray(propertyBase, heights) != -1) {
				jQuery('input#height').val(''); 
				jQuery('div#height-slider').slider('option', 'value', '');
				// Uncheck radio buttons
				jQuery('input#heightauto').attr('checked', false);
				jQuery('input#heightvalue').attr('checked', false);
				//cssObject[propertyBase] = 'auto';			
				
			} else if (propertyBase == 'font-size') {
				jQuery('input#'+propertyBase).val(''); 
				jQuery('div#'+propertyBase+'-slider').slider('option', 'value', '');
				//cssObject[propertyBase] = 'medium';	
				
			} else if (propertyBase == 'line-height' || propertyBase == 'letter-spacing' || propertyBase == 'word-spacing') {
				jQuery('input#'+propertyBase).val(''); 
				jQuery('div#'+propertyBase+'-slider').slider('option', 'value', '');
				//cssObject[propertyBase] = 'normal';	
				
			} else if (propertyBase == 'text-indent') {
				jQuery('input#'+propertyBase).val(''); 
				jQuery('div#'+propertyBase+'-slider').slider('option', 'value', '');
				//cssObject[propertyBase] = '0px';	
				

			} else if (propertyBase == 'topbottom') {
				jQuery('input#top').val(''); 
				jQuery('input#bottom').val(''); 
				jQuery('div#top-slider').slider('option', 'value', '');
				jQuery('div#bottom-slider').slider('option', 'value', '');
				// Uncheck radio buttons
				jQuery('input#topauto').attr('checked', false);
				jQuery('input#bottomauto').attr('checked', false);
				jQuery('input#topvalue').attr('checked', false);
				jQuery('input#bottomvalue').attr('checked', false);

				//cssObject['top'] = '';	
				//cssObject['bottom'] = '';			

			} else if (propertyBase == 'leftright') {
				jQuery('input#left').val(''); 
				jQuery('input#right').val(''); 
				jQuery('div#left-slider').slider('option', 'value', '');
				jQuery('div#right-slider').slider('option', 'value', '');
				// Uncheck radio buttons
				jQuery('input#leftauto').attr('checked', false);
				jQuery('input#rightauto').attr('checked', false);
				jQuery('input#leftvalue').attr('checked', false);
				jQuery('input#rightvalue').attr('checked', false);			
			}			
			// Apply CSS object in Preview
			//jQuery(selector).css(cssObject);
			applyStyles(selector, propertyBase);		
			// Highlight Save button
			jQuery('input#themeframe-form-save, input#themeframe-form-save2').addClass('highlight-save'); 			
			return false;		
		});	
			
	// Form TABS
	jQuery('ul.tabs li a').live('click', function(){
		var thisClass = this.className.split(' ').slice(0);
		jQuery('div.tf-option-container').hide();
		jQuery('div.' + thisClass).show();
		jQuery('ul.tabs li a').removeClass('tab-current');
		jQuery(this).addClass('tab-current');
	});

	// Preview TABS
	jQuery('ul.preview-tabs li a').live('click', function(){
		jQuery("div#themeframe-form").empty().css("display","none");
		// var thisClass = this.className.split(' ').slice(0);
		var thisSelector = this.className.split(' ').slice(0,1);	
		var thisParameter = this.className.split(' ').slice(1,2);		
		jQuery.ajax({
			type: 	"post", 
			url: 	THFRURL + "ajax.php",
			data: 	'action=tf_pagetemplate&thfrpath=' + THFRPATH  + '&selector=' + thisSelector + '&parameter=' + thisParameter,
			success: function(html){ 
				jQuery("div#tf-preview").html(html).slideDown();				
				// initialize all again
				doAfterPageLoad();	


			} // End of Ajax Success
		}); // End of Ajax
		
		jQuery('ul.preview-tabs li a').removeClass('tab-current');
		jQuery(this).addClass('tab-current');
		// Change Selectorgroup select menu
		jQuery("select#selectorgroup").val(thisSelector);	

		return false;
	});

	// Main Settings TABS
	/*
	jQuery('ul.mainsetting-tabs li a').live('click', function(){
		var thisClass = this.className.split(' ').slice(0);
		var thisSelector = this.className.split(' ').slice(1);
		jQuery('div.tf-mainsettings-container').hide();
		jQuery('div.' + thisClass).show();
		jQuery('ul.mainsetting-tabs li a').removeClass('tab-current');
		jQuery(this).addClass('tab-current');
	});
	*/
	
	// ***********************************************************
	// ***********     SAVE BUTTONS ******************************
	// ***********************************************************
	
	// Save Popup CSS Form:
	jQuery('input#themeframe-form-save').live('click', function() { 
		var selector = jQuery('select#tfcssselector').val();
		var selectorgroup = jQuery('select#selectorgroup').val();
		
		var dataString = 'thfrpath=' + THFRPATH + '&thfruploadpath=' + THFRUPLOADPATH 
		+ '&' + jQuery('form.themeframe-form').serialize() 
		+ '&tfcssselector=' + selector + '&selectorgroup=' + selectorgroup + '&action=tf_save_options';		

		jQuery.ajax({
			type: 	"post", 
			url: 	THFRURL + "ajax.php",
			data: 	dataString,
			success: function(html){ 
				jQuery(".formstatus").html(html).fadeIn("fast").fadeOut(1000); 
				jQuery('input#themeframe-form-save').removeClass('highlight-save highlight-hover');
			}
		}); 	
		return false;
	});

	// Save Drag n Drop Config:
	jQuery('a#save-dragndrop').live('click', function() { 	
	
		var selectorgroup = jQuery('select#selectorgroup').val();
		var header = jQuery('#drop-header').sortable('toArray');
		var centerTop = jQuery('#drop-centerTop').sortable('toArray');
		var centerBottom = jQuery('#drop-centerBottom').sortable('toArray');
		var footer = jQuery('#drop-footer').sortable('toArray');
		var drop = jQuery('#drop-drop').sortable('toArray');
		
		var headerStr = ''; var centerTopStr = ''; var centerBottomStr = ''; var footerStr = ''; var dropStr = '';
		
		for ( var i = 0; i < header.length; i++ ) { headerStr += '&header-' + i + '=' + header[i]; }
		for ( var i = 0; i < centerTop.length; i++ ) { centerTopStr += '&centerTop-' + i + '=' + centerTop[i]; }
		for ( var i = 0; i < centerBottom.length; i++ ) { centerBottomStr += '&centerBottom-' + i + '=' + centerBottom[i]; }
		for ( var i = 0; i < footer.length; i++ ) { footerStr += '&footer-' + i + '=' + footer[i]; }		
		for ( var i = 0; i < drop.length; i++ ) { dropStr += '&drop-' + i + '=' + drop[i]; }		
		
		var dataString = 'thfrpath=' + THFRPATH + '&thfruploadpath=' + THFRUPLOADPATH 
		+ headerStr + centerTopStr + centerBottomStr + footerStr + dropStr 
		+ '&selectorgroup=' + selectorgroup + '&action=tf_save_dragdrop';
	
		jQuery.ajax({
			type: 		"post", 
			url: 		THFRURL + "ajax.php",
			data: 		dataString,
			success: 	function(html)
						{ 
							jQuery("div#dragdropsavesuccess")
								.html(html).fadeIn("fast").fadeOut(1000); 
							jQuery('a#save-dragndrop').removeClass('save-highlight');
						}
		}); 	
		
		return false;
	});

	
	// Save Buttons for: Themeinfo, Layoutwidth, Sidebarwidths, Postinfo, Nextprevnav, etc...
	jQuery('a.save-button').live('click', function() { 
		var selectorgroup = jQuery('select#selectorgroup').val();
		var uniquewidth = jQuery('input#uniquewidth').val();
		var thisID = jQuery(this).attr('id');
		
		if ( thisID == 'save-themeinfo' ) {
			var dataString = jQuery('form#themeinfo').serialize();
		} else if ( thisID == 'save-layoutwidth' ) {
			var dataString = jQuery('form#layout-form').serialize();
		} else if ( thisID == 'save-headerimages' ) {
			var dataString = 'headerimages=' + encodeURIComponent(jQuery('textarea#headerimages').val());
		} else if ( thisID == 'save-customcss' ) {
			var dataString = jQuery('form#customcssform').serialize();
		} else if ( thisID == 'save-customjs' ) {
			var dataString = jQuery('form#customjsform').serialize();
		} else if ( thisID == 'save-footercontent' ) {
			var dataString = 'footercontent=' + encodeURIComponent(jQuery('textarea#footercontent').val());
		} else if ( thisID == 'save-multipagetitles' ) {
			var dataString = 'multipagetitles=' + encodeURIComponent(jQuery('textarea#multipagetitles').val());
		} else if ( thisID == 'save-excerpts' ) {
			var dataString = jQuery('form#excerptsform').serialize();
		} else if ( thisID == 'save-nextprevnav' ) {
			var dataString = jQuery('form#nextprevnavform').serialize();
		} else if ( thisID == 'save-customphp' ) {
			var dataString = jQuery('form#customphpform').serialize();
		} else if ( thisID == 'save-postcontainers' ) {
			var postcontainername = jQuery('input#postcontainername').val();
			var dataString = jQuery('form#postcontainerform').serialize() + '&postcontainername=' + postcontainername;
		} else if ( thisID == 'save-codeinserts' ) {
			var codeinsertarea = jQuery('input#codeinsertarea').val();
			var dataString = jQuery('form#codeinsertform').serialize() + '&codeinsertarea=' + codeinsertarea;
		} else if ( thisID == 'save-sidebarsandcustomwidth' ) {
			var usePostContainer = jQuery('select#usepostcontainer').val();
			var dataString = jQuery('form#sidebar-form').serialize() + '&uniquewidth=' + uniquewidth 
			+ "&usepostcontainer=" + usePostContainer;
		} else if ( thisID == 'save-newdropimage' || thisID == 'edit-newdropimage' ) {
			var dataString = jQuery('form#newimageform').serialize();
		} else if ( thisID == 'save-newdroplink' || thisID == 'edit-newdroplink') {
			var dataString = jQuery('form#newlinkform').serialize();
		} else if ( thisID == 'save-newpagetemplate' ) {
			var dataString = jQuery('form#newpagetemplate').serialize();
		}
		
		jQuery.ajax({
			type: 	"post", 
			url: 	THFRURL + "ajax.php",
			data: 	dataString + '&selectorgroup=' + selectorgroup + '&thisID=' + thisID + '&action=tf_save_options_single',
			success: function(html){ 
				 
				if (thisID == 'save-newdropimage' || thisID == 'edit-newdropimage') {
					jQuery('ul.preview-tabs li a.' + selectorgroup).click();
					jQuery(".formstatus").html(html).fadeIn("fast").fadeOut(6000);
					var imgid = jQuery('input#newimage').val().replace('\.','') + '_custimg';
					jQuery('ul#drop-drop li#' + imgid + ' span.title').effect("highlight", {}, 1000);
					// jQuery('ul#drop-drop li#bulletpng_custimg span.title').effect("highlight", {}, 5000);
				} else if (thisID == 'save-newdroplink' || thisID == 'edit-newdroplink') {
					jQuery('ul.preview-tabs li a.' + selectorgroup).click();
					jQuery(".formstatus").html(html).fadeIn("fast").fadeOut(6000);
					var linkid = jQuery('input#linkid').val().replace('\.','') + '_custlink';
					jQuery('ul#drop-drop li#' + linkid + ' span.title').effect("highlight", {}, 1000);
					// jQuery('ul#drop-drop li#bulletpng_custimg span.title').effect("highlight", {}, 5000);
				} else if (thisID == 'save-newpagetemplate') {
				
					var newTpl = jQuery('select#templatetype').val();
					
					// Avoid empty name:
					if (newTpl == '') {				
						alert('Please choose a template tpye/name first (See step 1)');
						return false;
					}
	
					// If not empty proceed:
					var tplWithVar = ['author-ID','author-NICENAME','category-ID','category-SLUG','MIME_type','page-ID','page-SLUG','single-POSTTYPE','tag-ID','tag-SLUG','taxonomy-TAXONOMY','taxonomy-TAXONOMY-TERM'];
					
					if (newTpl == 'custom') {
						newTpl = jQuery('input[name=filename]').val();
						// Avoid empty name:
						if (newTpl == '') {				
							alert('Please fill in a file name first, for the custom template (See step 1)');
							return false;
						}
					}
					
					else if (jQuery.inArray(newTpl, tplWithVar) != -1) {
						if (newTpl == 'MIME_type') { 
							newTpl = jQuery('input[name=' + newTpl + '-value]').val(); 
						}
						else {
							// Avoid empty name:
							if ( jQuery('input[name=' + newTpl + '-value]').val() == '' ) {				
								alert('Please fill in the missing part of the file name first (See step 1)');
								return false;
							}
							var tplPart = newTpl.split("-");
							newTpl = tplPart[0] + '-' + jQuery('input[name=' + newTpl + '-value]').val();
						}
						// newTpl += '-' + jQuery('input[name=' + newTpl + '-value]').val();				
					}
					
					// If template doesn't exist
					if ( html.indexOf("template exists") == -1 ) {
						jQuery('#addtemplatelink').
							before('<li id="li-' + newTpl + '"><a class="' + newTpl + '">' + newTpl + 
							'.php<span title="Delete ' + newTpl + '.php" class="delpagetpl" id="del-' + newTpl + '"></span></a></li>');
							jQuery(".formstatus").html(html).fadeIn("fast").fadeOut(6000);
					} else {
						alert ( "There is already a template with the file name '" + newTpl + ".php'! Choose another file name.");
						jQuery("input[name=filename]").addClass('red-border');
						return false;
					}
				} else {
					jQuery(".formstatus").html(html).fadeIn("fast").fadeOut(1000);
				}
				
				jQuery('a#' + thisID).removeClass('save-highlight');
			}
		}); 	
		
		// Reload page preview to display new post container
		if ( thisID == 'save-sidebarsandcustomwidth' ) {
			jQuery("ul.preview-tabs li a." + selectorgroup).click();
		}
		
		return false;
	});
	
	// Open DIV with contents of WP Uploads directory when input field #background-image gets focus 	
	jQuery('a#background-image-open').live('click', function() {
		var selector = jQuery('select#tfcssselector').val();
		if (jQuery(this).hasClass('filetreeup')) {
			jQuery('#fileTree').slideUp('fast');
		} else {
			jQuery('#fileTree').
			slideDown('fast').
			fileTree({ 
				root: RELATIVETHFRUPLOADURL, 
				script: THFRURL + 'jqueryFileTree.php?type=image' 
			},	function(file) { 
				jQuery('#background-image').val(file);
				jQuery('#fileTree').slideUp('fast');
				/*
				Change the following to use the default cssObject instead ...
				*/
				var backgrPos = jQuery('select#background-repeat').val();
				jQuery(selector).css({'background-image': 'url(' + file + ')', 'background-repeat': backgrPos});
				
				jQuery('input#themeframe-form-save, input#themeframe-form-save2').addClass('highlight-save');
					jQuery('a#background-image-open').toggleClass('filetreeup');
			});
		}
		jQuery(this).toggleClass('filetreeup');
		return false;
	});
	
	jQuery('#importSettings, a#importSettings-open').live('click', function() {
		if (jQuery('a#importSettings-open').hasClass('filetreeup')) {
			jQuery('#fileTree-importSettings').slideUp('fast');
		} else {
			jQuery('#fileTree-importSettings').
			slideDown('fast').
			fileTree({ 
				root: RELATIVETHFRUPLOADURL, 
				script: THFRURL + 'jqueryFileTree.php?type=txt' 
			},	function(file) { 
				jQuery('#importSettings').val(file);
				jQuery('#fileTree-importSettings').slideUp('fast');
				jQuery('a#importSettings-open').toggleClass('filetreeup');
			});
		}
		jQuery('a#importSettings-open').toggleClass('filetreeup');
		return false;
	});

	jQuery('#exportSettings, a#exportSettings-open').live('click', function() {
		if (jQuery('a#exportSettings-open').hasClass('filetreeup')) {
			jQuery('#fileTree-exportSettings').slideUp('fast');
		} else {
			jQuery('#fileTree-exportSettings').
			slideDown('fast').
			fileTree({ 
				root: RELATIVETHFRUPLOADURL, 
				script: THFRURL + 'jqueryFileTree.php?type=txt' 
			},	function(file) { 
				jQuery('#exportSettings').val(file);
				jQuery('#fileTree-exportSettings').slideUp('fast');
				jQuery('a#exportSettings-open').toggleClass('filetreeup');
			});
		}
		jQuery('a#exportSettings-open').toggleClass('filetreeup');
		return false;
	});



	jQuery('a#resetall').live('click', function() { 
		jQuery.ajax({
			type: 	"post", 
			url: 	THFRURL + "ajax.php",
			data: 	'action=reset_thfr',
			success: function(html){ 
				jQuery("div#resetsuccess").html(html).fadeIn("fast").fadeOut(2500); 
			}
		}); 
		return false;
	});


	jQuery('a#importsettingsnow').live('click', function() {
		var importFile = jQuery('input#importSettings').val();
		if ( importFile != '') {
			jQuery.ajax({
				type: 	"post", 
				url: 	THFRURL + "ajax.php",
				data: 	'importFile=' + importFile + '&thfrpath=' + THFRPATH + 
						'&thfruploadpath=' + THFRUPLOADPATH + '&action=tf_import_settings_now',
				success: function(html){ 
					jQuery("div#importsuccesssettings").html(html).fadeIn(7500).fadeOut(2500); 
				}
			}); 
		} else {
			alert('Choose or upload an import file first');
		}
		return false;
	});

	// Transfer per FTP
	jQuery('a#ftpsubmit, a#ftptestsubmit').live('click', function() { 
		thisID = jQuery(this).attr('id');
		if (thisID == 'ftpsubmit') { jQuery("div#ftpmessages").hide(); }
		else { jQuery("div#ftptestmessages").hide(); }
		jQuery('#' + thisID + '-loading').show();
		jQuery.ajax({
			type: 	"post", 
			url: 	THFRURL + "ajax.php",
			data: 	jQuery('form#ftpform').serialize() + '&transfertype=' + thisID + 
					'&thfruploadpath=' + THFRUPLOADPATH + '&thfrpath=' + THFRPATH + '&action=tf_ftp_transfer',
			success: function(html){ 
				jQuery('#' + thisID + '-loading').hide();
				if (thisID == 'ftpsubmit') {
					jQuery("div#ftpmessages").html(html).fadeIn("fast");
				} else {
					jQuery("div#ftptestmessages").html(html).fadeIn("fast");
				}
			}
		}); 
		return false;
	});







	/* "change" is not supposed to work with "live"... */
	jQuery('.themeframe-form select, .themeframe-form input[type=text]').live('change', function() {
		var selector = jQuery('select#tfcssselector').val();
		var property = this.id;	
		var value = jQuery(this).val();
		applyStyles(selector, property, value);
	});
	
	jQuery('.themeframe-form input[type=radio]').live('click', function() {
		var selector = jQuery('select#tfcssselector').val();
		var property = this.id;	
		var value = jQuery(this).val();
		applyStyles(selector, property, value);
	});

	/* not used yet: */
	jQuery('#applyCustomCss').live('click', function(e) {
		var selector = jQuery('select#tfcssselector').val();
		var cssObject = Object();
		var cssName = null;
		var cssValue = null;
		var cssAttributeString = jQuery('#customCssTextArea').val();
		var cssAttributeArray = cssAttributeString.split(";");
		for (var i = 0 ; i < cssAttributeArray.length ; i++){
			cssName = jQuery.trim(cssAttributeArray[i].substring(0,cssAttributeArray[i].indexOf(":")));
			cssValue = jQuery.trim(cssAttributeArray[i].substring(cssAttributeArray[i].indexOf(":") + 1, cssAttributeArray[i].length)); 
			cssObject[cssName] = cssValue;    
		}
		jQuery(selector).css(cssObject);
		return false;
	});

	
	
	
	
// End document ready:
})
