<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php wp_title(''); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class();?>>
		<div class="container-fluid">
			<header role="banner" class="page-header">
				<div class="row">
					<div class="col-xs-12">
						<h1>{stefan: ledin}<small>.se</small></h1>
						<em>Web developer @ <a href="http://ordbild.se">ordbild.se</a>.</em>
					</div>
				</div>
			</header>
			<div class="row">
				<div role="main" class="col-xs-12 col-sm-10 col-md-9">
				<?php if (have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
						<article id="<?php the_id();?>" <?php post_class(); ?>>
							<header>
								<h1 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
								<div class="metadata small clearfix">
									<time>
										<span class="glyphicon glyphicon-time"></span>
										Posted at: <?php the_time('Y-m-d H.i');?>
									</time>
									<?php if (get_the_tags()) : ?>
									<div class="tags">
										<span class="glyphicon glyphicon-tags"></span>
										<?php the_tags(); ?>
									</div>
									<?php endif; ?>
								</div>
							</header>
							<div class="post-content">
								<?php the_content('<span class="btn btn-sm btn-primary">Read more</span>'); ?>
							</div>
						</article>
					<?php endwhile; ?>
				<?php endif; ?>
				</div>
				<aside class="small col-xs-12 col-sm-2 col-md-3">
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
				</aside>
			</div><!-- .row -->
		</div><!-- .container-fluid -->
		<?php wp_footer(); ?>
		<?php if (ENVIRONMENT == 'production') : ?>
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-28191752-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
		<?php endif; ?>
	</body>
</html>