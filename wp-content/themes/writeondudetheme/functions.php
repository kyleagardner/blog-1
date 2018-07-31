<?php add_theme_support( 'post-thumbnails' ); ?> 

<?php add_filter( 'excerpt_length', function($length) {
    return 10;
} ); ?>

<?php function new_excerpt_more($more) {
  return '...<a class="cta" href="' . get_permalink( get_the_ID() ) . '">Keep Reading &rarr;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more'); ?>