<div class="infocontainer-head">	
	<h2 style="float:left;padding-right:30px">Global Settings <strong>Header Images</strong></h2>
	<a href="#" class="moreinfolink" id="headerimagesmore">Show/Hide More Info</a>	
</div>
<div id="headerimagesmore-container" class="infocontainer">
<ul>
<li>The container that holds the images needs to have a defined width (can be '100%') and height (usually pixels) or else the images won't display.</li>
<li>Make sure a width and height is set for the div.headerimage at Page Templates -> index.php</li>
<li><strong>Copy &amp; paste</strong> one of the examples below into the textarea at the bottom</li>
<li>Edit the <span style="color:red">red</span> parts and add/remove lines for more/less images, and 
click the 'Save' button on the bottom right</li>
<li>Make sure the images you reference in the code actually exist at the specified absolute or relative URLs</li>
<li>The element that contains the images (in this case <code>div.headerimages</code> needs to have a defined width and height, for 
instance <code>div.headerimage { width: 100%; height: 100px }</code>. The default style included in ThemeFrame already has these 
values for <code>div.headerimages</code>.</li>
<li>Do not put a comma after the last image (look closely at the examples below)</li>
</ul>
<h3>Location of images</h3>
<ul>
<li>The images can be remotely hosted or local. They can be referenced with absolute (starting with <code>http://</code>) or relative (starting with <code>/</code>) URLs</li>
<li>ThemeFrame won't put any images anywhere, you'd have to place them at the right location</li>
<li>For instance, if you're going to include the rotating images with your 
theme you could use something like the following code example (assuming the theme's 
directory name is <code>my-theme</code> and the images are inside <code>/my-theme/images/</code>:</li>
</ul>
<h3>Basic examples, with the images in a directory <code>/images/</code> inside the theme directory</h3>			
<code style="padding:0"><pre style="padding:10px;background:#eee">
jQuery('div.headerimage').
crossSlide({sleep: <span style="color:red">3</span>,fade: <span style="color:red">2</span>},
[
	{ src: '<span style="color:red">/wp-content/themes/my-theme/images/image1.jpg</span>' },
	{ src: '<span style="color:red">/wp-content/themes/my-theme/images/image2.jpg</span>' },
	{ src: '<span style="color:red">/wp-content/themes/my-theme/images/image3.jpg</span>' }		  
]);
</pre></code>

<h3>Basic Parameters:</h3>
<ul>
<li><code>sleep</code> - display image for X seconds</li>
<li><code>fade</code> - fade to next image for X seconds</li>
<li><code>src</code> - URL of the image</li>
<li><code>href</code> - Optionally, link image to URL</li>
</ul>
<h3>Advanced Parameters:</h3>
<ul>
<li><code>speed</code> - scrolling speed in pixels per second</li>
<li><code>from</code> and <code>to</code> - move image from X/Y coordinate to X/Y coordinate, optinally also with X-times magnification.
</li>
</ul>
<h3>1. Just fading, no other effects (lightweight)</h3>			
<h4>Example 1</h4>
Same set of images on all pages:<br />
<code style="padding:0"><pre style="padding:10px;background:#eee">
jQuery('div.headerimage')
.crossSlide({sleep: <span style="color:red">5</span>,fade: <span style="color:red">2</span>},
[
	{ src: '<span style="color:red">http://www.mydomain.com/wp-content/themes/mytheme/headerimages/someimage.jpeg</span>' },
	{ src: '<span style="color:red">http://www.mydomain.com/wp-content/themes/mytheme/headerimages/anotherimage.jpeg</span>',
	  href: '<span style="color:red">http://www.this-second-image.com/is-linked/to-this-url.html</span>' },
	{ src: '<span style="color:red">http://www.mydomain.com/wp-uploads/image.jpeg</span>' },
	{ src: '<span style="color:red">http://it.can-be-from-another-domain.com/as-well/image.jpeg</span>' },
	{ src: '<span style="color:red">/a-relative/path-here.jpeg</span>' },
	{ src: '<span style="color:red">http://www.note-how-the-last.com/image/has/no/comma/at-the-end.jpg</span>' }			  
]);
</pre></code>

<h4>Example 2</h4>
Different sets of images for front page, single post pages and static pages:<br />
<code style="padding:0"><pre style="padding:10px;background:#eee">
/* For the front page */
jQuery('body.home div.headerimage')
.crossSlide({sleep: <span style="color:red">3</span>,fade: <span style="color:red">2</span>},
[
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' },
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' },
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' }		  
]);

/* For all single post pages */
jQuery('body.single div.headerimage')
.crossSlide({sleep: <span style="color:red">8</span>,fade: <span style="color:red">3</span>},
[
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' },
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>',
	  href: '<span style="color:red">THIS_IMAGE_LINKS_TO_THIS_URL</span>'},
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' }		  
]);

/* For all static pages */
jQuery('body.page div.headerimage')
.crossSlide({sleep: <span style="color:red">12</span>,fade: <span style="color:red">1</span>},
[
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' },
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' },
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' }		  
]);

/* For the rest */
jQuery('div.headerimage').not('body.home div.headerimage, body.single div.headerimage, body.page div.headerimage')
.crossSlide({sleep: <span style="color:red">12</span>,fade: <span style="color:red">1</span>},
[
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' },
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' },
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' }		  
]);
</pre></code>
<h4>Example 3</h4>
Different sets of images for different pages &amp; page types:<br />
<code style="padding:0"><pre style="padding:10px;background:#eee">
/* For the front page */
jQuery('body.home div.headerimage')
.crossSlide({sleep: <span style="color:red">3</span>,fade: <span style="color:red">2</span>},
[
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' },
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' },
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' }		  
]);

/* For the categories "Uncategorized" and "Autos" */
jQuery('body.category-uncategorized div.headerimage, body.category-autos div.headerimage')
.crossSlide({sleep: <span style="color:red">3</span>,fade: <span style="color:red">2</span>},
[
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' },
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' },
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' }		  
]);

/* For the other category pages, excluding the categories "Uncategorized" and "Autos" */
jQuery('body.category div.headerimage').not('body.category-uncategorized div.headerimage, body.category-autos div.headerimage')
.crossSlide({sleep: <span style="color:red">8</span>,fade: <span style="color:red">3</span>},
[
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' },
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' },
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' }		  
]);

/* For the static page with the ID 21 */
jQuery('body.page-id-21 div.headerimage')
.crossSlide({sleep: <span style="color:red">12</span>,fade: <span style="color:red">1</span>},
[
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' },
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' },
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' }		  
]);

/* For the other static pages, excluding the page with the ID 21 */
jQuery('body.page div.headerimage').not('body.page-id-21 div.headerimage')
.crossSlide({sleep: <span style="color:red">12</span>,fade: <span style="color:red">1</span>},
[
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' },
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' },
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' }		  
]);

/* For the rest, excluding the home page, category pages and static pages */
jQuery('div.headerimage').not('body.home div.headerimage, body.category div.headerimage, body.page div.headerimage')
.crossSlide({sleep: <span style="color:red">12</span>,fade: <span style="color:red">1</span>},
[
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' },
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' },
	{ src: '<span style="color:red">URL_TO_IMAGE_HERE</span>' }		  
]);
</pre></code>
The following code samples do more advanced things with the images but they don't target specific pages of a WordPress site. You can adjust the following 
examples to target specific WP pages by editing the first line like in the examples above.

<h3>2. Sliding & Fading Images</h3>
Images can move in 4 directions before they fade to the next image.
<code style="padding:0"><pre style="padding:10px;background:#eee">
jQuery('div.headerimage')
.crossSlide({ speed: <span style="color:red">45</span>, fade: <span style="color:red">1</span> }, 
[
  { src: '<span style="color:red">URL_TO_IMAGE_HERE</span>', dir: '<span style="color:red">up</span>'   },
  { src: '<span style="color:red">URL_TO_IMAGE_HERE</span>',   dir: '<span style="color:red">down</span>' },
  { src: '<span style="color:red">URL_TO_IMAGE_HERE</span>',  dir: '<span style="color:red">right</span>'   },
  { src: '<span style="color:red">URL_TO_IMAGE_HERE</span>', dir: '<span style="color:red">left</span>' }
])
</pre></code>

<h3>3. Panning, Zooming & Fading</h3>
Images can move from any point A (X/Y coordinates) to any point B (X/Y coordinates) and optionally also zoom in. 
This may run a bit slow for visitors with older computers, especially if your images are big.
<code style="padding:0"><pre style="padding:10px;background:#eee">
jQuery('div.headerimage')
.crossSlide({fade: <span style="color:red">1</span>}, 
[
  {
    src:  '<span style="color:red">URL_TO_IMAGE_HERE</span>',
    href: '<span style="color:red">THIS_IMAGE_LINKS_TO_THIS_URL</span>',
    from: '<span style="color:red">100% 80% 1x</span>',
    to:   '<span style="color:red">100% 0% 1.7x</span>',
    time: <span style="color:red">3</span>
  }, {
    src:  '<span style="color:red">URL_TO_IMAGE_HERE</span>',
    href: '<span style="color:red">THIS_IMAGE_LINKS_TO_THIS_URL</span>',
    from: '<span style="color:red">top left</span>',
    to:   '<span style="color:red">bottom right 1.5x</span>',
    time: <span style="color:red">2</span>
  }, {
    src:  '<span style="color:red">URL_TO_IMAGE_HERE</span>',
    href: '<span style="color:red">THIS_IMAGE_LINKS_TO_THIS_URL</span>',
    from: '<span style="color:red">100% 80% 1.5x</span>',
    to:   '<span style="color:red">80% 0% 1.1x</span>',
    time: <span style="color:red">2</span>
  }, {
    src:  '<span style="color:red">URL_TO_IMAGE_HERE</span>',
    href: '<span style="color:red">THIS_IMAGE_LINKS_TO_THIS_URL</span>',
    from: '<span style="color:red">100% 50%</span>',
    to:   '<span style="color:red">30% 50% 1.5x</span>',
    time: <span style="color:red">2</span>
  }
]);
</pre></code>
</div>

<!-- <form id="jquery-headerimg" action="" type="post">	-->
<div id="multisettingpage" style="padding:20px;font-size: 13px" >
<div class="codemirrorarea">
	<textarea style="width:100%;height:300px" name="headerimages" id="headerimages"><?php echo htmlspecialchars($thfr_css['headerimages']); ?></textarea>
</div><br/>
	<a href="#" id="save-headerimages" class="save-button">Save</a>
	<div class="formstatus"></div>	
</div>
<!-- </form> --><!-- form#jquery-headerimg -->
