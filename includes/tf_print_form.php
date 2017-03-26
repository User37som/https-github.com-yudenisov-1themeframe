<?php function tf_print_form($selector) { 
global $thfr_css;

if ($selector == '') {
	$cur_sel = $_POST['selector'];
	$thfrpath = urldecode($_POST['thfrpath']);
	$thfruploadpath = urldecode($_POST['thfruploadpath']);
	$action = $_POST['action'];
} else {
	$cur_sel = $selector;
}

// Predefined CSS values
$units = array('px', 'em', '%');
$units_with_auto = array('px', 'em', '%', 'auto', 'inherit');
$border_styles = array('','solid', 'dotted', 'dashed', 'none');
$font_families = array('', 'arial', 'calibri', 'cambria', 'constantia', 'corbel', 'candara', 'consolas', 'comic sans ms', 'courier', 'courier new', 'geneva', 'georgia', 'helvetica', 'lucida console', 'lucida grande', 'monaco', 'palatino', 'palatino linotype', 'tahoma', 'times', 'times new roman', 'trebuchet ms', 'verdana');
$generic_families = array('', 'serif', 'sans-serif', 'monospace', 'cursive');
$font_weights = array('', 'normal', 'bold', 'bolder', 'lighter', '100', '200', '300', '400', '500', '600', '700', '800', '900');
$font_styles = array('', 'normal', 'italic', 'oblique');
$font_variants = array('', 'normal', 'small-caps', 'inherit');
$text_aligns = array('', 'left', 'right', 'center', 'justify', 'inherit');
$text_transforms = array('', 'none', 'capitalize', 'uppercase', 'lowercase', 'inherit');
$text_decorations = array('', 'none', 'underline', 'overline', 'line-through', 'inherit');
$vertical_aligns = array('', 'baseline', 'sub', 'super', 'top', 'text-top', 'middle', 'bottom', 'text-bottom', 'inherit');
$pixels = array('','0','1px','2px','3px','4px','5px','6px','7px','8px','9px','10px','11px','12px','13px','14px', '15px','16px','17px','18px','19px','20px','21px','22px','23px','24px','25px','26px','27px','28px','29px','30px');
$opacities = array('','10','15','20','25','30','35','40','45','50','55','60','65','70','75','80','85','90','95');
$background_positions = array('left top','left center','left bottom','center top','center center', 'center bottom','right top','right center','right bottom');
$white_spaces = array('', 'normal', 'nowrap', 'pre', 'pre-line', 'pre-wrap', 'inherit');
$displays = array('', 'none', 'block', 'inline', 'inline-block', 'inline-table', 'list-item', 'run-in', 'table', 'table-caption', 'table-cell', 'table-column', 'table-column-group', 'table-footer-group', 'table-header-group', 'table-row', 'table-row-group', 'inherit');
$visibilities = array('', 'visible', 'hidden', 'collapse', 'inherit');
$positions = array('', 'absolute', 'fixed', 'relative', 'static', 'inherit');
$overflows = array('', 'visible', 'hidden', 'scroll', 'auto', 'inherit');
$floats = array('', 'left', 'right', 'none', 'inherit');
$clears = array('', 'left', 'right', 'both', 'none', 'inherit');
$z_indizes = array('', '-5', '-4', '-3', '-2', '-1', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10');
$list_style_types = array('', 'none', 'disc', 'circle', 'square', 'inherit', 'decimal', 'lower-alpha', 'upper-alpha', 'lower-roman', 'upper-roman');
// Messed up Ajax response on Nginx without some output at this stage...
echo "<!-- <div style='background:white'>Selector: " .$cur_sel . "<br />Action: " . 
$action . "<br />thfrpath: " . $thfrpath . "<br />thfruploadpath: " . $thfruploadpath .'</div> -->';
echo '<h2 id="tf-move">&nbsp;</h2>'; ?>
<div id="showselector"></div>
<a href="#" class="close"></a>
<div class="clearfix" style="margin-top:45px">
	<ul style="margin-right:20px;margin-top:5px" class="clearfix tabs">
		<li class="tf-borders"><a class="tf-borders tab">border</a></li>
<?php if(!preg_match("/^td/i", $cur_sel)) { // no margin for table cells ?>
		<li class="tf-margin"><a class="tf-margin tab">margin</a></li>
<?php } ?>
		<li class="tf-padding"><a class="tf-padding tab">padding</a></li>
<?php if(!preg_match("/^td/i", $cur_sel)) { // no corners for table cells ?>
		<li class="tf-corners"><a class="tf-corners">border-radius</a></li>
<?php } ?>
		<li class="tf-background"><a class="tf-background tab">background</a></li>
		<li class="tf-text"><a class="tf-text tab">text / font</a></li>
		<li class="tf-size"><a class="tf-size tab">width / height</a></li>
		<li class="tf-position"><a class="tf-position tab">position</a></li>
		<li class="tf-various"><a class="tf-various tab"><em>various...</em></a></li>
<?php if((preg_match("/( ul|ul\.|ul#)/i", $cur_sel) OR preg_match("/( ol|ol\.|ol#)/i", $cur_sel)) 
		AND !preg_match("/( li$| li\.| li )/i", $cur_sel)) { // list settings only for UL/OL ?>
		<li class="tf-ulol"><a class="tf-ulol tab">lists</a></li>
<?php } ?>
	</ul>
</div>

<!-- CSS Form -->
<form action="" method="POST" class="themeframe-form">

<div class="tf-option-container tf-borders">
	<table width="100%">
		<tr>
			<td width="22" class="td-r">
				&nbsp;
			</td>
			<td width="90" align="right" class="td-c">
				&nbsp;
			</td>
			<td width="70" class="td-c">
				<span class="property" id="prop-border-style">-style</span>
			</td>
			<td width="60" class="td-c">
				<span class="property" id="prop-border-style">-color</span>
			</td>
			<td width="45" class="td-l">
				<span class="property" id="prop-border-style">-width</span>
			</td>
			<td class="td-r">
				&nbsp;
			</td>
			<td width="17" align="right" class="td-l">
				&nbsp;	
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="22" class="td-r">
				<label for="border-on" class="border-on">&nbsp;</label>
			</td>
			<td width="90" align="right" class="td-c">
				<span class="property" id="prop-border">border</span>
			</td>
			<td width="70" class="td-c">
				<select name="border-style" id="border-style">		
				<?php foreach ($border_styles as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['border-style'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?>
				</select>
			</td>
			<td width="60" class="td-c">
				<input class="jscolor" type="text" size="8" name="border-color" id="border-color" value="<?php 
				echo $thfr_css[$cur_sel]['border-color']; ?>" />
			</td>
			<td width="45" class="td-l">
				<input class="slidertext" type="text" size="3" name="border-width" id="border-width" value="<?php 
				echo $thfr_css[$cur_sel]['border-width']; ?>" />&nbsp;
			</td>
			<td class="td-r">
				<div class="slider" id="border-width-slider" slidermax="50" slidermin="0"></div>
			</td>
			<td width="17" align="right" class="td-l">
				<a class="propdelete" id="border-delete" href="#"></a>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="22" class="td-r">
				<label for="border-top-on" class="border-top-on">&nbsp;</label>
			</td>
			<td width="90" align="right" class="td-c">
				<span class="property" id="prop-border-top">border-top</span>
			</td>
			<td width="70" class="td-c">
				<select name="border-top-style" id="border-top-style">
				<?php foreach ($border_styles as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['border-top-style'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?>
				</select>
			</td>
			<td width="60" class="td-c">
				<input class="jscolor" type="text" size="8" name="border-top-color" id="border-top-color" value="<?php 
				echo $thfr_css[$cur_sel]['border-top-color']; ?>" />
			</td>
			<td width="45" class="td-l">
				<input class="slidertext" type="text" size="3" name="border-top-width" id="border-top-width" value="<?php 
				echo $thfr_css[$cur_sel]['border-top-width']; ?>" />&nbsp;
			</td>
			<td class="td-r">
				<div class="slider" id="border-top-width-slider" slidermax="50" slidermin="0"></div>
			</td>
			<td width="17" align="right" class="td-l">
				<a class="propdelete" id="border-top-delete" href="#"></a>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="22" class="td-r">
				<label for="border-right-on" class="border-right-on">&nbsp;</label>
			</td>
			<td width="90" align="right" class="td-c">
				<span class="property" id="prop-border-right">border-right</span>
			</td>
			<td width="70" class="td-c">
				<select name="border-right-style" id="border-right-style">
				<?php foreach ($border_styles as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['border-right-style'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?>
				</select>
			</td>
			<td width="60" class="td-c">
				<input class="jscolor" type="text" size="8" name="border-right-color" id="border-right-color" value="<?php 
				echo $thfr_css[$cur_sel]['border-right-color']; ?>" />
			</td>
			<td width="45" class="td-l">
				<input class="slidertext" type="text" size="3" name="border-right-width" id="border-right-width" value="<?php 
				echo $thfr_css[$cur_sel]['border-right-width']; ?>" />&nbsp;
			</td>
			<td class="td-r">
				<div class="slider" id="border-right-width-slider" slidermax="50" slidermin="0"></div>
			</td>
			<td width="17" align="right" class="td-l">
				<a class="propdelete" id="border-right-delete" href="#"></a>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="22" class="td-r">
				<label for="border-bottom-on" class="border-bottom-on">&nbsp;</label>
			</td>
			<td width="90" align="right" class="td-c">
				<span class="property" id="prop-border-bottom">border-bottom</span>
			</td>
			<td width="70" class="td-c">
				<select name="border-bottom-style" id="border-bottom-style">
				<?php foreach ($border_styles as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['border-bottom-style'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?>
				</select>
			</td>
			<td width="60" class="td-c">
				<input class="jscolor" type="text" size="8" name="border-bottom-color" id="border-bottom-color" value="<?php 
				echo $thfr_css[$cur_sel]['border-bottom-color']; ?>" />
			</td>
			<td width="45" class="td-l">
				<input class="slidertext" type="text" size="3" name="border-bottom-width" id="border-bottom-width" value="<?php 
				echo $thfr_css[$cur_sel]['border-bottom-width']; ?>" />&nbsp;
			</td>
			<td class="td-r">
				<div class="slider" id="border-bottom-width-slider" slidermax="50" slidermin="0"></div>
			</td>
			<td width="17" align="right" class="td-l">
				<a class="propdelete" id="border-bottom-delete" href="#"></a>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="22" class="td-r">
				<label for="border-left-on" class="border-left-on">&nbsp;</label>
			</td>
			<td width="90" align="right" class="td-c">
				<span class="property" id="prop-border-left">border-left</span>
			</td>
			<td width="70" class="td-c">
				<select name="border-left-style" id="border-left-style">
				<?php foreach ($border_styles as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['border-left-style'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?>
				</select>
			</td>
			<td width="60" class="td-c">
				<input class="jscolor" type="text" size="8" name="border-left-color" id="border-left-color" value="<?php 
				echo $thfr_css[$cur_sel]['border-left-color']; ?>" />
			</td>
			<td width="45" class="td-l">
				<input class="slidertext" type="text" size="3" name="border-left-width" id="border-left-width" value="<?php 
				echo $thfr_css[$cur_sel]['border-left-width']; ?>" />&nbsp;
			</td>
			<td class="td-r">
				<div class="slider" id="border-left-width-slider" slidermax="50" slidermin="0"></div>
			</td>
			<td width="17" align="right" class="td-l">
				<a class="propdelete" id="border-left-delete" href="#"></a>
			</td>
		</tr>
	</table>
</div><!-- / div.tf-borders -->

<?php if(!preg_match("/^td/i", $cur_sel)) { 
// no margin for table cells ?>
<div class="tf-option-container tf-margin">
	<table width="100%">
		<tr>
			<td width="20" class="td-r">
				<label for="margin-on" class="margin-on">&nbsp;</label>
			</td>
			<td width="90" align="right" class="td-c">
				<span class="property" id="prop-margin">margin</span>
			</td>
			<td width="40" class="td-c">
				<input type="radio" name="margin-auto-or-value" id="margin-auto-or-value-auto" value="auto"<?php 
				if ( $thfr_css[$cur_sel]['margin-auto-or-value'] == 'auto' ) { echo ' checked="checked"'; } ?>> auto
			</td>
			<td width="60" class="td-l">
				<input type="radio" name="margin-auto-or-value" id="margin-auto-or-value-value" value="value"<?php 
				if ( $thfr_css[$cur_sel]['margin-auto-or-value'] == 'value' ) { echo ' checked="checked"'; } ?>>
				<input class="slidertext" type="text" size="3" name="margin" id="margin" value="<?php echo 
				$thfr_css[$cur_sel]['margin']; ?>" />&nbsp;
			</td>
			<td class="td-r">
				<div class="slider" id="margin-slider" slidermax="200" slidermin="-200"></div>
			</td>
			<td width="17" align="right" class="td-l">
				<a class="propdelete" id="margin-delete" href="#"></a>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="20" class="td-r">
				<label for="margin-top-on" class="margin-top-on">&nbsp;</label>
			</td>
			<td width="90" align="right" class="td-c">
				<span class="property" id="prop-margin-top">margin-top</span>
			</td>
			<td width="40" class="td-c">
				<input type="radio" name="margin-top-auto-or-value" id="margin-top-auto-or-value-auto" value="auto"<?php 
				if ( $thfr_css[$cur_sel]['margin-top-auto-or-value'] == 'auto' ) { echo ' checked="checked"'; } ?>> auto
			</td>
			<td width="60" class="td-l">
				<input type="radio" name="margin-top-auto-or-value" id="margin-top-auto-or-value-value" value="value"<?php 
				if ( $thfr_css[$cur_sel]['margin-top-auto-or-value'] == 'value' ) { echo ' checked="checked"'; } ?>>
				<input class="slidertext" type="text" size="3" name="margin-top" id="margin-top" value="<?php echo 
				$thfr_css[$cur_sel]['margin-top']; ?>" />&nbsp;
			</td>
			<td class="td-r">
				<div class="slider" id="margin-top-slider" slidermax="200" slidermin="-200"></div>
			</td>
			<td width="17" align="right" class="td-l">
				<a class="propdelete" id="margin-top-delete" href="#"></a>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="20" class="td-r">
				<label for="margin-right-on" class="margin-right-on">&nbsp;</label>
			</td>
			<td width="90" align="right" class="td-c">
				<span class="property" id="prop-margin-right">margin-right</span>
			</td>
			<td width="40" class="td-c">
				<input type="radio" name="margin-right-auto-or-value" id="margin-right-auto-or-value-auto" value="auto"<?php 
				if ( $thfr_css[$cur_sel]['margin-right-auto-or-value'] == 'auto' ) { echo ' checked="checked"'; } ?>> auto
			</td>
			<td width="60" class="td-l">
				<input type="radio" name="margin-right-auto-or-value" id="margin-right-auto-or-value-value" value="value"<?php 
				if ( $thfr_css[$cur_sel]['margin-right-auto-or-value'] == 'value' ) { echo ' checked="checked"'; } ?>>
				<input class="slidertext" type="text" size="3" name="margin-right" id="margin-right" value="<?php echo 
				$thfr_css[$cur_sel]['margin-right']; ?>" />&nbsp;
			</td>
			<td class="td-r">
				<div class="slider" id="margin-right-slider" slidermax="200" slidermin="-200"></div>
			</td>
			<td width="17" align="right" class="td-l">
				<a class="propdelete" id="margin-right-delete" href="#"></a>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="20" class="td-r">
				<label for="margin-bottom-on" class="margin-bottom-on">&nbsp;</label>
			</td>
			<td width="90" align="right" class="td-c">
				<span class="property" id="prop-margin-bottom">margin-bottom</span>
			</td>
			<td width="40" class="td-c">
				<input type="radio" name="margin-bottom-auto-or-value" id="margin-bottom-auto-or-value-auto" value="auto"<?php 
				if ( $thfr_css[$cur_sel]['margin-bottom-auto-or-value'] == 'auto' ) { echo ' checked="checked"'; } ?>> auto
			</td>
			<td width="60" class="td-l">
				<input type="radio" name="margin-bottom-auto-or-value" id="margin-bottom-auto-or-value-value" value="value"<?php 
				if ( $thfr_css[$cur_sel]['margin-bottom-auto-or-value'] == 'value' ) { echo ' checked="checked"'; } ?>>
				<input class="slidertext" type="text" size="3" name="margin-bottom" id="margin-bottom" value="<?php echo 
				$thfr_css[$cur_sel]['margin-bottom']; ?>" />&nbsp;
			</td>
			<td class="td-r">
				<div class="slider" id="margin-bottom-slider" slidermax="200" slidermin="-200"></div>
			</td>
			<td width="17" align="right" class="td-l">
				<a class="propdelete" id="margin-bottom-delete" href="#"></a>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="20" class="td-r">
				<label for="margin-left-on" class="margin-left-on">&nbsp;</label>
			</td>
			<td width="90" align="right" class="td-c">
				<span class="property" id="prop-margin-left">margin-left</span>
			</td>
			<td width="40" class="td-c">
				<input type="radio" name="margin-left-auto-or-value" id="margin-left-auto-or-value-auto" value="auto"<?php 
				if ( $thfr_css[$cur_sel]['margin-left-auto-or-value'] == 'auto' ) { echo ' checked="checked"'; } ?>> auto
			</td>
			<td width="60" class="td-l">
				<input type="radio" name="margin-left-auto-or-value" id="margin-left-auto-or-value-value" value="value"<?php 
				if ( $thfr_css[$cur_sel]['margin-left-auto-or-value'] == 'value' ) { echo ' checked="checked"'; } ?>>
				<input class="slidertext" type="text" size="3" name="margin-left" id="margin-left" value="<?php echo 
				$thfr_css[$cur_sel]['margin-left']; ?>" />&nbsp;
			</td>
			<td class="td-r">
				<div class="slider" id="margin-left-slider" slidermax="200" slidermin="-200"></div>
			</td>
			<td width="17" align="right" class="td-l">
				<a class="propdelete" id="margin-left-delete" href="#"></a>
			</td>
		</tr>
	</table>
</div><!-- / div.tf-margin -->
<?php } ?>

<div class="tf-option-container tf-padding">
	<table width="100%">
		<tr>
			<td width="20" class="td-r">
				<label for="padding-on" class="padding-on">&nbsp;</label>
			</td>
			<td width="95" align="right" class="td-c">
				<span class="property" id="prop-padding">padding</span>
			</td>
			<td width="45" class="td-l">
				<input class="slidertext" type="text" size="3" name="padding" id="padding" value="<?php 
				echo $thfr_css[$cur_sel]['padding']; ?>" />
			</td>
			<td class="td-r">
				<div class="slider" id="padding-slider" slidermax="100" slidermin="0"></div>
			</td>
			<td width="17" align="right" class="td-l">
				<a class="propdelete" id="padding-delete" href="#"></a>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="20" class="td-r">
				<label for="padding-top-on" class="padding-top-on">&nbsp;</label>
			</td>
			<td width="95" align="right" class="td-c">
				<span class="property" id="prop-padding-top">padding-top</span>
			</td>
			<td width="45" class="td-l">
				<input class="slidertext" type="text" size="3" name="padding-top" id="padding-top" value="<?php 
				echo $thfr_css[$cur_sel]['padding-top']; ?>" />
			</td>
			<td class="td-r">
				<div class="slider" id="padding-top-slider" slidermax="100" slidermin="0"></div>
			</td>
			<td width="17" align="right" class="td-l">
				<a class="propdelete" id="padding-top-delete" href="#"></a>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="20" class="td-r">
				<label for="padding-right-on" class="padding-right-on">&nbsp;</label>
			</td>
			<td width="95" align="right" class="td-c">
				<span class="property" id="prop-padding-right">padding-right</span>
			</td>
			<td width="45" class="td-l">
				<input class="slidertext" type="text" size="3" name="padding-right" id="padding-right" value="<?php 
				echo $thfr_css[$cur_sel]['padding-right']; ?>" />
			</td>
			<td class="td-r">
				<div class="slider" id="padding-right-slider" slidermax="100" slidermin="0"></div>
			</td>
			<td width="17" align="right" class="td-l">
				<a class="propdelete" id="padding-right-delete" href="#"></a>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="20" class="td-r">
				<label for="padding-bottom-on" class="padding-bottom-on">&nbsp;</label>
			</td>
			<td width="95" align="right" class="td-c">
				<span class="property" id="prop-padding-bottom">padding-bottom</span>
			</td>
			<td width="45" class="td-l">
				<input class="slidertext" type="text" size="3" name="padding-bottom" id="padding-bottom" value="<?php 
				echo $thfr_css[$cur_sel]['padding-bottom']; ?>" />
			</td>
			<td class="td-r">
				<div class="slider" id="padding-bottom-slider" slidermax="100" slidermin="0"></div>
			</td>
			<td width="17" align="right" class="td-l">
				<a class="propdelete" id="padding-bottom-delete" href="#"></a>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="20" class="td-r">
				<label for="padding-left-on" class="padding-left-on">&nbsp;</label>
			</td>
			<td width="95" align="right" class="td-c">
				<span class="property" id="prop-padding-left">padding-left</span>
			</td>
			<td width="45" class="td-l">
				<input class="slidertext" type="text" size="3" name="padding-left" id="padding-left" value="<?php 
				echo $thfr_css[$cur_sel]['padding-left']; ?>" />
			</td>
			<td class="td-r">
				<div class="slider" id="padding-left-slider" slidermax="100" slidermin="0"></div>
			</td>
			<td width="17" align="right" class="td-l">
				<a class="propdelete" id="padding-left-delete" href="#"></a>
			</td>
		</tr>
	</table>
</div><!-- / div.tf-padding -->

<?php if(!preg_match("/^td/i", $cur_sel)) { 
// no margin for table cells ?>
<div class="tf-option-container tf-corners">
	<table width="100%">
		<tr>
			<td width="20" class="td-r">
				<label for="border-radius-on" class="border-radius-on">&nbsp;</label>
			</td>
			<td width="160" align="right" class="td-c">
				<span class="property" id="prop-border-radius">border-radius</span>
			</td>
			<td width="45" class="td-l">
				<input class="slidertext" type="text" size="3" name="border-radius" id="border-radius" value="<?php 
				echo $thfr_css[$cur_sel]['border-radius']; ?>" />&nbsp;
			</td>
			<td class="td-r">
				<div class="slider" id="border-radius-slider" slidermax="100" slidermin="0"></div>
			</td>
			<td width="17" align="right" class="td-l">
				<a class="propdelete" id="border-radius-delete" href="#"></a>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="20" class="td-r">
				<label for="border-top-left-radius-on" class="border-top-left-radius-on">&nbsp;</label>
			</td>
			<td width="160" align="right" class="td-c">
				<span class="property" id="prop-border-top-left-radius">border-top-left-radius</span>
			</td>
			<td width="45" class="td-l">
				<input class="slidertext" type="text" size="3" name="border-top-left-radius" id="border-top-left-radius" value="<?php 
				echo $thfr_css[$cur_sel]['border-top-left-radius']; ?>" />&nbsp;
			</td>
			<td class="td-r">
				<div class="slider" id="border-top-left-radius-slider" slidermax="100" slidermin="0"></div>
			</td>
			<td width="17" align="right" class="td-l">
				<a class="propdelete" id="border-top-left-radius-delete" href="#"></a>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="20" class="td-r">
				<label for="border-top-right-radius-on" class="border-top-right-radius-on">&nbsp;</label>
			</td>
			<td width="160" align="right" class="td-c">
				<span class="property" id="prop-border-top-right-radius">border-top-right-radius</span>
			</td>
			<td width="45" class="td-l">
				<input class="slidertext" type="text" size="3" name="border-top-right-radius" id="border-top-right-radius" value="<?php 
				echo $thfr_css[$cur_sel]['border-top-right-radius']; ?>" />&nbsp;
			</td>
			<td class="td-r">
				<div class="slider" id="border-top-right-radius-slider" slidermax="100" slidermin="0"></div>
			</td>
			<td width="17" align="right" class="td-l">
				<a class="propdelete" id="border-top-right-radius-delete" href="#"></a>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="20" class="td-r">
				<label for="border-bottom-right-radius-on" class="border-bottom-right-radius-on">&nbsp;</label>
			</td>
			<td width="160" align="right" class="td-c">
				<span class="property" id="prop-border-bottom-right-radius">border-bottom-right-radius</span>
			</td>
			<td width="45" class="td-l">
				<input class="slidertext" type="text" size="3" name="border-bottom-right-radius" id="border-bottom-right-radius" value="<?php 
				echo $thfr_css[$cur_sel]['border-bottom-right-radius']; ?>" />&nbsp;
			</td>
			<td class="td-r">
				<div class="slider" id="border-bottom-right-radius-slider" slidermax="100" slidermin="0"></div>
			</td>
			<td width="17" align="right" class="td-l">
				<a class="propdelete" id="border-bottom-right-radius-delete" href="#"></a>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="20" class="td-r">
				<label for="border-bottom-left-radius-on" class="border-bottom-left-radius-on">&nbsp;</label>
			</td>
			<td width="160" align="right" class="td-c">
				<span class="property" id="prop-border-bottom-left-radius">border-bottom-left-radius</span>
			</td>
			<td width="45" class="td-l">
				<input class="slidertext" type="text" size="3" name="border-bottom-left-radius" id="border-bottom-left-radius" value="<?php 
				echo $thfr_css[$cur_sel]['border-bottom-left-radius']; ?>" />&nbsp;
			</td>
			<td class="td-r">
				<div class="slider" id="border-bottom-left-radius-slider" slidermax="100" slidermin="0"></div>
			</td>
			<td width="17" align="right" class="td-l">
				<a class="propdelete" id="border-bottom-left-radius-delete" href="#"></a>
			</td>
		</tr>
		</tr>
	</table>
	<hr /><hr class="light" />
	<br />&nbsp;&nbsp;
	<select name="iecorners" id="iecorners"><?php foreach (array('no', 'yes') as $option) { ?>
		<option value="<?php echo $option; ?>"<?php 
			if ( is_array($thfr_css['iecorners'])) {
				if ( in_array($cur_sel, $thfr_css['iecorners'])) { echo ' selected="selected"'; } 
			} ?>><?php echo $option; ?>
		</option>
	<?php } ?></select>
	Create these corners for IE 6/7/8, too? (With Javascript)
</div><!-- / div.tf-corners -->
<?php } ?>

<div class="tf-option-container tf-background">
	<table>
		<tr>
			<td valign="top" style="padding-bottom: 2px">
				<span class="property" id="prop-background-color">background-color</span> <input class="jscolor" type="text" size="8" name="background-color" id="background-color" value="<?php 
				echo $thfr_css[$cur_sel]['background-color']; 
				?>" />
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>	
			<td>
				<span class="property" id="prop-background-image">background-image</span>
			</td>
			<td align="right">
				Browse <a href="#" id="background-image-open" class="filetreeopen">/themeframe/uploads/</a> 
				 &nbsp;&nbsp;&nbsp;<a href="#" id="backgrImage-upload">Local computer</a>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="text" size="50" name="background-image" id="background-image" value="<?php 
				echo $thfr_css[$cur_sel]['background-image']; ?>" />
				<div id="fileTree" class="demo"></div>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>	
			<td>Additional settings for background-image:
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>	
			<td class="td-r">
				<span class="property" id="prop-background-repeat">background-repeat</span> <select name="background-repeat" id="background-repeat">
				<?php foreach (array('no-repeat','repeat-x','repeat-y','repeat') as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['background-repeat'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?>
				</select>
			</td>
			<td align="right" class="td-l">
				<span class="property" id="prop-background-attachment">background-attachment</span> <select name="background-attachment" id="background-attachment">
				<?php foreach (array('scroll','fixed') as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['background-attachment'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?>
				</select>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<?php if ($thfr_css[$cur_sel]['backgr-pos-type'] == '') { $thfr_css[$cur_sel]['backgr-pos-type'] = 'default'; } ?>
			<td width="120" class="td-r">
				<span class="property" id="prop-background-position">background-position</span>
			</td>
			<td width="120" class="td-c">
				<input type="radio" name="backgr-pos-type" id="backgr-pos-type-default" value="default"<?php 
				if ( $thfr_css[$cur_sel]['backgr-pos-type'] == 'default' ) { echo ' checked="checked"'; } ?>>	
				<select name="background-position" id="background-position">
				<?php foreach ($background_positions as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['background-position'] == $option) echo ' selected="selected"'; 
						?>	><?php echo $option; ?>
					</option>
				<?php } ?></select>
			</td>
			<td class="td-l">
				<input type="radio" name="backgr-pos-type" id="backgr-pos-type-precise" value="precise"<?php 
				if ( $thfr_css[$cur_sel]['backgr-pos-type'] == 'precise' ) { echo ' checked="checked"'; } ?>> X / Y values <img src="<?php 
				echo THFRURL; ?>images/arrowdown.gif" style="vertical-align:bottom" />				
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td align="right" width="120">
				X<span style="font-size:9px"> (from Left)</span> <input class="slidertext" type="text" size="3" name="background-position-x" id="background-position-x" value="<?php 
				echo $thfr_css[$cur_sel]['background-position-x']; ?>" />&nbsp;
			</td>
			<td>
				<div class="slider" id="background-position-x-slider" slidermax="500" slidermin="0" unitseparate="1"></div>
			</td>	
			<td width="45" style="padding-right:0px">
				<select name="background-position-x-unit" id="background-position-x-unit"><?php foreach ($units as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['background-position-x-unit'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?></select>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td align="right" width="120">
				Y<span style="font-size:9px"> (from Top)</span> <input class="slidertext" type="text" size="3" name="background-position-y" id="background-position-y" value="<?php 
				echo $thfr_css[$cur_sel]['background-position-y']; ?>" />&nbsp;
			</td>
			<td>
				<div class="slider" id="background-position-y-slider" slidermax="500" slidermin="0" unitseparate="1"></div>
			</td>
			<td width="45" style="padding-right:0px">
				<select name="background-position-y-unit" id="background-position-y-unit"><?php foreach ($units as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['background-position-y-unit'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?></select>
			</td>
		</tr>
	</table>
</div><!-- / div.tf-background -->

<div class="tf-option-container tf-text">
	<table width="100%">
		<tr>
			<td>
				<span class="property" id="prop-font-family">font-family</span> 
				<select name="font-family" id="font-family"><?php foreach ($font_families as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['font-family'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?></select>
				<select name="font-family2" id="font-family2"><?php foreach ($font_families as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['font-family2'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?></select>
				<select name="generic-family" id="generic-family"><?php foreach ($generic_families as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['generic-family'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?></select>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td class="td-r">
				<span class="property" id="prop-color">color</span> 
				<input class="jscolor" type="text" size="8" name="color" id="color" value="<?php 
				echo $thfr_css[$cur_sel]['color']; ?>" />
			</td>
			<td class="td-c">
				<span class="property" id="prop-font-weight">font-weight</span> 
				<select name="font-weight" id="font-weight"><?php foreach ($font_weights as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['font-weight'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?></select>
			</td>
			<td class="td-l">
				<span class="property" id="prop-text-decoration">text-decoration</span> 
				<select name="text-decoration" id="text-decoration"><?php foreach ($text_decorations as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['text-decoration'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?></select>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="100" align="right" class="td-r">
				<span class="property" id="prop-font-size">font-size</span> 
			</td>
			<td width="40" align="right" class="td-l">
				<input class="slidertext" type="text" size="3" name="font-size" id="font-size" value="<?php 
				echo $thfr_css[$cur_sel]['font-size']; ?>" />
			</td>
			<td class="td-r">
				<div class="slider" id="font-size-slider" slidermax="100" slidermin="0"></div>
			</td>
			<td width="17" align="right" class="td-l">
				<a class="propdelete" id="font-size-delete" href="#"></a>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="100" align="right" class="td-r">
				<span class="property" id="prop-line-height">line-height</span> 
			</td>
			<td width="40" align="right" class="td-l">
				<input class="slidertext" type="text" size="3" name="line-height" id="line-height" value="<?php 
				echo $thfr_css[$cur_sel]['line-height']; ?>" />
			</td>
			<td class="td-r">
				<div class="slider" id="line-height-slider" slidermax="100" slidermin="0"></div>
			</td>
			<td width="17" align="right" class="td-l">
				<a class="propdelete" id="line-height-delete" href="#"></a>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>	
			<td width="100" align="right" class="td-r">
				<span class="property" id="prop-letter-spacing">letter-spacing</span> 
			</td>
			<td width="40" align="right" class="td-l">
				<input class="slidertext" type="text" size="3" name="letter-spacing" id="letter-spacing" value="<?php 
				echo $thfr_css[$cur_sel]['letter-spacing']; ?>" />
			</td>
			<td class="td-r">
				<div class="slider" id="letter-spacing-slider" slidermax="70" slidermin="-30"></div>
			</td>
			<td width="17" align="right" class="td-l">
				<a class="propdelete" id="letter-spacing-delete" href="#"></a>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="100" align="right" class="td-r">
				<span class="property" id="prop-word-spacing">word-spacing</span> 
			</td>
			<td width="40" align="right" class="td-l">
				<input class="slidertext" type="text" size="3" name="word-spacing" id="word-spacing" value="<?php 
				echo $thfr_css[$cur_sel]['word-spacing']; ?>" />
			</td>
			<td class="td-r">
				<div class="slider" id="word-spacing-slider" slidermax="70" slidermin="-30"></div>
			</td>
			<td width="17" align="right" class="td-l">
				<a class="propdelete" id="word-spacing-delete" href="#"></a>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="100" align="right" class="td-r">
				<span class="property" id="prop-text-indent">text-indent</span> 
			</td>
			<td width="40" align="right" class="td-l">
				<input class="slidertext" type="text" size="3" name="text-indent" id="text-indent" value="<?php 
				echo $thfr_css[$cur_sel]['text-indent']; ?>" />
			</td>
			<td class="td-r">
				<div class="slider" id="text-indent-slider" slidermax="100" slidermin="0"></div>
			</td>
			<td width="17" align="right" class="td-l">
				<a class="propdelete" id="text-indent-delete" href="#"></a>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td align="right" width="50%" class="td-r">
				<span class="property" id="prop-font-style">font-style</span>
				&nbsp;&nbsp;<select name="font-style" id="font-style"><?php foreach ($font_styles as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['font-style'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?></select>
			</td>
			<td align="right" class="td-l">
				<span class="property" id="prop-text-align">text-align</span>
				&nbsp;&nbsp;<select name="text-align" id="text-align"><?php foreach ($text_aligns as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['text-align'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?></select>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td align="right" width="50%" class="td-r">
				<span class="property" id="prop-text-transform">text-transform</span>
				&nbsp;&nbsp;<select name="text-transform" id="text-transform"><?php foreach ($text_transforms as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['text-transform'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?></select>
			</td>
			<td align="right" class="td-l">
				<span class="property" id="prop-font-variant">font-variant</span>
				&nbsp;&nbsp;<select name="font-variant" id="font-variant"><?php foreach ($font_variants as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['font-variant'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?></select>
			</td>
		</tr>
	</table>
</div><!-- / div.tf-text -->

<div class="tf-option-container tf-size">
	<table width="100%">
		<tr>
			<td align="right" width="40" class="td-r">
				<span class="property" id="prop-width">width</span>
			</td>
			<td width="40" class="td-c">
				<input type="radio" name="width-auto-or-value" id="widthauto" value="auto"
				<?php if ( $thfr_css[$cur_sel]['width-auto-or-value'] == 'auto' ) { echo ' checked="checked"'; } ?>> auto
			</td>
			<td width="60" class="td-l">
				<input type="radio" name="width-auto-or-value" id="widthvalue" value="value"<?php 
				if ( $thfr_css[$cur_sel]['width-auto-or-value'] == 'value' ) { echo ' checked="checked"'; } ?>>
				<input type="text" class="slidertext" size="3" name="width" id="width" value="<?php 
				echo $thfr_css[$cur_sel]['width']; ?>" />
			</td>
			<td>
				<div class="slider" id="width-slider" slidermax="700" slidermin="0" unitseparate="1"></div>
			</td>
			<td width="30" class="td-r">
				<select name="width-unit" id="width-unit"><?php foreach ($units as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['width-unit'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?></select> 
			</td>
			<td align="right" width="17" class="td-l">
				<a class="propdelete" id="width-delete" href="#"></a>
			</td>
		</tr>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td align="right" width="40" class="td-r">
				<span class="property" id="prop-height">height</span>
			</td>
			<td width="40" class="td-c">
				<input type="radio" name="height-auto-or-value" id="heightauto" value="auto"<?php 
				if ( $thfr_css[$cur_sel]['height-auto-or-value'] == 'auto' ) { echo ' checked="checked"'; } ?>> auto
			</td>
			<td width="60" class="td-l">
				<input type="radio" name="height-auto-or-value" id="heightvalue" value="value"<?php 
				if ( $thfr_css[$cur_sel]['height-auto-or-value'] == 'value' ) { echo ' checked="checked"'; } ?>>
				<input type="text" class="slidertext" size="3" name="height" id="height" value="<?php 
				echo $thfr_css[$cur_sel]['height']; ?>" />
			</td>
			<td>
				<div class="slider" id="height-slider" slidermax="500" slidermin="0" unitseparate="1"></div>
			</td>
			<td width="30" class="td-r">
				<select name="height-unit" id="height-unit"><?php foreach ($units as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['height-unit'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?></select> 
			</td>
			<td align="right" width="17" class="td-l">
				<a class="propdelete" id="height-delete" href="#"></a>
			</td>
		</tr>
	</table>
</div><!-- / div.tf-size -->

<div class="tf-option-container tf-position">
	<table width="100%">
		<tr>
			<td>
				<span class="property" id="prop-position">position</span>  
				<select name="position" id="position"><?php foreach ($positions as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['position'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?></select>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td colspan="4">
				Top / Bottom: 
			</td>
			<td width="17" align="right">
				<a class="propdelete" id="topbottom-delete" href="#"></a>			
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="60" align="right" class="td-r">
				<span class="property" id="prop-top">top</span> 
			</td>
			<td width="40" class="td-c">
				<input type="radio" name="topbottom" id="topauto" value="topauto"<?php 
				if ( $thfr_css[$cur_sel]['topbottom'] == 'topauto' ) { echo ' checked="checked"'; } ?>> auto
			</td>
			<td width="60" class="td-l">
				<input type="radio" name="topbottom" id="topvalue" value="topvalue"<?php 
				if ( $thfr_css[$cur_sel]['topbottom'] == 'topvalue' ) { echo ' checked="checked"'; } ?>>
				<input class="slidertext" type="text" size="3" name="top" id="top" value="<?php 
				echo $thfr_css[$cur_sel]['top']; ?>" />
			</td>
			<td>
				<div class="slider" id="top-slider" slidermax="500" slidermin="0" unitseparate="1"></div>
			</td>
			<td width="50" align="right" class="td-r">	
				<select name="top-unit" id="top-unit"><?php foreach ($units as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['top-unit'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?></select>
			</td>
			<td width="17" align="right" class="td-l">
			&nbsp;
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="60" align="right" class="td-r">
				<span class="property" id="prop-bottom">bottom</span> 
			</td>
			<td width="40" class="td-c">
				<input type="radio" name="topbottom" id="bottomauto" value="bottomauto"<?php 
				if ( $thfr_css[$cur_sel]['topbottom'] == 'bottomauto' ) { echo ' checked="checked"'; } ?>> auto
			</td>
			<td width="60" class="td-l">
				<input type="radio" name="topbottom" id="bottomvalue" value="bottomvalue"<?php 
				if ( $thfr_css[$cur_sel]['topbottom'] == 'bottomvalue' ) { echo ' checked="checked"'; } ?>>
				<input class="slidertext" type="text" size="3" name="bottom" id="bottom" value="<?php 
				echo $thfr_css[$cur_sel]['bottom']; ?>" />
			</td>
			<td>
				<div class="slider" id="bottom-slider" slidermax="500" slidermin="0" unitseparate="1"></div>
			</td>
			<td width="50" align="right" class="td-r">
				<select name="bottom-unit" id="bottom-unit"><?php foreach ($units as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['bottom-unit'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?></select> 
			</td>
			<td width="17" align="right" class="td-l">
			&nbsp;
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td colspan="2">
				Left / Right:
			</td>
			<td align="right">
				<a class="propdelete" id="leftright-delete" href="#"></a>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="60" align="right" class="td-r">
				<span class="property" id="prop-left">left</span>
			</td>
			<td width="40" class="td-c">
				<input type="radio" name="leftright" id="leftauto" value="leftauto"<?php 
				if ( $thfr_css[$cur_sel]['leftright'] == 'leftauto' ) { echo ' checked="checked"'; } ?>> auto
			</td>
			<td width="60" class="td-l">
				<input type="radio" name="leftright" id="leftvalue" value="leftvalue"<?php 
				if ( $thfr_css[$cur_sel]['leftright'] == 'leftvalue' ) { echo ' checked="checked"'; } ?>>
				<input class="slidertext" type="text" size="3" name="left" id="left" value="<?php 
				echo $thfr_css[$cur_sel]['left']; ?>" />
			</td>
			<td>
				<div class="slider" id="left-slider" slidermax="500" slidermin="0" unitseparate="1"></div>
			</td>
			<td width="50" align="right" class="td-r">	
				<select name="left-unit" id="left-unit"><?php foreach ($units as $option) { ?>
				<option value="<?php echo $option; ?>"<?php 
					if ( $thfr_css[$cur_sel]['left-unit'] == $option) echo ' selected="selected"'; 
					?>><?php echo $option; ?>
				</option>
				<?php } ?></select>
			</td>
			<td width="17" align="right" class="td-l">
			&nbsp;
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="60" align="right" class="td-r">
				<span class="property" id="prop-right">right</span> 
			</td>
			<td width="40" class="td-c">
				<input type="radio" name="leftright" id="rightauto" value="rightauto"<?php 
				if ( $thfr_css[$cur_sel]['leftright'] == 'rightauto' ) { echo ' checked="checked"'; } ?>> auto
			</td>
			<td width="60" class="td-l">
				<input type="radio" name="leftright" id="rightvalue" value="rightvalue"<?php 
				if ( $thfr_css[$cur_sel]['leftright'] == 'rightvalue' ) { echo ' checked="checked"'; } ?>>
				<input class="slidertext" type="text" size="3" name="right" id="right" value="<?php 
				echo $thfr_css[$cur_sel]['right']; ?>" />
			</td>
			<td>	
				<div class="slider" id="right-slider" slidermax="500" slidermin="0" unitseparate="1"></div>
			</td>
			<td width="50" align="right" class="td-r">
				&nbsp;<select name="right-unit" id="right-unit"><?php foreach ($units as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['right-unit'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?></select>
			</td>
			<td width="17" align="right" class="td-l">
			&nbsp;
			</td>
		</tr>
	</table>
</div><!-- / div. tf-position -->

<div class="tf-option-container tf-various">
	<table width="100%">
		<tr>
			<td width="60" align="right" class="td-r">
				<span class="property" id="prop-right">display</span>
			</td>
			<td width="140" class="td-c">			
				<select name="display" id="display"><?php foreach ($displays as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['display'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?></select>
			</td>
			<td width="100" align="right" class="td-c">
				<span class="property" id="prop-right">z-index</span>
			</td>
			<td class="td-l">
				<select name="z-index" id="z-index"><?php foreach ( $z_indizes as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['z-index'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?></select>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="60" align="right" class="td-r">
				<span class="property" id="prop-right">visibility</span>
			</td>
			<td width="140" class="td-c">				
				<select name="visibility" id="visibility"><?php foreach ($visibilities as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['visibility'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?></select>
			</td>
			<td width="100" align="right" class="td-c">
				<span class="property" id="prop-right">overflow</span>
			</td>
			<td class="td-l">
				<select name="overflow" id="overflow"><?php foreach ($overflows as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['overflow'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?></select>
			</td>
		</tr>
	</table>
	<hr /><hr class="light" />
	<table width="100%">
		<tr>
			<td width="60" align="right" class="td-r">
				<span class="property" id="prop-right">float</span>
			</td>
			<td width="140" class="td-c">	
				<select name="float" id="float"><?php foreach ($floats as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['float'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?></select>
			</td>
			<td width="100" align="right" class="td-c">
				<span class="property" id="prop-right">clear</span>
			</td>
			<td class="td-l">
				<select name="clear" id="clear"><?php foreach ($clears as $option) { ?>
					<option value="<?php echo $option; ?>"<?php 
						if ( $thfr_css[$cur_sel]['clear'] == $option) echo ' selected="selected"'; 
						?>><?php echo $option; ?>
					</option>
				<?php } ?></select>
			</td>
		</tr>
	</table>
</div><!-- / div. tf-various -->


<?php 
echo "<!-- nginx/ajax test -->";
if((preg_match("/( ul|ul\.|ul#)/i", $cur_sel) OR preg_match("/( ol|ol\.|ol#)/i", $cur_sel)) AND !preg_match("/( li$| li\.| li )/i", $cur_sel)) { 
?><div class="tf-option-container tf-ulol" style="padding: 10px">
To put bullet images in front of list items, set this setting here to "none", then set a padding-left and a 
background-image (= the bullet image) on the LI list items.<br /><br />
List-Style-Type: 
	<select name="list-style-type" id="list-style-type"><?php foreach ($list_style_types as $option) { ?>
		<option value="<?php echo $option; ?>"<?php 
			if ( $thfr_css[$cur_sel]['list-style-type'] == $option) { echo ' selected="selected"'; }
			?>><?php echo $option; ?>
		</option>
	<?php } ?></select>

 &nbsp;&nbsp;&nbsp;List-Style-Position: 
	<select name="list-style-position" id="list-style-position"><?php foreach (array('','outside','inside') as $option) { ?>
		<option value="<?php echo $option; ?>"<?php 
			if ( $thfr_css[$cur_sel]['list-style-position'] == $option) { echo ' selected="selected"'; }
			?>><?php echo $option; ?>
		</option>
	<?php } ?></select>	

</div><!-- / div.tf-ulol -->
<?php } 
echo "<!-- nginx/ajax test -->";
?><div id="submitbutton">
	<table width="105">
		<tr>
			<td width="95">
				<input class="tf-button" type="submit" name="action" id="themeframe-form-save" value="" />
			</td>
			<td width="10">
				<span class="formstatus"></span>
			</td>
		</tr>
	</table>
</div>

</form><!-- / form.themeframe-form -->
<?php 
// echo "<div style='background:white'>Selector: " .$cur_sel . "<br />Action: " . 
// $action . "<br />thfrpath: " . $thfrpath . "<br />thfruploadpath: " . $thfruploadpath ."<br />cur_sel: ".$cur_sel."</div>";
if ($selector == '') {
	die();
}
}
?>