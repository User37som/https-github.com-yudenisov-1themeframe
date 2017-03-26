<div class="infocontainer-head">
	<h2 style="float:left;padding-right:30px">Edit Theme &rarr; Edit Static Text &rarr; <strong>'Read More' Text</strong></h2>
	<a class="moreinfolink" id="readmoreinfo" href="#">Show/Hide More Info</a>
</div>

<div style="font-size:13px">
	<div id="readmoreinfo-container" class="infocontainer">
	<img src="/themeframe/images/post-structure.gif" style="float:right;margin:10px" />
		<ul>
			<li>For every post or static page you write, WordPress saves the date and author, and, for posts, also the category it was filed under and the tags you may have assigned to the post</li>
			<li>These 'post info items' (not an official term, just named like this by ThemeFrame) can be displayed with each post or static page.</li>
			<li>In the ThemeFrame layout there are 3 pre-defined areas within each post/page container for this: The <a href="http://www.google.com/search?q=kicker+typography" target="_blank">Kicker</a> (or "Section Heading") above the headline, the <strong>Byline</strong> below the headline, and the <strong>Footer</strong> at the bottom of a post or page.</li>
			<li>You can set different content for each one of these 3 areas</li>
			<li>On top of this, each page template (index.php, home.php...) can have different Kickers/Bylines/Footers</li>
			<li>This results in 12 possible post info bits: 4 page templates (index.php, home.php, single.php, page.php), each with 3 post info areas (Kicker, Byline, Footer)</li>
			<li>On static pages usually no post info is displayed, i.e. there's usually no author or date displayed on a static page. However, you could do this, so there's an options for post info items on static pages, too</li>
			<li>Use the <a href="http://codex.wordpress.org/Template_Tags" target="_blank">WordPress Template Tags</a> to dynamically display info for the current post</li>
		</ul>
	</div>
	<div class="codemirrorarea">
	<textarea style="width:100%;height:400px" name="readmore" id="readmore"><?php echo $thfr_css['readmore']; ?></textarea>
	</div>
	<a href="#" id="save-readmore" class="save-button">Save</a>
	<div class="formstatus" style="float:right;margin-right:40px;font-size:20px;text-align:center;font-weight:bold;color:green"></div>
</div>
