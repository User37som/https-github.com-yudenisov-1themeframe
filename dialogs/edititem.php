<?php 
include(dirname(__FILE__) . "/../functions.php"); 
$itemgroup = $_REQUEST["group"];
$itemname = $_REQUEST["name"];
?>
<script type="text/javascript">

jQuery(document).ready(function(){
	jQuery('div#newimagepreview').slideDown();
});	

</script> 


<?php if ($itemgroup == 'customdroplinks') { ?>
	<div id="newlinkinfo" style="font-size:18px;line-height:20px;color:#444;margin-right:400px;"></div>

	<form id="newlinkform" >
	
	<input type="hidden" name="linkid" id="linkid" value="<?php echo $thfr_css['customdropimages'][$itemname]['file']; ?>" />
	
	
		<table id="newlinktable" cellpadding="0" cellspacing="0">
			<tr>
				<td class="head" style="color:#666" title="A word of your choice. Without spaces. Example: twitter-link">
					Link <strong>CSS ID </strong>
				</td>
				<td class="head" style="color:#888;text-align:left;font-size:18px" >
					<strong><?php echo $itemname; ?></strong>
					
				</td>
			</tr>
			<tr>
				<td class="head" title="Example: Click here!">
					Link <strong>Text <span style="color:red">*</span></strong>
				</td>
				<td>
					<input type="text" name="linktext" id="linktext" value="<?php echo $thfr_css['customdroplinks'][$itemname]['linktext']; ?>" size="100" /> 
				</td>
			</tr>
			<tr>
				<td class="head" title="Example: http://www.mydomain.com/url.html">
					Link <strong>URL <span style="color:red">*</span></strong>
				</td>
				<td>
					<input type="text" name="linkurl" id="linkurl" value="<?php echo $thfr_css['customdroplinks'][$itemname]['linkurl']; ?>" size="100" /> 
				</td>
			</tr>
			<tr>
				<td class="head" title="Optional. Example: This link takes you to my other site!">
					Link <strong>Title</strong>
				</td>
				<td>
					<input type="text" name="linktitle" id="linktitle" value="<?php echo $thfr_css['customdroplinks'][$itemname]['linktitle']; ?>" size="100" />
				</td>
			</tr>
			<tr>
				<td class="head" title="Optional">
					Link <strong>Target</strong> & <strong>Rel</strong>
				</td>
				<td>
					<select name="linktarget" id="linktarget">
						<?php foreach( array('', '_blank', '_parent', '_self', '_top') as $value) { ?>
						<option value="<?php echo $value; ?>"<?php if($value == $thfr_css['customdroplinks'][$itemname]['linktarget']) echo ' selected="selected"'; ?>><?php echo $value; ?></option>
						<?php } ?>
						</select> <em><code>_blank</code> to open link in new window</em>
					&nbsp;&nbsp;&nbsp;&nbsp;<select name="linkrel" id="linkrel">
						<?php foreach( array('nofollow', 'external', 'nofollow external', 'bookmark') as $value) { ?>
						<option value="<?php echo $value; ?>"<?php if($value == $thfr_css['customdroplinks'][$itemname]['linkrel']) echo ' selected="selected"'; ?>><?php echo $value; ?></option>
						<?php } ?>
					</select> <a href="http://en.wikipedia.org/wiki/Nofollow" target="_blank">"nofollow" at Wikipedia</a>
				</td>
			</tr>
		</table>
		<br />
		<a href="#" id="save-newdroplink" class="save-button">Save</a>
		<div class="formstatus" style="font-size:16px;letter-spacing:0px;"></div>
	</form>		
<?php } else if ($itemgroup == 'customdropimages') { ?>
	<div id="newimageinfo" style="font-size:18px;line-height:20px;color:#444;margin-right:400px;"></div>

<h3 style="font-size:18px;line-height:20px;color:#444;font-weight:normal">File name: <strong>
<?php echo $thfr_css['customdropimages'][$itemname]['file']; ?></strong> - CSS ID: <strong>
<?php echo $itemname; ?></strong></h3>

	<div id="newimagepreview"><img src="<?php echo THFRURL . 'uploads/' . $thfr_css['customdropimages'][$itemname]['file']; ?>" /></div>

	<form id="newimageform" >

</h3>

		<input type="hidden" id="newimage" name="newimage" value="<?php echo $thfr_css['customdropimages'][$itemname]['file']; ?>" />


		<input type="checkbox" name="alt" id="alt" <?php if ($thfr_css['customdropimages'][$itemname]['alt'] == 'on') echo ' checked="checked"'; ?>/> Add ALT text: 
	<br />
	<div style="margin:7px 0 0 50px;background:#eee;padding:10px 15px;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px" id="altmore">
		<input type="text" name="alttext" id="alttext" value="<?php echo $thfr_css['customdropimages'][$itemname]['alttext']; ?>" size="70" /> 
	</div>
	<hr />
		<input type="checkbox" name="link" id="link" <?php if ($thfr_css['customdropimages'][$itemname]['link'] == 'on') echo ' checked="checked"'; ?>/> Add LINK: 
	<br />
	<div style="margin:7px 0 0 50px;background:#eee;padding:1px 15px;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px" id="linkmore">
		<p>
			<strong style="width:150px">URL</strong>:<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="linktype" id="linktype-home" value="homepage" <?php if ($thfr_css['customdropimages'][$itemname]['linktype'] == 'homepage') echo ' checked="checked"'; ?>/> 
			Homepage <em>(of the site using this theme - dynamically inserted by WordPress)</em>
			<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="linktype" id="linktype-custom" value="custom" <?php if ($thfr_css['customdropimages'][$itemname]['linktype'] == 'custom') echo ' checked="checked"'; ?>/> 
			Custom Static URL: <input type="text" name="customurl" id="customurl" value="<?php echo $thfr_css['customdropimages'][$itemname]['customurl']; ?>" size="45" /> 
			 <em>http://mydomain.com/url.html</em>
		</p><p>
			<strong>Title</strong>: &nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="linktitle" id="linktitle" value="<?php echo $thfr_css['customdropimages'][$itemname]['linktitle']; ?>" size="70" />
			 <br />
			 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em>(Leave blank to have no link title)</em>
		</p><p>
			<strong style="width:150px">Target</strong>: &nbsp;
			<select name="linktarget" id="linktarget">
				<?php foreach( array('', '_blank', '_parent', '_self', '_top') as $value) { ?>
				<option value="<?php echo $value; ?>"<?php if($value == $thfr_css['customdropimages'][$itemname]['linktarget']) echo ' selected="selected"'; ?>><?php echo $value; ?></option>
				<?php } ?>
			</select> <em>Choose <code>_blank</code> to have the link open in a new window</em>
		</p><p>
			<strong style="width:150px">Rel</strong>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<select name="linkrel" id="linkrel">
				<?php foreach( array('nofollow', 'external', 'nofollow external', 'bookmark') as $value) { ?>
				<option value="<?php echo $value; ?>"<?php if($value == $thfr_css['customdropimages'][$itemname]['linkrel']) echo ' selected="selected"'; ?>><?php echo $value; ?></option>
				<?php } ?>
			</select> <em>Choose <code>nofollow</code> to set the link to "nofollow" 
			(<a href="http://en.wikipedia.org/wiki/Nofollow" target="_blank">More about nofollow at Wikipedia</a>)</em>
		</p>
	</div>
	<br />
	<a href="#" id="edit-newdropimage" class="save-button">Save</a>
		<div class="formstatus" style="font-size:16px;letter-spacing:0px;"></div>
	</form>		
<?php } ?>
















