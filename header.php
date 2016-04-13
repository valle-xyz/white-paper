<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
		"http://www.w3.org/TR/html4/strict.dtd" >
<html <?php language_attributes(); ?>



<head>
	<?php wp_head(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="content-language" content="de-de" />
	<link rel="pingback" href="<?php echo get_template_directory_uri(); ?>/<?php bloginfo( 'pingback_url' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body <?php body_class(  ); ?>> 


<?php get_sidebar(); ?>
