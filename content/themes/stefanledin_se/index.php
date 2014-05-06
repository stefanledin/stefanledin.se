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
					</div>
				</div>
			</header>
			<div class="row">
				<div class="col-xs-12">
					<div role="main">
					<?php if (have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>
							<article id="<?php the_id();?>" <?php post_class(); ?>>
								<header>
									<h1 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
									<div class="metadata small clearfix">
										<time>
											<span class="glyphicon glyphicon-time"></span>
											Posted at: <?php the_time('Y-m-d');?>
										</time>
										<div class="categories">
											<span class="glyphicon glyphicon-folder-open"></span>
											Categories: <?php the_category(', '); ?>
										</div>
										<?php if (get_the_tags()) : ?>
										<div class="tags">
											<span class="glyphicon glyphicon-tags"></span>
											<?php the_tags(); ?>
										</div>
										<?php endif; ?>
									</div>
								</header>
								<div class="post-content">
									<?php the_content('<span class="btn btn-primary">Read more</span>'); ?>
								</div>
							</article>
						<?php endwhile; ?>
					<?php endif; ?>
					</div><!-- div[role="main"]-->
				</div>
			</div><!-- .row -->
		</div><!-- .container-fluid -->
		<?php wp_footer(); ?>
	</body>
</html>