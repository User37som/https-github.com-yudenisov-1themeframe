<div class="infocontainer-head">
	<h2 style="float:left;padding-right:30px">Content Options <strong>Excerpts & Teasers</strong></h2>
	<a class="moreinfolink" id="excerptsteasersinfo" href="#">Show/Hide More Info</a>
</div>

<div id="multisettingpage" style="padding:20px;font-size: 13px" >
	<div id="excerptsteasersinfo-container" class="infocontainer">
	<br />
	Configure the automatic excerpt.<br /><br />
	<ul>
	<li>
	WordPress knows 2 types of "post excerpts", <strong>teasers</strong> and <strong>excerpts</strong> (automatic &amp; manual).
</li>
<li>	
	Configure the <strong>automatic excerpts</strong> below. 
	</li>
	<li>WordPress will use these settings to create an <strong>automatic excerpt</strong> for each post that has no <strong>manual excerpt</strong>. 
	</li>
	<li>There are no options for <strong>manual excerpts</strong> - they are displayed "as is". 
	You can write a manual excerpt for a post inside the WordPress Admin Area, at -> Posts -> Edit -> Second text area. 
	</li>
	<li><strong>Teasers</strong> can be configured individually for each Post Container 
			(See <code>Post Containers</code> &rarr; <code>[title of post container]</code> &rarr; <code>Body Copy</code> &rarr; <code>Content</code>).</li> 
</ul>
			

	</div>
<form id="excerptsform">
	<h2>Settings for AUTOMATIC EXCERPTS</h2>
	An automatic excerpt is displayed if (1) you've set 
	<code>Post Containers</code> &rarr; <code>[title of post container]</code> &rarr; <code>Body Copy</code> to "Excerpt" 
	and (2) the post has no manual excerpt.
	<br/><br/>
	<strong>Length</strong>: 
	Display the first <input size="4" type="text" name="length" value="<?php 
	echo $thfr_css['excerpt']['length']; ?>" /> 
	words of the content.
	<br />
	<br/>
	<strong>"Read More" link</strong>: 
	<input size="120" type="text" name="readmore" value="<?php echo htmlspecialchars($thfr_css['excerpt']['readmore']); ?>" />
	<ul>
		<li>Use <code>%url%</code> and <code>%title%</code> to dynamically display the <strong>permalink URL</strong> and the <strong>title</strong> of the post.</li>
	</ul>
	<br/>

</form>	
	
		<br/>	
	<a href="#" id="save-excerpts" class="save-button">Save</a>
	<div class="formstatus"></div>
		<br/>	<br/>	<br/>	<br/>
</div>

