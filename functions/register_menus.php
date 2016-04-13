<?php
function register_swp_menus() {
	register_nav_menus(
		array(
			'main-menu' => __( 'Main Menu', 'swp' ),
		)
	);
 }
 add_action( 'init', 'register_swp_menus' );
