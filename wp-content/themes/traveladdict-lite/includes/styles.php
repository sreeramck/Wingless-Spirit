<?php
/**
 *    Custom Styles
 */
if ( ! function_exists( 'traveladdict_lite_custom_styles' ) ) {
	add_action( 'wp_head', 'traveladdict_lite_custom_styles' );
	function traveladdict_lite_custom_styles() {
		$traveladdict_lite_logo_size         = get_theme_mod( 'traveladdict_lite_logo_size', '468' );
		$traveladdict_lite_branding_padding  = get_theme_mod( 'traveladdict_lite_branding_padding', '85' );
		$traveladdict_lite_header_img_height = get_theme_mod( 'traveladdict_lite_header_img_height', '468' );
		$body_font_family                    = get_theme_mod( 'body_font_family', '"Open Sans", sans-serif' );
		$headings_font_family                = get_theme_mod( 'headings_font_family', '"Open Sans", sans-serif' );
		$traveladdict_lite_body_size         = get_theme_mod( 'traveladdict_lite_body_size', '17' );
		$traveladdict_lite_footer_bg         = get_theme_mod( 'traveladdict_lite_footer_bg', '#363636' );

		$output = '';

		$output .= '<style type="text/css">';
		$output .= ( $traveladdict_lite_logo_size ) ? '.site-logo {max-width: ' . intval( $traveladdict_lite_logo_size ) . 'px !important;}' : '';
		$output .= ( $traveladdict_lite_branding_padding ) ? '.site-branding {padding: ' . intval( $traveladdict_lite_branding_padding ) . 'px 0 !important;}' : '';
		$output .= ( $traveladdict_lite_header_img_height ) ? '.header-image {height: ' . intval( $traveladdict_lite_header_img_height ) . 'px !important;}' : '';
		$output .= ( $body_font_family ) ? 'body {font-family: ' . esc_html( $body_font_family ) . ' !important;}' : '';
		$output .= ( $headings_font_family ) ? 'h1, h2, h3, h4. h5, h6 {font-family: ' . esc_html( $headings_font_family ) . ' !important;}' : '';
		$output .= ( $traveladdict_lite_body_size ) ? 'body {font-size: ' . intval( $traveladdict_lite_body_size ) . 'px;}' : '';
		$output .= ( $traveladdict_lite_footer_bg ) ? '.site-footer, .footer-widget-area {background-color: ' . esc_html( $traveladdict_lite_footer_bg ) . ' !important;}' : '';
		$output .= '</style>';

		echo $output;
	}
}