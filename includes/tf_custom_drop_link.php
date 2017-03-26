<?php 
function tf_custom_drop_link($id) {

	global $thfr_css;
		
	$string = '<li class="custlink" id="' . $id . '_custlink"><span class="title">' . $id . 
	' <a title="DELETE" href="#" dropgroup="customdroplinks" class="dropitem-delete" id="' . $id . '">&nbsp;</a>' . 
	' <a title="EDIT" href="#" dropgroup="customdroplinks" class="dropitem-edit" id="' . $id . '">&nbsp;</a>' . 
	'</span><span class="content">';
	
	$string .= '<a href="#" id="' . $id . '" selector="a#' . $id . '">';
	
	$string .= $thfr_css['customdroplinks'][$id]['linktext'];

	$string .= '</a></span></li>';
	
	return $string;
	
} ?>