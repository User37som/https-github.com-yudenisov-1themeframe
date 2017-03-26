<?php
/*
$thfr_css['postcontainers']['Default Multi Posts']['kicker']['check']
$thfr_css['postcontainers']['Default Multi Posts']['kicker']['code']
$thfr_css['postcontainers']['Default Multi Posts']['headline']['check']
$thfr_css['postcontainers']['Default Multi Posts']['headline']['code']
$thfr_css['postcontainers']['Default Multi Posts']['byline']['check']
$thfr_css['postcontainers']['Default Multi Posts']['byline']['code']
$thfr_css['postcontainers']['Default Multi Posts']['bodycopy']['check']
$thfr_css['postcontainers']['Default Multi Posts']['bodycopy']['type']
$thfr_css['postcontainers']['Default Multi Posts']['bodycopy']['excerpt']
$thfr_css['postcontainers']['Default Multi Posts']['bodycopy']['excerpt']['thumb']['check']
$thfr_css['postcontainers']['Default Multi Posts']['bodycopy']['excerpt']['thumb']['size']
$thfr_css['postcontainers']['Default Multi Posts']['bodycopy']['excerpt']['thumb']['align']
$thfr_css['postcontainers']['Default Multi Posts']['bodycopy']['excerpt']['thumb']['readmore']
$thfr_css['postcontainers']['Default Multi Posts']['bodycopy']['content']['readmore']
$thfr_css['postcontainers']['Default Multi Posts']['bodycopy']['content']['pagelinks']
$thfr_css['postcontainers']['Default Multi Posts']['footer']['check']
$thfr_css['postcontainers']['Default Multi Posts']['footer']['code']
*/
?>

<div class="infocontainer-head">
	<h2 style="float:left;padding-right:30px">Post Containers <strong><?php echo $thisParameter; ?></strong></h2>
	<a class="moreinfolink" id="postcontainersinfo" href="#">Show/Hide More Info</a>
</div>

<div style="font-size:13px; padding: 20px;">

	<div id="postcontainersinfo-container" class="infocontainer">
		<img src="/themeframe/images/post-structure.gif" style="float:right;margin:10px" />
		<ul>
			<li>Configure what parts of a post should be displayed. Typically there are 3 main types of posts in WP: Single Posts (full post with additonal info like date and author), 
			Multi Posts (excerpt, also with some post info like author/date) and Static Page (full "post", usually no additonal info).</li>
			<li>For each page template, you can assign one of the existing post containers to be used on that page template.</li>
			<li>The option to add custom post containers, and to mix and match different containers on the same page template, will come in a later TF version. Currently 
			there are 3 post container templates (for the 3 main post/page types in WP), with each page template using 1 of the 3 post templates (i.e. the "Default-Single-Post" is used on single.php)</li>
			<li>You can use HTML and PHP, including all <a href="http://codex.wordpress.org/Template_Tags" target="_blank">WP Template Tags</a> to 
			dynamically display info bits of the current post (i.e. date, author name, category, tags).</li>
		</ul>
	</div>
	
	<div id="postcontainers-parent"><!-- just for styling purposes -->
	
		<h2 style="font-weight:normal">Edit post container template "<span style="font-weight:bold;color:green"><?php echo $thisParameter; ?></span>"</h2>

<form id="postcontainerform">

<input type="hidden" id="postcontainername" value="<?php echo $thisParameter; ?>" />

<table id="postcont-table" cellpadding="0" cellspacing="0">
<thead>
<tr>
<th colspan="2">Display?</th><th>Options and/or Content</th>
</tr>
</thead>
<tbody>
<tr>
<td class="optcheck">
		<input class="maincheck" type="checkbox" name="thumbcheck" <?php 
		if($thfr_css['postcontainers'][$thisParameter]['thumbcheck'] == 'on') { ?>checked="checked" <?php 
		} ?>/>
</td>
<td class="optname">Thumbnail
</td>
<td class="optvalue">

		<div class="codemirrorarea">
			Size: 
			<select name="thumbsize">
				<?php foreach($thfr_css['thumbsizes'] as $value) { ?>	
					<option value="<?php echo $value; ?>" <?php 
					if( $thfr_css['postcontainers'][$thisParameter]['thumbsize'] == $value) { ?>selected="selected"<?php } ?>><?php echo $value; ?></option>
				<?php } ?>
			</select>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Position: 
			<select name="thumbpos">
				<?php foreach(array(
					1	=> "Before Post",
					2	=> "Before Kicker", 	
					3	=> "Before Headline", 	
					4	=> "Before Byline", 	
					5	=> "Before Body Copy", 
					6	=> "Body Copy Top", 
					7	=> "Body Copy Bottom", 
					8	=> "After Body Copy", 
					9	=> "After Footer", 	
					10	=> "After Post" ) as $name => $value) { ?>
					<option value="<?php echo $name; ?>" <?php 
					if( $thfr_css['postcontainers'][$thisParameter]['thumbpos'] == $name) { ?>selected="selected" <?php } ?>>
					<?php echo $value; ?></option>
				<?php } ?>
			</select>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Alignment: 
			<select name="thumbalign">
				<?php foreach(array('none', 'left', 'center', 'right') as $value) { ?>
					<option value="<?php echo $value; ?>" <?php 
					if( $thfr_css['postcontainers'][$thisParameter]['thumbalign'] == $value) { ?>selected="selected" <?php } ?>>
					<?php echo $value; ?></option>
				<?php } ?>
			</select>
			<br />		
		</div>

</td>
</tr>
<tr>
<td class="optcheck">		
	<input class="maincheck" type="checkbox" name="kickercheck" <?php 
		if($thfr_css['postcontainers'][$thisParameter]['kickercheck'] == 'on') { ?>checked="checked" <?php 
		} ?>/>
</td>
<td class="optname">
	Kicker:<br /><i>div.post-kicker</i>
</td>
<td class="optvalue">
		<div class="codemirrorarea">

			<textarea name="kickercode" id="kickercode"><?php echo htmlspecialchars($thfr_css['postcontainers'][$thisParameter]['kickercode']); ?></textarea>

		</div>
</td>
</tr>
<tr>
<td class="optcheck">
		<input class="maincheck" type="checkbox" name="headlinecheck" <?php 
			if($thfr_css['postcontainers'][$thisParameter]['headlinecheck'] == 'on') { ?>checked="checked" <?php 
			} ?>/>
</td>
<td class="optname">Headline:<br /><i>div.post-headline</i>
</td>
<td class="optvalue">
		<div class="codemirrorarea">

			<textarea name="headlinecode" id="headlinecode"><?php echo htmlspecialchars($thfr_css['postcontainers'][$thisParameter]['headlinecode']); ?></textarea>

			</div>
</td>
</tr>
<tr>
<td class="optcheck">
		<input class="maincheck" type="checkbox" name="bylinecheck" <?php 
			if($thfr_css['postcontainers'][$thisParameter]['bylinecheck'] == 'on') { ?>checked="checked" <?php 
			} ?>/>
</td>
<td class="optname">Byline:<br /><i>div.post-byline</i>
</td>
<td class="optvalue">
		<div class="codemirrorarea">

			<textarea name="bylinecode" id="bylinecode"><?php echo htmlspecialchars($thfr_css['postcontainers'][$thisParameter]['bylinecode']); ?></textarea>

</td>
</tr>
<tr>
<td class="optcheck">		
		<input class="maincheck" type="checkbox" name="contentcheck" <?php 
			if($thfr_css['postcontainers'][$thisParameter]['contentcheck'] == 'on') { ?>checked="checked" <?php 
			} ?>/>
</td>
<td class="optname">Body Copy:<br /><i>div.post-bodycopy</i>
</td>
<td class="optvalue">
		<div class="codemirrorarea">

			<input class="maincheck" type="radio" name="contenttype" value="excerpt" <?php 
			if($thfr_css['postcontainers'][$thisParameter]['contenttype'] == 'excerpt') { ?>checked="checked" <?php 
			} ?>/> <strong>EXCERPT</strong> (Manual or Automatic):
			<ol>
				<li>Uses the WP function <code>the_excerpt</code></li>
				<li>Displays the manual excerpt "as is", if one exists for the given post (See WP post editor, second text area).</li>
				<li>If no manual excerpt exists, an automatic excerpt is displayed. You can configure the automatic excerpt at <strong>Content Options</strong> &rarr; <strong>Automatic Excerpts</strong>.</li>
				<li>An option to configure the auto excerpt not only globally (One excerpt config per theme) but also on a per-post-container basis, will follow in a later TF version.</li>
			</ol>

		</div>
		<div class="codemirrorarea">
			<input class="maincheck" type="radio" name="contenttype" value="content" <?php 
			if($thfr_css['postcontainers'][$thisParameter]['contenttype'] == 'content') { ?>checked="checked" <?php 
			} ?>/> <strong>CONTENT</strong> (or TEASER): 
			<ol>
				<li>Uses the WP function <code>the_content</code></li>
				<li>Displays the whole content, or, see next point...</li>
				<li>If used on multi post pages AND the post contains a <code>&lt;!--more--&gt;</code> tag, only the "teaser" 
				(the content before the more tag) is displayed, 
				followed by a "Read More" link, which you can configure below.
				</li>
			</ol>
			<div style="margin-left: 40px">
				<strong>Complete "the_content" code incl. Read More link:</strong><br/>
				<textarea name="thecontent" id="thecontent"><?php echo htmlspecialchars($thfr_css['postcontainers'][$thisParameter]['thecontent']); ?></textarea>
				<br/><em>Note: This is <strong>not</strong> the same "Read More" as the one that you can set up for Automatic 
				Excerpts, at <strong>Content Options</strong> &rarr; <strong>Automatic Excerpts</strong>.</em>
				<br/><br/>
				<strong>"Next Page" Link</strong><br/>
				<textarea name="linkpages" id="linkpages"><?php echo htmlspecialchars($thfr_css['postcontainers'][$thisParameter]['linkpages']); ?></textarea>
				<br/><em>This next page link(s) are only displayed when you split a post by inserting the 
				<code>&lt;!--nextpage--&gt;</code> <a href="http://codex.wordpress.org/Write_Post_SubPanel#Quicktags" target="_blank">Quicktag</a> 
				one or several times into the post.</em>
				</li>
			</div>

		<br />
		</div>
</td>
</tr>
<tr>
<td class="optcheck">
		<input class="maincheck" type="checkbox" name="footercheck" <?php 
			if($thfr_css['postcontainers'][$thisParameter]['footercheck'] == 'on') { ?>checked="checked" <?php 
			} ?>/>
</td>
<td class="optname">Footer:<br /><i>div.post-footer</i>
</td>
<td class="optvalue">
		<div class="codemirrorarea">

			<textarea name="footercode" id="footercode"><?php echo htmlspecialchars($thfr_css['postcontainers'][$thisParameter]['footercode']); ?></textarea>
		</div>
</td>
</tr>
<tr>
</tbody>
</table>	

</form>
	
	</div>
	
	<br />	<br />
	<a href="#" id="save-postcontainers" class="save-button">Save</a>
	<div class="formstatus"></div>
		<br />	<br />	<br />	<br />
</div>
