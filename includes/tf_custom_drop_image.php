<?php 
function tf_custom_drop_image($id) {

	global $thfr_css;
	
	// $name = "my-imagegif
	
	$filename = $thfr_css['customdropimages'][$id]['file'];

	$string = '<li class="custimg" id="' . $id . '_custimg"><span class="title">' . $filename . 
	' <a title="DELETE" href="#" dropgroup="customdropimages" class="dropitem-delete" id="' . $id . '">&nbsp;</a>' .
	' <a title="EDIT" href="#" dropgroup="customdropimages" class="dropitem-edit" id="' . $id . '">&nbsp;</a>' . 
	'</span><span class="content">';
	
	if( $thfr_css['customdropimages'][$id]['link'] == 'on' ) $string .= '<a href="#" id="' . $id . '-link" selector="a#' . $id . '-link">';
	
	$string .= '<img id="' . $id . '" selector="img#' . $id . '" src="/themeframe/uploads/' . $filename . '" />';

	if($thfr_css['customdropimages'][$id]['link'] == 'on') $string .= '</a>';
	
	$string .= '</span></li>';
	
	return $string;
	
} ?>