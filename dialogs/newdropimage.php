<?php include(dirname(__FILE__) . "/../functions.php"); ?>
<script type="text/javascript">
/*
jQuery(document).ready(function(){
});	
*/
</script> 

<div id="newimageinstruct">
	<p class="menuinfo">Add a new image as a new Drag & Drop item to this theme.</p>
	<ul style="padding-bottom:20px">
		<li>
		Choose a custom image (i.e. a logo) from your computer and add it as a new Drag & Drop item to ThemeFrame.
		</li>
		<li>
		After that, the image will be available as a new Drag & Drop item that you can place in any page template.
		</li>
		<!--  
		<li>The image will be inserted with this code:  
		<code>&lt;img src="URL_OF_IMAGE" alt="YOUR_ALT_TEXT" /&gt;</code> or, if you choose to link 
		the image: <code>&lt;a href="YOUR_LINK_URL" target="YOUR_TARGET" rel="YOUR_REL" title="YOUR_TITLE"&gt;&lt;
		img src="URL_OF_IMAGE" alt="YOUR_ALT_TEXT" /&gt;&lt;/a&gt;</code>
		</li>
		-->
		<li>The image will be added to the theme's <code>/images/</code> directory.
		</li>
		<!-- 
		<li>The image code will be <code>&lt;img src="&lt;?php bloginfo('stylesheet_directory'); ?&gt;/images/YOUR_IMAGE.gif" ... /&gt;</code>
		</li>
		-->
	</ul>
</div>

<div id="newimageinfo" style="font-size:18px;line-height:20px;color:#444;margin-right:400px;"></div>
<a href="#" id="newImage-upload">Select an image</a><br />

<div id="newimagepreview"></div>

<form id="newimageform" style="display:none;">

<h3 style="font-size:18px;line-height:20px;color:#444;font-weight:normal">Image Settings:</h3>

	<input type="hidden" id="newimage" name="newimage" value="" />

	<input type="checkbox" name="alt" id="alt" /> Add ALT text: 
<br />
<div style="margin:7px 0 0 50px;background:#eee;padding:10px 15px;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px" id="altmore">
	<input type="text" name="alttext" id="alttext" value="" size="70" /> <em>This image shows Downtown Montreal</em>
</div>
<hr />
	<input type="checkbox" name="link" id="link" /> Add LINK: 
<br />
<div style="margin:7px 0 0 50px;background:#eee;padding:1px 15px;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px" id="linkmore">
	<p>
		<strong style="width:150px">URL</strong>:<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="linktype" id="linktype-home" value="homepage" checked="checked" /> Homepage <em>(of the site using this theme - dynamically inserted by WordPress)</em>
		<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="linktype" id="linktype-custom" value="custom" /> Custom Static URL: <input type="text" name="customurl" id="customurl" value="" size="45" /> 
		 <em>http://mydomain.com/url.html</em>
	</p><p>
		<strong>Title</strong>: &nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="linktitle" id="linktitle" value="" size="70" />
		 <em>Click for more about Montreal!</em><br />
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em>(Leave blank to have no link title)</em>
	</p><p>
		<strong style="width:150px">Target</strong>: &nbsp;
		<select name="linktarget" id="linktarget">
			<option value=""></option>
			<option value="_blank">_blank</option>
			<option value="_parent">_parent</option>
			<option value="_self">_self</option>
			<option value="_top">_top</option>
		</select> <em>Choose <code>_blank</code> to have the link open in a new window</em>
	</p><p>
		<strong style="width:150px">Rel</strong>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<select name="linkrel" id="linkrel">
			<option value=""></option>
			<option value="nofollow">nofollow</option>
			<option value="external">external</option>
			<option value="nofollow external">nofollow external</option>
			<option value="bookmark">bookmark</option>
		</select> <em>Choose <code>nofollow</code> to set the link to "nofollow" 
		(<a href="http://en.wikipedia.org/wiki/Nofollow" target="_blank">More about nofollow at Wikipedia</a>)</em>
	</p>
</div>
<br />
<a href="#" id="save-newdropimage" class="save-button">Save</a>
	<div class="formstatus" style="font-size:16px;letter-spacing:0px;"></div>
</form>		















