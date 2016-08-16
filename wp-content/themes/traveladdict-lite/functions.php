<?php
/**
 *    Setup
 */
if ( ! function_exists( 'traveladdict_lite_setup' ) ) {
	add_action( 'after_setup_theme', 'traveladdict_lite_setup', 300 );
	function traveladdict_lite_setup() {
		// Add Image Size
		add_image_size( 'traveladdict-lite-entry-thumb', 1150, 700, true );

		// Background Color
		add_theme_support( 'custom-background', apply_filters( 'traveladdict_lite_custom_background_args', array(
			'default-color' => '11141d',
			'default-image' => '',
		) ) );
	}
}

/**
 *    Customizer
 */
require_once( trailingslashit( get_stylesheet_directory() ) . 'includes/customizer.php' );

/**
 *    Customizer Styles
 */
require_once( trailingslashit( get_stylesheet_directory() ) . 'includes/styles.php' );

/**
 *    Custom Header
 */
require_once( trailingslashit( get_stylesheet_directory() ) . 'includes/custom-header.php' );

/**
 *    Enqueue Styles
 */
if ( ! function_exists( 'traveladdict_lite_styles' ) ) {
	add_action( 'wp_enqueue_scripts', 'traveladdict_lite_styles', 11 );
	function traveladdict_lite_styles() {
		$body_font_name     = get_theme_mod( 'body_font_name', 'Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' );
		$headings_font_name = get_theme_mod( 'headings_font_name', 'Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' );

		if ( $body_font_name || $headings_font_name ) {
			wp_enqueue_style( 'traveladdict-lite-open-sans', '//fonts.googleapis.com/css?family=' . esc_html( $body_font_name ), array(), '', 'all' );
		} else {
			wp_enqueue_style( 'traveladdict-lite-open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic', array(), '', 'all' );
		}

		wp_enqueue_style( 'amadeus-lite-style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'traveladdict-lite-style', get_stylesheet_directory_uri(), array( 'amadeus-lite-style' ) );
		wp_enqueue_style( 'traveladdict-lite-main', get_stylesheet_directory_uri() . '/assets/css/main.css', array( 'traveladdict-lite-style' ), '1.0.4', 'all' );
	}
}

/**
 *    Enqueue Scripts
 */
if ( ! function_exists( 'traveladdict_lite_enqueue_scripts' ) ) {
	add_action( 'wp_enqueue_scripts', 'traveladdict_lite_enqueue_scripts' );
	function traveladdict_lite_enqueue_scripts() {
		wp_enqueue_script( 'traveladdict-lite-scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array(), '1.0.4', true );
	}
}

/**
 *    Dequeue Scripts
 */
if ( ! function_exists( 'traveladdict_lite_dequeue_scripts' ) ) {
	add_action( 'wp_print_scripts', 'traveladdict_lite_dequeue_scripts', 11 );
	function traveladdict_lite_dequeue_scripts() {
		wp_dequeue_script( 'amadeus-scripts' );
	}
}

/**
 *    Footer Credits
 */
if ( ! function_exists( 'traveladdict_lite_footer_credits' ) ) {
	add_action( 'traveladdict_lite_footer', 'traveladdict_lite_footer_credits' );
	function traveladdict_lite_footer_credits() {
		echo '<a href="' . esc_url( __( 'http://wordpress.org/', 'traveladdict-lite' ) ) . '">';
		printf( __( 'Proudly powered by %s', 'traveladdict-lite' ), 'WordPress' );
		echo '</a>';
		echo '<span class="sep"> | </span>';
		printf( __( 'Theme: %2$s by %1$s.', 'traveladdict-lite' ), '<a href="' . esc_url( 'https://www.machothemes.com' ) . '" rel="designer" target="_blank">MachoThemes</a>', 'TravelAddict Lite' );
	}
}

/**
 * Custom Logo
 *
 */

add_theme_support( 'custom-logo' );

/**
 * Customizer script
 *
 */


function traveladdict_registers() {
	wp_dequeue_script( 'amadeus_customizer_script' );
	wp_enqueue_script( 'traveladdict_customizer_script', get_stylesheet_directory_uri() . '/assets/js/traveladdict_customizer.js', array("jquery"), '20120206', true  );

	wp_localize_script( 'traveladdict_customizer_script', 'amadeusCustomizerObject', array(
		'documentation'	=> __('Documentation', 'traveladdict-lite'),
		'pro'	=> __('View PRO version', 'traveladdict-lite')
	) );
}
add_action( 'customize_controls_enqueue_scripts', 'traveladdict_registers', 20 );