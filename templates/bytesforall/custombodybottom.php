<div class="infocontainer-head">
	<h2 style="float:left;padding-right:30px">Edit Theme &rarr; Insert Custom Code into &rarr; <strong>Templates (Body Bottom)</strong></h2>
	<a class="moreinfolink" id="custombodybottominfo" href="#">Show/Hide More Info</a>
</div>

<div style="font-size:13px">
	<div id="custombodybottominfo-container" class="infocontainer">
		<ul>
			<li>Add code here (JavaScript, HTML, PHP, CSS) that you want to put into the body section of the website, 
			between <code>&lt;body&gt;</code> and <code>&lt;/body&gt;</code>, right before the closing <code>&lt;/body&gt;</code> tag</li>
			<li><strong>Google Analytics</strong> code would go here, and most other tracking code probably too</li>
			<li>Put your custom code into the text area below and click the "Save" button on the bottom right</li>
			<li>The code you put here will be inserted into all page templates (index.php, home.php, page.php, single.php...). To limit the 
			scope of the code to a certain page view (i.e. only "category" pages) use <a target="_blank" href="http://codex.wordpress.org/Conditional_Tags">WP Conditional Tags</a> such as 
			<code style="color:blue">&lt;?php if ( is_category() ) { ?&gt;<span style="color:red">... your code here ...</span>&lt;?php } ?&gt;</code></li>
		</ul>
	</div>
	<div class="codemirrorarea">
	<textarea style="width:100%;height:400px" name="custombodybottom" id="custombodybottom"><?php echo $thfr_css['custombodybottom']; ?></textarea>
	</div>
	<a href="#" id="save-custombodybottom" class="save-button">Save</a>
	<div class="formstatus" style="float:right;margin-right:40px;font-size:20px;text-align:center;font-weight:bold;color:green"></div>
</div>
