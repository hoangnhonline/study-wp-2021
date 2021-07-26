<?php
/**
 * Trips Settings
 *
 * @package travel_agency_booking
 */

if( class_exists( 'Wp_Travel_Engine' ) ) : 
    add_action( 'customize_register', 'travel_agency_booking_customize_register_best_tours_section' );
endif;

function travel_agency_booking_customize_register_best_tours_section( $wp_customize ) {
    
    $wp_customize->add_section( 'travel_agency_booking_best_tours_sections', array(
        'title'          => esc_html__( 'Tour Packages', 'travel-agency-booking' ),
        'description'    => esc_html__( 'Tour Packages :', 'travel-agency-booking' ),
        'panel'          => 'travel_agency_booking_homepage_panel',
        'priority'       => 160,
    ) );

    $wp_customize->add_setting( 'best_tours_display_option', array(
        'sanitize_callback'     =>  'travel_tour_sanitize_checkbox',
        'default'               =>  true
    ) );

    $wp_customize->add_control( new Travel_Agency_Booking_Toggle_Control( $wp_customize, 'best_tours_display_option', array(
        'label' => esc_html__( 'Hide / Show','travel-agency-booking' ),
        'section' => 'travel_agency_booking_best_tours_sections',
        'settings' => 'best_tours_display_option',
        'type'=> 'toggle',
    ) ) );

    $wp_customize->add_setting( 'best_tours_category', array(
        'capability'  => 'edit_theme_options',        
        'sanitize_callback' => 'travel_agency_booking_sanitize_category',
        'default'     => '',
    ) );

    $wp_customize->add_control( new Travel_Agency_Booking_Customize_Dropdown_Taxonomies_Control( $wp_customize, 'best_tours_category', array(
        'label' => esc_html__( 'Choose category','travel-agency-booking' ),
        'section' => 'travel_agency_booking_best_tours_sections',
        'type'=> 'dropdown-taxonomies',
        'taxonomy'  =>  'trip_types'
    ) ) );

    $wp_customize->add_setting( 'best_tours_title', array(
        'transport' => 'postMessage',
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'best_tours_title', array(
        'label' => esc_html__( 'Title', 'travel-agency-booking' ),
        'section' => 'travel_agency_booking_best_tours_sections',
        'type'=> 'text',
    ) );
    
    $wp_customize->selective_refresh->add_partial( 'best_tours_title', array(
	    'selector' => '.popular-tour h3',
	) );

    $wp_customize->add_setting( 'number_of_best_tours', array(
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  6
    ) );

    $wp_customize->add_control( 'number_of_best_tours', array(
        'label' => esc_html__( 'Number of posts', 'travel-agency-booking' ),
        'section' => 'travel_agency_booking_best_tours_sections',
        'settings' => 'number_of_best_tours',
        'type'    => 'number',
        'description'   =>  'put -1 for unlimited'
    ) );

}