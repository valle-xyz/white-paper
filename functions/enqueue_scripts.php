<?php

// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );'

function swp_enqueue_scripts() {

	// Footer:
	// wp_enqueue_script( 'javascript-file', get_template_directory_uri() . '/js/javascript-file.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'swp_enqueue_scripts' );
