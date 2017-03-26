<div class="infocontainer-head">
	<h2 style="float:left;padding-right:30px">Content Options <strong>Next / Previous Navigation</strong></h2>
	<a class="moreinfolink" id="nextprevnavinfo" href="#">Show/Hide More Info</a>
</div>

<div id="nextprev-parent" style="padding:20px;font-size: 13px" >
	<div id="nextprevnavinfo-container" class="infocontainer">
		<ul>
			<li>Each NEXT/PREV Navigation exists twice, the number #2 is simply a second one and will often have the same code.</li>
			<li>One is usually put at the top and the other one at the bottom. You can also remove the 2nd version at Page Templates -> [Template Name]. 
			You can drag i.e. the Nav at the bottom of index.php into the Drop Area on the right. Once there, it'll become a little box named "Multi-Post-Page Nav #2"
			</li>
			<li>There's no drag/drop for the comment section yet, so you cannot remove "Comment Nav #2" for now. (You can of course manually remove the corresponding code from the created comments.php)</li>
		</ul>
	</div>
<form id="nextprevnavform">
	<ul id="shadowline">
	<li class="clearfix">
		<h3>Multi Post Pages</h3>
		<div class="textarealeft">
			<h4 class="abovetextarea">LEFT:</h4>
			<div class="codemirrorarea"><textarea name="multi-left" id="multi-left"><?php echo htmlspecialchars($thfr_css['nextprevnav']['multi-left']); ?></textarea></div>
		</div>
		<div class="textarearight">
			<h4 class="abovetextarea">RIGHT:</h4>
			<div class="codemirrorarea"><textarea name="multi-right" id="multi-right"><?php echo htmlspecialchars($thfr_css['nextprevnav']['multi-right']); ?></textarea></div>
		</div>
	</li>
	<li class="clearfix">
		<h3>Multi Post Pages - # 2</h3>
		<div class="textarealeft">
			<h4 class="abovetextarea">LEFT:</h4>
			<div class="codemirrorarea"><textarea name="multi2-left" id="multi2-left"><?php echo htmlspecialchars($thfr_css['nextprevnav']['multi2-left']); ?></textarea></div>
		</div>
		<div class="textarearight">
			<h4 class="abovetextarea">RIGHT:</h4>
			<div class="codemirrorarea"><textarea name="multi2-right" id="multi2-right"><?php echo htmlspecialchars($thfr_css['nextprevnav']['multi2-right']); ?></textarea></div>
		</div>
	</li>
	<li class="clearfix">
<br/><br/>
		<h3>Single Post Pages</h3>
		<div class="textarealeft">
			<h4 class="abovetextarea">LEFT:</h4>
			<div class="codemirrorarea"><textarea name="single-left" id="single-left"><?php echo htmlspecialchars($thfr_css['nextprevnav']['single-left']); ?></textarea></div>
		</div>
		<div class="textarearight">
			<h4 class="abovetextarea">RIGHT:</h4>
			<div class="codemirrorarea"><textarea name="single-right" id="single-right"><?php echo htmlspecialchars($thfr_css['nextprevnav']['single-right']); ?></textarea></div>
		</div>
	</li>
	<li class="clearfix">
		<h3>Single Post Pages - # 2</h3>		
		<div class="textarealeft">
			<h4 class="abovetextarea">LEFT:</h4>
			<div class="codemirrorarea"><textarea name="single2-left" id="single2-left"><?php echo htmlspecialchars($thfr_css['nextprevnav']['single2-left']); ?></textarea></div>
		</div>
		<div class="textarearight">
			<h4 class="abovetextarea">RIGHT:</h4>
			<div class="codemirrorarea"><textarea name="single2-right" id="single2-right"><?php echo htmlspecialchars($thfr_css['nextprevnav']['single2-right']); ?></textarea></div>
		</div>
	</li>
	<li class="clearfix">
<br/><br/>	
		<h3>Comment Section - Next/Prev Nav</h3>
			<div class="codemirrorarea"><textarea name="comments" id="comments"><?php echo htmlspecialchars($thfr_css['nextprevnav']['comments']); ?></textarea></div>
	</li>
	<li class="clearfix">		
		<h3>Comment Section - Next/Prev Nav - # 2</h3>
			<div class="codemirrorarea"><textarea name="comments2" id="comments2"><?php echo htmlspecialchars($thfr_css['nextprevnav']['comments2']); ?></textarea></div>
	</li>
	</ul>
</form>
	<br />	<br />
	<a href="#" id="save-nextprevnav" class="save-button">Save</a>
	<div class="formstatus"></div>
</div>
