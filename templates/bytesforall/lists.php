<div class="infocontainer-head">	
	<h2 style="float:left;padding-right:30px">Global Typography <strong>Lists</strong></h2>
	<a href="#" class="moreinfolink" id="liststylemore">Show/Hide More Info</a>	
</div>
<div id="liststylemore-container" class="infocontainer">
	<div style="width:222px" class="infocaption">
	<img src="<?php echo THFRURL; ?>images/listelementsselect.gif" />
	<p>Use the select menu on the top right if needed</p>
	</div>

	<h3>Lists are pre-styled</h3>
	<p>	Ordered and unordered lists in posts and pages already have a basic styling. If you're happy with that 
	then you don't need to do anything on this page.</p>

	<h3>Right-click elements to select and style them</h3>
	<p>Move your mouse over the ordered list or the unordered list below, then right-click on the element 
	that you want to style, finally adjust its CSS settings inside the little CSS window that pops up.</p>

	<h3>Use the select menu if needed</h3>
	<p>If you cannot select a certain element of the sample lists (UL and OL) below 
	 with the mouse (because the element is hidden behind another element) then use the select menu on the top right of this page 
	 to select that element.</p>

	<h3>Usual CSS parent->child inheritance applies</h3>
	<p>Styling a parent item will often affect its children. Reload the page whenever things don't look as expected. Reloading gives 
	a more accurate live preview than what you may see after a longer period of live changes without page reload.</p>

	<h3>UL's have subitems, OL's don't</h3>
	<p>The sample unordered list (UL) on this page has subitems while the ordered list (OL) doesn't have subitems. The reason for 
	this is that numbering of subitems in OL's like 1.1, 1.1.1 doesn't work well in various browsers anyway.</p>

	<h3>Overview over OL (ordered list) elements</h3>
	<ul>
		<li><code>div.post ol</code> - The whole OL (order list)</li>		
		<li><code>div.post ol li</code> - The list items.</li>
	</ul>

	<h3>Overview over UL (unordered list) elements</h3>
	<ul>
		<li><code>div.post ul</code> - The whole UL (unordered list). This also covers sub-UL's because the CSS selector "find all UL's inside div.post" matches them as well.</li>
		<li><code>div.post ul ul</code> - 2nd (and further) level UL's. This also covers 3rd+ level UL's because the CSS selector "find all UL's inside an UL, inside div.post" matches them as well.</li>		
		<li><code>div.post ul ul ul</code> - 3rd (and further) level UL's. This covers 4th+ level UL's because the CSS selector "find all UL's inside an UL, inside an UL, inside div.post" matches them as well.</li>
		<li><code>div.post ul li</code> - All list items. This covers all subitems because the CSS selector "find all LI's inside an UL" matches them as well.</li>
		<li><code>div.post ul ul li</code> - All 2nd (and further) level list items. This covers all 3rd+ level items because the CSS selector "find all LI's inside an UL, inside an UL" matches them as well.</li>
		<li><code>div.post ul ul ul li</code> - All 3rd (and further) level list items. This covers all 3rd+ level items because the CSS selector "find all LI's inside an UL, inside an UL" matches them as well.</li>
	</ul>
	
	<img style="float:left; margin:0 10px 10px 0" src="<?php echo THFRURL; ?>images/olbutton.gif" />
	<img style="float:right; margin:0 0 10px 10px" src="<?php echo THFRURL; ?>images/ulbutton.gif" />
	<h3>How to create UL's and OL's in WordPress posts</h3>
	<p>To create ordered or unordered lists inside posts or pages use the appropriate buttons in the WordPress post editor. 
	Press the Enter key to create the next list item.</p>
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
<div class="tf-preview-container tf-preview-lists">

<div class="index">
<div id="wrapper">
<div id="container">

<table id="layout" border="0" cellspacing="0" cellpadding="0">
<tr>
<td id="td-center">
	<div id="div-center">
	
		<div class="post">

			<div class="post-bodycopy clearfix">
				

<h3>This is an ordered list (OL). Right-click on its elements to style them:</h3>
<ol selector="div.post ol">
<li selector="div.post ol li">Ordered list item</li>
<li selector="div.post ol li">Ordered list item</li>
<li selector="div.post ol li">Ordered list item</li>
<li selector="div.post ol li">Ordered list item</li>
<li selector="div.post ol li">Ordered list item</li>
<li selector="div.post ol li">Ordered list item</li>
</ol>

<h3>This is an unordered list (UL). Right-click on its elements to style them:</h3>
<ul selector="div.post ul">
<li selector="div.post ul li">Unordered list item</li>
<li selector="div.post ul li">Unordered list item</li>
<li selector="div.post ul li">Unordered list item
	<ul selector="div.post ul ul">
		<li selector="div.post ul ul li">2nd level item</li>
		<li selector="div.post ul ul li">2nd level item</li>
		<li selector="div.post ul ul li">2nd level item
			<ul selector="div.post ul ul ul">
			<li selector="div.post ul ul ul li">3rd+ level item</li>
			<li selector="div.post ul ul ul li">3rd+ level item</li>
			<li selector="div.post ul ul ul li">3rd+ level item</li>
			</ul>
		</li>
		<li selector="div.post ul ul li">2nd level item</li>
		<li selector="div.post ul ul li">2nd level item</li>
		<li selector="div.post ul ul li">2nd level item</li>
	</ul>
</li>
<li selector="div.post ul li">Unordered list item</li>
<li selector="div.post ul li">Unordered list item</li>
<li selector="div.post ul li">Unordered list item</li>
</ol>

		
				
			</div>
		</div><!-- Post -->

</div><!-- / div#div-cnter -->
</td>
</tr>
</table>

</div>
</div>
</div>
</div>
