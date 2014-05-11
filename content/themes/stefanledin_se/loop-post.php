<?php if (have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<article id="<?php the_id();?>" <?php post_class(); ?>>
			<header>
				<h1 class="post-title">
					<?php if ( !is_single() ) : ?>
					<a href="<?php the_permalink();?>">
					<?php endif; ?>
						<?php the_title();?>
					<?php if ( !is_single() ) : ?>
					</a>
					<?php endif; ?>
				</h1>
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
	<ul class="pager">
		<li class="previous"><?php previous_posts_link(); ?></li>
		<li class="next"><?php next_posts_link(); ?></li>
	</ul>
<?php endif; ?>