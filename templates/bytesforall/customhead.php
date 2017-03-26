<div class="infocontainer-head">
	<h2 style="float:left;padding-right:30px">Edit Theme &rarr; Insert Custom Code into &rarr; <strong>Templates (Head)</strong></h2>
	<a class="moreinfolink" id="customheadinfo" href="#">Show/Hide More Info</a>
</div>

<div style="font-size:13px">
	<div id="customheadinfo-container" class="infocontainer">
		<ul>
			<li>Add code here (JavaScript, CSS, PHP, HTML) that you want to put into the head section of your theme, 
				between <code>&lt;head&gt;</code> and <code>&lt;/head&gt;</code></li>
			<li>Put your custom code into the text area below and click the "Save" button on the bottom right</li>
			<li>Do not put "visible" HTML here such as a DIV container</li>
			<li>If you put HTML code here, then it should be machine parsable code, for instance a 
				meta tag such as:<br /><code>&lt;meta name="author" content="John W. Doe" /&gt;</code></li>
			<li>The code you put here will be inserted into the head of all page templates (index.php, home.php, page.php, single.php...). To limit the 
			scope of the code to a certain page view (i.e. only "category" pages) use <a target="_blank" href="http://codex.wordpress.org/Conditional_Tags">WP Conditional Tags</a> such as 
			<code>&lt;?php if ( is_category() ) { ?&gt; ... your code here ... &lt;?php } ?&gt;</code></li>
		</ul>
	</div>
	<div class="codemirrorarea">
	<textarea style="width:100%;height:400px" name="customhead" id="customhead"><?php echo $thfr_css['customhead']; ?></textarea>
	</div>
	<a href="#" id="save-customhead" class="save-button">Save</a>
	<div class="formstatus" style="float:right;margin-right:40px;font-size:20px;text-align:center;font-weight:bold;color:green"></div>
</div>
