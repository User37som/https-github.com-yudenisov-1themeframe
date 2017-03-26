<div class="infocontainer-head">
	<h2 style="float:left;padding-right:30px">Global Typography <strong>Images</strong></h2>
	<a href="#" class="moreinfolink" id="imagestylemore">Show/Hide More Info</a>
</div>
<div id="imagestylemore-container" class="infocontainer">
	<div style="width:198px" class="infocaption">
	<img src="<?php echo THFRURL; ?>images/imageelementselect.gif" />
	<p>Use the select menu on the top right if needed</p>
	</div>

	<h3>Images are pre-styled</h3>
	<p>Images in posts and pages already have a basic styling. If you're happy with that 
	then you don't need to do anything on this page.</p>

	<h3>Right-click elements to select and style them</h3>
	<p>Move your mouse over the 8 sample images below, then right-click on the element 
	that you want to style (the image itself, the caption, etc...), adjust its CSS settings 
	inside the little CSS window that pops up.</p>

	<h3>Use the select menu if needed</h3>
	<p>If you cannot select a certain element of the sample images below with the mouse 
	(because the element is hidden behind another element) then use the select menu on the top right of this page 
	 to select that element.</p>

	<div style="width:260px;" class="infocaption">
	<img src="<?php echo THFRURL; ?>images/captionpadding.gif" />
	<p>In WordPress, images with caption are wrapped into a DIV with fixed pixel width</p>
	</div>

	<h3>In WordPress, there are 8 ways to insert images into posts</h3>
	<p>In Wordpress you can insert images into posts and pages with 4 different alignments (left, right, centered, none), 
	and with or without "caption" (= text below the image). This results in 8 different image types:</p>
	<ol>
		<li>Images without alignment</li>
		<li><strong>Left</strong>-aligned images</li>
		<li><strong>Right</strong>-aligned images</li>
		<li><strong>Centered</strong> images</li>
		<li>Images without alignment, but with <strong>caption</strong></li>
		<li><strong>Left</strong>-aligned images with <strong>caption</strong></li>
		<li><strong>Right</strong>-aligned images with <strong>caption</strong></li>
		<li><strong>Centered</strong> images with <strong>caption</strong></li>
	</ol>

	<h3>8 different image types means 8 possible sets of CSS rules</h3>
	<p>Some basic CSS has already been set for these 8 image types, mainly the space (= "margin") between 
	(a) the images and (b) the text that flows around them. But you may for instance want to style the 
	caption of images with caption (image #5 - #8) differently.</p>

	<h3>DIV's around "images with caption" (images #5 - #8) have a pixel width:</h3>
	<p>See the green illustration image: The way images with caption are created by WordPress may be unexpected. 
	The left and right space between the image and the DIV around the image looks like a padding but is caused 
	by a fixed pixel width on the DIV: The DIV is 10 pixels wider than the image, and the image is centered. 
	This is something to keep in mind when trying to change the left and right "padding" on images with caption.</p>

	<h3>Use image #1 to "group-style" image #1 - #4</h3>
	<p>Image #1 represents the most basic image you can insert into posts and pages: it has neither alignment nor caption. 
	Its CSS selector is "<code>p img</code>", which means "all images inside paragraphs". All styles that you apply on image #1 
	will affect the image types #2 - #4 as well because they are also "images inside paragraphs".</p>
</div><!-- / imagestylemore-container -->


<?php if (!in_array($thisTemplate, array('global', 'themeinfo', 'layoutwidth', 'customwidgetareas', 'headerimages', 
	'postinfo', 'readmore', 'footercontent', 'multipagetitles', 'commenttext', 'nextprevnav', 'customcss', 'customjs', 
	'customjquery', 'customphp', 'customhead', 'custombodytag', 'custombodytop', 'custombodybottom'))) { ?>
<div class="livepreviewinfo">
	<div class="livepreview"><span>LIVE PREVIEW BELOW</span> <a href="#" class="dialogicon" id="livepreviewinfo">?</a></div>
	<div style="float:right">
		CSS Selector list <a href="#" class="dialogicon" id="selectorlistinfo">?</a>  
		<select style="margin-left:10px" name="tfcssselector" id="tfcssselector">
			<?php tf_selectors($thisTemplate); ?>
		</select>
	</div>
</div>
<?php } ?>


<!-- Preview Posts -->
<div class="tf-preview-container tf-preview-images">

<div class="index">
<div id="wrapper">
<div id="container">

<table id="layout" border="0" cellspacing="0" cellpadding="0">
<tr>
<td id="td-center">
	<div id="div-center">
	
		<div class="post">

			<div class="post-bodycopy clearfix">
				

<h3>Here are the 8 image types. Right-Click on any of the 8 sample images below to change their style:</h3>
<p>Morbi id quam eu ipsum vestibulum euismod cursus a nunc. Proin lacinia dolor eu augue tincidunt vel semper 
quam dignissim. Proin faucibus sodales erat sit amet aliquet. Donec eu porttitor dolor. Vestibulum metus justo, 
gravida vel malesuada porttitor, venenatis a erat. Aenean eu nisl sem, ullamcorper porta mi.</p>
<p><img class="alignnone" selector="p img" src="<?php echo THFRURL; ?>images/image-none.gif" width="350" height="150" /></p>
<p>Mauris et ligula nunc, sollicitudin cursus nunc. Sed in ante eget est egestas vehicula. Nullam id fringilla lectus. 
Aliquam varius elit sit amet purus imperdiet ornare. Sed imperdiet porttitor eleifend. Aliquam a est turpis, 
id tristique felis. Duis at risus vitae nulla sollicitudin imperdiet.</p>
<p>
<img class="alignleft" selector="img.alignleft" src="<?php echo THFRURL; ?>images/image-left.gif" width="150" height="120" />
<img class="alignright" selector="img.alignright" src="<?php echo THFRURL; ?>images/image-right.gif" width="150" height="120" />
Mauris et ligula nunc, sollicitudin cursus nunc. Sed in ante eget est egestas vehicula. Nullam id fringilla lectus. 
Aliquam varius elit sit amet purus imperdiet ornare. Sed imperdiet porttitor eleifend. Aliquam a est turpis, id tristique felis. 
Duis at risus vitae nulla sollicitudin imperdiet.
Mauris et ligula nunc, sollicitudin cursus nunc. Sed in ante eget est egestas vehicula. Nullam id fringilla lectus. 
Aliquam varius elit sit amet purus imperdiet ornare. Sed imperdiet porttitor eleifend. Aliquam a est turpis, id tristique felis. 
Duis at risus vitae nulla sollicitudin imperdiet.
Mauris et ligula nunc, sollicitudin cursus nunc. Sed in ante eget est egestas vehicula. Nullam id fringilla lectus. 
Aliquam varius elit sit amet purus imperdiet ornare. Sed imperdiet porttitor eleifend. Aliquam a est turpis, id tristique felis. 
Duis at risus vitae nulla sollicitudin imperdiet.
Mauris et ligula nunc, sollicitudin cursus nunc. Sed in ante eget est egestas vehicula. Nullam id fringilla lectus. 
Aliquam varius elit sit amet purus imperdiet ornare. Sed imperdiet porttitor eleifend. Aliquam a est turpis, id tristique felis. 
Duis at risus vitae nulla sollicitudin imperdiet.
Mauris et ligula nunc, sollicitudin cursus nunc. Sed in ante eget est egestas vehicula. Nullam id fringilla lectus. 
Aliquam varius elit sit amet purus imperdiet ornare. Sed imperdiet porttitor eleifend. Aliquam a est turpis, id tristique felis. 
Duis at risus vitae nulla sollicitudin imperdiet.
</p>
<p><img class="aligncenter" selector="img.aligncenter" src="<?php echo THFRURL; ?>images/image-center.gif" width="350" height="150" /></p>
<p>Nam dui magna, viverra eget pretium vitae, lobortis et nibh. Etiam molestie pretium ligula ac euismod. 
Fusce bibendum, dui at pretium vulputate, leo velit viverra tortor, vitae rutrum lacus diam eu augue. 
Integer elementum, turpis sed suscipit blandit, erat felis rutrum magna, sit amet tincidunt augue mi id nulla.</p>
<div selector="div.wp-caption" class="wp-caption alignnone" style="width: 360px">
<img selector="div.wp-caption img" src="<?php echo THFRURL; ?>images/image-none-caption.gif" width="350" height="150" />
<p class="wp-caption-text" selector="p.wp-caption-text">Some caption text</p>
</div>
<p>Nunc venenatis mi ut tortor porta ultricies. Maecenas sit amet magna et leo tempus pulvinar. 
Sed volutpat nibh sit amet odio fermentum sed mollis sapien rutrum. Etiam eget sem ac augue iaculis ullamcorper vel eu sapien. 
Donec aliquam nisi eu arcu ultricies eget tincidunt quam mollis. Etiam gravida semper libero. Phasellus posuere hendrerit placerat. 
Maecenas eget ante eu urna sodales auctor sed a erat. In hac habitasse platea dictumst. Integer eget dui ut diam gravida fermentum. 
Aenean in posuere mi. Etiam a augue mi.
</p>

<div selector="div.wp-caption" class="wp-caption alignleft" style="width: 160px">
<img selector="div.wp-caption img" src="<?php echo THFRURL; ?>images/image-left-caption.gif" width="150" height="120" />
<p class="wp-caption-text" selector="p.wp-caption-text">Some caption text</p>
</div>
<div selector="div.wp-caption" class="wp-caption alignright" style="width: 160px">
<img selector="div.wp-caption img" src="<?php echo THFRURL; ?>images/image-right-caption.gif" width="150" height="120" />
<p class="wp-caption-text" selector="p.wp-caption-text">Some caption text</p>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam est risus, tempor ac hendrerit vitae, mollis porttitor justo. 
Aenean quam diam, ultricies aliquam malesuada nec, sagittis ac nibh. Donec at metus justo, at congue lorem. Quisque nisl augue, 
porta vitae laoreet vel, lacinia ac est. Vestibulum ornare felis viverra ligula porta lobortis. Sed lorem nibh, lacinia pharetra 
euismod sit amet, tristique vitae lacus. Praesent in urna est, eleifend fringilla sem. Duis fermentum ipsum bibendum urna 
condimentum semper. Maecenas id tempus orci. Vestibulum orci nisi, varius eget dignissim non, rhoncus et ante.</p>
<p>Nulla nisl metus, lobortis eu vehicula in, scelerisque lacinia ligula. Nulla eget leo ligula. Phasellus vestibulum, 
ante et posuere mattis, purus est fringilla velit, sed ornare eros ligula ut sem. Proin non convallis velit. 
Nunc vestibulum dignissim ornare. Mauris convallis dolor et ante aliquet iaculis. Suspendisse malesuada 
tempus libero vitae fringilla. Cras nibh ante, malesuada quis euismod quis, dapibus placerat justo. 
Integer vestibulum adipiscing arcu, a aliquet risus tincidunt sed. Quisque in arcu lectus. Cras tellus ante, 
eleifend ut imperdiet sed, malesuada et odio. Pellentesque ac volutpat enim. Donec molestie leo et felis commodo ac 
viverra turpis laoreet. Nulla adipiscing placerat lectus, vitae hendrerit purus tempus ac.</p>
<div selector="div.wp-caption" class="wp-caption aligncenter" style="width: 360px">
<img selector="div.wp-caption img" src="<?php echo THFRURL; ?>images/image-center-caption.gif" width="350" height="150" />
<p class="wp-caption-text" selector="p.wp-caption-text">Some caption text</p>
</div>

<p>Nam dui magna, viverra eget pretium vitae, lobortis et nibh. Etiam molestie pretium ligula ac euismod. 
Fusce bibendum, dui at pretium vulputate, leo velit viverra tortor, vitae rutrum lacus diam eu augue. 
Integer elementum, turpis sed suscipit blandit, erat felis rutrum magna, sit amet tincidunt augue mi id nulla.</p>


				
			</div>
		</div><!-- Post -->

</div><!-- / div#div-cnter -->
</td>
</tr>
</table>

</div>
</div>
</div>
</div>
