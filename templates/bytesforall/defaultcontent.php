<div class="infocontainer-head">
	<h2 style="float:left;padding-right:30px">Edit Theme &rarr; Edit Static Text &rarr; <strong>Post Info Items</strong></h2>
	<a class="moreinfolink" id="postinfoinfo" href="#">Show/Hide More Info</a>
</div>

<div style="font-size:13px">
	<div id="postinfoinfo-container" class="infocontainer">
	<img src="/themeframe/images/post-structure.gif" style="float:right;margin:10px" />
		<ul>
			<li>Configure what parts of a post should be displayed by default. Each page template can have an individual setting for this, or use the default settings that you set here.
			</li>
			<li>You can set a different default for each one of the 3 typical page types in WP: multi post pages, single post pages and static "Page" pages.</li>
			<li>You can use HTML and PHP, including all <a href="http://codex.wordpress.org/Template_Tags" target="_blank">WP Template Tags</a> to dynamically display info info of the current post (i.e. post title, date, author name).</li>
		</ul>
	</div>
	<div id="postinfo-parent"><!-- just for styling purposes -->
		<h4 class="abovetextarea">Kicker:</h4>
		<div class="codemirrorarea"><textarea style="width:100%;height:90px" name="postinfo-multi-kicker" id="postinfo-multi-kicker"><?php echo htmlspecialchars($thfr_css['postinfo-multi-kicker']); ?></textarea></div>
		<h4 class="abovetextarea"><strong>index.php</strong> &rarr; Byline:</h4>
		<div class="codemirrorarea"><textarea style="width:100%;height:100px" name="postinfo-multi-byline" id="postinfo-multi-byline"><?php echo htmlspecialchars($thfr_css['postinfo-multi-byline']); ?></textarea></div>
		<h4 class="abovetextarea"><strong>index.php</strong> &rarr; Footer:</h4>
		<div class="codemirrorarea"><textarea style="width:100%;height:100px" name="postinfo-multi-footer" id="postinfo-multi-footer"><?php echo htmlspecialchars($thfr_css['postinfo-multi-footer']); ?></textarea></div>
		<h4 class="abovetextarea"><strong>single.php</strong> &rarr; Kicker:</h4>
		<div class="codemirrorarea"><textarea style="width:100%;height:100px" name="postinfo-single-kicker" id="postinfo-single-kicker"><?php echo htmlspecialchars($thfr_css['postinfo-single-kicker']); ?></textarea></div>
		<h4 class="abovetextarea"><strong>single.php</strong> &rarr; Byline:</h4>
		<div class="codemirrorarea"><textarea style="width:100%;height:100px" name="postinfo-single-byline" id="postinfo-single-byline"><?php echo htmlspecialchars($thfr_css['postinfo-single-byline']); ?></textarea></div>
		<h4 class="abovetextarea"><strong>single.php</strong> &rarr; Footer:</h4>
		<div class="codemirrorarea"><textarea style="width:100%;height:100px" name="postinfo-single-footer" id="postinfo-single-footer"><?php echo htmlspecialchars($thfr_css['postinfo-single-footer']); ?></textarea></div>
		<h4 class="abovetextarea"><strong>page.php</strong> &rarr; Kicker:</h4>
		<div class="codemirrorarea"><textarea style="width:100%;height:100px" name="postinfo-page-kicker" id="postinfo-page-kicker"><?php echo htmlspecialchars($thfr_css['postinfo-page-kicker']); ?></textarea></div>
		<h4 class="abovetextarea"><strong>page.php</strong> &rarr; Byline:</h4>
		<div class="codemirrorarea"><textarea style="width:100%;height:100px" name="postinfo-page-byline" id="postinfo-page-byline"><?php echo htmlspecialchars($thfr_css['postinfo-page-byline']); ?></textarea></div>
		<h4 class="abovetextarea"><strong>page.php</strong> &rarr; Footer:</h4>
		<div class="codemirrorarea"><textarea style="width:100%;height:100px" name="postinfo-page-footer" id="postinfo-page-footer"><?php echo htmlspecialchars($thfr_css['postinfo-page-footer']); ?></textarea></div>
	</div>
	<br />	<br />
	<a href="#" id="save-postinfo" class="save-button">Save</a>
	<div class="formstatus" style="float:right;margin-right:40px;font-size:20px;text-align:center;font-weight:bold;color:green"></div>
</div>
