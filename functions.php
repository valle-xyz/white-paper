<?php

add_theme_support( 'title-tag' );

require_all_files_of_directory('/functions');
require_all_files_of_directory('/helpers');
require_all_files_of_directory('/templates/advanced_custom_fields');











/*****************************
******** Functions ***********
*****************************/

function require_all_files_of_directory( $directory ) {
	$files = glob(dirname(__FILE__) . $directory . '/*.php');

	foreach ($files as $file) {
		require($file);
	}
}

?>
