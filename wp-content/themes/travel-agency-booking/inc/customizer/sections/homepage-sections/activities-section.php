<?php
/**
 * Activities Settings
 *
 * @package travel_agency_booking
 */

if( class_exists( 'Wp_Travel_Engine' ) ) : 
    add_action( 'customize_register', 'travel_agency_booking_customize_register_recommended_section' );
endif;

function travel_agency_booking_customize_register_recommended_section( $wp_customize ) {
    
	$wp_customize->add_section( 'travel_agency_booking_activities_sections', array(
	    'title'          => esc_html__( 'Activities', 'travel-agency-booking' ),
	    'description'    => esc_html__( 'Activities :', 'travel-agency-booking' ),
	    'panel'          => 'travel_agency_booking_homepage_panel',
	    'priority'       => 160,
	) );

    $wp_customize->add_setting( 'recommended_activities_display_option', array(
        'sanitize_callback'     =>  'travel_agency_booking_sanitize_checkbox',
        'default'               =>  true
    ) );

    $wp_customize->add_control( new Travel_Agency_Booking_Toggle_Control( $wp_customize, 'recommended_activities_display_option', array(
        'label' => esc_html__( 'Hide / Show','travel-agency-booking' ),
        'section' => 'travel_agency_booking_activities_sections',
        'settings' => 'recommended_activities_display_option',
        'type'=> 'toggle',
    ) ) );

    $wp_customize->add_setting( 'recommended_activities_title', array(
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'recommended_activities_title', array(
        'label' => esc_html__( 'Title', 'travel-agency-booking' ),
        'section' => 'travel_agency_booking_activities_sections',
        'settings' => 'recommended_activities_title',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'number_of_recommended_activities', array(
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  4
    ) );

    $wp_customize->add_control( 'number_of_recommended_activities', array(
        'label' => esc_html__( 'Number of posts', 'travel-agency-booking' ),
        'section' => 'travel_agency_booking_activities_sections',
        'settings' => 'number_of_recommended_activities',
        'type'=> 'text',
        'description'   =>  'put -1 for unlimited'
    ) );


}