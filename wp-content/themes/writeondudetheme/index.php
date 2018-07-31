<?php get_header(); ?>	
	
<div class="container">

<header class="hero">
<div class="image" style="background-image: url(<?php the_post_thumbnail_url('original'); ?>);"></div>

		<div class="featured">
			<h1>Ac turpis egestas maecenas pharetra convallis.</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sagittis egestas justo et vestibulum. Mauris egestas, nunc nec aliquet congue, arcu massa vehicula est, scelerisque mattis metus odio vel nunc. Vivamus a leo sem. Nam in dignissim diam.</p>
			<a href="#">Read on, dude &rarr;</a>
		</div>
	</header>
	<section class="grid">
		<!-- The Loop -->
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="card">
					<span class='tags'><?php the_tags( '', ' | ', '' ); ?></span>
					<div class="image" style="background-image: url(<?php the_post_thumbnail_url('medium'); ?>);"></div>
					<div class="content">
						<h3><?php the_title(); ?></h3>
						<?php the_excerpt(); ?>
					</div>
				</article>
			<?php endwhile; ?>
			<?php else : ?>
				<h1>Not found.</h1>
			<?php endif; ?>
	</section>
	<aside>
		<div class="asideWrapper">
			<img src="https://media.licdn.com/dms/image/C4D03AQE4hrUFFJX06w/profile-displayphoto-shrink_800_800/0?e=1538611200&v=beta&t=z9tzd-byepC0CShX9sY7q0cRrjtVFBOoLgI1VNWgwY0" alt="">
			<h3>Call me Ishmael</h3>
			<p>Just kidding, call me JJ. My name is Julie, but hardly anyone calls me that except for my mom and the police. I’m a product manager and writer currently based in Orange County, California. I am the pizza eating champion (unofficial), and, perhaps more notably, the “inventor” of writer’s block.<br/>
			I enjoy efficient and worthwhile development sprints, learning new technologies, and (hang on, this is where I list all the topics I post about on this blog) cooking, eating, traveling, yoga, and having feelings. Phew! Also, I really enjoy being the best human I can. Write on, dude.
			</p> 
		</div>
	</aside>
	<section class="signup">
		<div id="mc_embed_signup">
			<form action="https://writeondude.us18.list-manage.com/subscribe/post?u=77fc8d7f9230058effe584136&amp;id=28945271da" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<div id="mc_embed_signup_scroll">
				<h2>Enter your email to get the goods, dude</h2>
				<div class="mc-field-group">
				<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
				</label>
				<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
				</div>
				<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
				</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_77fc8d7f9230058effe584136_28945271da" tabindex="-1" value=""></div>
				<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				</div>
			</form>
		</div>
	</section>
	<section class="social">
		<a href="http://instagram.com/pinchejota">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" aria-labelledby="title"
			aria-describedby="desc" role="img" xmlns:xlink="http://www.w3.org/1999/xlink">
			<title>Instagram</title>
			<desc>A solid styled icon from Orion Icon Library.</desc>
			<path class="svg" data-name="layer1"
			d="M8.2 0h47.6A7.989 7.989 0 0 1 64 8.2v47.6a7.989 7.989 0 0 1-8.2 8.2H8.2A7.989 7.989 0 0 1 0 55.8V8.2A7.989 7.989 0 0 1 8.2 0zm38.4 7.1a2.9 2.9 0 0 0-2.9 2.9v6.9a2.9 2.9 0 0 0 2.9 2.9h7.2a2.9 2.9 0 0 0 2.9-2.9V10a2.9 2.9 0 0 0-2.9-2.9zm10.2 20h-5.6a19.758 19.758 0 0 1 .8 5.5c0 10.6-8.9 19.3-19.9 19.3s-19.9-8.6-19.9-19.3a19.758 19.758 0 0 1 .8-5.5H7.1v27a2.476 2.476 0 0 0 2.5 2.5h44.6a2.476 2.476 0 0 0 2.5-2.5l.1-27zm-24.7-7.7a12.723 12.723 0 0 0-12.9 12.5 12.64 12.64 0 0 0 12.9 12.4A12.723 12.723 0 0 0 45 31.8a12.64 12.64 0 0 0-12.9-12.4z"
			fill="#000000"></path>
			</svg>
		</a>
		<a href="https://www.linkedin.com/in/jessupjulie/">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" aria-labelledby="title"
			aria-describedby="desc" role="img" xmlns:xlink="http://www.w3.org/1999/xlink">
			<title>Linkedin</title>
			<desc>A solid styled icon from Orion Icon Library.</desc>
			<path class="svg" data-name="layer1"
			fill="#202020" d="M1.15 21.7h13V61h-13zm46.55-1.3c-5.7 0-9.1 2.1-12.7 6.7v-5.4H22V61h13.1V39.7c0-4.5 2.3-8.9 7.5-8.9s8.3 4.4 8.3 8.8V61H64V38.7c0-15.5-10.5-18.3-16.3-18.3zM7.7 2.6C3.4 2.6 0 5.7 0 9.5s3.4 6.9 7.7 6.9 7.7-3.1 7.7-6.9S12 2.6 7.7 2.6z"></path>
			</svg>
		</a>
		<a href="http://twitter.com/real_jj">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" aria-labelledby="title"
			aria-describedby="desc" role="img" xmlns:xlink="http://www.w3.org/1999/xlink">
			<title>Twitter</title>
			<desc>A solid styled icon from Orion Icon Library.</desc>
			<path class="svg" data-name="layer1"
			d="M64 13.194a23.1 23.1 0 0 1-7.3 2.1 14.119 14.119 0 0 0 5.5-7.2c-1.9 1.2-6.1 2.9-8.2 2.9a13.782 13.782 0 0 0-9.6-4 13.187 13.187 0 0 0-13.2 13.2 13.576 13.576 0 0 0 .3 2.9c-9.9-.3-21.5-5.2-28-13.7a13.206 13.206 0 0 0 4 17.4c-1.5.2-4.4-.1-5.7-1.4-.1 4.6 2.1 10.7 10.2 12.9-1.6.8-4.3.6-5.5.4.4 3.9 5.9 9 11.8 9-2.1 2.4-9.3 6.9-18.3 5.5a39.825 39.825 0 0 0 20.7 5.8 36.8 36.8 0 0 0 37-38.6v-.5a22.861 22.861 0 0 0 6.3-6.7z"
			fill="#202020"></path>
			</svg>
		</a>
	</section>
			</div>
<?php get_footer(); ?>
