<div class="infocontainer-head">
	<h2 style="float:left;padding-right:30px">Comment Section <strong>comments.php</strong></h2>
	<a href="#" class="moreinfolink" id="commentsstylemore">Show/Hide More Info</a>
</div>
<div id="commentsstylemore-container" class="infocontainer">
<ul>
<li>The <code>comments.php</code> file is not mandatory in a WordPress theme, however if it is not present WordPress 
will use its own default comments template</li>
<li>The <code>comments.php</code> file will be inserted at the bottom of the content area of the <code>single.php</code> template.</li>
</ul>
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

<div class="tf-preview-container tf-preview-comments">
<div class="index" selector="div.index">
<div id="wrapper">
<div id="container" selector="div#container">

<table id="layout" border="0" cellspacing="0" cellpadding="0">
<tr>
<td id="td-center" selector="td#td-center">
	<div id="div-center" selector="div#div-center">
	
<a name="comments"></a><!-- named anchor for skip links -->
<h3 id="comments" selector="h3#comments">7 comments to Post Title</h3>

<div class="commentnav" id="commentnav1" selector="div.commentnav">
	<a class="prev page-numbers" href="#" selector="div.commentnav a.prev">&laquo; Older Comments</a>
	<a class="page-numbers" href="#" selector="div.commentnav a.page-numbers">1</a>
	<a class="page-numbers" href="#" selector="div.commentnav a.page-numbers">2</a>
	<a class="page-numbers" href="#" selector="div.commentnav a.page-numbers">3</a>
	<span class="page-numbers current" selector="div.commentnav span.current">4</span>
	<a class="next page-numbers" href="#" selector="div.commentnav a.next">Newer Comments &raquo;</a>
</div>

<!-- Comment List -->
<ul selector="ul.commentlist" class="commentlist">
	<li selector="ul.commentlist li" class="comment even thread-odd thread-alt depth-1 clearfix" id="comment-1938">
		<div selector="ul.commentlist li div.comment-container" id="div-comment-1938" class="clearfix comment-container">
			<img selector="img.avatar" src="<?php echo THFRURL; ?>images/avatar.gif" class="avatar photo" height="55" width="55" />
			<span class="comment-author-name" selector="span.comment-author-name">
				<a selector="span.comment-author-name a" href='#'>Comment author</a> <a class="hover" selector="span.comment-author-name a.hover" href='#'>Hovered</a>
			</span><br />
			<span class="comment-date-link" selector="span.comment-date-link">
				<a selector="span.comment-date-link a" href="#">Feb 15, 2009 at 8:49 am</a>
			</span> | 
			<span class="comment-reply-link" selector="span.comment-reply-link">
				<a selector="span.comment-reply-link a" href='#'>Reply</a>
			</span> | 
			<span class="comment-edit-link" selector="span.comment-edit-link">
				<a selector="span.comment-edit-link a" href="#">Edit</a>
			</span> | 
			<span class="comment-delete-link" selector="span.comment-delete-link">
				<a selector="span.comment-delete-link a" href="#">Delete</a>
			</span> | 
			<span class="comment-spam-link" selector="span.comment-spam-link">
				<a selector="span.comment-spam-link a" href="#">Spam</a>
			</span>
				
			<p selector="ul.commentlist p">
				<strong>ODD Thread</strong>. Style this to give comment to give all comments a basic style. This is a comment by a user. The next comment has a class 
				of .thread-even so you can give comments alternating styles. Only the first level comments have these alternating classes,
				direct (sub-) comment don't have this.
			</p>
		</div>
		<ul selector="ul.commentlist ul.children" class="children">
			<li selector="ul.commentlist ul.children li" class="comment byuser odd alt depth-2 clearfix" id="comment-2259">
				<div selector="ul.commentlist ul.children li div.comment-container" id="div-comment-2259" class="clearfix comment-container">
					<img selector="img.avatar" src="<?php echo THFRURL; ?>images/avatar.gif" class="avatar photo" height="55" width="55" />
					<span class="comment-author-name" selector="span.comment-author-name">
						<a selector="span.comment-author-name a" href='#'>Comment author</a> <a class="hover" selector="span.comment-author-name a" href='#'>Hovered</a>
					</span><br />
					<span class="comment-date-link" selector="span.comment-date-link">
						<a selector="span.comment-date-link a" href="#">Feb 15, 2009 at 8:49 am</a>
					</span> | 
					<span class="comment-reply-link" selector="span.comment-reply-link">
						<a selector="span.comment-reply-link a" href='#'>Reply</a>
					</span> | 
					<span class="comment-edit-link" selector="span.comment-edit-link">
						<a selector="span.comment-edit-link a" href="#">Edit</a>
					</span> | 
					<span class="comment-delete-link" selector="span.comment-delete-link">
						<a selector="span.comment-delete-link a" href="#">Delete</a>
					</span> | 
					<span class="comment-spam-link" selector="span.comment-spam-link">
						<a selector="span.comment-spam-link a" href="#">Spam</a>
					</span>

					<p selector="ul.commentlist p">Direct Reply, from Post Author. Both the LI and the DIV inside the LI hav the class .bypostauthor.</p>
				</div>
			</li>
		</ul>
	</li>
	<li selector="ul.commentlist li.thread-even" class="comment even thread-even depth-1 clearfix" id="comment-1937">
		<div selector="ul.commentlist li.thread-even div.comment-container" id="div-comment-1937" class="clearfix comment-container">
			<img selector="img.avatar" src="<?php echo THFRURL; ?>images/avatar.gif" class="avatar photo" height="55" width="55" />
			<span class="comment-author-name" selector="span.comment-author-name">
				<a selector="span.comment-author-name a" href='#'>Comment author</a> <a class="hover" selector="span.comment-author-name a.hover" href='#'>Hovered</a>
			</span><br />
			<span class="comment-date-link" selector="span.comment-date-link">
				<a selector="span.comment-date-link a" href="#">Feb 15, 2009 at 8:49 am</a>
			</span> | 
			<span class="comment-reply-link" selector="span.comment-reply-link">
				<a selector="span.comment-reply-link a" href='#'>Reply</a>
			</span> | 
			<span class="comment-edit-link" selector="span.comment-edit-link">
				<a selector="span.comment-edit-link a" href="#">Edit</a>
			</span> | 
			<span class="comment-delete-link" selector="span.comment-delete-link">
				<a selector="span.comment-delete-link a" href="#">Delete</a>
			</span> | 
			<span class="comment-spam-link" selector="span.comment-spam-link">
				<a selector="span.comment-spam-link a" href="#">Spam</a>
			</span>

			<p selector="ul.commentlist p"><strong>EVEN Thread</strong>. Give this comment extra styles if you want to style every 2nd first level comment differently.</p>
			<p selector="ul.commentlist p">New paragraph starts here and ends here.</p>
			<p selector="ul.commentlist p">Another paragraph starts here. This user pressed [Enter] a few times to create 
			blank lines. Wordpress translates this to multiple &lt;p&gt; ... &lt;/p&gt; paragraphs. And here is a 
			<a href="#" selector="ul.commentlist p a">link</a> and a <a href="#" selector="ul.commentlist p a.hover">hovered link</a> inside the 
			bodycopy of a comment.</p>
			<p selector="ul.commentlist p">This is the last paragraph of this comment.</p>
		</div>
		<ul selector="ul.commentlist ul.children" class="children">
			<li selector="ul.commentlist ul.children li" class="comment byuser odd alt depth-2 clearfix" id="comment-2259">
				<div selector="ul.commentlist ul.children li div.comment-container" id="div-comment-2259" class="clearfix comment-container">
					<img selector="img.avatar" src="<?php echo THFRURL; ?>images/avatar.gif" class="avatar photo" height="55" width="55" />
					<span class="comment-author-name" selector="span.comment-author-name">
						<a selector="span.comment-author-name a" href='#'>Comment author</a> <a class="hover" selector="span.comment-author-name a" href='#'>Hovered</a>
					</span><br />
					<span class="comment-date-link" selector="span.comment-date-link">
						<a selector="span.comment-date-link a" href="#">Feb 15, 2009 at 8:49 am</a>
					</span> | 
					<span class="comment-reply-link" selector="span.comment-reply-link">
						<a selector="span.comment-reply-link a" href='#'>Reply</a>
					</span> | 
					<span class="comment-edit-link" selector="span.comment-edit-link">
						<a selector="span.comment-edit-link a" href="#">Edit</a>
					</span> | 
					<span class="comment-delete-link" selector="span.comment-delete-link">
						<a selector="span.comment-delete-link a" href="#">Delete</a>
					</span> | 
					<span class="comment-spam-link" selector="span.comment-spam-link">
						<a selector="span.comment-spam-link a" href="#">Spam</a>
					</span>

					<p selector="ul.commentlist p">Direct Reply, from Post Author. Both the LI and the DIV inside the LI hav the class .bypostauthor.</p>
				</div>
			</li>
			<li selector="ul.commentlist ul.children li" class="comment byuser comment-author-admin odd alt depth-2 clearfix" id="comment-2259">
				<div selector="ul.commentlist ul.children li div.bypostauthor" id="div-comment-2259" class="clearfix comment-container bypostauthor">
					<img selector="img.avatar" src="<?php echo THFRURL; ?>images/avatar.gif" class="avatar photo" height="55" width="55" />
					<span class="comment-author-name" selector="span.comment-author-name">
						<a selector="span.comment-author-name a" href='#'>The post author</a> <a class="hover" selector="span.comment-author-name a.hover" href='#'>Hovered</a>
					</span><br />
					<span class="comment-date-link" selector="span.comment-date-link">
						<a selector="span.comment-date-link a" href="#">Feb 15, 2009 at 8:49 am</a>
					</span> | 
					<span class="comment-reply-link" selector="span.comment-reply-link">
						<a selector="span.comment-reply-link a" href='#'>Reply</a>
					</span> | 
					<span class="comment-edit-link" selector="span.comment-edit-link">
						<a selector="span.comment-edit-link a" href="#">Edit</a>
					</span> | 
					<span class="comment-delete-link" selector="span.comment-delete-link">
						<a selector="span.comment-delete-link a" href="#">Delete</a>
					</span> | 
					<span class="comment-spam-link" selector="span.comment-spam-link">
						<a selector="span.comment-spam-link a" href="#">Spam</a>
					</span>

					<p selector="ul.commentlist p">Direct Reply, from Post Author. Both the LI and the DIV inside the LI hav the class .bypostauthor.</p>
				</div>
			</li>
			<li selector="ul.commentlist ul.children li" class="comment byuser odd alt depth-2 clearfix" id="comment-2259">
				<div selector="ul.commentlist ul.children li div.comment-container" id="div-comment-2259" class="clearfix comment-container">
					<img selector="img.avatar" src="<?php echo THFRURL; ?>images/avatar.gif" class="avatar photo" height="55" width="55" />
					<span class="comment-author-name" selector="span.comment-author-name">
						<a selector="span.comment-author-name a" href='#'>Comment author</a> <a class="hover" selector="span.comment-author-name a" href='#'>Hovered</a>
					</span><br />
					<span class="comment-date-link" selector="span.comment-date-link">
						<a selector="span.comment-date-link a" href="#">Feb 15, 2009 at 8:49 am</a>
					</span> | 
					<span class="comment-reply-link" selector="span.comment-reply-link">
						<a selector="span.comment-reply-link a" href='#'>Reply</a>
					</span> | 
					<span class="comment-edit-link" selector="span.comment-edit-link">
						<a selector="span.comment-edit-link a" href="#">Edit</a>
					</span> | 
					<span class="comment-delete-link" selector="span.comment-delete-link">
						<a selector="span.comment-delete-link a" href="#">Delete</a>
					</span> | 
					<span class="comment-spam-link" selector="span.comment-spam-link">
						<a selector="span.comment-spam-link a" href="#">Spam</a>
					</span>

					<p selector="ul.commentlist p">Direct Reply, from Post Author. Both the LI and the DIV inside the LI hav the class .bypostauthor.</p>
				</div>
			</li>
		</ul>
	</li>
	<li selector="ul.commentlist li" class="comment even thread-odd thread-alt depth-1 clearfix" id="comment-1938">
		<div selector="ul.commentlist li div.bypostauthor" id="div-comment-1938" class="clearfix comment-container bypostauthor">
			<img selector="img.avatar" src="<?php echo THFRURL; ?>images/avatar.gif" class="avatar photo" height="55" width="55" />
			<span class="comment-author-name" selector="span.comment-author-name">
				<a selector="span.comment-author-name a" href='#'>The post author</a> <a selector="span.comment-author-name a" href='#'>Hovered</a>
			</span><br />
			<span class="comment-date-link" selector="span.comment-date-link">
				<a selector="span.comment-date-link a" href="#">Feb 15, 2009 at 8:49 am</a>
			</span> | 
			<span class="comment-reply-link" selector="span.comment-reply-link">
				<a selector="span.comment-reply-link a" href='#'>Reply</a>
			</span> | 
			<span class="comment-edit-link" selector="span.comment-edit-link">
				<a selector="span.comment-edit-link a" href="#">Edit</a>
			</span> | 
			<span class="comment-delete-link" selector="span.comment-delete-link">
				<a selector="span.comment-delete-link a" href="#">Delete</a>
			</span> | 
			<span class="comment-spam-link" selector="span.comment-spam-link">
				<a selector="span.comment-spam-link a" href="#">Spam</a>
			</span>
				
			<p selector="ul.commentlist p">
				<strong>ODD Thread</strong>. From Post Author, not a direct reply like the one above. Vivamus arcu augue, eleifend sed varius dignissim, facilisis in augue. Duis purus dui, tincidunt id ullamcorper vitae, tristique et risus. Mauris feugiat pulvinar gravida. Nunc gravida sagittis mi, luctus condimentum justo euismod id.
			</p>
		</div>
	</li>
	<li selector="ul.commentlist li.thread-even" class="comment odd alt thread-even depth-1 clearfix" id="comment-1939">
		<div selector="ul.commentlist li.thread-even div.comment-container" id="div-comment-1938" class="clearfix comment-container">
			<img selector="img.avatar" src="<?php echo THFRURL; ?>images/avatar.gif" class="avatar photo" height="55" width="55" />
			<span class="comment-author-name" selector="span.comment-author-name">
				Comment author, not linked</a>
			</span><br />
			<span class="comment-date-link" selector="span.comment-date-link">
				<a selector="span.comment-date-link a" href="#">Feb 15, 2009 at 8:49 am</a>
			</span> | 
			<span class="comment-reply-link" selector="span.comment-reply-link">
				<a selector="span.comment-reply-link a" href='#'>Reply</a>
			</span> | 
			<span class="comment-edit-link" selector="span.comment-edit-link">
				<a selector="span.comment-edit-link a" href="#">Edit</a>
			</span> | 
			<span class="comment-delete-link" selector="span.comment-delete-link">
				<a selector="span.comment-delete-link a" href="#">Delete</a>
			</span> | 
			<span class="comment-spam-link" selector="span.comment-spam-link">
				<a selector="span.comment-spam-link a" href="#">Spam</a>
			</span>
				
			<p selector="ul.commentlist p"><strong>EVEN Thread</strong>. Vivamus arcu augue, eleifend sed varius dignissim, facilisis in augue. Duis purus dui, tincidunt id ullamcorper vitae, tristique et risus. Mauris feugiat pulvinar gravida. Nunc gravida sagittis mi, luctus condimentum justo euismod id.</p>
		</div>
	</li>
	<li selector="ul.commentlist li" class="comment odd alt thread-odd depth-1 clearfix" id="comment-1939">
		<div selector="ul.commentlist li div.comment-container" id="div-comment-1938" class="clearfix comment-container">
			<img selector="img.avatar" src="<?php echo THFRURL; ?>images/avatar.gif" class="avatar photo" height="55" width="55" />
			<span class="comment-author-name" selector="span.comment-author-name">
				<a selector="span.comment-author-name a" href='#'>Comment author</a> <a class="hover" selector="span.comment-author-name a.hover" href='#'>Hovered</a>
			</span><br />
			<span class="comment-date-link" selector="span.comment-date-link">
				<a selector="span.comment-date-link a" href="#">Feb 15, 2009 at 8:49 am</a>
			</span> | 
			<span class="comment-reply-link" selector="span.comment-reply-link">
				<a selector="span.comment-reply-link a" href='#'>Reply</a>
			</span> | 
			<span class="comment-edit-link" selector="span.comment-edit-link">
				<a selector="span.comment-edit-link a" href="#">Edit</a>
			</span> | 
			<span class="comment-delete-link" selector="span.comment-delete-link">
				<a selector="span.comment-delete-link a" href="#">Delete</a>
			</span> | 
			<span class="comment-spam-link" selector="span.comment-spam-link">
				<a selector="span.comment-spam-link a" href="#">Spam</a>
			</span>
				
			<p selector="ul.commentlist p"><strong>ODD Thread</strong>. Vivamus arcu augue, eleifend sed varius dignissim, facilisis in augue. Duis purus dui, tincidunt id ullamcorper vitae, tristique et risus. Mauris feugiat pulvinar gravida. Nunc gravida sagittis mi, luctus condimentum justo euismod id.</p>
		</div>
	</li>
	<li selector="ul.commentlist li.thread-even" class="comment odd alt thread-even depth-1 clearfix" id="comment-1939">
		<div selector="ul.commentlist li.thread-odd div.comment-container" id="div-comment-1938" class="clearfix comment-container">
			<img selector="img.avatar" src="<?php echo THFRURL; ?>images/avatar.gif" class="avatar photo" height="55" width="55" />
			<span class="comment-author-name" selector="span.comment-author-name">
				<a selector="span.comment-author-name a" href='#'>Comment author</a> <a class="hover" selector="span.comment-author-name a.hover" href='#'>Hovered</a>
			</span><br />
			<span class="comment-date-link" selector="span.comment-date-link">
				<a selector="span.comment-date-link a" href="#">Feb 15, 2009 at 8:49 am</a>
			</span> | 
			<span class="comment-reply-link" selector="span.comment-reply-link">
				<a selector="span.comment-reply-link a" href='#'>Reply</a>
			</span> | 
			<span class="comment-edit-link" selector="span.comment-edit-link">
				<a selector="span.comment-edit-link a" href="#">Edit</a>
			</span> | 
			<span class="comment-delete-link" selector="span.comment-delete-link">
				<a selector="span.comment-delete-link a" href="#">Delete</a>
			</span> | 
			<span class="comment-spam-link" selector="span.comment-spam-link">
				<a selector="span.comment-spam-link a" href="#">Spam</a>
			</span>
				
			<p selector="ul.commentlist p"><strong>EVEN Thread</strong>. Vivamus arcu augue, eleifend sed varius dignissim, facilisis in augue. Duis purus dui, tincidunt id ullamcorper vitae, tristique et risus. Mauris feugiat pulvinar gravida. Nunc gravida sagittis mi, luctus condimentum justo euismod id.</p>
		</div>
	</li>
</ul>
<!-- / Comment List -->

<div class="commentnav" id="commentnav2" selector="div#commentnav2">
	<a class="prev page-numbers" href="#" selector="div#commentnav2 a.prev">&laquo; Older Comments</a>
	<a class="page-numbers" href="#" selector="div#commentnav2 a.page-numbers">1</a>
	<a class="page-numbers" href="#" selector="div#commentnav2 a.page-numbers">2</a>
	<a class="page-numbers" href="#" selector="div#commentnav2 a.page-numbers">3</a>
	<span class="page-numbers current" selector="div#commentnav2 span.current">4</span>
	<a class="next page-numbers" href="#" selector="div#commentnav2 a.next">Newer Comments &raquo;</a>
</div>

<!-- Comment Form -->
<div selector="div#respond" id="respond">
	<a name="commentform"></a><!-- named anchor for skip links -->
	<h3 selector="h3.reply" class="reply">
		Leave a Reply
	</h3>
	<div selector="div#cancel-comment-reply" id="cancel-comment-reply">
		<a selector="a#cancel-comment-reply-link" href="#" id="cancel-comment-reply-link">Click here to cancel reply</a>
	</div>
	<form selector="form#commentform" action="" method="post" id="commentform">
		<p selector="form#commentform p">
			<input selector="form#commentform input" class="text author" type="text" name="author" id="author-input" value="" size="30" tabindex="1" />&nbsp;
			<label selector="form#commentform label" for="author"> <strong>Name</strong> (required)</label>
		</p>
		<p selector="form#commentform p">
			<input selector="input#email-input" class="text email" type="text" name="email" id="email-input" value="" size="30" tabindex="2" />&nbsp;
			<label selector="label#email-label" id="email-label" for="email"> <strong>Mail</strong> (will not be published) (required)</label>
		</p>
		<p selector="form#commentform p">
			<input selector="input#url-input" class="text url" type="text" name="url" id="url-input" value="" size="30" tabindex="3" />&nbsp;
			<label selector="label#url-label" id="url-label" for="url">Website</label>
		</p>
		<p selector="p.thesetags" class="thesetags clearfix">
			You can use these HTML tags:
		</p>
		<p selector="p.xhtml-tags" class="xhtml-tags">
				<code selector="p.xhtml-tags code">
					&lt;a href="" title=""&gt; 
					&lt;abbr title=""&gt; 
					&lt;acronym title=""&gt; 
					&lt;b&gt; 
					&lt;blockquote cite=""&gt; 
					&lt;cite&gt; 
					&lt;code&gt; 
					&lt;del datetime=""&gt; 
					&lt;em&gt; 
					&lt;i&gt; 
					&lt;q cite=""&gt; 
					&lt;strike&gt; 
					&lt;strong&gt; 
				</code>
		</p>
		<p selector="form#commentform p">
			<textarea selector="textarea#comment-textarea" name="comment" id="comment-textarea" rows="10" cols="60" tabindex="4"></textarea>
		</p>
		<p selector="form#commentform p">
			<input selector="input#comment-submit" name="submit" type="submit" class="button" id="comment-submit" tabindex="5" value="Submit Comment" />
		</p>
	</form>
</div><!-- / respond -->
<!-- / Comment Form -->

</div><!-- / div#div-center -->
</td>
</tr>
</table>

</div>
</div>
</div>
</div>

