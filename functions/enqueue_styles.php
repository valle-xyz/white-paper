<?php

// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );'

function swp_enqueue_styles() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'swp_enqueue_styles' );
