<?php 

/*
functions.php:

function new_excerpt_length($length) {
	$file = basename(__FILE__);
	
	if($file == 'index') return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');


tf_excerpt($file = basename(__FILE__), 




*/

function tf_close_tags( $string ) {
	// Opened tags into array
	preg_match_all ( "#<([a-z]+)( .*)?(?!/)>#iU", $string, $result );
	$openedtags = $result[1];
	// Closed tags into array
	preg_match_all ( "#</([a-z]+)>#iU", $string, $result );
	$closedtags = $result[1];
	
	$len_opened = count ( $openedtags );
	# all tags are closed
	if( count ( $closedtags ) == $len_opened ) {
		return $string;
	}
	
	$openedtags = array_reverse ( $openedtags );
	# close tags
	for( $i = 0; $i < $len_opened; $i++ ){
		if ( !in_array ( $openedtags[$i], $closedtags ) ) {
			$string .= "</" . $openedtags[$i] . ">";
		} else {
			unset ( $closedtags[array_search ( $openedtags[$i], $closedtags)] );
		}
	}
	return $string;
}
	
function tf_cut_string( $string, $length, $unit ) {
	// Letters
	if ($unit = 'letters') {
		if( strlen($string) > $length ) {
			$new_string = '';
			$letters = str_split($string);
			for ($i = 1; $i <= $length; $i++) {
				$new_string .= $letters[$i];
			}
			
		} else {
			$new_string = $string;
		}
	// Words
	} else {
		if( str_word_count($string) > $length ) {
			$words = 
		}
	
	}




}


// Custom Excerpts 
function tf_excerpt($length, $unit, $more, $dontStrip, $cutManual, $stripManual, $cutTeaser, $stripTeaser) { 

	global $post;

	// Replace variables in "Read more" string
	$more = str_replace(array('%url%', '%title%'), array(get_permalink(), the_title('','',FALSE)), $more);

	//  1. A manual excerpt exists, just stick on the 'custom read more' and we're done	
	if( !empty($post->post_excerpt) ) {
		$excerpt = $post->post_excerpt;
		if( $cutManualExcerpt == TRUE ) {
			if( $lengthUnit == 'letters' ) {
				if( strlen($excerpt) > $length ) {
				
				}
			}
		}
		return $post->post_excerpt . $more;
	}

	
	$mycontent = $post->post_excerpt;
	$mycontent = $post->post_content;
	$mycontent = strip_shortcodes($content);
	$mycontent = str_replace(']]>', ']]&gt;', $mycontent);
	$mycontent = strip_tags($mycontent);
	$excerpt_length = 55;
	$words = explode(' ', $mycontent, $excerpt_length + 1);
	if(count($words) > $excerpt_length) :
	array_pop($words);
	array_push($words, '...');
	$mycontent = implode(' ', $words);
	endif;
	$mycontent = '<p>' . $mycontent . '</p>';

	return $mycontent;


	
	
	
	
	
	
	# $text = get_the_content('');
	$text = $post->post_content;
	$words = preg_split ("/\s+/", $text);
	$post_content = $post->post_content;
	$post_content_length = count(preg_split("/\s+/", $post_content));
 
 	//  use the teaser and its 'read more'
	if (count($words) < $post_content_length) {	
		$bfa_ata_more_tag_final = str_replace("%post-title%", the_title('', '', false), $bfa_ata['more_tag']);
		$text = the_content($bfa_ata_more_tag_final); 
		return $text;
	} else {

// Build the excerpt from the post 
		$text = apply_filters('the_content', $text);
 		$text = str_replace(']]>', ']]&gt;', $text);
		$text = strip_tags($text, $bfa_ata['dont_strip_excerpts']);
		$excerpt_length = $bfa_ata['excerpt_length'];
		$words = preg_split("/\s+/", $text, $excerpt_length + 1);

// this is to handle the case where the number of words 
// in the post equals the excerpt length
 		if ($post_content_length > $excerpt_length) {	
 			array_pop($words);	
  			array_pop($words);	
			$custom_read_more = str_replace('%permalink%', get_permalink(), $bfa_ata['custom_read_more']);
			$custom_read_more = str_replace('%title%', the_title('','',FALSE), $custom_read_more);
			array_push($words, $custom_read_more);
 		}
		$text = implode(' ', $words);
		return $text;
		}

	return $text;
}



function tf_excerpt($length,$more,$strip) {

	global $post;

	// 1. Manual excerpt exists
	if ( !empty($post->post_excerpt) ) {
		return $post->post_excerpt;
	} 
	
	// 2. "More" tag exists
	else if (strpos($post->post_content, '<!--more-->') !== FALSE OR strpos($post->post_content, '<!--more ') !== FALSE) {
		ob_start(); 
			the_content(''); 
			$content = ob_get_contents(); 
		ob_end_clean();	
		return $content;
	}
	
	// 3. Automatic excerpt
	else {
	
	
	
	}

}
?>

