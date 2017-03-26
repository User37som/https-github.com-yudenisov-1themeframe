<div class="infocontainer-head">
	<h2 style="float:left;padding-right:30px">Edit Theme &rarr; Insert Custom Code into &rarr; <strong>Templates (Body Tag)</strong></h2>
	<a class="moreinfolink" id="custombodytaginfo" href="#">Show/Hide More Info</a>
</div>

<div style="font-size:13px">
	<div id="custombodytaginfo-container" class="infocontainer">
		<ul>
			<li>Edit this if you want to <strong>replace</strong> the standard WordPress body tag <code>&lt;body &lt;?php body_class(); ?&gt;&gt;</code> (<em>NOTE: This is slightly different from the 'Atahualpa' theme where you <strong>add</strong> to the body tag instead of replacing it</em>)</li>
			<li>Example: <code>&lt;body &lt;?php body_class(); ?&gt; onLoad="alert('The page is loading... now!')"&gt;</code></li> 
			<li>Put your custom code into the text area below and click the "Save" button on the bottom right</li>
			<li>If you leave this empty the standard <code>&lt;body &lt;?php body_class(); ?&gt;&gt;</code> will be used</li>
			<li>The code you put here will be used as the body tag of all page templates (index.php, home.php, page.php, single.php...). To limit the 
			scope of the code to a certain page view (i.e. only "category" pages) use <a target="_blank" href="http://codex.wordpress.org/Conditional_Tags">WP Conditional Tags</a> such as 
			<code style="color:blue">&lt;?php if ( is_category() ) { ?&gt;<span style="color:red">&lt;body &lt;?php body_class(); ?&gt; onLoad="alert('This is a ... category page!')"&gt;</span>&lt;?php } else { ?&gt;<span style="color:red">&lt;body &lt;?php body_class(); ?&gt;&gt;</span>&lt;?php } ?&gt;</code></li>
		</ul>
	</div>
	<div class="codemirrorarea">
	<textarea style="width:100%;height:400px" name="custombodytag" id="custombodytag"><?php echo $thfr_css['custombodytag']; ?></textarea>
	</div>
	<a href="#" id="save-custombodytag" class="save-button">Save</a>
	<div class="formstatus" style="float:right;margin-right:40px;font-size:20px;text-align:center;font-weight:bold;color:green"></div>
</div>
