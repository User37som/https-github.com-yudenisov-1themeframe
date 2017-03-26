<div class="infocontainer-head">
	<h2 style="float:left;padding-right:30px">Edit Theme &rarr; Insert Custom Code into &rarr; <strong>Templates (Body Top)</strong></h2>
	<a class="moreinfolink" id="custombodytopinfo" href="#">Show/Hide More Info</a>
</div>

<div style="font-size:13px">
	<div id="custombodytopinfo-container" class="infocontainer">
		<ul>
			<li>Add code here (JavaScript, PHP, HTML, CSS) that you want to put into the body section of the website, between 
			<code>&lt;body&gt;</code> and <code>&lt;/body&gt;</code>, right after <code>&lt;body&gt;</code></li>
			<li>Put your custom code into the text area below and click the "Save" button on the bottom right</li>
			<li>The code you put here will be inserted into all page templates (index.php, home.php, page.php, single.php...). To limit the 
			scope of the code to a certain page view (i.e. only "category" pages) use <a target="_blank" href="http://codex.wordpress.org/Conditional_Tags">WP Conditional Tags</a> such as 
			<code style="color:blue">&lt;?php if ( is_category() ) { ?&gt;<span style="color:red">... your code here ...</span>&lt;?php } ?&gt;</code></li>
		</ul>
	</div>
	<div class="codemirrorarea">
	<textarea style="width:100%;height:400px" name="custombodytop" id="custombodytop"><?php echo $thfr_css['custombodytop']; ?></textarea>
	</div>
	<a href="#" id="save-custombodytop" class="save-button">Save</a>
	<div class="formstatus" style="float:right;margin-right:40px;font-size:20px;text-align:center;font-weight:bold;color:green"></div>
</div>
