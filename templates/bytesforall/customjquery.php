<div class="infocontainer-head">
	<h2 style="float:left;padding-right:30px">Edit Theme &rarr; Insert Custom <strong>jQuery</strong> Code into &rarr; <strong>javascript.js</strong></h2>
	<a class="moreinfolink" id="customjqueryinfo" href="#">Show/Hide More Info</a>
</div>

<div style="font-size:13px">
	<div id="customjqueryinfo-container" class="infocontainer">
		<ul>
			<li>Use this to add custom jQuery code to your theme.</li>
			<li>Example: <code>jQuery('div.mydiv').live('click', function() { alert('You clicked "div.mydiv"!'); })</code></li>
			<li>Put your custom jQuery code into the text area below and click the "Save" button on the bottom right</li>
			<li>This code will be printed at the bottom but still inside of jQuery's "document.ready" function, in the <code>javascript.js</code> file.</li>
			<li>The <code>javascript.js</code> file is needed for every theme and will be created when you download or transfer your theme (see 'Download' and 'Transfer' buttons on top)</li>
		</ul>
		<h3>'document ready' is already there, don't use it</h3>
		<ul>
			<li>jQuery itself is already loaded and the 'document ready' function is opened before, and closed after your code, so start right away with straight jQuery code</li>
			<li>Do not put the jQuery "document ready" code here, neither the opening <code>jQuery(document).ready(function(){</code> (or similar) nor the closing <code>})</code>. ThemeFrame will add that itself for its own jQuery actions. </li>
			<li>If you have some existing jQuery code, remove the "document ready" function by deleting the opening and closing tags <code>jQuery(document).ready(function(){</code> or <code>$(document).ready(function(){</code> and <code>})</code></li>
		</ul>
		<h3>Use the term 'jQuery' instead of the short '$'</h3>
		<ul>
			<li>Use <code>jQuery</code> instead of <code>$</code>, i.e. <code>jQuery('selector')</code> instead of <code>$('selector')</code></li>
			<li>If you have some existing jQuery code, replace all <code>$</code> with <code>jQuery</code> <em>(Note: Replace only the $ that mean jQuery such as <code>$('div.mydiv')</code>, not those that mean a variable such as <code>var $myvar = 'something'</code>)</em></li>
		</ul>
	</div>
	<div class="codemirrorarea">
	<textarea style="width:100%;height:400px" name="customjquery" id="customjquery"><?php echo $thfr_css['customjquery']; ?></textarea>
	</div>
	<a href="#" id="save-customjquery" class="save-button">Save</a>
	<div class="formstatus" style="float:right;margin-right:40px;font-size:20px;text-align:center;font-weight:bold;color:green"></div>
</div>


