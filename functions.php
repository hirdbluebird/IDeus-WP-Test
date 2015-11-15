<?php 

function ideus_theme_styles() {
	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/main.min.css', array(), true );
	wp_enqueue_style( 'roboto-fonts', 'http://fonts.googleapis.com/css?family=Roboto:400,400italic|Roboto+Slab&subset=latin,cyrillic', array(), true);
}
add_action( 'wp_enqueue_scripts', 'ideus_theme_styles');


?>