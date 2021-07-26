<?php

/**
 * Colors and Fonts Settings
 *
 * @package travel_agency_booking
 */
add_action( 'customize_register', 'travel_agency_booking_customize_colors' );
function travel_agency_booking_customize_colors( $wp_customize )
{
    $wp_customize->remove_control( 'header_textcolor' );
    $wp_customize->add_setting( 'more_color_options', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => '',
    ) );
    $wp_customize->add_control( new Travel_Agency_Booking_Custom_Text( $wp_customize, 'more_color_options', array(
        'label'    => esc_html__( 'More color options available in Pro Version.', 'travel-agency-booking' ),
        'section'  => 'colors',
        'settings' => 'more_color_options',
        'type'     => 'customtext',
    ) ) );
}

add_action( 'customize_register', 'travel_agency_booking_customize_font_family' );
function travel_agency_booking_customize_font_family( $wp_customize )
{
    $wp_customize->add_setting( 'font_family', array(
        'capability'        => 'edit_theme_options',
        'default'           => 'Lora',
        'sanitize_callback' => 'travel_agency_booking_sanitize_google_fonts',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'font_family', array(
        'settings' => 'font_family',
        'label'    => esc_html__( 'Choose Font Family For Your Site', 'travel-agency-booking' ),
        'section'  => 'colors',
        'type'     => 'select',
        'choices'  => travel_agency_booking_google_fonts(),
        'priority' => 100,
    ) );
}

add_action( 'customize_register', 'travel_agency_booking_customize_font_size' );
function travel_agency_booking_customize_font_size( $wp_customize )
{
    $wp_customize->add_setting( 'font_size', array(
        'capability'        => 'edit_theme_options',
        'default'           => '16px',
        'sanitize_callback' => 'travel_agency_booking_sanitize_select',
    ) );
    $wp_customize->add_control( 'font_size', array(
        'settings' => 'font_size',
        'label'    => esc_html__( 'Choose Font Size', 'travel-agency-booking' ),
        'section'  => 'colors',
        'type'     => 'select',
        'default'  => '13px',
        'choices'  => array(
        '13px' => '13px',
        '14px' => '14px',
        '15px' => '15px',
        '16px' => '16px',
        '17px' => '17px',
        '18px' => '18px',
    ),
        'priority' => 101,
    ) );
}

add_action( 'customize_register', 'travel_agency_booking_font_weight' );
function travel_agency_booking_font_weight( $wp_customize )
{
    $wp_customize->add_setting( 'travel_agency_booking_font_weight', array(
        'default'           => 400,
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( new Travel_Agency_Booking_Slider_Control( $wp_customize, 'travel_agency_booking_font_weight', array(
        'section'  => 'colors',
        'settings' => 'travel_agency_booking_font_weight',
        'label'    => esc_html__( 'Font Weight', 'travel-agency-booking' ),
        'priority' => 102,
        'choices'  => array(
        'min'  => 100,
        'max'  => 900,
        'step' => 100,
    ),
    ) ) );
}

add_action( 'customize_register', 'travel_agency_booking_line_height' );
function travel_agency_booking_line_height( $wp_customize )
{
    $wp_customize->add_setting( 'travel_agency_booking_line_height', array(
        'default'           => 22,
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( new Travel_Agency_Booking_Slider_Control( $wp_customize, 'travel_agency_booking_line_height', array(
        'section'  => 'colors',
        'settings' => 'travel_agency_booking_line_height',
        'label'    => esc_html__( 'Line Height', 'travel-agency-booking' ),
        'priority' => 102,
        'choices'  => array(
        'min'  => 13,
        'max'  => 53,
        'step' => 1,
    ),
    ) ) );
}

add_action( 'customize_register', 'travel_agency_booking_heading_options' );
function travel_agency_booking_heading_options( $wp_customize )
{
    $wp_customize->add_setting( 'heading_options_text', array(
        'default'           => '',
        'type'              => 'customtext',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( new Travel_Agency_Booking_Custom_Text( $wp_customize, 'heading_options_text', array(
        'label'    => esc_html__( 'Heading Options :', 'travel-agency-booking' ),
        'section'  => 'colors',
        'settings' => 'heading_options_text',
        'priority' => 103,
    ) ) );
}

add_action( 'customize_register', 'travel_agency_booking_heading_font_family' );
function travel_agency_booking_heading_font_family( $wp_customize )
{
    $wp_customize->add_setting( 'heading_font_family', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'travel_agency_booking_sanitize_google_fonts',
        'default'           => 'Montserrat',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'heading_font_family', array(
        'label'    => esc_html__( 'Font Family', 'travel-agency-booking' ),
        'section'  => 'colors',
        'type'     => 'select',
        'choices'  => travel_agency_booking_google_fonts(),
        'priority' => 103,
    ) );
}
