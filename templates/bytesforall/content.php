
<!-- Preview Posts -->
<div class="tf-preview-container tf-preview-content">

<div class="index" selector="div.index">
<div id="wrapper">
<div id="container" selector="div#container">

<table id="layout" border="0" cellspacing="0" cellpadding="0">
<tr>
<td id="td-center" selector="td#td-center">
	<div id="div-center" selector="div#div-center">
	
		<div class="post" selector="div.post">

			<div class="post-bodycopy clearfix" selector="div.post-bodycopy">
				
				
<p selector="div.post-bodycopy p">
<h2 style="color:green">If you're happy with the way images are displayed inside posts or pages then you don't need to do anything on this page here.
</h3>
In Wordpress you can insert images into posts and pages with 4 different alignments (left, right, centered, none), and with or without "caption" (= text below the image). 
This results in 8 different image types:
<table><tr><td valign="top" width="350">
<h3>8 "image inside post" types in WordPress:</h3>
<ol>
<li>Images without alignment</li>
<li><strong>Left</strong>-aligned images</li><li><strong>Right</strong>-aligned images</li><li><strong>Centered</strong> images</li>
<li>Images without alignment, but with <strong>caption</strong></li>
<li><strong>Left</strong>-aligned images with <strong>caption</strong></li>
<li><strong>Right</strong>-aligned images with <strong>caption</strong></li>
<li><strong>Centered</strong> images with <strong>caption</strong></li>
</ol>
</td><td valign="top">
<h3>8 different image types means 8 possible sets of CSS rules</h3>
On this page here 
you can style the 8 different image types. To do this, right-click on any of the 8 sample images below and adjust their CSS settings inside 
the little CSS window that pops up.<br /><br />Some basic CSS has already been set for these 8 image types, mainly the space (= "margin") between the images and the 
text that flows around them, but you may for instance want to style the images with caption (image #5 - #8) differently.
</td>
</tr>
</table> 
<br />
<table><tr><td valign="top" style="padding-right:15px">
<img class="alignnone" src="<?php echo THFRURL; ?>images/captionpadding.gif" width="250" height="250" />
</td><td valign="top">
<strong>DIV's around "images with caption" (see image #5 - #8) have a hardcoded pixel width:</strong><br /><br />
NOTE: The way images with caption are styled by WordPress may be unexpected: For images with caption, the left and right space between (a) the image and (b) the border of the parent DIV (that holds the image and the caption) is not 
caused by a CSS "padding" as you might expect. Instead, Wordpress wraps the image into 
a DIV container that is 10 pixels wider than the image itself. The image is then centered inside that DIV container, and this creates a 
4 pixel space on the left and the right, between the image and the DIV's border: (10 pixels / 2) - 1 pixel border. The space on top is a padding.<br /><br />If you don't want to change that "padding", then 
you don't need to understand this. But let's say you wanted to remove that 4 pixel "padding", or make it smaller. 
Because it is hardcoded by WordPress (with pixel values, put into the HTML code per 
inline CSS) you'd need to put a negative margin on the image, i.e. -2px to reduce the "padding" from 4px to 2px. If this is above your head 
for now then simply leave it as it is.
</td>
</tr>
</table>
<br />
<h3>Here are the 8 image types. Right-Click on any of the 8 sample images below to change their style:</h3>
<h4 style="color:green">Image #1 is the most basic image, it has neither alignment nor caption. Its CSS selector is "<code>p img</code>", which means 
"all images inside paragraphs". All styles that you put on image #1 will be applied on the image types #2 - #4 as 
well because they are also "images inside paragraphs" - unlike the images #5 - #8 which are images inside DIV's (and not inside paragraphs).</h4>
So if you wanted to "group-style" all images without caption (#1 - #4) the most economic way would be to style image #1. This may sound confusing but it is based 
on a global (and useful / powerful) feature of CSS itself, and ThemeFrame is also based on it: You style a CSS selector that covers a whole 
group of elements first (i.e. "p img"), and then you can proceed to set individual styles for particular elements by styling them through their individual 
CSS selector (i.e. "img.alignright").  
This is a much more economic way of styling multiple elements. If you want a green border around all images inside paragraphs, it is 
enough to set that on image #1. Then, if you wanted to have a red border around "images in paragraphs that are right-aligned", you set on image #3. Now the image 
types 1, 2 and 4 will have a green border and image type 3 a red border, but you didn't have to style 4 image types, only 2.
</p>
<p selector="div.post-bodycopy p">Morbi id quam eu ipsum vestibulum euismod cursus a nunc. Proin lacinia dolor eu augue tincidunt vel semper quam dignissim. Proin faucibus sodales erat sit amet aliquet. Donec eu porttitor dolor. Vestibulum metus justo, gravida vel malesuada porttitor, venenatis a erat. Aenean eu nisl sem, ullamcorper porta mi.</p>
<p selector="div.post-bodycopy p"><img class="alignnone" selector="p img" src="<?php echo THFRURL; ?>images/image-none.gif" width="350" height="150" /></p>
<p selector="div.post-bodycopy p">Mauris et ligula nunc, sollicitudin cursus nunc. Sed in ante eget est egestas vehicula. Nullam id fringilla lectus. Aliquam varius elit sit amet purus imperdiet ornare. Sed imperdiet porttitor eleifend. Aliquam a est turpis, id tristique felis. Duis at risus vitae nulla sollicitudin imperdiet.</p>
<p selector="div.post-bodycopy p">
<img class="alignleft" selector="img.alignleft" src="<?php echo THFRURL; ?>images/image-left.gif" width="150" height="120" />
<img class="alignright" selector="img.alignright" src="<?php echo THFRURL; ?>images/image-right.gif" width="150" height="120" />
Mauris et ligula nunc, sollicitudin cursus nunc. Sed in ante eget est egestas vehicula. Nullam id fringilla lectus. Aliquam varius elit sit amet purus imperdiet ornare. Sed imperdiet porttitor eleifend. Aliquam a est turpis, id tristique felis. Duis at risus vitae nulla sollicitudin imperdiet.
Mauris et ligula nunc, sollicitudin cursus nunc. Sed in ante eget est egestas vehicula. Nullam id fringilla lectus. Aliquam varius elit sit amet purus imperdiet ornare. Sed imperdiet porttitor eleifend. Aliquam a est turpis, id tristique felis. Duis at risus vitae nulla sollicitudin imperdiet.
Mauris et ligula nunc, sollicitudin cursus nunc. Sed in ante eget est egestas vehicula. Nullam id fringilla lectus. Aliquam varius elit sit amet purus imperdiet ornare. Sed imperdiet porttitor eleifend. Aliquam a est turpis, id tristique felis. Duis at risus vitae nulla sollicitudin imperdiet.
Mauris et ligula nunc, sollicitudin cursus nunc. Sed in ante eget est egestas vehicula. Nullam id fringilla lectus. Aliquam varius elit sit amet purus imperdiet ornare. Sed imperdiet porttitor eleifend. Aliquam a est turpis, id tristique felis. Duis at risus vitae nulla sollicitudin imperdiet.
Mauris et ligula nunc, sollicitudin cursus nunc. Sed in ante eget est egestas vehicula. Nullam id fringilla lectus. Aliquam varius elit sit amet purus imperdiet ornare. Sed imperdiet porttitor eleifend. Aliquam a est turpis, id tristique felis. Duis at risus vitae nulla sollicitudin imperdiet.
</p>
<p selector="div.post-bodycopy p"><img class="aligncenter" selector="img.aligncenter" src="<?php echo THFRURL; ?>images/image-center.gif" width="350" height="150" /></p>
<p selector="div.post-bodycopy p">Nam dui magna, viverra eget pretium vitae, lobortis et nibh. Etiam molestie pretium ligula ac euismod. Fusce bibendum, dui at pretium vulputate, leo velit viverra tortor, vitae rutrum lacus diam eu augue. Integer elementum, turpis sed suscipit blandit, erat felis rutrum magna, sit amet tincidunt augue mi id nulla.</p>

<p selector="div.post-bodycopy p">Nunc venenatis mi ut tortor porta ultricies. Maecenas sit amet magna et leo tempus pulvinar. Sed volutpat nibh sit amet odio fermentum sed mollis sapien rutrum. Etiam eget sem ac augue iaculis ullamcorper vel eu sapien. Donec aliquam nisi eu arcu ultricies eget tincidunt quam mollis. Etiam gravida semper libero. Phasellus posuere hendrerit placerat. Maecenas eget ante eu urna sodales auctor sed a erat. In hac habitasse platea dictumst. Integer eget dui ut diam gravida fermentum. Aenean in posuere mi. Etiam a augue mi.</p>
<div selector="div.wp-caption" class="wp-caption alignnone" style="width: 360px">
<img selector="div.wp-caption img" src="<?php echo THFRURL; ?>images/image-none-caption.gif" width="350" height="150" />
<p class="wp-caption-text" selector="p.wp-caption-text">Some caption text</p>
</div>
<p selector="div.post-bodycopy p">Nunc venenatis mi ut tortor porta ultricies. Maecenas sit amet magna et leo tempus pulvinar. Sed volutpat nibh sit amet odio fermentum sed mollis sapien rutrum. Etiam eget sem ac augue iaculis ullamcorper vel eu sapien. Donec aliquam nisi eu arcu ultricies eget tincidunt quam mollis. Etiam gravida semper libero. Phasellus posuere hendrerit placerat. Maecenas eget ante eu urna sodales auctor sed a erat. In hac habitasse platea dictumst. Integer eget dui ut diam gravida fermentum. Aenean in posuere mi. Etiam a augue mi.
Nunc venenatis mi ut tortor porta ultricies. Maecenas sit amet magna et leo tempus pulvinar. Sed volutpat nibh sit amet odio fermentum sed mollis sapien rutrum. Etiam eget sem ac augue iaculis ullamcorper vel eu sapien. Donec aliquam nisi eu arcu ultricies eget tincidunt quam mollis. Etiam gravida semper libero. Phasellus posuere hendrerit placerat. Maecenas eget ante eu urna sodales auctor sed a erat. In hac habitasse platea dictumst. Integer eget dui ut diam gravida fermentum. Aenean in posuere mi. Etiam a augue mi.
Nunc venenatis mi ut tortor porta ultricies. Maecenas sit amet magna et leo tempus pulvinar. Sed volutpat nibh sit amet odio fermentum sed mollis sapien rutrum. Etiam eget sem ac augue iaculis ullamcorper vel eu sapien. Donec aliquam nisi eu arcu ultricies eget tincidunt quam mollis. Etiam gravida semper libero. Phasellus posuere hendrerit placerat. Maecenas eget ante eu urna sodales auctor sed a erat. In hac habitasse platea dictumst. Integer eget dui ut diam gravida fermentum. Aenean in posuere mi. Etiam a augue mi.
</p>

<div selector="div.wp-caption" class="wp-caption alignleft" style="width: 160px">
<img selector="div.wp-caption img" src="<?php echo THFRURL; ?>images/image-left-caption.gif" width="150" height="120" />
<p class="wp-caption-text" selector="p.wp-caption-text">Some caption text</p>
</div>
<div selector="div.wp-caption" class="wp-caption alignright" style="width: 160px">
<img selector="div.wp-caption img" src="<?php echo THFRURL; ?>images/image-right-caption.gif" width="150" height="120" />
<p class="wp-caption-text" selector="p.wp-caption-text">Some caption text</p>
</div>
<p selector="div.post-bodycopy p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam est risus, tempor ac hendrerit vitae, mollis porttitor justo. Aenean quam diam, ultricies aliquam malesuada nec, sagittis ac nibh. Donec at metus justo, at congue lorem. Quisque nisl augue, porta vitae laoreet vel, lacinia ac est. Vestibulum ornare felis viverra ligula porta lobortis. Sed lorem nibh, lacinia pharetra euismod sit amet, tristique vitae lacus. Praesent in urna est, eleifend fringilla sem. Duis fermentum ipsum bibendum urna condimentum semper. Maecenas id tempus orci. Vestibulum orci nisi, varius eget dignissim non, rhoncus et ante.</p>
<p selector="div.post-bodycopy p">Nulla nisl metus, lobortis eu vehicula in, scelerisque lacinia ligula. Nulla eget leo ligula. Phasellus vestibulum, ante et posuere mattis, purus est fringilla velit, sed ornare eros ligula ut sem. Proin non convallis velit. Nunc vestibulum dignissim ornare. Mauris convallis dolor et ante aliquet iaculis. Suspendisse malesuada tempus libero vitae fringilla. Cras nibh ante, malesuada quis euismod quis, dapibus placerat justo. Integer vestibulum adipiscing arcu, a aliquet risus tincidunt sed. Quisque in arcu lectus. Cras tellus ante, eleifend ut imperdiet sed, malesuada et odio. Pellentesque ac volutpat enim. Donec molestie leo et felis commodo ac viverra turpis laoreet. Nulla adipiscing placerat lectus, vitae hendrerit purus tempus ac.</p>
<div selector="div.wp-caption" class="wp-caption aligncenter" style="width: 360px">
<img selector="div.wp-caption img" src="<?php echo THFRURL; ?>images/image-center-caption.gif" width="350" height="150" />
<p class="wp-caption-text" selector="p.wp-caption-text">Some caption text</p>
</div>

<p selector="div.post-bodycopy p">Nam dui magna, viverra eget pretium vitae, lobortis et nibh. Etiam molestie pretium ligula ac euismod. Fusce bibendum, dui at pretium vulputate, leo velit viverra tortor, vitae rutrum lacus diam eu augue. Integer elementum, turpis sed suscipit blandit, erat felis rutrum magna, sit amet tincidunt augue mi id nulla.</p>

<p selector="div.post-bodycopy p">Nunc venenatis mi ut tortor porta ultricies. Maecenas sit amet magna et leo tempus pulvinar. Sed volutpat nibh sit amet odio fermentum sed mollis sapien rutrum. Etiam eget sem ac augue iaculis ullamcorper vel eu sapien. Donec aliquam nisi eu arcu ultricies eget tincidunt quam mollis. Etiam gravida semper libero. Phasellus posuere hendrerit placerat. Maecenas eget ante eu urna sodales auctor sed a erat. In hac habitasse platea dictumst. Integer eget dui ut diam gravida fermentum. Aenean in posuere mi. Etiam a augue mi.</p>
		
				
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
