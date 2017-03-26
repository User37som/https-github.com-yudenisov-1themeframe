<?php switch($thisParameter) {
	case "head": $prettyParam = "HEAD"; break;
	case "bodytag": $prettyParam = "BODY TAG";break;
	case "bodytop": $prettyParam = "BODY TOP";break;
	case "bodybottom": $prettyParam = "BODY BOTTOM";break;
}
?>

<div class="infocontainer-head">
	<h2 style="float:left;padding-right:30px">Code Inserts <strong>Page Templates &rarr; <?php echo $prettyParam; ?></strong></h2>
	<a class="moreinfolink" id="custompageinfo" href="#">Show/Hide More Info</a>
</div>

<div id="multisettingpage" style="padding:20px;font-size: 13px" >
<div id="custompageinfo-container" class="infocontainer">
	<?php if ($thisParameter == 'head') { ?>
	<h3>Insert custom code into page template files, at the position "HEAD", which is right before the closing <code>&lt;/head&gt;</code> tag</h3>
		<ul>
		<li>This should be code that does <strong>not</strong> create "visible" HTML, i.e. <br/>
		<code>&lt;meta name="author" content="John W. Doe" /&gt;</code></li>
		<li>To limit some code to a certain page view (i.e. only "category" pages) use <a target="_blank" href="http://codex.wordpress.org/Conditional_Tags">WP Conditional Tags</a> such as 
					<br/><code>&lt;?php if ( is_category() ) { ?&gt; ... your code here ... &lt;?php } ?&gt;</code></li>
		</ul>
	<?php } ?>
	<?php if ($thisParameter == 'bodytag') { ?>
	<h3>Replace the default <code>&lt;body &lt;?php body_class(); ?&gt;&gt;</code> tag in page template files</h3>
		<ul>
			<li>Example: <code>&lt;body &lt;?php body_class(); ?&gt; onLoad="alert('The page is loading... now!')"&gt;</code></li> 
			<li>If you leave this empty the standard <code>&lt;body &lt;?php body_class(); ?&gt;&gt;</code> will be used</li>
		<li>To limit some code to a certain page view (i.e. only "category" pages) use <a target="_blank" href="http://codex.wordpress.org/Conditional_Tags">WP Conditional Tags</a> such as 
					<br/><code>&lt;?php if ( is_category() ) { ?&gt; ... your code here ... &lt;?php } ?&gt;</code></li>
		</ul>
	<?php } ?>
	<?php if ($thisParameter == 'bodytop') { ?>
	<h3>Insert custom code into page template files, at the position "BODY TOP", which is right after the opening <code>&lt;body&gt;</code> tag</h3>
		<ul>
		<li>To limit some code to a certain page view (i.e. only "category" pages) use <a target="_blank" href="http://codex.wordpress.org/Conditional_Tags">WP Conditional Tags</a> such as 
					<br/><code>&lt;?php if ( is_category() ) { ?&gt; ... your code here ... &lt;?php } ?&gt;</code></li>
		</ul>
	<?php } ?>
	<?php if ($thisParameter == 'bodybottom') { ?>
	<h3>Insert custom code into page template files, at the position "BODY BOTTOM", which is right before the closing <code>&lt;/body&gt;</code> tag</h3>
		<ul>
			<li><strong>Google Analytics</strong> code would go here, and most other tracking code probably too</li>
		<li>To limit some code to a certain page view (i.e. only "category" pages) use <a target="_blank" href="http://codex.wordpress.org/Conditional_Tags">WP Conditional Tags</a> such as 
					<br/><code>&lt;?php if ( is_category() ) { ?&gt; ... your code here ... &lt;?php } ?&gt;</code></li>

		</ul>
	<?php } ?>
</div>

<form id="codeinsertform">

<input type="hidden" id="codeinsertarea" value="<?php echo $thisParameter; ?>" />
<ul id="shadowline">
<li style="background:#ddd;padding: 5px 10px;">
	<h2>Global <strong><?php echo $prettyParam; ?></strong> Insert:</h2>
</li>
<li>
	<h3><strong>All page templates</strong></h3>
	<em>The code below will be inserted into all page templates where "<strong>Use Global</strong>" (see below) is checked</em>
	<div class="codemirrorarea">
	<textarea name="global" id="global"><?php echo htmlspecialchars($thfr_css['codeinserts'][$thisParameter]['global']); ?></textarea>
<!--	<textarea name="global" id="global"><?php echo htmlspecialchars($thfr_css['codeinserts'][$thisParameter]); ?></textarea>  TEST-->
	</div>
	<br/>
</li>
<li style="background:#ddd;padding: 5px 10px;">
	<h2>Individual <strong><?php echo $prettyParam; ?></strong> Inserts:</h2>
	<div class="useglobal"><span class="ui-icon ui-icon-circle-check"/>
	<input style="display:none" type="checkbox" id="checkuseglobal" checked="checked"/> 
	<label for="checkuseglobal" style="cursor:pointer;text-decoration:underline">Check/Uncheck All</label></div>

	<div class="addcustom"><span class="ui-icon ui-icon-circle-check"/>
	<input style="display:none" type="checkbox" id="checkaddcustom" checked="checked"/> 
	<label for="checkaddcustom" style="cursor:pointer;text-decoration:underline">Check/Uncheck All</label></div>

</li>
<?php foreach( $thfr_css['pagetemplates'] as $value ) { ?>
<li>
	<h3><strong><?php echo $value; ?>.php</strong></h3>
	<div class="useglobal"><input class="checkglobal" type="checkbox" name="<?php echo $value; ?>-global" id="<?php echo $value; ?>-global" 
	<?php if($thfr_css['codeinserts'][$thisParameter][$value . '-global'] == 'on') { ?> checked="checked"<?php } ?>/> 
	<label for="<?php echo $value; ?>-default">Use Global</label></div>
	<div class="addcustom"><input class="checkcustom" type="checkbox" name="<?php echo $value; ?>-custom" id="<?php echo $value; ?>-custom"
		<?php if($thfr_css['codeinserts'][$thisParameter][$value . '-custom'] == 'on') { ?> checked="checked"<?php } ?>/> 
	<label for="<?php echo $value; ?>-custom">Add Custom:</label></div>
	<div style="margin-left:50px" class="codemirrorarea">
	<textarea class="onoff" name="<?php echo $value; ?>"><?php echo htmlspecialchars($thfr_css['codeinserts'][$thisParameter][$value]); ?></textarea>
	</div>
</li>
<?php } ?>
<li>
	<div class="useglobal"><span class="ui-icon ui-icon-circle-check"/><input style="display:none" type="checkbox" id="checkuseglobal" checked="checked"> 
	<label for="checkuseglobal" style="cursor:pointer;text-decoration:underline">Check/Uncheck All</label></div>

	<div class="addcustom"><span class="ui-icon ui-icon-circle-check"/><input style="display:none" type="checkbox" id="checkaddcustom" checked="checked"> 
	<label for="checkaddcustom" style="cursor:pointer;text-decoration:underline">Check/Uncheck All</label></div>
		<br /><br />
</li>
</ul>

<a href="#" id="save-codeinserts" class="save-button">Save</a>
<div class="formstatus"></div>	
</form>
</div>	
	

