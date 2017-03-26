<div class="infocontainer-head">
	<h2 style="float:left;padding-right:30px">Code Inserts <strong>style.css</strong></h2>
	<a class="moreinfolink" id="customcssinfo" href="#">Show/Hide More Info</a>
</div>

<div id="multisettingpage" style="padding:20px;font-size: 13px" >
	<div id="customcssinfo-container" class="infocontainer">
		<ul>
			<li>Use this to add custom CSS to your theme.</li>
			<li>Example: <code>div.mydiv { background-color: #ffffff;}</code></li>
			<li>Put your custom CSS code into the text area below and click the "Save" button on the bottom right</li>
			<li>Your code will be printed at the bottom of the file <code>style.css</code>.</li>
		</ul>
	</div>
	<div class="codemirrorarea">
	<form id="customcssform">
	<textarea style="width:100%;height:400px" name="customcss" id="customcss"><?php echo htmlspecialchars($thfr_css['customcss']); ?></textarea>
	</form>
	</div>
	<br/>
	<a href="#" id="save-customcss" class="save-button">Save</a>
	<div class="formstatus"></div>	
</div>
