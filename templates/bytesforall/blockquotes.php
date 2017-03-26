<div class="infocontainer-head">
	<h2 style="float:left;padding-right:30px">Global Typography <strong>Blockquotes</strong></h2>
	<a href="#" class="moreinfolink" id="blockquotestylemore">Show/Hide More Info</a>
</div>
<div id="blockquotestylemore-container" class="infocontainer">
	<div style="width:253px" class="infocaption">
	<img src="<?php echo THFRURL; ?>images/blockquoteelementsselect.gif" />
	<p>Use the select menu on the top right if needed</p>
	</div>

	<h3>Blockquotes are pre-styled</h3>
	<p>Blockquotes in posts and pages already have a basic styling. If you're happy with that 
	then you don't need to do anything on this page.</p>

	<h3>Right-click elements to select and style them</h3>
	<p>Move your mouse over the blockquotes below, then right-click on the element 
	that you want to style and adjust its CSS settings 
	inside the little CSS window that pops up.</p>

	<h3>Use the select menu if needed</h3>
	<p>If you cannot select a certain element of the sample blockquotes below with the mouse 
	(because the element is hidden behind another element) then use the select menu on the top right of this page 
	 to select that element.</p>

	<h3>Blockquote content is wrapped into paragraphs</h3>
	<p>The content of blockquotes is inside <code>&lt;p&gt;...&lt;/p&gt;</code> 
	paragraphs. Wordpress will build the blockquote like that when you use the blockquote button 
	at the WordPress post editor.</p>

	<img style="float:left; margin:0 10px 10px 0" src="<?php echo THFRURL; ?>images/blockquotebutton.gif" />
	<img style="float:right; margin: 0 0 10px 10px" src="<?php echo THFRURL; ?>images/blockquotehtmlbutton.gif" />
	<h3>How to create blockquotes in WordPress</h3>	
	<p>To create a blockquote in a WordPress post or page, highlight the text that you want to turn into a blockquote, 
	then click the appropriate button in the WordPress post editor.</p>

	<h3>HTML mode to create blockquotes inside blockquotes</h3>
	<p>Switch into HTML mode in the WordPress post editor to turn text inside a blockquote into (another) 
	blockquote (that sits inside the parent blockquote).</p>
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
<div class="tf-preview-container tf-preview-blockquotes">

<div class="index">
<div id="wrapper">
<div id="container">

<table id="layout" border="0" cellspacing="0" cellpadding="0">
<tr>
<td id="td-center">
	<div id="div-center">
	
		<div class="post">

			<div class="post-bodycopy clearfix">
				
<h3>Here is a blockquote:</h3>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris scelerisque mollis metus in scelerisque. 
Cras eleifend viverra enim vel mattis. Etiam non purus urna. Nulla sit amet tortor sit amet magna pellentesque 
commodo nec vel enim. 
</p>
<blockquote selector="blockquote"><p selector="blockquote p">
Blockquote text STARTS here. 
<a href="#" selector="blockquote a">A link inside a blockquote.</a> Nam lacus nunc, vehicula vel ultricies nec, tincidunt sit amet mauris. Ut et congue nulla. 
Fusce porta tempor magna et dictum. Nulla hendrerit convallis commodo. Blockquote text ENDS here.
</p></blockquote>
Aliquam at tellus nisi. Aliquam hendrerit enim varius sem elementum hendrerit. 
Maecenas vulputate congue lectus, pellentesque molestie sapien sodales vitae. Suspendisse gravida semper laoreet. 
Pellentesque placerat eleifend tempus. 

<h3>A blockquote inside another blockquote:</h3>
Vivamus non mi felis, non cursus arcu. Fusce venenatis odio dapibus justo 
convallis et pulvinar nulla commodo. Pellentesque erat neque, molestie id lobortis at, tempus ac arcu. 
<blockquote selector="blockquote"><p selector="blockquote p">Blockquote text STARTS here. Maecenas posuere volutpat orci ac mollis. Pellentesque ut risus eu nisl porta posuere. Nunc egestas lacus nisl, 
pretium euismod nunc. <a href="#" selector="blockquote a">A link inside a blockquote.</a> Nam lacus nunc, vehicula vel ultricies nec, tincidunt sit amet mauris. Ut et congue nulla. 
Fusce porta tempor magna et dictum. Morbi urna mauris, gravida eget 
rutrum sit amet, commodo in nisl. </p>
	<blockquote selector="blockquote blockquote"><p selector="blockquote p">
	Blockquote inside another blockquote STARTS here. This 2nd level blockquote was created in HTML mode, in the WordPress 
	post editor. <a href="#" selector="blockquote blockquote a">A link inside a blockquote that is inside another blockquote.</a> Nam lacus nunc, vehicula vel ultricies nec, tincidunt sit amet mauris. Ut et congue nulla. 
	Fusce porta tempor magna et dictum. Blockquote inside another blockquote ENDS here.
	</p>
	</blockquote>
<p selector="blockquote p">
Aliquam at tellus nisi. Aliquam hendrerit enim varius sem elementum hendrerit. 
Maecenas vulputate congue lectus, pellentesque molestie sapien sodales vitae. Praesent sed quam sed tellus 
pulvinar suscipit vitae quis ipsum. Blockquote text ENDS here.
</p></blockquote>
<p>
Aliquam at tellus nisi. Aliquam hendrerit enim varius sem elementum hendrerit. 
Maecenas vulputate congue lectus, pellentesque molestie sapien sodales vitae. Praesent sed quam sed tellus 
pulvinar suscipit vitae quis ipsum. 
</p>		
				
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
