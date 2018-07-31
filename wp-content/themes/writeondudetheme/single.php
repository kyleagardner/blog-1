<?php get_header(); ?>
	<main class="postgrid">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<header class="heroPost" style="background-image: url(<?php the_post_thumbnail_url('original'); ?>);"></header>
		<article class="post">
			<div>
				<div class="title">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			<section class="post-content">
				<main>
					<?php the_content(); ?>
				</main>
			</section>
		</article>
		<?php endwhile; ?>
		<?php else : ?>
			<h1>Not found.</h1>
		<?php endif; ?>
	</main>
<?php get_footer(); ?>