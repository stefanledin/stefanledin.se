<section class="tags">
	<h4>Tags</h4>
	<ul class="tags-list">
	<?php
	$tags = get_tags();
	$tagOutput = '';
	foreach ($tags as $tag) {
		$tagOutput .= '<li><a href="'.get_tag_link($tag->term_id).'">'.$tag->name.' ('.$tag->count.')</a></li>';
	}
	echo $tagOutput;
	?>
	</ul>
</section>
<section class="contact">
	<h4>For stalkers</h4>
	<ul>
		<li>Twitter: <a href="http://twitter.com/stefanledin">@stefanledin</a></li>
		<li>GitHub: <a href="https://github.com/stefanledin">stefanledin</a></li>
		<li>LinkedIn: <a href="https://www.linkedin.com/pub/stefan-ledin/34/973/6ba">Public profile</a></li>
		<li>Mail: info[at]stefanledin.se</li>
	</ul>
</section>