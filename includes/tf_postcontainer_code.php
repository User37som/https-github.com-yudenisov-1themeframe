<?php 
function tf_postcontainer_code($thisTemplate) {

	global $thfr_css;
	
	$thisCon = $thfr_css[$thisTemplate]['usepostcontainer'];

	extract($thfr_css['postcontainers'][$thisCon]);

	/*
	$thfr_css['postcontainers'][$thisParameter]['thumbcheck']
	$thfr_css['postcontainers'][$thisParameter]['thumbsize']
	$thfr_css['postcontainers'][$thisParameter]['thumbpos']
	$thfr_css['postcontainers'][$thisParameter]['thumbalign']
	$thfr_css['postcontainers'][$thisParameter]['kickercheck']
	$thfr_css['postcontainers'][$thisParameter]['kickercode']
	$thfr_css['postcontainers'][$thisParameter]['headlinecheck']
	$thfr_css['postcontainers'][$thisParameter]['headlinecode']
	$thfr_css['postcontainers'][$thisParameter]['bylinecheck']
	$thfr_css['postcontainers'][$thisParameter]['bylinecode']
	$thfr_css['postcontainers'][$thisParameter]['contentcheck']
	$thfr_css['postcontainers'][$thisParameter]['contenttype']
	$thfr_css['postcontainers'][$thisParameter]['thecontent']
	$thfr_css['postcontainers'][$thisParameter]['linkpages']
	$thfr_css['postcontainers'][$thisParameter]['footercheck']
	$thfr_css['postcontainers'][$thisParameter]['footercode']
	*/

	$string = '%thumbpos-1%<div <?php post_class() ?> id="post-<?php the_ID(); ?>">%thumbpos-2%' . "\n";

	if( $kickercheck == 'on' ) $string .= '<div class="post-byline">' . $kickercode . '</div>' . "\n";

	$string .= '%thumbpos-3%' . "\n";
		
	if( $headlinecheck == 'on' ) $string .= '<div class="post-headline">' . $headlinecode . '</div>' . "\n";

	$string .= '%thumbpos-4%' . "\n";
		
	if( $bylinecheck == 'on' ) $string .= '<div class="post-byline">' . $bylinecode . '</div>' . "\n";

	$string .= '%thumbpos-5%' . "\n";
		
	if( $contentcheck == 'on' ) { 
		$string .= '<div class="post-bodycopy clearfix">%thumbpos-6%' . "\n";
		if( $contenttype == 'excerpt' ) {
			$string .= '<?php the_excerpt(); ?>' . "\n";
		} else {
			$string .= $thecontent . "\n";
			$string .= $linkpages . "\n";
		}
		$string .= '%thumbpos-7%</div>' . "\n";
	}

	$string .= '%thumbpos-8%' . "\n";
	
	if( $footercheck == 'on' ) $string .= '<div class="post-footer">' . $footercode . '</div>' . "\n";

	$string .= '%thumbpos-9%</div>%thumbpos-10%' . "\n";


	
	if( $thumbcheck == 'on' ) {
		// Add Thumb Code:
		$thumbcode = '<?php if( function_exists("the_post_thumbnail") AND !function_exists("tfe_get_image") ) the_post_thumbnail( "thumbnail", array("class" => "align' . $thumbalign . ' postthumb") ); ?>';
		$thumbreplace = '%thumbpos-' . $thumbpos . '%';
		$string = str_replace($thumbreplace, $thumbcode, $string);
	}
	
	// Remove remaining Thumb placeholders
	$string = str_replace( array (
		'%thumbpos-1%', '%thumbpos-2%', '%thumbpos-3%', '%thumbpos-4%', '%thumbpos-5%', '%thumbpos-6%', '%thumbpos-7%', '%thumbpos-8%', '%thumbpos-9%', '%thumbpos-10%'), 
		'', $string);	
	
	return $string;

}
?>