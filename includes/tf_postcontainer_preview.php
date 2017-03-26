<?php function tf_postcontainer_preview($thisTemplate, $body_class) { 

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

	ob_start(); 
?>
		%thumbpos-1%

		<div class="post" selector="div.post">

		%thumbpos-2%
		
<?php if( $kickercheck == 'on' ) { ?>		
			<div class="post-kicker" selector="div.post-kicker">
				Section heading with <a href="#" selector="div.post-kicker a">link</a> 
				and <a class="hover" href="#" selector="div.post-kicker a.hover">hovered</a>
			</div>
<?php } ?>

		%thumbpos-3%
		
<?php if( $headlinecheck == 'on' ) { ?>	
			<div class="post-headline" selector="div.post-headline">
				<h2 selector="div.post-headline h2">
					<a href="#" selector="div.post-headline h2 a">Post Headline</a> 
					<a class="hover" href="#" selector="div.post-headline h2 a.hover">Hovered</a>
				</h2>
			</div>
<?php } ?>

		%thumbpos-4%
		
<?php if( $bylinecheck == 'on' ) { ?>	
			<div class="post-byline" selector="div.post-byline">
				Post Byline with <a href="#" selector="div.post-byline a">a link</a> and a 
				<a class="hover" href="#" selector="div.post-byline a.hover">Hovered Link</a>.
			</div>
<?php } ?>

		%thumbpos-5%
		
<?php if( $contentcheck == 'on' ) { ?>				
			<div class="post-bodycopy" selector="div.post-bodycopy">
			
		%thumbpos-6%

			<?php if( $contenttype == 'excerpt' ) { ?>		
				<p selector="div.post-bodycopy p">
					Start of excerpt. Note that in automatic excerpts <a href="#" selector="div.post-bodycopy a">links</a> will be stripped by WP, 
					just as all other HTML tags. The <a href="#" selector="div.post-bodycopy a">links</a> and 
					<a href="#" class="hover" selector="div.post-bodycopy a.hover">hovered links</a> are still here so you can style them. <em>(And you might have a 
					plugin running that prevents the HTML stripping in auto excerpts).</em> Lorem ipsum dolor sit amet, consetetur sadipscing <!-- 55 words -->
					<span class="readmore" selector="span.readmore">[...] &rarr; Continue Reading <a href="#" selector="span.readmore a">link to full post</a></span>
				</p>
			<?php } else { ?>
				<p selector="div.post-bodycopy p">
					Start of first &lt;p&gt;. Etiam cursus sodales <a href="#" selector="div.post-bodycopy a">link</a>. Nullam convallis feugiat orci sit amet luctus. 
					Quisque sit <a href="#" class="hover" selector="div.post-bodycopy a.hover">hovered link here</a>, vitae blandit ante.
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 					
				</p>
				<p selector="div.post-bodycopy p">
					Start of second &lt;p&gt;. Etiam cursus sodales <a href="#" selector="div.post-bodycopy a">link</a>. Nullam convallis feugiat orci sit amet luctus. 
					Quisque sit <a href="#" class="hover" selector="div.post-bodycopy a.hover">hovered link here</a>, vitae blandit ante.
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 					
				</p>
				<p selector="div.post-bodycopy p">
					Start of third &lt;p&gt;. Etiam cursus sodales <a href="#" selector="div.post-bodycopy a">link</a>. Nullam convallis feugiat orci sit amet luctus. 
					Quisque sit <a href="#" class="hover" selector="div.post-bodycopy a.hover">hovered link here</a>, vitae blandit ante.
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 					
				</p>
				
			<?php } ?>
			
		%thumbpos-7%
		
			</div>
<?php } ?>

		%thumbpos-8%
		
<?php if( $footercheck == 'on' ) { ?>
			<div class="post-footer" selector="div.post-footer">
				Post Footer with a <a href="#" selector="div.post-footer a">link</a> and <a class="hover" 
				href="#" selector="div.post-footer a.hover">a hovered Link</a>. 
			</div>
<?php } ?>

		%thumbpos-9%
		
		</div><!-- Post -->

		%thumbpos-10%		
<?php 

	$string = ob_get_contents(); 
	ob_end_clean();
	
	if( $thumbcheck == 'on' ) {
		// Add Thumb Code:
		if( $thumbalign != 'none' ) {
			$thumbcss = " align$thumbalign";
		}
		$thumbcode = '<img src="/themeframe/images/postthumb.gif" class="postthumb' . $thumbcss . '" selector="img.postthumb" />';
		$thumbreplace = '%thumbpos-' . $thumbpos . '%';
		$string = str_replace($thumbreplace, $thumbcode, $string);
	}
	
	// Remove remaining Thumb placeholders
	$string = preg_replace("/%thumbpos-(.*)%/i", "", $string);	
	$string = str_replace('selector="', 'selector="' . $body_class, $string);
	return $string;
	
} ?>