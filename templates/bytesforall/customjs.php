<div class="infocontainer-head">
	<h2 style="float:left;padding-right:30px">Code Inserts <strong>javascript.js</strong></h2>
	<a class="moreinfolink" id="customjsinfo" href="#">Show/Hide More Info</a>
</div>

<div id="multisettingpage" style="padding:20px;font-size: 13px" >
	<div id="customjsinfo-container" class="infocontainer">
		<ul>
			<li>Use this to add custom Javascript code to your theme.</li>
			<li>Put your custom Javascript code into the text area below and click the <code>Save</code> button on the bottom right</li>
			<li>Your code will be printed at the bottom of the <code>javascript.js</code> file.</li>
		</ul>
	</div>
	<div class="codemirrorarea">
	<form id="customjsform">
	<textarea style="width:100%;height:400px" name="customjs" id="customjs"><?php echo htmlspecialchars($thfr_css['customjs']); ?></textarea>
	</form>
	</div><br/>
	<a href="#" id="save-customjs" class="save-button">Save</a>	
	<div class="formstatus"></div>	
</div>

