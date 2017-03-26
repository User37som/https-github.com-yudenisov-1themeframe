<div class="infocontainer-head">
	<h2 style="float:left;padding-right:30px">Code Inserts <strong>functions.php</strong></h2>
	<a class="moreinfolink" id="customphpinfo" href="#">Show/Hide More Info</a>
</div>

<div id="multisettingpage" style="padding:20px;font-size: 13px" >
	<div id="customphpinfo-container" class="infocontainer">
		<ul>
			<li>Use this to add custom PHP code to the <code>functions.php</code> file of your theme.</li>
			<li>Put your custom PHP code into the text area below and click the "Save" button on the bottom right</li>
			<li>Your code will be printed at the bottom of the <code>functions.php</code> file.</li>
			<li>The <code>functions.php</code> file is needed for every theme and will be created when you download or transfer your theme (see 'Download' and 'Transfer' buttons on top)</li>
			<li>Do not include the opening <strong><code>&lt;?php</code></strong> and closing <strong><code>?&gt;</code></strong> PHP tags. PHP is already opened before your custom code, 
			and will be closed after it</li>
		</ul>
	</div>
	<div class="codemirrorarea">
	<form id="customphpform">
	<textarea style="width:100%;height:400px" name="customphp" id="customphp"><?php echo htmlspecialchars($thfr_css['customphp']); ?></textarea>
	</form>
	</div><br/>
	<a href="#" id="save-customphp" class="save-button">Save</a>
	<div class="formstatus"></div>	
</div>
