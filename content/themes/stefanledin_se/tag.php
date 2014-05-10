<?php get_header(); ?>
	<div class="row">
		<section role="main" class="col-xs-12 col-sm-10 col-md-9">
			<header>
				<h1 class="tag-heading"><small>Tag: <?= single_tag_title() ?></small></h1>
			</header>
			<?php get_template_part( 'loop', 'post' ); ?>
		</section>
		<aside class="small col-xs-12 col-sm-2 col-md-3">
			<?php get_sidebar( 'standard' ); ?>
		</aside>
	</div><!-- .row -->
<?php get_footer(); ?>