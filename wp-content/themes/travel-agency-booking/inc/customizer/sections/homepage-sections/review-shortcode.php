<?php

/**
 * shortcode for review section Settings
 *
 * @package travel_agency_booking
 */

add_action( 'customize_register', 'travel_agency_booking_shortcode_for_review_section' );
function travel_agency_booking_shortcode_for_review_section( $wp_customize ) {

    $wp_customize->add_section( 'travel_agency_booking_shortcode_for_review_section', array(
        'title'          => esc_html__( 'Shortcode for Review', 'travel-agency-booking' ),
        'panel'          => 'travel_agency_booking_homepage_panel',      
    ) );

    $wp_customize->add_setting( 'review_shortcode_show_hide', array(
        'sanitize_callback'     =>  'travel_agency_booking_sanitize_checkbox',
        'default'               =>  true
    ) );

    $wp_customize->add_control( new Travel_Agency_Booking_Toggle_Control( $wp_customize, 'review_shortcode_show_hide', array(
        'label' => esc_html__( 'Hide / Show Review Blocks','travel-agency-booking' ),
        'section' => 'travel_agency_booking_shortcode_for_review_section',
        'settings' => 'review_shortcode_show_hide',
        'type'=> 'toggle',
    ) ) );

    $wp_customize->add_setting( 'shortcode_for_review', array(
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( 'shortcode_for_review', array(
        'label' => esc_html__( 'Add shortcode to display review from  Tripadvisor, Hotels.com, Booking.com and more', 'travel-agency-booking' ),
        'section' => 'travel_agency_booking_shortcode_for_review_section',
        'settings' => 'shortcode_for_review',
        'type'=> 'textarea',
    ) );
    $wp_customize->selective_refresh->add_partial( 'shortcode_for_review', array(
        'selector' => '.shortcode-section > .container',
      ) ); 

}
