<?php get_header(); ?>
	<main class="homepage">
		<header class="hero">
			<div class="image">
			</div>
			<div class="featured">
				<h3>Ac turpis egestas maecenas pharetra convallis.</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sagittis egestas justo et vestibulum. Mauris egestas, nunc nec aliquet congue, arcu massa vehicula est, scelerisque mattis metus odio vel nunc. Vivamus a leo sem. Nam in dignissim diam.</p>
				<a href="#">View the whole post</a>
			</div>
		</header>
		<section class="posts">
			
		<div class="grid">
		<!-- The Loop -->
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="card">
					<h1><?php the_title(); ?></h1>
					<a href="<?php the_permalink(); ?>"></a>
					<div class="meta">
					<?php the_content(); ?>
					<?php the_category(); ?>
					<?php the_time('F j, Y') ?>
					</div>
					
				</article>
			<?php endwhile; ?>
			<?php else : ?>
				<h1>Not found.</h1>
			<?php endif; ?>
			</div>
			<aside>
				this is the side
			</aside>
		</section>
	</main>




<?php get_footer(); ?>
