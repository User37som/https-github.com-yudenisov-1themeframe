<?php function tf_pagetemplate_include($thisTemplate, $body_class) { 
#include(THFRPATH . 'includes/tf_page_items.php');
global $thfr_css; ?>
<div class="<?php echo ($thisTemplate == 'index' ? 'index' : 'index ' . $thisTemplate); ?>" selector="<?php 
echo ($thisTemplate == 'index' ? 'div.index' : $body_class); ?>">
<div id="wrapper">
<div id="container" selector="<?php echo $body_class; ?>div#container">
<table id="layout" border="0" cellspacing="0" cellpadding="0">
<colgroup><col class="col-left" /><col class="col-center" /><col class="col-right" /></colgroup>
<tr>
<td id="td-header" colspan="3" selector="<?php echo $body_class; ?>td#td-header">
<div id="div-header" selector="<?php echo $body_class; ?>div#div-header">

	<?php tf_drop_area($thisTemplate, "header", $body_class); ?>
	
</div>
</td>
</tr><tr>
<td id="td-left" selector="<?php echo $body_class; ?>td#td-left">
	<table border="0" cellspacing="0" cellpadding="0">
	<colgroup><col class="col-left-left" /><col class="col-left-right" /></colgroup>
		<tr>
			<td colspan="2" id="td-left3" selector="<?php echo $body_class; ?>td#td-left3">
				<div id="div-left3" selector="<?php echo $body_class; ?>div#div-left3">
					<div class="widget" selector="<?php echo $body_class; ?>div.widget">
						<h3 selector="<?php echo $body_class; ?>div.widget h3">Widget Title</h3>
						<ul selector="<?php echo $body_class; ?>div.widget ul">
							<li selector="<?php echo $body_class; ?>div.widget ul li">
								<a selector="<?php echo $body_class; ?>div.widget ul li a" href="#">LI item</a>
							</li>
							<li selector="<?php echo $body_class; ?>div.widget ul li">
								<a selector="<?php echo $body_class; ?>div.widget ul li a" href="#">LI item</a>
							</li>
							<li class="hover" selector="<?php echo $body_class; ?>div.widget ul li.hover">
								<a class="hover" selector="<?php echo $body_class; ?>div.widget ul li a.hover" href="#">LI HOVER / CURRENT</a>
								<ul selector="<?php echo $body_class; ?>div.widget ul ul">
									<li selector="<?php echo $body_class; ?>div.widget ul li li">
										<a selector="<?php echo $body_class; ?>div.widget ul li li a" href="#">2nd level LI</a>
									</li>
									<li class="hover" selector="<?php echo $body_class; ?>div.widget ul li li.hover">
										<a class="hover" selector="<?php echo $body_class; ?>div.widget ul li li a.hover" href="#">2nd l. LI HOVER / CURR.</a>
									</li>
									<li selector="<?php echo $body_class; ?>div.widget ul li li">
										<a selector="<?php echo $body_class; ?>div.widget ul li li a" href="#">2nd level LI</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="widget" selector="<?php echo $body_class; ?>div.widget">
						<h3 selector="<?php echo $body_class; ?>div.widget h3">Widget Title</h3>
						Widget text with a <a selector="<?php echo $body_class; ?>div.widget a" href="#">Link</a> and a 
						<a  class="hover" selector="<?php echo $body_class; ?>div.widget a.hover" href="#">Hovered Link</a> here.
					</div>	
				</div>
			</td>
		</tr><tr>
			<td id="td-left1" selector="<?php echo $body_class; ?>td#td-left1">
				<div id="div-left1" selector="<?php echo $body_class; ?>div#div-left1">					
					<div class="widget" selector="<?php echo $body_class; ?>div.widget">
						<h3 selector="<?php echo $body_class; ?>div.widget h3">Widget Title</h3>
						Widget text with a <a selector="<?php echo $body_class; ?>div.widget a" href="#">Link</a> and a 
						<a  class="hover" selector="<?php echo $body_class; ?>div.widget a.hover" href="#">Hovered Link</a> here.
					</div>	
					<div class="widget" selector="<?php echo $body_class; ?>div.widget">
						<h3 selector="<?php echo $body_class; ?>div.widget h3">Widget Title</h3>
						<ul selector="<?php echo $body_class; ?>div.widget ul">
							<li selector="<?php echo $body_class; ?>div.widget ul li">
								<a selector="<?php echo $body_class; ?>div.widget ul li a" href="#">LI item</a>
							</li>
							<li selector="<?php echo $body_class; ?>div.widget ul li">
								<a selector="<?php echo $body_class; ?>div.widget ul li a" href="#">LI item</a>
							</li>
							<li class="hover" selector="<?php echo $body_class; ?>div.widget ul li.hover">
								<a class="hover" selector="<?php echo $body_class; ?>div.widget ul li a.hover" href="#">LI HOVER / CURRENT</a>
								<ul selector="<?php echo $body_class; ?>div.widget ul ul">
									<li selector="<?php echo $body_class; ?>div.widget ul li li">
										<a selector="<?php echo $body_class; ?>div.widget ul li li a" href="#">2nd level LI</a>
									</li>
									<li class="hover" selector="<?php echo $body_class; ?>div.widget ul li li.hover">
										<a class="hover" selector="<?php echo $body_class; ?>div.widget ul li li a.hover" href="#">2nd l. LI HOVER / CURR.</a>
									</li>
									<li selector="<?php echo $body_class; ?>div.widget ul li li">
										<a selector="<?php echo $body_class; ?>div.widget ul li li a" href="#">2nd level LI</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</td>
			<td id="td-left2" selector="<?php echo $body_class; ?>td#td-left2">
				<div id="div-left2" selector="<?php echo $body_class; ?>div#div-left2">	
					<div class="widget" selector="<?php echo $body_class; ?>div.widget">
						<h3 selector="<?php echo $body_class; ?>div.widget h3">Widget Title</h3>
						<ul selector="<?php echo $body_class; ?>div.widget ul">
							<li selector="<?php echo $body_class; ?>div.widget ul li">
								<a selector="<?php echo $body_class; ?>div.widget ul li a" href="#">LI item</a>
							</li>
							<li selector="<?php echo $body_class; ?>div.widget ul li">
								<a selector="<?php echo $body_class; ?>div.widget ul li a" href="#">LI item</a>
							</li>
							<li class="hover" selector="<?php echo $body_class; ?>div.widget ul li.hover">
								<a class="hover" selector="<?php echo $body_class; ?>div.widget ul li a.hover" href="#">LI HOVER / CURRENT</a>
								<ul selector="<?php echo $body_class; ?>div.widget ul ul">
									<li selector="<?php echo $body_class; ?>div.widget ul li li">
										<a selector="<?php echo $body_class; ?>div.widget ul li li a" href="#">2nd level LI</a>
									</li>
									<li class="hover" selector="<?php echo $body_class; ?>div.widget ul li li.hover">
										<a class="hover" selector="<?php echo $body_class; ?>div.widget ul li li a.hover" href="#">2nd l. LI HOVER / CURR.</a>
									</li>
									<li selector="<?php echo $body_class; ?>div.widget ul li li">
										<a selector="<?php echo $body_class; ?>div.widget ul li li a" href="#">2nd level LI</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="widget" selector="<?php echo $body_class; ?>div.widget">
						<h3 selector="<?php echo $body_class; ?>div.widget h3">Widget Title</h3>
						Widget text with a <a selector="<?php echo $body_class; ?>div.widget a" href="#">Link</a> and a 
						<a  class="hover" selector="<?php echo $body_class; ?>div.widget a.hover" href="#">Hovered Link</a> here.
					</div>	
				</div>
			</td>
		</tr>
	</table>	
</td>

<td id="td-center" selector="<?php echo $body_class; ?>td#td-center">
	<div id="div-center" selector="<?php echo $body_class; ?>div#div-center">

	<?php tf_drop_area($thisTemplate, "centerTop", $body_class); ?>
	
		
	<?php echo tf_postcontainer_preview($thisTemplate, $body_class); ?>

<?php if ($thisTemplate  == 'single') { ?>
<div style="padding:20px;border:solid 1px black;background:yellow"><strong>comments.php</strong> (see tab "comments") will be included here ...</div>
<?php } ?>

<?php // No second post for single and page templates
if (!in_array($thisTemplate, array('page', 'single'))) {
?>

	<?php echo tf_postcontainer_preview($thisTemplate, $body_class); ?>

<?php } // no second post for single & page ?>

	<?php tf_drop_area($thisTemplate, "centerBottom", $body_class); ?>
		
	</div>
</td>

<td id="td-right" selector="<?php echo $body_class; ?>td#td-right">
	<table border="0" cellspacing="0" cellpadding="0">
	<colgroup><col class="col-right-left" /><col class="col-right-right" /></colgroup>
		<tr>
			<td colspan="2" id="td-right3" selector="<?php echo $body_class; ?>td#td-right3">
				<div id="div-right3" selector="<?php echo $body_class; ?>div#div-right3">
					<div class="widget" selector="<?php echo $body_class; ?>div.widget">
						<h3 selector="<?php echo $body_class; ?>div.widget h3">Widget Title</h3>
						Widget text with a <a selector="<?php echo $body_class; ?>div.widget a" href="#">Link</a> and a 
						<a  class="hover" selector="<?php echo $body_class; ?>div.widget a.hover" href="#">Hovered Link</a> here.
					</div>	
					<div class="widget" selector="<?php echo $body_class; ?>div.widget">
						<h3 selector="<?php echo $body_class; ?>div.widget h3">Widget Title</h3>
						<ul selector="<?php echo $body_class; ?>div.widget ul">
							<li selector="<?php echo $body_class; ?>div.widget ul li">
								<a selector="<?php echo $body_class; ?>div.widget ul li a" href="#">LI item</a>
							</li>
							<li selector="<?php echo $body_class; ?>div.widget ul li">
								<a selector="<?php echo $body_class; ?>div.widget ul li a" href="#">LI item</a>
							</li>
							<li class="hover" selector="<?php echo $body_class; ?>div.widget ul li.hover">
								<a class="hover" selector="<?php echo $body_class; ?>div.widget ul li a.hover" href="#">LI HOVER / CURRENT</a>
								<ul selector="<?php echo $body_class; ?>div.widget ul ul">
									<li selector="<?php echo $body_class; ?>div.widget ul li li">
										<a selector="<?php echo $body_class; ?>div.widget ul li li a" href="#">2nd level LI</a>
									</li>
									<li class="hover" selector="<?php echo $body_class; ?>div.widget ul li li.hover">
										<a class="hover" selector="<?php echo $body_class; ?>div.widget ul li li a.hover" href="#">2nd l. LI HOVER / CURR.</a>
									</li>
									<li selector="<?php echo $body_class; ?>div.widget ul li li">
										<a selector="<?php echo $body_class; ?>div.widget ul li li a" href="#">2nd level LI</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td id="td-right2" selector="<?php echo $body_class; ?>td#td-right2">
				<div id="div-right2" selector="<?php echo $body_class; ?>div#div-right2">					
					<div class="widget" selector="<?php echo $body_class; ?>div.widget">
						<h3 selector="<?php echo $body_class; ?>div.widget h3">Widget Title</h3>
						<ul selector="<?php echo $body_class; ?>div.widget ul">
							<li selector="<?php echo $body_class; ?>div.widget ul li">
								<a selector="<?php echo $body_class; ?>div.widget ul li a" href="#">LI item</a>
							</li>
							<li selector="<?php echo $body_class; ?>div.widget ul li">
								<a selector="<?php echo $body_class; ?>div.widget ul li a" href="#">LI item</a>
							</li>
							<li class="hover" selector="<?php echo $body_class; ?>div.widget ul li.hover">
								<a class="hover" selector="<?php echo $body_class; ?>div.widget ul li a.hover" href="#">LI HOVER / CURRENT</a>
								<ul selector="<?php echo $body_class; ?>div.widget ul ul">
									<li selector="<?php echo $body_class; ?>div.widget ul li li">
										<a selector="<?php echo $body_class; ?>div.widget ul li li a" href="#">2nd level LI</a>
									</li>
									<li class="hover" selector="<?php echo $body_class; ?>div.widget ul li li.hover">
										<a class="hover" selector="<?php echo $body_class; ?>div.widget ul li li a.hover" href="#">2nd l. LI HOVER / CURR.</a>
									</li>
									<li selector="<?php echo $body_class; ?>div.widget ul li li">
										<a selector="<?php echo $body_class; ?>div.widget ul li li a" href="#">2nd level LI</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="widget" selector="<?php echo $body_class; ?>div.widget">
						<h3 selector="<?php echo $body_class; ?>div.widget h3">Widget Title</h3>
						Widget text with a <a selector="<?php echo $body_class; ?>div.widget a" href="#">Link</a> and a 
						<a  class="hover" selector="<?php echo $body_class; ?>div.widget a.hover" href="#">Hovered Link</a> here.
					</div>
				</div>
			</td>
			<td id="td-right1" selector="<?php echo $body_class; ?>td#td-right1">
				<div id="div-right1" selector="<?php echo $body_class; ?>div#div-right1">	
					<div class="widget" selector="<?php echo $body_class; ?>div.widget">
						<h3 selector="<?php echo $body_class; ?>div.widget h3">Widget Title</h3>
						Widget text with a <a selector="<?php echo $body_class; ?>div.widget a" href="#">Link</a> and a 
						<a  class="hover" selector="<?php echo $body_class; ?>div.widget a.hover" href="#">Hovered Link</a> here.
					</div>	
					<div class="widget" selector="<?php echo $body_class; ?>div.widget">
						<h3 selector="<?php echo $body_class; ?>div.widget h3">Widget Title</h3>
						<ul selector="<?php echo $body_class; ?>div.widget ul">
							<li selector="<?php echo $body_class; ?>div.widget ul li">
								<a selector="<?php echo $body_class; ?>div.widget ul li a" href="#">LI item</a>
							</li>
							<li selector="<?php echo $body_class; ?>div.widget ul li">
								<a selector="<?php echo $body_class; ?>div.widget ul li a" href="#">LI item</a>
							</li>
							<li class="hover" selector="<?php echo $body_class; ?>div.widget ul li.hover">
								<a class="hover" selector="<?php echo $body_class; ?>div.widget ul li a.hover" href="#">LI HOVER / CURRENT</a>
								<ul selector="<?php echo $body_class; ?>div.widget ul ul">
									<li selector="<?php echo $body_class; ?>div.widget ul li li">
										<a selector="<?php echo $body_class; ?>div.widget ul li li a" href="#">2nd level LI</a>
									</li>
									<li class="hover" selector="<?php echo $body_class; ?>div.widget ul li li.hover">
										<a class="hover" selector="<?php echo $body_class; ?>div.widget ul li li a.hover" href="#">2nd l. LI HOVER / CURR.</a>
									</li>
									<li selector="<?php echo $body_class; ?>div.widget ul li li">
										<a selector="<?php echo $body_class; ?>div.widget ul li li a" href="#">2nd level LI</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</td>
		</tr>
	</table>	
</td>

</tr><tr>

<td id="td-footer" colspan="3" selector="<?php echo $body_class; ?>td#td-footer">

	<?php tf_drop_area($thisTemplate, "footer", $body_class); ?>
	
</td>

</tr></table><!-- layout -->
</div><!-- container -->
</div><!-- wrapper -->
</div><!-- / div.body -->
<?php } ?>
