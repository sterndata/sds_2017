<?php
add_action( 'wp_enqueue_scripts', 'sds_2017_enqueue_styles' );
function sds_2017_enqueue_styles() {

	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'sds_2017_google_fonts', 'https://fonts.googleapis.com/css?family=Bitter' );

}
/**
 * change the recommended header image size to 600px high
**/

function sds_2017_twentyseventeen_custom_header_args( $args ) {
	$args['height'] = 600;
	return $args;
}
add_filter( 'twentyseventeen_custom_header_args', 'sds_2017_twentyseventeen_custom_header_args' );

/**
 * override the special featured image to be 600 high instead of 1200
**/
function sds_2017_overide_featured_image() {
	add_image_size( 'twentyseventeen-featured-image', 2000, 600, true );
}
add_action( 'after_setup_theme', 'sds_2017_overide_featured_image', 11 );
