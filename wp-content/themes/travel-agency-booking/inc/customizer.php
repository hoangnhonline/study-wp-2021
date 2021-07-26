<?php
/**
 * travel booking Theme Customizer
 *
 * @package travel_agency_booking
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function travel_agency_booking_customize_register( $wp_customize ) {
	

    $wp_customize->get_section( 'title_tagline' )->priority = 3;

    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_control( 'blogname' )->priority = 5;
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_control( 'blogdescription' )->priority = 7;

    $wp_customize->get_section( 'static_front_page' )->priority = 20;
	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'travel_agency_booking_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'travel_agency_booking_customize_partial_blogdescription',
			)
		);
	}

    $wp_customize->add_setting('sitetitle_showhide',
        array(
            'default'           => true,
            'sanitize_callback' => 'travel_agency_booking_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
		'sitetitle_showhide',
		array(
			'section'	  => 'title_tagline',
			'label'		  => __( 'Site Title Show/hide', 'travel-agency-booking' ),
			'description' => __( 'Enable to show Site Title in header.', 'travel-agency-booking' ),
            'type'        => 'checkbox',
            'priority'    => 4
		)		
	);

    $wp_customize->add_setting('tagline_showhide',
        array(
            'default'           => true,
            'sanitize_callback' => 'travel_agency_booking_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
		'tagline_showhide',
		array(
			'section'	  => 'title_tagline',
			'label'		  => __( 'Tagline Show/hide', 'travel-agency-booking' ),
			'description' => __( 'Enable to show Tagline in header.', 'travel-agency-booking' ),
            'type'        => 'checkbox',
            'priority'    => '6'
		)		
	);

	$wp_customize->add_setting( 'site_title_color_option', array(
        'capability'  => 'edit_theme_options',
        'default'     => '#000',
        'transport' => 'postMessage',
        'sanitize_callback' => 'travel_agency_booking_sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_title_color_option', array(
        'label'      => esc_html__( 'Site Title Color', 'travel-agency-booking' ),
        'section'    => 'title_tagline',
        'settings'   => 'site_title_color_option',
    ) ) );

    $wp_customize->add_setting( 'site_title_size', array(
        'default'           => 30,
        'sanitize_callback' => 'absint',
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( new Travel_Agency_Booking_Slider_Control( $wp_customize, 'site_title_size', array(
        'section' => 'title_tagline',
        'settings' => 'site_title_size',
        'label'   => esc_html__( 'Logo Size', 'travel-agency-booking' ),
        'choices'     => array(
            'min'   => 15,
            'max'   => 60,
            'step'  => 1,
        )
    ) ) );

    $wp_customize->add_setting( 'site_identity_font_family', array(
        'transport' => 'postMessage',
        'sanitize_callback' => 'travel_agency_booking_sanitize_google_fonts',
        'default'     => 'Montserrat',
    ) );

    $wp_customize->add_control( 'site_identity_font_family', array(
        'settings'    => 'site_identity_font_family',
        'label'       =>  esc_html__( 'Site Identity Font Family', 'travel-agency-booking' ),
        'section'     => 'title_tagline',
        'type'        => 'select',
        'choices'     => travel_agency_booking_google_fonts(),
    ) );

}
add_action( 'customize_register', 'travel_agency_booking_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function travel_agency_booking_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function travel_agency_booking_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function travel_agency_booking_customize_preview_js() {
	wp_enqueue_script( 'travel-agency-booking-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), TRAVEL_AGENCY_BOOKING_VERSION, true );
}
add_action( 'customize_preview_init', 'travel_agency_booking_customize_preview_js' );
