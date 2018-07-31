<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title(); ?></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <link rel="shortcut icon" href="">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Playfair+Display" rel="stylesheet">
        <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
        <?php if ( is_singular() && get_option('thread_comments') ) wp_enqueue_script('comment-reply'); ?>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="wrapper">
                <nav>
                    <div class="navwrap">
                    <a href="#">Read</a>
                    <a href="#">About</a>
                    <a class="special" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="https://i.imgur.com/djDLZz7.png"  style="display: block;" alt="Logo">
                    </a>
                    <a href="#">Contact</a>
                    <a href="#">Resume</a>
                    </div>
                </nav>
