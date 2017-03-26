function applySidebars() {
	var sidebarleft = jQuery('select#sidebarsleft').val();
	var sidebarright = jQuery('select#sidebarsright').val()

	var LeftLeft = jQuery('input#left-left-width').val();
	var LeftRight = jQuery('input#left-right-width').val();
	var Left = parseInt(jQuery('input#left-left-width').val().replace('px','')) + 
		parseInt(jQuery('input#left-right-width').val().replace('px','')) + 'px';
	var RightLeft = jQuery('input#right-left-width').val();
	var RightRight = jQuery('input#right-right-width').val();
	var Right = parseInt(jQuery('input#right-left-width').val().replace('px','')) + 
		parseInt(jQuery('input#right-right-width').val().replace('px','')) + 'px';	

	/*
	var LeftLeft = "150px";
	var LeftRight = "150px";
	var Left = "300px";
	var RightLeft = "150px";
	var RightRight = "150px";
	var Right = "300px";
	*/
		
	if ( jQuery('input#uniquewidth').val() != '' ) {
		jQuery('div#wrapper').css('width', jQuery('input#uniquewidth').val() + 'px');
	} else {
		if ( jQuery('input#layoutfixed').attr('checked') && jQuery('input#layout-pixels').val() != '' ) {
			jQuery('div#wrapper').css('width', jQuery('input#layout-pixels').val() + 'px');
		} else {
			jQuery('div#wrapper').css('width', jQuery('input#layout-percent').val() + '%');	
		}
	}
	
	if ( sidebarleft == '0') { 
		jQuery('td#td-left').css('display', 'none'); 
		jQuery('col.col-left').css('display', 'none');
	}
	else if ( sidebarleft == '1') { 
		jQuery('td#td-left').css('display', 'table-cell');
		jQuery('col.col-left').css({'display':'table-column','width':LeftLeft});
		jQuery('td#td-left1').css('display', 'table-cell');
		jQuery('col.col-left-left').css({'display':'table-column','width':LeftLeft});
		jQuery('td#td-left2').css('display', 'none');
		jQuery('col.col-left-right').css('display', 'none');
		jQuery('td#td-left3').css('display', 'none');
	}
	else if ( sidebarleft == '2') { 
		jQuery('td#td-left').css('display', 'table-cell');
		jQuery('col.col-left').css({'display':'table-column','width':Left});
		jQuery('td#td-left1').css('display', 'table-cell');
		jQuery('col.col-left-left').css({'display':'table-column','width':LeftLeft});
		jQuery('td#td-left2').css('display', 'table-cell');
		jQuery('col.col-left-right').css({'display':'table-column','width':LeftRight});
		jQuery('td#td-left3').css('display', 'none');
	}
	else if ( sidebarleft == '3') { 
		jQuery('td#td-left').css('display', 'table-cell');
		jQuery('col.col-left').css({'display':'table-column','width':Left});
		jQuery('td#td-left1').css('display', 'table-cell');
		jQuery('col.col-left-left').css({'display':'table-column','width':LeftLeft});
		jQuery('td#td-left2').css('display', 'table-cell');
		jQuery('col.col-left-right').css({'display':'table-column','width':LeftRight});
		jQuery('td#td-left3').css('display', 'table-cell');
	}
	if ( sidebarright == '0') { 
		jQuery('td#td-right').css('display', 'none'); 
		jQuery('col.col-right').css('display', 'none');
	}
	else if ( sidebarright == '1') { 
		jQuery('td#td-right').css('display', 'table-cell');
		jQuery('col.col-right').css({'display':'table-column','width':RightRight});
		jQuery('td#td-right1').css('display', 'table-cell');
		jQuery('col.col-right-right').css({'display':'table-column','width':RightRight});
		jQuery('td#td-right2').css('display', 'none');
		jQuery('col.col-right-left').css('display', 'none');
		jQuery('td#td-right3').css('display', 'none');
	}
	else if ( sidebarright == '2') { 
		jQuery('td#td-right').css('display', 'table-cell');
		jQuery('col.col-right').css({'display':'table-column','width':Right});
		jQuery('td#td-right1').css('display', 'table-cell');
		jQuery('col.col-right-right').css({'display':'table-column','width':RightRight});
		jQuery('td#td-right2').css('display', 'table-cell');
		jQuery('col.col-right-left').css({'display':'table-column','width':RightLeft});
		jQuery('td#td-right3').css('display', 'none');
	}
	else if ( sidebarright == '3') { 
		jQuery('td#td-right').css('display', 'table-cell');
		jQuery('col.col-right').css({'display':'table-column','width':Right});
		jQuery('td#td-right1').css('display', 'table-cell');
		jQuery('col.col-right-right').css({'display':'table-column','width':RightRight});
		jQuery('td#td-right2').css('display', 'table-cell');
		jQuery('col.col-right-left').css({'display':'table-column','width':RightLeft});
		jQuery('td#td-right3').css('display', 'table-cell');
	}
}	
