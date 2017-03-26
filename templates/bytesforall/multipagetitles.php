<div class="infocontainer-head">
	<h2 style="float:left;padding-right:30px">Content Options <strong>Multi-Post-Page Titles</strong></h2>
	<a class="moreinfolink" id="multipagetitlesinfo" href="#">Show/Hide More Info</a>
</div>

<div id="multisettingpage" style="padding:20px;font-size: 13px" >
	<div id="multipagetitlesinfo-container" class="infocontainer">
		<ul>
			<li>On "multi post pages" (pages listing multiple posts) you may want to put a title on top of the content area, such as 
			"Posts filed under [Category Name Here]".</li>
			<li>You can use PHP incl. the <a href="http://codex.wordpress.org/Conditional_Tags" target="_blank" >WordPress Conditional Tags</a> to 
			display different titles based on page type.</li>
		</ul>
	</div>
	<div class="codemirrorarea">
	<textarea style="width:100%;height:400px" name="multipagetitles" id="multipagetitles"><?php echo htmlspecialchars($thfr_css['multipagetitles']); ?></textarea>
	</div><br/>
	<a href="#" id="save-multipagetitles" class="save-button">Save</a>
	<div class="formstatus"></div>
</div>
