<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php wp_title(''); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class();?>>
		<header role="banner">
			<div class="row">
				<div class="small-12 columns">
					<h1>Stefan Ledin</h1>
				</div>
			</div>
		</header>
		<div class="row">
			<div class="small-12 columns">
				<?php if (have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
						<article id="<?php the_id();?>" <?php post_class(); ?>>
							<header>
								<h1><?php the_title();?></h1>
							</header>
							<?php the_content(); ?>
						</article>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>