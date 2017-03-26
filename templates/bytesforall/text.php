<div class="infocontainer-head">
	<h2 style="float:left;padding-right:30px">Global Typography <strong>Text</strong></h2>
	<a href="#" class="moreinfolink" id="textstylemore">Show/Hide More Info</a>	
</div>
<div id="textstylemore-container" class="infocontainer">
	<div style="width:222px" class="infocaption">
	<img src="<?php echo THFRURL; ?>images/listelementsselect.gif" />
	<p>Use the select menu on the top right if needed</p>
	</div>

	<h3>Headings, paragraphs, text and links are pre-styled</h3>
	<p>If you're happy with the existing styles then you don't need to do anything on this page.</p>

	<h3>Right-click elements to select and style them</h3>
	<p>Move your mouse over the headings, the text or the links below, then right-click on the element 
	that you want to style, finally adjust its CSS settings inside the little CSS window that pops up.</p>

	<h3>Use the select menu if needed</h3>
	<p>If you cannot select a certain element below with the mouse (because the element is hidden behind 
	another element) then use the select menu on the top right of this page to select that element.</p>

	<h3>Usual CSS parent->child inheritance applies</h3>
	<p>Styling a parent item will often affect its children. For instance, styling (default, non-hovered) links will 
	affect hovered links. Reload the page whenever things don't look as expected. Reloading gives 
	a more accurate live preview than what you may see after a longer period of live changes without page reload.</p>

	<h3>Links are shown in hovered and default state</h3>
	<p>
	On a web page, you usually see only the default state of a link until you point at the link with your mouse. 
	Here in the preview you see both link states (default and hovered) at the same time, side by side so that you 
	can style them both and because here in the preview the "hover" mechanism of links is used to display the 
	little tooltips with the name of the CSS selector.</p>

</div>

<?php if (!in_array($thisTemplate, array('global', 'themeinfo', 'layoutwidth', 'customwidgetareas', 'headerimages', 
	'postinfo', 'readmore', 'footercontent', 'multipagetitles', 'commenttext', 'nextprevnav', 'customcss', 'customjs', 
	'customjquery', 'customphp', 'customhead', 'custombodytag', 'custombodytop', 'custombodybottom'))) { ?>
<div class="livepreviewinfo">
	<div class="livepreview"><span>LIVE PREVIEW BELOW</span> <a href="#" class="dialogicon" id="livepreviewinfo">?</a></div>
	<div style="float:right">
		CSS Selector list <a href="#" class="dialogicon" id="selectorlistinfo">?</a>  
		<select style="margin-left:10px" name="tfcssselector" id="tfcssselector">
			<?php tf_selectors($thisTemplate); ?>
		</select>
	</div>
</div>
<?php } ?>
	
<!-- Preview Posts -->
<div class="tf-preview-container tf-preview-text">

<div class="index">
<div id="wrapper">
<div id="container">

<table id="layout" border="0" cellspacing="0" cellpadding="0">
<tr>
<td id="td-center">
	<div id="div-center">
	

				
<div style="margin-top:20px" selector="div.index"><strong>Right-click on this text here to set the default CSS settings for the theme.</strong> 
This will be applied to the CSS selector "BODY". It will show "div.index" in the tooltip that pops up when you 
hover over this text here, but that will be translated to "BODY" in the final CSS file. 
Set the default font-family, font-size, (font-) color, (body) background color here and anything else that you 
want to apply globally or on the "BODY" element.</div>

<h1 selector="h1">Right-click this to style H1 Headings</h1>
<p selector="div.index p">
Right click this to style paragraphs, for instance to change the top and bottom margin of paragraphs. 
The quick brown fox jumps <a href="#" selector="div.index a">right-click this to style default links</a> over the lazy dog. 
The quick brown fox jumps over the lazy dog.
</p>
<h2 selector="h2">Right-click this to style H2 Headings</h2>
<p selector="div.index p">
The quick brown fox jumps <a class="hover" href="#" selector="div.index a.hover">right-click this to style hovered links</a> over the lazy dog. 
The quick brown fox jumps over the lazy dog.
</p>
<h3 selector="h3">Right-click this to style H3 Headings</h3>
<p selector="div.index p">
The quick brown fox jumps <a class="visited" href="#" selector="div.index a.visited">right-click this to style visited links</a> over the lazy dog. 
The quick brown fox jumps over the lazy dog.
</p>
<h4 selector="h4">Right-click this to style H4 Headings</h4>
<p selector="div.index p">
The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog.
</p>
<h5 selector="h5">Right-click this to style H5 Headings</h5>
<p selector="div.index p">
The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog.
</p>
<h6 selector="h6">Right-click this to style H6 Headings</h6>
<p selector="div.index p">
The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog.
</p>

</div><!-- / div#div-center -->
</td>
</tr>
</table>

</div>
</div>
</div>


</div>
