<?php
if ( ! function_exists( 'traveladdict_lite_customizer' ) ) {
	add_action( 'customize_register', 'traveladdict_lite_customizer', 50 );
	function traveladdict_lite_customizer( $wp_customize ) {
		// Remove Setting & Control
		$wp_customize->remove_setting( 'logo_size' );
		$wp_customize->remove_control( 'logo_size' );
		$wp_customize->remove_setting( 'branding_padding' );
		$wp_customize->remove_control( 'branding_padding' );
		$wp_customize->remove_setting( 'header_img_height' );
		$wp_customize->remove_control( 'header_img_height' );
		$wp_customize->remove_setting( 'header_img_height_1024' );
		$wp_customize->remove_control( 'header_img_height_1024' );
		$wp_customize->remove_setting( 'body_size' );
		$wp_customize->remove_control( 'body_size' );
		$wp_customize->remove_setting( 'primary_color' );
		$wp_customize->remove_control( 'primary_color' );
		$wp_customize->remove_setting( 'social_color' );
		$wp_customize->remove_control( 'social_color' );
		$wp_customize->remove_setting( 'body_text_color' );
		$wp_customize->remove_control( 'body_text_color' );
		$wp_customize->remove_setting( 'footer_bg' );
		$wp_customize->remove_control( 'footer_bg' );
		$wp_customize->remove_control( 'site_logo' );
		$wp_customize->remove_setting( 'site_logo' );
		$wp_customize->remove_control( 'site_icon' );
		$wp_customize->remove_setting( 'site_icon' );

		$wp_customize->remove_control( 'site_title_size' );
		$wp_customize->remove_setting( 'site_title_size' );

		$wp_customize->remove_control( 'site_desc_size' );
		$wp_customize->remove_setting( 'site_desc_size' );

		$wp_customize->remove_control( 'body_size' );
		$wp_customize->remove_setting( 'body_size' );

		$wp_customize->remove_control( 'h1_size' );
		$wp_customize->remove_setting( 'h1_size' );

		$wp_customize->remove_control( 'h2_size' );
		$wp_customize->remove_setting( 'h2_size' );

		$wp_customize->remove_control( 'h3_size' );
		$wp_customize->remove_setting( 'h3_size' );

		$wp_customize->remove_control( 'h4_size' );
		$wp_customize->remove_setting( 'h4_size' );

		$wp_customize->remove_control( 'h5_size' );
		$wp_customize->remove_setting( 'h5_size' );

		$wp_customize->remove_setting( 'h6_size' );
		$wp_customize->remove_control( 'h6_size' );


		// Unregister parent controls and re-register them


		// Site title
		$wp_customize->add_setting( 'site_title_size', array(
			'sanitize_callback' => 'absint',
			'default'           => '62',
			'transport'         => 'postMessage',
		) );
		$wp_customize->add_control( 'site_title_size', array(
			'type'        => 'number',
			'priority'    => 17,
			'section'     => 'amadeus_fonts',
			'label'       => __( 'Site title', 'traveladdict-lite' ),
			'input_attrs' => array(
				'min'  => 10,
				'max'  => 90,
				'step' => 1,
			),
		) );
		// Site description
		$wp_customize->add_setting( 'site_desc_size', array(
			'sanitize_callback' => 'absint',
			'default'           => '18',
			'transport'         => 'postMessage',
		) );
		$wp_customize->add_control( 'site_desc_size', array(
			'type'        => 'number',
			'priority'    => 17,
			'section'     => 'amadeus_fonts',
			'label'       => __( 'Site description', 'traveladdict-lite' ),
			'input_attrs' => array(
				'min'  => 10,
				'max'  => 50,
				'step' => 1,

			),
		) );

		//H1 size
		$wp_customize->add_setting( 'h1_size', array(
			'sanitize_callback' => 'absint',
			'default'           => '38',
			'transport'         => 'postMessage',
		) );
		$wp_customize->add_control( 'h1_size', array(
			'type'        => 'number',
			'priority'    => 17,
			'section'     => 'amadeus_fonts',
			'label'       => __( 'H1 font size', 'traveladdict-lite' ),
			'input_attrs' => array(
				'min'  => 10,
				'max'  => 60,
				'step' => 1,
			),
		) );
		//H2 size
		$wp_customize->add_setting( 'h2_size', array(
			'sanitize_callback' => 'absint',
			'default'           => '30',
			'transport'         => 'postMessage',
		) );
		$wp_customize->add_control( 'h2_size', array(
			'type'        => 'number',
			'priority'    => 18,
			'section'     => 'amadeus_fonts',
			'label'       => __( 'H2 font size', 'traveladdict-lite' ),
			'input_attrs' => array(
				'min'  => 10,
				'max'  => 60,
				'step' => 1,
			),
		) );
		//H3 size
		$wp_customize->add_setting( 'h3_size', array(
			'sanitize_callback' => 'absint',
			'default'           => '24',
			'transport'         => 'postMessage',
		) );
		$wp_customize->add_control( 'h3_size', array(
			'type'        => 'number',
			'priority'    => 19,
			'section'     => 'amadeus_fonts',
			'label'       => __( 'H3 font size', 'traveladdict-lite' ),
			'input_attrs' => array(
				'min'  => 10,
				'max'  => 60,
				'step' => 1,
			),
		) );
		//H4 size
		$wp_customize->add_setting( 'h4_size', array(
			'sanitize_callback' => 'absint',
			'default'           => '18',
			'transport'         => 'postMessage',
		) );
		$wp_customize->add_control( 'h4_size', array(
			'type'        => 'number',
			'priority'    => 20,
			'section'     => 'amadeus_fonts',
			'label'       => __( 'H4 font size', 'traveladdict-lite' ),
			'input_attrs' => array(
				'min'  => 10,
				'max'  => 60,
				'step' => 1,
			),
		) );
		//H5 size
		$wp_customize->add_setting( 'h5_size', array(
			'sanitize_callback' => 'absint',
			'default'           => '14',
			'transport'         => 'postMessage',
		) );
		$wp_customize->add_control( 'h5_size', array(
			'type'        => 'number',
			'priority'    => 21,
			'section'     => 'amadeus_fonts',
			'label'       => __( 'H5 font size', 'traveladdict-lite' ),
			'input_attrs' => array(
				'min'  => 10,
				'max'  => 60,
				'step' => 1,

			),
		) );
		//H6 size
		$wp_customize->add_setting( 'h6_size', array(
			'sanitize_callback' => 'absint',
			'default'           => '12',
			'transport'         => 'postMessage',
		) );
		$wp_customize->add_control( 'h6_size', array(
			'type'        => 'number',
			'priority'    => 22,
			'section'     => 'amadeus_fonts',
			'label'       => __( 'H6 font size', 'traveladdict-lite' ),
			'input_attrs' => array(
				'min'  => 10,
				'max'  => 60,
				'step' => 1,

			),
		) );
		//Body
		$wp_customize->add_setting( 'body_size', array(
			'sanitize_callback' => 'absint',
			'default'           => '15',
			'transport'         => 'postMessage',
		) );
		$wp_customize->add_control( 'body_size', array(
			'type'        => 'number',
			'priority'    => 23,
			'section'     => 'amadeus_fonts',
			'label'       => __( 'Body font size', 'traveladdict-lite' ),
			'input_attrs' => array(
				'min'  => 10,
				'max'  => 24,
				'step' => 1,

			),
		) );


		//Body
		$wp_customize->add_setting( 'body_size', array(
				'sanitize_callback' => 'absint',
				'default'           => '15',
				'transport'         => 'postMessage',
			) );
		$wp_customize->add_control( 'body_size', array(
			'type'        => 'number',
			'priority'    => 23,
			'section'     => 'amadeus_fonts',
			'label'       => __( 'Body font size', 'traveladdict-lite' ),
			'input_attrs' => array(
				'min'   => 10,
				'max'   => 24,
				'step'  => 1,
			),
		) );

		// Get Settings
		//$wp_customize->get_setting( 'site_logo' )->default = '';

		// Remove Section
		$wp_customize->remove_section( 'amadeus_menu' );

		// Get Setting: Body Font Name
		$wp_customize->get_setting( 'body_font_name' )->default = 'Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic';

		// Get Setting: Body Font Family
		$wp_customize->get_setting( 'body_font_family' )->default = '"Open Sans", sans-serif';

		// Get Setting: Headings Font Name
		$wp_customize->get_setting( 'headings_font_name' )->default = 'Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic';

		// Get Setting: Headings Font Family
		$wp_customize->get_setting( 'headings_font_family' )->default = '"Open Sans", sans-serif';

		// Logo size
		$wp_customize->add_setting( 'traveladdict_lite_logo_size', array(
			'sanitize_callback' => 'absint',
			'default'           => '468',
			'transport'         => 'postMessage',
		) );
		$wp_customize->add_control( 'traveladdict_lite_logo_size', array(
			'type'        => 'number',
			'priority'    => 12,
			'section'     => 'title_tagline',
			'label'       => __( 'Logo size', 'traveladdict-lite' ),
			'description' => __( 'Max-width for the logo. Default 468px', 'traveladdict-lite' ),
			'input_attrs' => array(
				'min'   => 50,
				'max'   => 600,
				'step'  => 3,
				'style' => 'margin-bottom: 15px; padding: 15px;',
			),
		) );

		// Site branding padding
		$wp_customize->add_setting( 'traveladdict_lite_branding_padding', array(
			'sanitize_callback' => 'absint',
			'default'           => '85',
		) );
		$wp_customize->add_control( 'traveladdict_lite_branding_padding', array(
			'type'        => 'number',
			'priority'    => 14,
			'section'     => 'title_tagline',
			'label'       => __( 'Site branding padding', 'traveladdict-lite' ),
			'description' => __( 'Top&amp;bottom padding for the branding (logo, site title, description). Default: 75px', 'traveladdict-lite' ),
			'input_attrs' => array(
				'min'   => 20,
				'max'   => 200,
				'step'  => 5,
				'style' => 'padding: 15px;',
			),
		) );

		// Header Image Height
		$wp_customize->add_setting( 'traveladdict_lite_header_img_height', array(
			'sanitize_callback' => 'absint',
			'default'           => '468',
		) );
		$wp_customize->add_control( 'traveladdict_lite_header_img_height', array(
			'type'        => 'number',
			'priority'    => 19,
			'section'     => 'header_image',
			'label'       => __( 'Header image height', 'traveladdict-lite' ),
			'input_attrs' => array(
				'min'   => 50,
				'max'   => 650,
				'step'  => 5,
				'style' => 'padding: 15px;',
			),
		) );

		// Body Font Size
		$wp_customize->add_setting( 'traveladdict_lite_body_size', array(
			'sanitize_callback' => 'absint',
			'default'           => '17',
			'transport'         => 'postMessage',
		) );
		$wp_customize->add_control( 'traveladdict_lite_body_size', array(
			'type'        => 'number',
			'priority'    => 23,
			'section'     => 'amadeus_fonts',
			'label'       => __( 'Body font size', 'traveladdict-lite' ),
			'input_attrs' => array(
				'min'   => 10,
				'max'   => 24,
				'step'  => 1,
			),
		) );

		$wp_customize->add_setting( 'traveladdict_lite_footer_bg', array(
			'default'           => '#363636',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'         => 'postMessage',
		) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'traveladdict_lite_footer_bg', array(
			'label'    => __( 'Footer background', 'traveladdict-lite' ),
			'section'  => 'colors',
			'settings' => 'traveladdict_lite_footer_bg',
			'priority' => 23,
		) ) );
	}
}