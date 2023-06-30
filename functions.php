<?php

add_action('init', function () {
	remove_theme_support('core-block-patterns');
	wp_enqueue_style( 'style', get_stylesheet_uri() );
});

