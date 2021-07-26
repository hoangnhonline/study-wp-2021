<?php
/**
 * Banner Settings
 *
 * @package travel_agency_booking
 */
add_action( 'customize_register', 'travel_agency_booking_customize_banner_section' );

function travel_agency_booking_customize_banner_section( $wp_customize ) {

    $wp_customize->get_section( 'header_image' )->panel = "travel_agency_booking_homepage_panel";
    $wp_customize->get_section( 'header_image' )->title = esc_html__( "Banner Section", 'travel-agency-booking' );

    $wp_customize->add_setting( 'banner_section_display_option', array(
        'sanitize_callback'     =>  'travel_agency_booking_sanitize_checkbox',
        'default'               =>  true
    ) );

    $wp_customize->add_control( new Travel_Agency_Booking_Toggle_Control( $wp_customize, 'banner_section_display_option', array(
        'label' => esc_html__( 'Hide / Show','travel-agency-booking' ),
        'section' => 'header_image',
        'settings' => 'banner_section_display_option',
        'type'=> 'toggle',
        'priority'  =>  1
    ) ) );

    $wp_customize->add_setting( 'banner_section_title', array(
        'transport' => 'postMessage',
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'banner_section_title', array(
        'label' => esc_html__( 'Banner Title','travel-agency-booking' ),
        'section' => 'header_image',
        'settings' => 'banner_section_title',
        'type'=> 'text',
        'priority'  =>  2
    ) );

    $wp_customize->selective_refresh->add_partial( 'banner_section_title', array(
	    'selector' => '.banner-holder h1',
	) );

    $wp_customize->add_setting( 'banner_section_description', array(
        'transport' => 'postMessage',
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'banner_section_description', array(
        'label' => esc_html__( 'Description','travel-agency-booking' ),
        'section' => 'header_image',
        'settings' => 'banner_section_description',
        'type'=> 'textarea',
        'priority'  =>  3
    ) );

    $wp_customize->selective_refresh->add_partial( 'banner_section_description', array(
	    'selector' => '.banner-holder p',
	) );

    $wp_customize->add_setting( 'banner_section_cta_label', array(
        'transport' => 'postMessage',
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'banner_section_cta_label', array(
        'label' => esc_html__( 'CTA Label','travel-agency-booking' ),
        'section' => 'header_image',
        'settings' => 'banner_section_cta_label',
        'type'=> 'text',
        'priority'  =>  4
    ) );

    $wp_customize->selective_refresh->add_partial( 'banner_section_cta_label', array(
	    'selector' => '.banner-holder .btn',
	) );

    $wp_customize->add_setting( 'banner_section_cta_link', array(
        'sanitize_callback'     =>  'esc_url_raw',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'banner_section_cta_link', array(
        'label' => esc_html__( 'CTA Link','travel-agency-booking' ),
        'section' => 'header_image',
        'settings' => 'banner_section_cta_link',
        'type'=> 'url',
        'priority'  =>  5
    ) );

}