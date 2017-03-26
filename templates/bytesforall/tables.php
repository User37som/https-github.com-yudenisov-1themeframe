<div class="infocontainer-head">			
	<h2 style="float:left;padding-right:30px">Global Typography <strong>Tables</strong></h2>
	<a href="#" class="moreinfolink" id="tablestylemore">Show/Hide More Info</a>
</div>
<div id="tablestylemore-container" class="infocontainer">
	<div style="width:253px" class="infocaption">
	<img src="<?php echo THFRURL; ?>images/tableelementselect.gif" />
	<p>Use the select menu on the top right if needed</p>
	</div>

	<h3>Tables are pre-styled</h3>
	<p>Tables in posts and pages already have a basic styling. If you're happy with that 
	then you don't need to do anything on this page.</p>

	<h3>Right-click elements to select and style them</h3>
	<p>Move your mouse over the table below, then right-click on the element 
	that you want to style, adjust its CSS settings inside the little CSS window that pops up.</p>

	<h3>Use the select menu if needed</h3>
	<p>If you cannot select a certain element of the sample table below with the mouse (because the element 
	is hidden behind another element) then use the select menu on the top right of this page to select that element.</p>

	<h3>Some Table tags are optional</h3>
	<p>The sample table below uses the new table elements CAPTION and TH both of which are optional. Especially 
	the TH can be useful to have a different style for the first row of a table (= "heading"). The CAPTION is like 
	a heading for the whole table, it will appear above the table. Other, rather rarely used table elements like 
	THEAD, TBODY and TFOOT are not used in the sample table below to keep it simple.</p>

	<h3>Zebra striping included</h3>
	<p>ThemeFrame automatically adds a CSS class named "even" to every second row of tables inside posts ad pages. 
	This enables you to "zebra stripe" tables. If you don't want this, simply remove the styles of "<code>div.post 
	table tr.even td</code>". The table cells in EVEN body rows will then fall back to the styling of the (default) 
	table cells "<code>div.post table td</code>".</p>

	<h3>Overview over table elements</h3>
	<ul>
		<li><code>div.post table</code> - The whole table</li>		
		<li><code>div.post table caption</code> - The table caption, displayed above the table. Optional.</li>
		<li><code>div.post table th</code> - The table header cells (= the cells in the first row, if they are TH). Optional.</li>
		<li><code>div.post table tr</code> - The table rows</li>
		<li><code>div.post table tr.even</code> - Every second table row</li>
		<li><code>div.post table td</code> - The table data cells (= all table cells, except TH header cells)</li>
		<li><code>div.post table tr.even td</code> - Table data cells of every second row</li>
	</ul>

	<h3>Usual CSS parent->child inheritance applies</h3>
	<p>Styling a parent item will often affect its children. Reload the page whenever things don't look as expected. 
	Reloading gives a more accurate live preview than what you may see after a longer period of live changes without page reload.</p>

	<h3>How to creat a table inside WordPress</h3>
	<p>There is no button in the default WordPress post editor to automatically create tables. To create a table inside 
	a post or page switch into the HTML mode and put code similar to this into the post or page:</p>
	<table width="100%">
		<tr>
			<td valign="top" width="40%">
				Basic Table:
				<code><pre>
&lt;table&gt;
  &lt;tr&gt;
    &lt;td&gt;Name&lt;/td&gt;
    &lt;td&gt;Age&lt;/td&gt;
    &lt;td&gt;City&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;John Doe&lt;/td&gt;
    &lt;td&gt;36&lt;/td&gt;
    &lt;td&gt;Smallville&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
				</pre></code>
			</td>
			<td valign="top" width="60%">
				Table with caption and headings:
				<code><pre>
&lt;table&gt;
  &lt;caption&gt;Our Members&lt;/caption&gt;
  &lt;tr&gt;
    &lt;th&gt;Name&lt;/th&gt;
    &lt;th&gt;Age&lt;/th&gt;
    &lt;th&gt;City&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;John Doe&lt;/td&gt;
    &lt;td&gt;36&lt;/td&gt;
    &lt;td&gt;Smallville&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
				</pre></code>
			</td>
		</tr>
	</table>
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
<div class="tf-preview-container tf-preview-tables">

<div class="index">
<div id="wrapper">
<div id="container">

<table id="layout" border="0" cellspacing="0" cellpadding="0">
<tr>
<td id="td-center">
	<div id="div-center">
	
		<div class="post">

			<div class="post-bodycopy clearfix">
				
				
<h3>This is a table. Right-click on its elements to style them:</h3>

<table selector="div.post table">
<caption selector="div.post table caption">div.post table caption</caption>
<tr selector="div.post table tr">
<th selector="div.post table th">div.post table th</th>
<th selector="div.post table th">div.post table th</th>
<th selector="div.post table th">div.post table th</th>
<th selector="div.post table th">div.post table th</th>
</tr>
<tr selector="div.post table tr">
<td selector="div.post table td">div.post table td</td>
<td selector="div.post table td">div.post table td</td>
<td selector="div.post table td">div.post table td</td>
<td selector="div.post table td">div.post table td</td>
</tr>
<tr class="even" selector="div.post table tr.even">
<td selector="div.post table tr.even td">div.post table tr.even td</td>
<td selector="div.post table tr.even td">div.post table tr.even td</td>
<td selector="div.post table tr.even td">div.post table tr.even td</td>
<td selector="div.post table tr.even td">div.post table tr.even td</td>
</tr>
<tr selector="div.post table tr">
<td selector="div.post table td">div.post table td</td>
<td selector="div.post table td">div.post table td</td>
<td selector="div.post table td">div.post table td</td>
<td selector="div.post table td">div.post table td</td>
</tr>
<tr class="even" selector="div.post table tr.even">
<td selector="div.post table tr.even td">div.post table tr.even td</td>
<td selector="div.post table tr.even td">div.post table tr.even td</td>
<td selector="div.post table tr.even td">div.post table tr.even td</td>
<td selector="div.post table tr.even td">div.post table tr.even td</td>
</tr>
<tr selector="div.post table tr">
<td selector="div.post table td">div.post table td</td>
<td selector="div.post table td">div.post table td</td>
<td selector="div.post table td">div.post table td</td>
<td selector="div.post table td">div.post table td</td>
</tr>
</table>


		
				
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
