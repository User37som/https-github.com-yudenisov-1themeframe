<div class="infocontainer-head">	
	<h2 style="float:left;padding-right:30px">Global Settings <strong>Layout Widths</strong></h2>
	<a href="#" class="moreinfolink" id="layoutwidthmore">Show/Hide More Info</a>
</div>
<div id="layoutwidthmore-container" class="infocontainer">
<ul>
<li>
	An individual (fixed) layout width can be set for each page template, 
	at the top of each page template preview (see menu tabs "index.php", "single.php" etc...).
	</li>
	<li>The sidebar widths can only be set theme-wide, and not on a per-page-template basis.</li>
	<li>On either side (left, right) the sidebar #3 (the wide one on top) 
	will have the width of [sidebar #1 + sidebar #2].</li>
</ul>
</div>

<div id="multisettingpage" style="padding:20px;font-size: 13px" >
<form id="layout-form" method="POST" action="">

	<h3>Global <strong>Layout Width and Type</strong> (fixed or flexible):</h3>

	<table width="100%">
		<tr>
			<td width="190">
				<input type="radio" name="layout-width-type" id="layoutfixed" value="fixed"<?php if ( $thfr_css['layout-width-type'] == 'fixed' ) { echo ' checked="checked"'; } ?> />
				<strong>Fixed</strong>: 
				<input class="slidertext" style="text-align:right" type="text" size="3" name="layout-pixels" id="layout-pixels" value="<?php echo $thfr_css['layout-pixels']; ?>" /> <strong>px</strong>
			</td>
			<td>
				<div class="slider" id="layout-pixels-slider" slidermax="1280" slidermin="600" unitseparate="1"></div>
			</td>
		</tr>
		<tr>
			<td width="190">
				<input type="radio" name="layout-width-type" id="layoutflexible" value="flexible"<?php if ( $thfr_css['layout-width-type'] == 'flexible' ) { echo ' checked="checked"'; } ?> />
				<strong>Flexible</strong>: 
				<input class="slidertext" style="text-align:right" type="text" size="3" name="layout-percent" id="layout-percent" value="<?php echo $thfr_css['layout-percent']; ?>" /> <strong>%</strong>
			</td>
			<td>
				<div class="slider" id="layout-percent-slider" slidermax="100" slidermin="50" unitseparate="1"></div>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color:#222;font-size:12px;letter-spacing:1px">
				OPTIONAL: &nbsp; &nbsp;&nbsp; &nbsp; Min-Width:   
				<input style="text-align:right" type="text" size="3" name="layout-minwidth" id="layout-minwidth" value="<?php 
				echo $thfr_css['layout-minwidth']; ?>" /> px &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
				Max-Width: <input style="text-align:right" type="text" size="3" name="layout-maxwidth" id="layout-maxwidth" value="<?php echo $thfr_css['layout-maxwidth']; ?>" /> px</span>
				
			</td>
		</tr>
	</table>
	

<br/><br/>
	<h3><strong>Widths of the Sidebars</strong>:</h3>

	<table width="100%">
	<tr>
		<td style="vertical-align:top;padding-right:5px;width:185px;">
			<img src="<?php echo THFRURL; ?>images/sidebar-map.gif" />
		</td>
		<td style="vertical-align:top">
			<table width="100%">
				<tr>
					<td width="120">
						<strong>L 1</strong>: 
						<input class="slidertext" style="text-align:right" type="text" size="5" name="left-left-width" 
						id="left-left-width" value="<?php echo $thfr_css['left-left-width']; ?>" />
					</td>
					<td>
						<div class="slider" id="left-left-width-slider" slidermax="400" slidermin="0"></div>
					</td>
				</tr>
				<tr>
					<td width="120">
						<strong>L 2</strong>: 
						<input class="slidertext" style="text-align:right" type="text" size="5" name="left-right-width" 
						id="left-right-width" value="<?php echo $thfr_css['left-right-width']; ?>" />
					</td>
					<td>
						<div class="slider" id="left-right-width-slider" slidermax="400" slidermin="0"></div>
					</td>
				</tr>
				<tr>
					<td width="120">
						<strong>R 1</strong>: 
						<input class="slidertext" style="text-align:right" type="text" size="5" name="right-right-width" 
						id="right-right-width" value="<?php echo $thfr_css['right-right-width']; ?>" />
					</td>
					<td>
						<div class="slider" id="right-right-width-slider" slidermax="400" slidermin="0"></div>
					</td>
				</tr>
				<tr>
					<td width="120">
						<strong>R 2</strong>: 
						<input class="slidertext" style="text-align:right" type="text" size="5" name="right-left-width" 
						id="right-left-width" value="<?php echo $thfr_css['right-left-width']; ?>" />
					</td>
					<td>
						<div class="slider" id="right-left-width-slider" slidermax="400" slidermin="0"></div>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	</table>

</form><!-- / form#layout-form -->
	<a href="#" id="save-layoutwidth" class="save-button">Save</a>
	<div class="formstatus"></div>	
</div>
			