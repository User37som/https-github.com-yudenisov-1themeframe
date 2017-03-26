<div class="infocontainer-head">
	<h2 style="float:left;padding-right:30px">Content Options <strong>Footer Content</strong></h2>
	<a class="moreinfolink" id="footercontentinfo" href="#">Show/Hide More Info</a>
</div>

<div id="multisettingpage" style="padding:20px;font-size: 13px" >
	<div id="footercontentinfo-container" class="infocontainer">
		<ul>
			<li>This content will be inserted into the footer area of all page templates (index.php, home.php...)</li>
			<li>To limit some code to a particular page view (i.e. only Category Pages) use <a href="http://codex.wordpress.org/Conditional_Tags" target="_blank">WordPress Conditional Tags</a></li>
			<li>Example: <code style="color:blue">&lt;?php if ( is_category() ) { ?&gt;<span style="color:red"> This will be displayed on category pages </span>&lt;?php } ?&gt;</code></li>
			<li>Use the <a href="http://codex.wordpress.org/Template_Tags" target="_blank">WordPress Template Tags</a> to dynamically display site info such as the site name</li>
		</ul>
	</div>
	<div class="codemirrorarea">
	<textarea style="width:100%;height:100px" name="footercontent" id="footercontent"><?php echo htmlspecialchars($thfr_css['footercontent']); ?></textarea>
	</div><br/>
	<a href="#" id="save-footercontent" class="save-button">Save</a>
	<div class="formstatus"></div>
</div>
