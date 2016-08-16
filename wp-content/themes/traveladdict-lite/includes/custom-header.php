<?php
// Custom Header
if( !function_exists( 'traveladdict_lite_custom_header_setup' ) ) {
	remove_action( 'after_setup_theme', 'amadeus_custom_header_setup' );
	function traveladdict_lite_custom_header_setup() {
		add_theme_support( 'custom-header', apply_filters( 'amadeus_custom_header_args', array(
			'default-image'				=> get_stylesheet_directory_uri() . '/assets/images/image2.jpg',
			'default-text-color'		=> '000000',
			'width'						=> 1920,
			'height'					=> 468,
			'flex-height'				=> true,
			'wp-head-callback'			=> 'traveladdicted_lite_header_style',
			'admin-head-callback'		=> 'amadeus_admin_header_style',
			'admin-preview-callback'	=> 'amadeus_admin_header_image',
		) ) );
	}
	add_action( 'after_setup_theme', 'traveladdict_lite_custom_header_setup' );
}

if( !function_exists( 'traveladdicted_lite_header_style' ) ) {
	function traveladdicted_lite_header_style() {
		if( get_header_image() ) {
			$output = '<style type="text/css">';
				$output .= '.header-image {background: url('. get_header_image() .'); background-position: center top; background-attachment: fixed; background-size: cover;}';
			$output .= '</style>';

			echo $output;
		}
	}
}