<?php
/**
 * Popular Destination
 *
 * @package travel_agency_booking
 */

if( class_exists( 'Wp_Travel_Engine' ) ) : 
    add_action( 'customize_register', 'travel_agency_booking_customize_register_popular_destinations_section' );
endif;

function travel_agency_booking_customize_register_popular_destinations_section( $wp_customize ) {
    
	$wp_customize->add_section( 'travel_agency_booking_popualar_destination_sections', array(
	    'title'          => esc_html__( 'Destinations', 'travel-agency-booking' ),
	    'description'    => esc_html__( 'Destinations :', 'travel-agency-booking' ),
	    'panel'          => 'travel_agency_booking_homepage_panel',
	) );

    $wp_customize->add_setting( 'popular_destinations_display_options', array(
        'sanitize_callback'     =>  'travel_agency_booking_sanitize_checkbox',
        'default'               =>  true
    ) );

    $wp_customize->add_control( new Travel_Agency_Booking_Toggle_Control( $wp_customize, 'popular_destinations_display_options', array(
        'label' => esc_html__( 'Hide / Show','travel-agency-booking' ),
        'section' => 'travel_agency_booking_popualar_destination_sections',
        'settings' => 'popular_destinations_display_options',
        'type'=> 'toggle',
    ) ) );

    $wp_customize->add_setting( 'popular_destinations_title', array(
        'transport' => 'postMessage',
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'popular_destinations_title', array(
        'label' => esc_html__( 'Title', 'travel-agency-booking' ),
        'section' => 'travel_agency_booking_popualar_destination_sections',
        'settings' => 'popular_destinations_title',
        'type'=> 'text',
    ) );

    $wp_customize->selective_refresh->add_partial( 'popular_destinations_title', array(
	    'selector' => '.popular-destinations h3',
	) );

    $wp_customize->add_setting( 'number_of_popular_destinations', array(
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  4
    ) );

    $wp_customize->add_control( 'number_of_popular_destinations', array(
        'label' => esc_html__( 'Number of posts', 'travel-agency-booking' ),
        'section' => 'travel_agency_booking_popualar_destination_sections',
        'settings' => 'number_of_popular_destinations',
        'type'=> 'text',
        'description'   =>  'put -1 for unlimited'
    ) );

}