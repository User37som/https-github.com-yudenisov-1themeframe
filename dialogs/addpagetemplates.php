<?php include(dirname(__FILE__) . "/../functions.php"); ?>
<a href="#" style="float:right;padding:3px 8px;background:#eee;display:block;clear:right;" id="diffcustdefault">Custom Vs. Default template</a>

<div style="background:#eee;padding:10px;display:none" id="diffcustdefault-info">
	<div style="float:right;margin: 0 0 5px 10px;border:solid 2px #999; padding: 5px;font-style:italic">
		<img src="/themeframe/images/choosepagetemplate.gif"  />
		<p style="width:510px; margin: 7px 0 ;color:#333;text-align:center">WordPress lists all custom page 
		templates (that it found inside a theme's directory) as a select menu on the right side of the Page 
		-> New/Edit panel. 
		</p>
	</div>

	<h3 style="font-weight:normal">The difference between <strong style="color:green">CUSTOM</strong> 
	(<strong>whatever</strong>.php) and <strong style="color:blue">DEFAULT</strong> 
	(<strong>index</strong>.php, <strong>page</strong>.php, <strong>date</strong>.php...) templates:</h3>

	<h3 style="font-weight:normal"><strong style="color:blue">DEFAULT</strong> WP page templates...</h3>
	<ul>
		<li>have <strong>reserved names</strong> like index.php, page.php, category.php and many more, 
		see <a href="http://codex.wordpress.org/Template_Hierarchy" target="_blank">WordPress Template Hierarchy</a>.
		</li>
		<li>will be <strong>automatically</strong> recognized AND 
		<strong>used by WordPress</strong> for the appropriate page views (according to the 
		<a href="http://codex.wordpress.org/images/1/18/Template_Hierarchy.png" target="_blank">
		WordPress Template Hierarchy</a>. 
		</li>
	</ul>

	<h3 style="font-weight:normal"><strong style="color:green">CUSTOM</strong> page templates...</h3>
	<ul>
		<li><strong>can be named freely</strong>, i.e. "landingpage-1b.php" / "Landing P. 1B" 
		(file name / nice name).</li>
		<li><strong>must be manually selected</strong> (in the WP backend) for (a) individual page(s), before WordPress starts using them.  
		(See image on the right &rarr; ).
		</li>
	</ul>
</div> 


<br /><h2 style="background: url(/themeframe/images/step1.png) top left no-repeat;padding: 5px 5px 10px 40px">Choose type/name of new template:</h2>

<form id="newpagetemplate" name="newpagetemplate">

<select name="templatetype" id="templatetype">
<option value="">- - - Choose template type &amp; name - - -</option>
<optgroup label="CUSTOM PAGE TEMPLATE:">
<option value="custom">&rarr; Custom page template ...</option>
</optgroup>
<optgroup label="DEFAULT WP TEMPLATE:">
<?php
$available_default_templates = array(
'404',
'archive',
'attachment',
'author',
'category',
'date',
'front-page',
'index',
'home',
'page',
'search',
'single',
'tag',
// 'taxonomy'
);
foreach($available_default_templates as $default_template) {
	if(!in_array($default_template, $thfr_css['pagetemplates'])) {
		?>
		<option value="<?php echo $default_template; ?>">&rarr; <?php echo $default_template; ?>.php</option>
		<?php
	}	
}
?>
</optgroup>
<optgroup label="DEFAULT WP TEMPLATE w/ placeholder:">
<?php
$available_default_templates2 = array(
'author-ID',
'author-NICENAME',
'category-ID',
'category-SLUG',
'MIME_type',
'page-ID',
'page-SLUG',
// 'single-POSTTYPE',
'tag-ID',
'tag-SLUG'
// 'taxonomy-TAXONOMY',
// 'taxonomy-TAXONOMY-TERM'
);
foreach($available_default_templates2 as $default_template) {
	if(!in_array($default_template, $thfr_css['pagetemplates'])) {
		?>
		<option value="<?php echo $default_template; ?>">&rarr; <?php echo $default_template; ?>.php</option>
		<?php
	}	
}
?>
</optgroup>

</select>

<div id="more-404" class="templateinfosection">
	<span style="font-size:16px">404.php</span>
	<ul>
	<li>Used by WordPress to display an error page if a requested page was not found ("404 Not Found").</li>
	</ul>
</div>
<div id="more-archive" class="templateinfosection">
	<span style="font-size:16px">archive.php</span>
	<ul>
	<li>Used by WordPress to display <strong>category</strong>, <strong>tag</strong>, <strong>taxonomy</strong>, 
	<strong>author</strong> and <strong>date</strong> pages <strong>IF</strong> there is no better 
	matching template - such as date.php for date pages - for the given pageview.</li>
	</ul>
</div>
<div id="more-attachment" class="templateinfosection">
	<span style="font-size:16px">attachment.php</span>
	<ul>
	<li>Used by WordPress to display an attachment (image, video, audio, application, any MIME type) IF there is no better 
	matching template - such as image.php for images.</li>
	<!--
	<li>To create a more specific attachment template (such as image.php) 
	choose <strong>MIME_type.php</strong> in the select menu above.</li>
	-->
	</ul>
</div>
<div id="more-author" class="templateinfosection">
	<span style="font-size:16px">author.php</span>
	<ul>
	<li>Used by WordPress to display an author page (page listing all post of a specific author) 
	<strong>IF</strong> there is no better 
	matching template, such as "author-5.php" for the author with the ID 5.</li>
	</ul>
</div>
<div id="more-author-ID" class="templateinfosection">
	Put an author <strong>ID</strong> into the text field:<br />
	<span style="font-size:16px">author-<input type="text" size="5" value="" name="author-ID-value" />.php</span>
	<span style="margin-left:70px;letter-spacing:2px">Example:</span> <code>2</code>
	<ul>
	<li>In <code>author-ID.php</code>, <strong>ID</strong> is just a placeholder which needs to be replaced with a real author ID such as <strong>2</strong>.</li>
	<li>If a file <code>author-2.php</code> exists inside the active theme's directory, WordPress will use 
	it to display the author page (page listing all posts of a specific author) of the author with the ID <strong>2</strong>.</li>
	<li>To find out an author's ID point your mouse on the author's name, at "WP Admin" -> "Users", and the author's ID 
	will be displayed in your browser's status bar (usually at the bottom) like this: 
	<strong>...user_edit.php?user_id=<span style="color:green">2</span>&wp_http...</strong></li>
	</ul>
</div>
<div id="more-author-NICENAME" class="templateinfosection">
	Put an author <strong>NICENAME</strong> into the text field:<br />
	<span style="font-size:16px">author-<input type="text" value="" size="25" name="author-NICENAME-value" />.php</span>
	<span style="margin-left:70px;letter-spacing:2px">Example:</span> <code>john</code>
	<ul>
	<li>In <code>author-NICENAME.php</code>, <strong>NICENAME</strong> is just a placeholder which needs to be replaced with a real author "nicename" such as <strong>john</strong>.</li>
	<li>If a file <code>author-john.php</code> exists inside the active theme's directory, WordPress will use 
	it to display the author page (page listing all posts of a specific author) of the author with the nicename <strong>john</strong></li>
	<li>Author's <strong>nicenames cannot be set</strong> directly. 
	WordPress will derive them from the author's settings at "WP Admin" -> "Users" -> "Your Profile".</li>
	</ul>
</div>
<div id="more-category" class="templateinfosection">
	<span style="font-size:16px">category.php</span>
	<ul>
	<li>Used by WordPress to display a category page (page listing all post filed under a specific category) 
	<strong>IF</strong> there is no better 
	matching template, such as "category-cameras.php" for the category "Cameras".</li>
	</ul>
</div>
<div id="more-category-ID" class="templateinfosection">
	Put a category <strong>ID</strong> into the text field:<br />
	<span style="font-size:16px">category-<input style="color:green" type="text" size="4" value="" name="category-ID-value" />.php</span>
	<span style="margin-left:70px;letter-spacing:2px">Example:</span> <code>13</code>
	<ul>
	<li>In <code>category-ID.php</code>, <strong>ID</strong> is just a placeholder which needs to be replaced with a real category ID such as <strong>13</strong>.</li>
	<li>If a file <code>category-13.php</code> exists inside the active theme's directory, WordPress will use 
	it to display a category page (page listing all posts filed under a specific category) for the category with the ID <strong>13</strong>.</li>
	<li>To find out a category's ID point your mouse on the category's name, at "WP Admin" -> "Posts" -> "Categories", 
	and the category's ID will be displayed in your browser's status bar (usually at the bottom) like this: 
	<strong>...&tag_ID=<span style="color:green">13</span></strong></li>
	</ul>
</div>
<div id="more-category-SLUG" class="templateinfosection">
	Put a category <strong>SLUG</strong> into the text field:<br />
	<span style="font-size:16px">category-<input type="text" size="25" value="" name="category-SLUG-value" />.php</span>
	<span style="margin-left:70px;letter-spacing:2px">Example:</span> <code>games</code>
	<ul>
	<li>In <code>category-SLUG.php</code>, <strong>SLUG</strong> is just a placeholder which needs to be replaced with a real category slug such as <strong>games</strong>.</li>
	<li>If a file <code>category-games.php</code> exists inside the active theme's directory, WordPress will use 
	it to display a category page (page listing all posts filed under a specific category) for the category with the SLUG <strong>games</strong>.</li>
	<li>To find out a category's SLUG see the column "Slug" in the category list at "WP Admin" -> "Posts" -> "Categories"</li>
	</ul>
</div>
<div id="more-date" class="templateinfosection">
	<span style="font-size:16px">date.php</span>
	<ul>
	<li>Used by WordPress to display date based archive pages (i.e. if a link inside the calendar widget was clicked).</li>
	</ul>
</div>
<div id="more-front-page" class="templateinfosection">
	<ul>
	<li>Used by WordPress to display the homepage (of the whole site, not just for the index page of blog posts). The content will be 
	whatever has been set at "WP Admin" -> "Settings" -> "Reading" -> "Front page displays:".</li>
	</ul>
</div>
<div id="more-home" class="templateinfosection">
	<span style="font-size:16px">home.php</span>
	<ul>
	<li>Used by WordPress to list posts of a given category <strong>IF</strong> there is no better 
	matching template, such as "category-cameras.php" for the category "Cameras".</li>
	</ul>
</div>
<div id="more-index" class="templateinfosection">
	<span style="font-size:16px">index.php</span>
	<ul>
	<li><code>index.php</code> is the default template of any theme and must exist.</li>
	<li><code>index.php</code> will be used whenever there's no better matching template for the given pageview.</li>
	</ul>
</div>
<div id="more-MIME_type" class="templateinfosection">
	Choose a <strong>MIME type</strong> name. It will also be the file name: <br />
	<span style="font-size:16px">
	<select name="MIME_type-value">
	<?php $mimetypes = array('application', 'audio', 'image', 'message', 'model', 'multipart', 'text', 'video', 'vnd', 'x', 'x-ckps');
	foreach($mimetypes as $mimetype) { ?>
		<option value="<?php echo $mimetype; ?>"><?php echo $mimetype; ?></option>
	<?php } ?>
	</select>.php</span>
	<span style="margin-left:70px;letter-spacing:2px">Example:</span> <code>image</code>
	<ul>
	<li>If a file <code>image.php</code> exists inside the active theme's directory, WordPress will use 
	it to display directly linked images (= attachments that are images), while an <code>attachment.php</code>   
	would cover all attachments, not just images.</li>
	<li>More <a href="http://en.wikipedia.org/wiki/Internet_media_type" target="_blank">info on MIME types</a>.
	</ul>
</div>
<div id="more-page" class="templateinfosection">
	<span style="font-size:16px">page.php</span>
	<ul>
	<li>Used by WordPress to display "static pages" <strong>IF</strong> there is no better 
	matching template, such as "page-16.php" for the page with the ID 16.</li>
	</ul>
</div>
<div id="more-page-ID" class="templateinfosection">
	Put a page <strong>ID</strong> into the text field: <br />
	<span style="font-size:16px">page-<input type="text" size="5" value="" name="page-ID-value" />.php</span>
	<span style="margin-left:70px;letter-spacing:2px">Example:</span> <code>27</code>
	<ul>
	<li>In <code>page-ID.php</code>, <strong>ID</strong> is just a placeholder, which needs to be 
	replaced with a real page ID such as <strong>27</strong>.</li>
	<li>If a file <code>page-27.php</code> exists inside the active theme's directory, WordPress will use 
	it to display the page with the ID <strong>27</strong>.</li>
	<li>To find out a page's ID point your mouse on the page's name, at "WP Admin" -> "Pages" -> "Pages", 
	and the page's ID will be displayed in your browser's status bar (usually at the bottom) like this: 
	<strong>...&post=<span style="color:green">27</span></strong></li>
	</ul>
</div>
<div id="more-page-SLUG" class="templateinfosection">
	Put a page <strong>SLUG</strong> into the text field:<br />
	<span style="font-size:16px">page-<input type="text" size="25" value="" name="page-SLUG-value" />.php</span>
	<span style="margin-left:70px;letter-spacing:2px">Example:</span> <code>chili-recipe</code>
	<ul>
	<li>In <code>page-SLUG.php</code>, <strong>SLUG</strong> is just a placeholder which needs to be 
	replaced with a real page slug such as <strong>chili-recipe</strong>.</li>
	<li>If a file <code>page-chili-recipe.php</code> exists inside the active theme's directory, WordPress will use 
	it to display the page with the SLUG <strong>chili-recipe</strong>.</li>
	<li>To find out a page's SLUG view the top of "WP Admin" -> "Pages" -> "Edit Page" / "Add New", 
	right below the page title. The page SLUG is highlighted with a light yellow (both here and in the WP admin area), like this: 
	<div style="background:#f5f5f5;padding:5px;margin-top:7px">
	<strong>Permalink</strong>: http://www.yourdomain.com/..../<span style="background:#fffbcc">chili-recipe</span>/ [Edit] [View Page]
	</div>
</li>
	</ul>
</div>
<div id="more-search" class="templateinfosection">
	<span style="font-size:16px">search.php</span>
	<ul>
	<li>Used by WordPress to display search result pages.</li>
	</ul>
</div>
<!--
<div id="more-single-POSTTYPE" class="templateinfosection">
	<span style="font-size:16px">page-<input type="text" size="25" value="" name="page-SLUG-value" />.php</span><br />
	Fill in a page <strong>POSTTYPE</strong>. Example: <code>chili-recipe</code> 
	<ul>
	<li><code>page-SLUG.php</code>, <strong>SLUG</strong> is just a placeholder which needs to be replaced with a real page slug such as "chili-recipe".</li>
	<li>If a file <code>page-chili-recipe.php</code> exists inside the active theme's directory, WordPress will use 
	it to display the page with the SLUG <strong>chili-recipe</strong>.</li>
	<li>To find out a page's SLUG view the top of "WP Admin" -> "Pages" -> "Edit Page" / "Add New", 
		right below the page title. The page SLUG is highlighted with a light yellow (both here and in the WP admin area), like this: 
		<div style="background:#f5f5f5;padding:5px;margin-top:7px">
		<strong>Permalink</strong>: http://www.yourdomain.com/..../<span style="background:#fffbcc">chili-recipe</span>/ [Edit] [View Page]
		</div>
</li>
	</ul>
</div>
-->
<div id="more-single" class="templateinfosection">
	<span style="font-size:16px">single.php</span>
	<ul>
	<li>Used by WordPress to display single post pages (page displaying the content of one post).</li>
	</ul>
</div>
<div id="more-tag" class="templateinfosection">
	<span style="font-size:16px">tag.php</span>
	<ul>
	<li>Used by WordPress to display tag pages (page listing all posts tagged with a specific tag) <strong>IF</strong> there is no better 
	matching template, such as "tag-blue.php" for the posts tagged with the tag "blue".</li>
	</ul>
</div>
<div id="more-tag-ID" class="templateinfosection">
	Put a tag <strong>ID</strong> into the text field:<br />
	<span style="font-size:16px">tag-<input style="color:green" type="text" size="4" value="" name="tag-ID-value" />.php</span>
	<span style="margin-left:70px;letter-spacing:2px">Example:</span> <code>19</code>
	<ul>
	<li>In <code>tag-ID.php</code>, <strong>ID</strong> is just a placeholder which needs to be replaced 
	with a real tag ID such as <strong>19</strong>.</li>
	<li>If a file <code>tag-19.php</code> exists inside the active theme's directory, WordPress will use 
	it to display the tag page (page listing all posts tagged with a specific tag) for the tag with the ID <strong>19</strong>.</li>
	<li>To find out a tag's ID point your mouse on the tag's name, at "WP Admin" -> "Posts" -> "Post Tags", 
	and the tags's ID will be displayed in your browser's status bar (usually at the bottom) like this: 
	<strong>...&tag_ID=<span style="color:green">19</span></strong></li>
	</ul>
</div>
<div id="more-tag-SLUG" class="templateinfosection">
	Put a tag <strong>SLUG</strong> into the text field:<br />
	<span style="font-size:16px">tag-<input type="text" size="25" value="" name="tag-SLUG-value" />.php</span>
	<span style="margin-left:70px;letter-spacing:2px">Example:</span> <code>travel</code>
	<ul>
	<li>In <code>tag-SLUG.php</code>, <strong>SLUG</strong> is just a placeholder which needs to be 
	replaced with a real tag slug such as <strong>travel</strong>.</li>
	<li>If a file <code>tag-travel.php</code> exists inside the active theme's directory, WordPress will use 
	it to display the tag page (page listing all posts tagged with a specific tag) for the tag with the SLUG <strong>travel</strong>.</li>
	<li>To find out a tag's SLUG see the column "Slug" in the tag list at "WP Admin" -> "Posts" -> "Post Tags"</li>
	</ul>
</div>
<!--
<div id="more-taxonomy" class="templateinfosection">
	<ul>
	<li>If a file <code>taxonomy.php</code> exists inside the active theme's directory, WordPress will use 
	it to display taxonomy pages (page listing all posts tagged with a specific tag) <strong>IF</strong> there is no better 
	matching template, such as "tag-blue.php" for the posts tagged with the tag "blue".</li>
	</ul>
</div>
<div id="more-taxonomy-TAXONOMY" class="templateinfosection">
	<span style="font-size:16px">taxonomy-<input style="color:green" type="text" size="4" value="" name="taxonomy-TAXONOMY-value" />.php</span><br />
	Fill in a taxonomy <strong>TAXONOMY</strong>. Example: <code>19</code> 
	<ul>
	<li>Taxonomy is rather new in WordPress: It lets you add additional custom classification 
	<li>In <code>taxonomy-TAXONOMY.php</code>, <strong>TAXONOMY</strong> is just a placeholder which needs to be replaced 
	with a real TAXONOMY such as <strong>hotel-category</strong>.</li>
	<li>If a file <code>taxonomy-hotel-category.php</code> exists inside the active theme's directory, WordPress will use 
	it to display the tag page (page listing all posts tagged with a specific tag) for the tag with the ID <strong>19</strong>.</li>
	<li>To find out a tag's ID point your mouse on the tag's name, at "WP Admin" -> "Posts" -> "Post Tags", 
	and the tags's ID will be displayed in your browser's status bar (usually at the bottom) like this: 
	<strong>...&tag_ID=<span style="color:green">19</span></strong></li>
	</ul>
</div>
<div id="more-taxonomy-TAXONOMY-TERM" class="templateinfosection">
	<span style="font-size:16px">taxonomy-<input type="text" size="25" value="" name="taxonomy-TAXONOMY-TERM-value" />.php</span><br />
	Fill in a taxonomy <strong>TAXONOMY-TERM</strong>. Example: <code>travel</code> 
	<ul>
	<li>In <code>taxonomy-TAXONOMY-TERM.php</code>, <strong>TAXONOMY-TERM</strong> is just a placeholder which needs to be 
	replaced with a real taxonomy slug such as <strong>travel</strong>.</li>
	<li>If a file <code>taxonomy-travel.php</code> exists inside the active theme's directory, WordPress will use 
	it to display the tag page (page listing all posts tagged with a specific tag) for the tag with the SLUG <strong>travel</strong>.</li>
	<li>To find out a tag's SLUG see the column "Slug" in the tag list at "WP Admin" -> "Posts" -> "Post Tags"</li>
	</ul>
</div>
-->
<div id="more-custom" class="templateinfosection">
	<span style="font-size:16px">Custom Page Template</span><br /><br />
	<strong>File Name:</strong> &nbsp;<input style="text-align:right;padding-right:3px" type="text" value="" size="35" name="filename" />.php
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Example: <code>blue-template-3</code>.php<br />
	<ul><li>Don't use spaces or special characters except dash - and underscore _</li>
<li>Don't use default WP template names or, if you do, the template will be automatically used by WordPress for all matching 
pageviews according to the <a href="http://codex.wordpress.org/Template_Hierarchy" target="_blank">WordPress Template Hierarchy</a>
</li>  
	<li>Default WP template names are: <span style="font-weight:bold;font-size:15px">4</span>04, 
<span style="font-weight:bold;font-size:15px">a</span>pplication,  
archive, 
attachment, 
audio, 
author, 
author-..., 
<span style="font-weight:bold;font-size:15px">c</span>ategory, 
category-..., 
<span style="font-weight:bold;font-size:15px">d</span>ate, 
<span style="font-weight:bold;font-size:15px">f</span>ront-page, 
<span style="font-weight:bold;font-size:15px">h</span>ome, 
<span style="font-weight:bold;font-size:15px">i</span>mage,  
index, 
<span style="font-weight:bold;font-size:15px">m</span>essage,  
model,  
multipart,  
<span style="font-weight:bold;font-size:15px">p</span>age, 
page-..., 
<span style="font-weight:bold;font-size:15px">s</span>earch, 
single, 
single-..., 
<span style="font-weight:bold;font-size:15px">t</span>ag, 
tag-..., 
taxonomy, 
taxonomy-..., 
text,  
<span style="font-weight:bold;font-size:15px">v</span>ideo,  
vnd,  
<span style="font-weight:bold;font-size:15px">x</span> and x-ckps</li>
</ul> 
</div>




<br /><br />
<h2 style="background: url(/themeframe/images/step2.png) top left no-repeat;padding: 5px 5px 10px 40px">Make new template a copy of:</h2> 
<select name="copyof">
<?php foreach ($thfr_css['pagetemplates'] as $tplname) { ?>
<option value="<?php echo $tplname; ?>"><?php echo $tplname; ?>.php</option>
<?php } ?>
</select>

</form>

<br /><br />
<h2 style="background: url(/themeframe/images/step3.png) top left no-repeat;padding: 5px 5px 10px 40px">Create the new page template:</h2> 
<br />
	<a href="#" style="float:none;margin:20px 10px 20px 0;" id="save-newpagetemplate" class="save-button">Create New Template</a>
	<div class="formstatus" style="font-size:16px;letter-spacing:0px;"></div>

<br /><br /><br />














