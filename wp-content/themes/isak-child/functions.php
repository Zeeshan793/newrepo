<?php
if ( ! function_exists( 'isak_child_enqueue_child_styles' ) ) {
	function isak_child_enqueue_child_styles() {
	    // loading parent style
	    wp_register_style(
	      'isak-theme-style',
	      get_template_directory_uri() . '/style.css'
	    );

	    wp_enqueue_style( 'isak-theme-style' );
	    // loading child style
	    wp_register_style(
	      'isak-child-theme-style',
	      get_stylesheet_directory_uri() . '/style.css'
	    );
	    wp_enqueue_style( 'isak-child-theme-style');
	 }
}
add_action( 'wp_enqueue_scripts', 'isak_child_enqueue_child_styles' );

add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
