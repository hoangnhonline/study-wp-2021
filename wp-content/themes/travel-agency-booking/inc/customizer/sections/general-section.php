<?php
/**
 * General Settings
 *
 * @package travel_agency_booking
 */


add_action( 'customize_register', 'travel_agency_booking_customize_general_option' );

function travel_agency_booking_customize_general_option( $wp_customize ) {

    $wp_customize->add_section( 'travel_agency_booking_general_section', array(
        'title'         => esc_html__( 'General Options', 'travel-agency-booking' ),
        'description'   => esc_html__( 'General Options', 'travel-agency-booking' ),
        'panel'         => '',
        'priority'      => 9,
    ) );

    $wp_customize->add_setting( 'general_section_display_option', array(
        'sanitize_callback'     =>  'travel_agency_booking_sanitize_checkbox',
        'default'               =>  true
    ) );
            
    $wp_customize->add_control( new Travel_Agency_Booking_Toggle_Control( $wp_customize, 'general_section_display_option', array(
        'label' => esc_html__( 'Hide / Show Header Search','travel-agency-booking' ),
        'section' => 'travel_agency_booking_general_section',
        'settings' => 'general_section_display_option',
        'type'=> 'toggle',
    ) ) );

    $wp_customize->add_setting( 'travel_agency_booking_contact_number', array(   
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'travel_agency_booking_contact_number', array(
        'label' => esc_html__( 'Contact Number', 'travel-agency-booking' ),
        'section' => 'travel_agency_booking_general_section',
        'settings' => 'travel_agency_booking_contact_number',
        'type'=> 'text',
    ) );

    $wp_customize->selective_refresh->add_partial( 'travel_agency_booking_contact_number', array(
	    'selector' => '.phone-email .phone',
	) );

    $wp_customize->add_setting( 'travel_agency_booking_email_address', array( 
        'transport' => 'postMessage',  
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'travel_agency_booking_email_address', array(
        'label' => esc_html__( 'Email Address', 'travel-agency-booking' ),
        'section' => 'travel_agency_booking_general_section',
        'settings' => 'travel_agency_booking_email_address',
        'type'=> 'text',
    ) );

    $wp_customize->selective_refresh->add_partial( 'travel_agency_booking_email_address', array(
	    'selector' => '.phone-email .email',
	) );
    
    $wp_customize->add_setting( new Travel_Agency_Booking_Repeater_Setting( $wp_customize, 'travel_agency_booking_social_media', array(
        'sanitize_callback' => array( 'Travel_Agency_Booking_Repeater_Setting', 'sanitize_repeater_setting' ),
    ) ) );

    $wp_customize->add_control( new Travel_Agency_Booking_Control_Repeater( $wp_customize, 'travel_agency_booking_social_media', array(
        'section' => 'travel_agency_booking_general_section',
        'settings'    => 'travel_agency_booking_social_media',
        'label'   => esc_html__( 'Social Media', 'travel-agency-booking' ),
        'row_label' => array(
            'type'  => 'field',
            'value' => esc_html__( 'Social Media', 'travel-agency-booking' ),
            'field' => 'social_media_repeater_class',
        ), 
        'fields' => array(
            'social_media_repeater_class' => array(
                'type'        => 'select',
                'label'       => esc_html__( 'Select Social Media', 'travel-agency-booking' ),
                'default'     => 'facebook',
                'choices'   => travel_agency_booking_social_media()
            ),
            'social_media_link' => array(
                'type'      => 'url',
                'label'     => esc_html__( 'Social Media Links', 'travel-agency-booking' ),
            ),          
        ),
                               
    ) ) );

    $wp_customize->selective_refresh->add_partial( 'travel_agency_booking_social_media', array(
        'selector'        => '.social-icons',
        'render_callback' => '',
    ) );
}