<?php
/**
 * History Museum functions and definitions
 *
 * @package History Museum
 */

if ( ! function_exists( 'history_museum_setup' ) ) :
function history_museum_setup() {
	
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );
			
	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );
	
}
endif; // history_museum_setup
add_action( 'after_setup_theme', 'history_museum_setup' );

function history_museum_scripts() {
	wp_enqueue_style( 'history-museum-basic-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'history_museum_scripts' );

// Block Patterns.
require get_template_directory() . '/block-patterns.php';

require get_parent_theme_file_path( '/inc/dashboard/dashboard.php' );