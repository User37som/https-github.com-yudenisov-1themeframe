<div class="infocontainer-head">
	<h2>Custom Widget Areas</h2>
</div>

<div style="padding: 20px">
<p class="menuinfo">Create custom widget areas</p>
	<p class="menuinfo-gray">With ThemeFrame, <strong>creating</strong> and <strong>displaying</strong> custom widget areas is a <strong>2-step-process</strong> (on purpose, to make the creation independent from the display): 
	<ul><li><strong>In the page template preview</strong> (click "index.php", "home.php", "single.php" etc...)</strong>, drag &amp; drop custom widget area blocks ("Widget Area 1" etc...) into the layout and click "Save"</li>
	<li><strong>Here</strong> at this page: Create the corresponding widget area blocks inside WordPress by checking their check boxes below.</li>
	</ul></p>
	<p><em>The different names below mean:</em><br />
	<strong>[Name of Drag/Drop Handle in page template previews]</strong> &rarr; [<code>Names of created Widget Areas at WP Admin &raquo; Appearance &raquo; Widgets</code>]
	</p>
	<form name="widgetarea-form" action="" id="widgetarea-form">
	<p><input type="checkbox" name="WidgetArea-1"<?php if($thfr_css['WidgetArea-1'] == 'on') echo ' checked="checked"'; ?>>  <strong>1 Widget Area</strong>
	 &rarr; <code>WidgetArea-1</code> 
	<br /><input type="checkbox" name="WidgetArea-1-2"<?php if($thfr_css['WidgetArea-1-2'] == 'on') echo ' checked="checked"'; ?>> <strong>1 Widget Area #2</strong>
	 &rarr; <code>WidgetArea-1-2</code> 
	<br /><input type="checkbox" name="WidgetArea-1-3"<?php if($thfr_css['WidgetArea-1-3'] == 'on') echo ' checked="checked"'; ?>> <strong>1 Widget Area #3</strong>
	 &rarr; <code>WidgetArea-1-3</code> 
	<br /><input type="checkbox" name="WidgetArea-2"<?php if($thfr_css['WidgetArea-2'] == 'on') echo ' checked="checked"'; ?>> <strong>2 Widget Areas</strong>
	 &rarr; <code>WidgetArea-2 Col-1</code>, <code>WidgetArea-2 Col-2</code> 
	<br /><input type="checkbox" name="WidgetArea-2-2"<?php if($thfr_css['WidgetArea-2-2'] == 'on') echo ' checked="checked"'; ?>> <strong>2 Widget Areas #2</strong>
	 &rarr; <code>WidgetArea-2-2 Col-1</code>, <code>WidgetArea-2-2 Col-2</code>
	<br /><input type="checkbox" name="WidgetArea-3"<?php if($thfr_css['WidgetArea-3'] == 'on') echo ' checked="checked"'; ?>> <strong>3 Widget Areas</strong>
	 &rarr; <code>WidgetArea-3 Col-1</code>, <code>WidgetArea-3 Col-2</code>, <code>WidgetArea-3 Col-3</code> 
	<br /><input type="checkbox" name="WidgetArea-4"<?php if($thfr_css['WidgetArea-4'] == 'on') echo ' checked="checked"'; ?>> <strong>4 Widget Areas</strong>
	 &rarr; <code>WidgetArea-4 Col-1</code>, <code>WidgetArea-4 Col-2</code>, <code>WidgetArea-4 Col-3</code>, <code>WidgetArea-4 Col-4</code>
	<br /><input type="checkbox" name="WidgetArea-5"<?php if($thfr_css['WidgetArea-5'] == 'on') echo ' checked="checked"'; ?>> <strong>5 Widget Areas</strong>
	 &rarr; <code>WidgetArea-5 Col-1</code>, <code>WidgetArea-5 Col-2</code>, <code>WidgetArea-5 Col-3</code>, <code>WidgetArea-5 Col-4</code>, <code>WidgetArea-5 Col-5</code> 
	<br /><input type="checkbox" name="WidgetArea-6"<?php if($thfr_css['WidgetArea-6'] == 'on') echo ' checked="checked"'; ?>> <strong>6 Widget Areas</strong>
	 &rarr; <code>WidgetArea-6 Col-1</code>, <code>WidgetArea-6 Col-2</code>, <code>WidgetArea-6 Col-3</code>, <code>WidgetArea-6 Col-4</code>, <code>WidgetArea-6 Col-5</code>, <code>WidgetArea-6 Col-6</code> 
	</p>
	</form>
	<p class="menuinfo menuinfo-alert"><span class="ui-icon ui-icon-alert"></span>To add/remove widget areas, change the checkbox settings above, then click "Save" and download the modified functions.php file. 
	Add/remove those widget areas to/from the affected page templates as well (see "index.php", "single.php" etc... below), then click "Save" and download the modified page templates as well. Then upload the modified functions.php and affected 
	page templates. Also, when <i>removing</i> a custom 
	widget area, remove the widgets inside them first, at <code>WP Admin &raquo; Apperance &raquo; Widgets</code>. The new widget area settings will be activated by WordPress with the next page view (reload a page on the site to trigger this yourself).</p>
</div>
			