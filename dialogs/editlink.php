<?php include(dirname(__FILE__) . "/../functions.php"); ?>

<div id="newimageinstruct">
	<ul style="padding-bottom:0px">
		<li>
		The link will be available as a new Drag & Drop item in ThemeFrame.
		</li>
		<li>You can place the link in any page template by dropping it there.
		</li>
		<li>Once it is placed inside a page template, you can style the link (i.e. add a background image) by right-clicking it.
		<li>
		<span style="color:red;font-weight:bold">*</span> means mandatory. Point mouse at option titles for more info.
		</li>
	</ul>
</div>

<div id="newlinkinfo" style="font-size:18px;line-height:20px;color:#444;margin-right:400px;"></div>


<form id="newlinkform" >
	<table id="newlinktable" cellpadding="0" cellspacing="0">
		<tr>
			<td class="head" title="A word of your choice. Without spaces. Example: twitter-link">
				Link <strong>CSS ID <span style="color:red">*</span></strong>
			</td>
			<td>
				<input type="text" name="linkid" id="linkid" value="" size="30" />
				&nbsp;&nbsp;&nbsp;<em>One descriptive word of your choice. No spaces. Example: <code>twitter-link3</code></em>
			</td>
		</tr>
		<tr>
			<td class="head" title="Example: Click here!">
				Link <strong>Text <span style="color:red">*</span></strong>
			</td>
			<td>
				<input type="text" name="linktext" id="linktext" value="" size="100" /> 
			</td>
		</tr>
		<tr>
			<td class="head" title="Example: http://www.mydomain.com/url.html">
				Link <strong>URL <span style="color:red">*</span></strong>
			</td>
			<td>
				<input type="text" name="linkurl" id="linkurl" value="" size="100" /> 
			</td>
		</tr>
		<tr>
			<td class="head" title="Optional. Example: This link takes you to my other site!">
				Link <strong>Title</strong>
			</td>
			<td>
				<input type="text" name="linktitle" id="linktitle" value="" size="100" />
			</td>
		</tr>
		<tr>
			<td class="head" title="Optional">
				Link <strong>Target</strong> & <strong>Rel</strong>
			</td>
			<td>
				<select name="linktarget" id="linktarget">
					<option value=""></option>
					<option value="_blank">_blank</option>
					<option value="_parent">_parent</option>
					<option value="_self">_self</option>
					<option value="_top">_top</option>
				</select> <em><code>_blank</code> to open link in new window</em>
				&nbsp;&nbsp;&nbsp;&nbsp;<select name="linkrel" id="linkrel">
					<option value=""></option>
					<option value="nofollow">nofollow</option>
					<option value="external">external</option>
					<option value="nofollow external">nofollow external</option>
					<option value="bookmark">bookmark</option>
				</select> <a href="http://en.wikipedia.org/wiki/Nofollow" target="_blank">"nofollow" at Wikipedia</a>
			</td>
		</tr>
	</table>
	<br />
	<a href="#" id="save-newdroplink" class="save-button">Save</a>
	<div class="formstatus" style="font-size:16px;letter-spacing:0px;"></div>
</form>		















