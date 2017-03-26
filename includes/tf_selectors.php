<?php function tf_selectors($template = '') {

	global $thfr_css;

	if ($template != '') $thisSelectorgroup = $template; 
	else $thisSelectorgroup = $_POST['id']; 

	$available_selectors_layout_layout = array(
		"div.index",
		"div#container", 
		"td#td-header", 
		"div#div-header",
		"div.headerimage",
		"h1#sitetitle",
		"h1#sitetitle a",
		"h1#sitetitle a.hover",
		"p#tagline",
		"a.rsslink",
		"a.rsscommentslink",
		/*
		"a.feedburnerlink",
		"a.twitterlink",
		"a.facebooklink",
		*/
		"td#td-left", 
		"td#td-left1",
		"div#div-left1",
		"td#td-left2",
		"div#div-left2",
		"td#td-left3",
		"div#div-left3",	
		"td#td-center", 
		"div#div-center", 
		"h3.pagetitle", 
		"td#td-right", 
		"td#td-right1",
		"div#div-right1",
		"td#td-right2",
		"div#div-right2",
		"td#td-right3",
		"div#div-right3",
		"td#td-footer", 
		"div#div-footer", 
		"div#div-footer a"
	);

	$available_selectors_layout_breadcrumbs = array(
		"div.breadcrumbs",
		"div.breadcrumbs a",
		"div.breadcrumbs a.hover",
		"div.breadcrumbs span.bc-home a",
		"div.breadcrumbs span.bc-home a:hover",	
		"div#breadcrumbs2",
		"div#breadcrumbs2 a",
		"div#breadcrumbs2 a.hover",
		"div#breadcrumbs2 span.bc-home a",
		"div#breadcrumbs2 span.bc-home a:hover"
	);

	$available_selectors_layout_searchform = array(
		"div.searchform",
		"div.searchform form",
		"div.searchform form input.searchfield",
		"div.searchform form input.searchbutton"
	);

	$available_selectors_layout_multinav = array(
		"div.multinav", 
		"div.multinav div.older", 
		"div.multinav div.older a",
		"div.multinav div.older a.hover",
		"div.multinav div.newer", 
		"div.multinav div.newer a",
		"div.multinav div.newer a.hover",
		"div#multinav2", 
		"div#multinav2 div.older", 
		"div#multinav2 div.older a",
		"div#multinav2 div.older a.hover",
		"div#multinav2 div.newer", 
		"div#multinav2 div.newer a",
		"div#multinav2 div.newer a.hover",
	);

	$available_selectors_layout_singlenav = array(
		"div.singlenav", 
		"div.singlenav div.older", 
		"div.singlenav div.older a",
		"div.singlenav div.older a.hover",
		"div.singlenav div.newer", 
		"div.singlenav div.newer a",
		"div.singlenav div.newer a.hover",
		"div#singlenav2", 
		"div#singlenav2 div.older", 
		"div#singlenav2 div.older a",
		"div#singlenav2 div.older a.hover",
		"div#singlenav2 div.newer", 
		"div#singlenav2 div.newer a",
		"div#singlenav2 div.newer a.hover",
	);

	$available_selectors_layout_post = array(
		"img.postthumb",
		"div.post", 
		"div.post-kicker", 
		"div.post-kicker a",
		"div.post-kicker a.hover",
		"div.post-headline",
		"div.post-headline h2",
		"div.post-headline h2 a",
		"div.post-headline h2 a.hover",
		"div.post-byline", 
		"div.post-byline a", 
		"div.post-byline a.hover",
		"div.post-bodycopy", 
		"div.post-bodycopy p", 
		"div.post-bodycopy a", 
		"div.post-bodycopy a.hover", 
		"span.readmore",
		"span.readmore a",
		"span.readmore a.hover",
		"div.post-footer", 
		"div.post-footer a",
		"div.post-footer a.hover", 	
	);

	$available_selectors_layout_widget = array(
		"div.widget", 
		"div.widget h3", 
		"div.widget a",
		"div.widget a.hover",
		"div.widget ul", 
		"div.widget ul ul",	
		"div.widget ul li", 
		"div.widget ul li li", 
		"div.widget ul li.hover",
		"div.widget ul li li.hover",
		"div.widget ul li a",
		"div.widget ul li li a",
		"div.widget ul li a.hover",
		"div.widget ul li li a.hover",
	);

	$available_selectors_layout_widgetarea_1 = array(
		"div#widgetarea1"
	);

	$available_selectors_layout_widgetarea_1_2 = array(
		"div#widgetarea1-2"
	);

	$available_selectors_layout_widgetarea_1_3 = array(
		"div#widgetarea1-3"
	);

	$available_selectors_layout_widgetarea_2 = array(
		"div#widgetarea2",
		"div#widgetarea2 .col1",
		"div#widgetarea2 .col2",
		"div#widgetarea2 td.td1",
		"div#widgetarea2 td.td2"
	);

	$available_selectors_layout_widgetarea_2_2 = array(
		"div#widgetarea2-2",
		"div#widgetarea2-2 .col1",
		"div#widgetarea2-2 .col2",
		"div#widgetarea2-2 td.td1",
		"div#widgetarea2-2 td.td2"
	);

	$available_selectors_layout_widgetarea_3 = array(
		"div#widgetarea3",
		"div#widgetarea3 .col1",
		"div#widgetarea3 .col2",
		"div#widgetarea3 .col3",
		"div#widgetarea3 td.td1",
		"div#widgetarea3 td.td2",
		"div#widgetarea3 td.td3"
	);

	$available_selectors_layout_widgetarea_4 = array(
		"div#widgetarea4",
		"div#widgetarea4 .col1",
		"div#widgetarea4 .col2",
		"div#widgetarea4 .col3",
		"div#widgetarea4 .col4",
		"div#widgetarea4 td.td1",
		"div#widgetarea4 td.td2",
		"div#widgetarea4 td.td3",
		"div#widgetarea4 td.td4"
	);

	$available_selectors_layout_widgetarea_5 = array(
		"div#widgetarea5",
		"div#widgetarea5 .col1",
		"div#widgetarea5 .col2",
		"div#widgetarea5 .col3",
		"div#widgetarea5 .col4",
		"div#widgetarea5 .col5",
		"div#widgetarea5 td.td1",
		"div#widgetarea5 td.td2",
		"div#widgetarea5 td.td3",
		"div#widgetarea5 td.td4",
		"div#widgetarea5 td.td5"
	);

	$available_selectors_layout_widgetarea_6 = array(
		"div#widgetarea6",
		"div#widgetarea6 .col1",
		"div#widgetarea6 .col2",
		"div#widgetarea6 .col3",
		"div#widgetarea6 .col4",
		"div#widgetarea6 .col5",
		"div#widgetarea6 .col6",
		"div#widgetarea6 td.td1",
		"div#widgetarea6 td.td2",
		"div#widgetarea6 td.td3",
		"div#widgetarea6 td.td4",
		"div#widgetarea6 td.td5",
		"div#widgetarea6 td.td6"
	);

	foreach ($available_selectors_layout_widget as $widget_selectors) {
		$available_selectors_layout_widgetarea_1[] = "div#widgetarea1 " . $widget_selectors;
		$available_selectors_layout_widgetarea_1_2[] = "div#widgetarea1-2 " . $widget_selectors;
		$available_selectors_layout_widgetarea_1_3[] = "div#widgetarea1-3 " . $widget_selectors;
		$available_selectors_layout_widgetarea_2[] = "div#widgetarea2 " . $widget_selectors;
		$available_selectors_layout_widgetarea_2_2[] = "div#widgetarea2-2 " . $widget_selectors;
		$available_selectors_layout_widgetarea_3[] = "div#widgetarea3 " . $widget_selectors;
		$available_selectors_layout_widgetarea_4[] = "div#widgetarea4 " . $widget_selectors;
		$available_selectors_layout_widgetarea_5[] = "div#widgetarea5 " . $widget_selectors;
		$available_selectors_layout_widgetarea_6[] = "div#widgetarea6 " . $widget_selectors;
	}

	$available_selectors_layout_hormenu = array(	
		"div.hormenu", 
		"ul.nav", 
		"ul.nav li",
		"ul.nav li a",
		"ul.nav li a.hover",
		"ul.nav li a.parent"
	);
		
	$available_selectors_layout_hormenu2 = array(	
		"div.hormenu2", 
		"ul.nav2", 
		"ul.nav2 li",
		"ul.nav2 li a",
		"ul.nav2 li a.hover",
		"ul.nav2 li a.parent"
	);

	$available_selectors_text = array(
		"div.index",
		"h1",
		"h2",
		"h3",
		"h4",
		"h5",
		"h6",
		"div.index p",
		"div.index a",
		"div.index a.hover",
		"div.index a.visited"
	);

	$available_selectors_images = array(
		"p img",
		"img.alignleft",
		"img.alignright",
		"img.aligncenter",
		"div.wp-caption",
		"div.wp-caption img", 
		"p.wp-caption-text"
	);

	$available_selectors_lists = array(
		"div.post ol",
		"div.post ol li",
		"div.post ul",
		"div.post ul ul",
		"div.post ul ul ul",
		"div.post ul li",
		"div.post ul ul li",
		"div.post ul ul ul li"
	);

	$available_selectors_tables = array(
		"div.post table",
		"div.post table caption",
		"div.post table tr",
		"div.post table th",
		"div.post table td",
		"div.post table tr.even",
		"div.post table tr.even td",
	);

	$available_selectors_blockquotes = array(
		"blockquote",
		"blockquote p",
		"blockquote blockquote",
		"blockquote a",
		"blockquote blockquote a",
		"blockquote a.hover",
		"blockquote blockquote a.hover"
	);

	$available_selectors_comments = array(
		"h3#comments",
		"div.commentnav",
		"div.commentnav a.prev",
		"div.commentnav a.page-numbers",
		"div.commentnav span.current",
		"div.commentnav a.next",
		"div#commentnav2",
		"div#commentnav2 a.prev",
		"div#commentnav2 a.page-numbers",
		"div#commentnav2 span.current",
		"div#commentnav2 a.next",	
		"ul.commentlist",
		"ul.commentlist li",
		"ul.commentlist li.thread-even",
		"ul.commentlist li div.comment-container",
		"ul.commentlist li.thread-even div.comment-container",
		"ul.commentlist li div.bypostauthor",
		"ul.commentlist ul.children",
		"ul.commentlist ul.children li div.bypostauthor",
		"ul.commentlist p",
		"ul.commentlist p a",
		"ul.commentlist p a.hover",
		"img.avatar",
		"span.comment-author-name",
		"span.comment-author-name a",	
		"span.comment-author-name a.hover",
		"span.comment-date-link",
		"span.comment-date-link a",	
		"span.comment-reply-link",
		"span.comment-reply-link a",
		"span.comment-edit-link",
		"span.comment-edit-link a",
		"span.comment-delete-link",
		"span.comment-delete-link a",
		"span.comment-spam-link",
		"span.comment-spam-link a",
		"div#respond",
		"h3.reply",
		"div#cancel-comment-reply",
		"a#cancel-comment-reply-link",
		"form#commentform",
		"form#commentform p",
		"form#commentform input",
		"input#email-input",
		"input#url-input",
		"form#commentform label",
		"label#email-label",
		"label#url-label",
		"p.thesetags",
		"p.xhtml-tags",
		"p.xhtml-tags code",
		"textarea#comment-textarea",
		"input#comment-submit"
	);
		
	$available_selectors_hormenu = array(
		"div.hormenu", 
		"ul.nav", 
		"ul.nav ul",
		"ul.nav ul ul",
		
		"ul.nav li",
		"ul.nav li a",
		"ul.nav li a.hover",
		"ul.nav li a.parent",
		
		"ul.nav ul li",
		"ul.nav ul li a",
		"ul.nav ul li a.hover",
		"ul.nav ul li a.parent",
		
		"ul.nav ul ul li",
		"ul.nav ul ul li a",
		"ul.nav ul ul li a.hover",
		"ul.nav ul ul li a.parent",
	);

	$available_selectors_hormenu2 = array(
		"div.hormenu2", 
		"ul.nav2", 
		"ul.nav2 ul",
		"ul.nav2 ul ul",
		
		"ul.nav2 li",
		"ul.nav2 li a",
		"ul.nav2 li a.hover",
		"ul.nav2 li a.parent",
		
		"ul.nav2 ul li",
		"ul.nav2 ul li a",
		"ul.nav2 ul li a.hover",
		"ul.nav2 ul li a.parent",
		
		"ul.nav2 ul ul li",
		"ul.nav2 ul ul li a",
		"ul.nav2 ul ul li a.hover",
		"ul.nav2 ul ul li a.parent",
	);

	
	$available_selectors_layout = array_merge(
		$available_selectors_layout_layout,
		$available_selectors_layout_breadcrumbs,
		$available_selectors_layout_searchform,
		$available_selectors_layout_multinav,
		$available_selectors_layout_singlenav,
		$available_selectors_layout_post,
		$available_selectors_layout_widget,
		$available_selectors_layout_hormenu,
		$available_selectors_layout_hormenu2,
		$available_selectors_layout_widgetarea_1,
		$available_selectors_layout_widgetarea_1_2,
		$available_selectors_layout_widgetarea_1_3,
		$available_selectors_layout_widgetarea_2,
		$available_selectors_layout_widgetarea_2_2,
		$available_selectors_layout_widgetarea_3,
		$available_selectors_layout_widgetarea_4,
		$available_selectors_layout_widgetarea_5,
		$available_selectors_layout_widgetarea_6
	);
	
	// Add drop images only if one was saved, or else CSS gets messed up
	if (is_array($thfr_css['customdropimages']) AND !empty($thfr_css['customdropimages'])) {
		// Custom drop images
		/*
		foreach($thfr_css['customdropimages'] as $img) {
			if($img['link'] == 'on') $available_selectors_layout_dropimages[] = 'a#' . str_replace('.', '', $img['file']) . '-link';
			$available_selectors_layout_dropimages[] = 'img#' . str_replace('.', '', $img['file']);	
		}
		*/
		foreach($thfr_css['customdropimages'] as $name => $value) {
			if($value['link'] == 'on') $available_selectors_layout_dropimages[] = 'a#' . $name . '-link';
			$available_selectors_layout_dropimages[] = 'img#' . $name;	
		}
		$available_selectors_layout = array_merge($available_selectors_layout, $available_selectors_layout_dropimages);
	}

	// Add drop links only if one was saved
	if (is_array($thfr_css['customdroplinks']) AND !empty($thfr_css['customdroplinks'])) {
		// Custom drop links
		foreach($thfr_css['customdroplinks'] as $name => $value) {
			$available_selectors_layout_droplinks[] = 'a#' . $name;	
		}
		$available_selectors_layout = array_merge($available_selectors_layout, $available_selectors_layout_droplinks);
	}
	
	// Add the page template variations to av. selectors
	foreach ($thfr_css['pagetemplates'] as $template) {
		foreach($available_selectors_layout as $selector) {
			if ($selector == 'div.index') $thisSelector = 'div.' . $template; 
			else $thisSelector = 'div.' . $template . ' ' . $selector;
			$available_selectors_layout_total[] = $thisSelector;
		}
	}

	$available_selectors = array_merge(
		$available_selectors_text,
		$available_selectors_images,
		$available_selectors_lists,
		$available_selectors_tables,
		$available_selectors_blockquotes,
		$available_selectors_layout,
		$available_selectors_layout_total, 
		$available_selectors_hormenu, 
		$available_selectors_hormenu2,
		$available_selectors_comments
	);

	// all pagetemplates including 'index'
	$all_page_templates = $thfr_css['pagetemplates'];

	if (!isset($thisSelectorgroup)) return $available_selectors;

	if( (isset($thisSelectorgroup) AND $_POST['ajax'] == 'true') OR (isset($thisSelectorgroup) AND $template != '') ) { 
		$string = '<option value=""></option>';

		// If this is a page template
		if(in_array($thisSelectorgroup, $all_page_templates )) {
			if ($thisSelectorgroup != 'index') $selector_prefix = 'div.' . $thisSelectorgroup . ' '; 
			else $selector_prefix = ''; // Avoid prefix "div.index" 
			
			$layoutsections = array('layout', 'breadcrumbs', 'searchform', 'multinav', 'singlenav', 'post', 'widget', 'hormenu', 'hormenu2', 
						'widgetarea_1', 'widgetarea_1_2', 'widgetarea_1_3', 'widgetarea_2', 'widgetarea_2_2', 'widgetarea_3', 
						'widgetarea_4', 'widgetarea_5', 'widgetarea_6');
						
			// Add drop images
			if (is_array($thfr_css['customdropimages'])) $layoutsections[] = 'dropimages';

			// Add drop links
			if (is_array($thfr_css['customdroplinks'])) $layoutsections[] = 'droplinks';
			
			foreach($layoutsections as $layoutsection) {
				$string .= '<optgroup label="' . $layoutsection . '">';
				$current_selectors = "available_selectors_layout_" . $layoutsection;
				
				foreach(${$current_selectors} as $thisSelector) {
					if ($thisSelectorgroup != 'index' AND $thisSelector == 'div.index') $thisSelector = ''; // Avoid "div.index div.home"
					$string .= '<option value="' . $selector_prefix . $thisSelector . '">' . $selector_prefix . $thisSelector . '</option>';
				}
				
				$string .= '</optgroup>';
			}
			
		// If it is not a page template
		} else {	
			// If this is a template with CSS
			$current_selectors = "available_selectors_" . $thisSelectorgroup;
			foreach(${$current_selectors} as $thisSelector) {
				$string .= '<option value="' . $thisSelector . '">' . $thisSelector . '</option>';
			}		
		}
		
		echo $string;
	}
}
?>