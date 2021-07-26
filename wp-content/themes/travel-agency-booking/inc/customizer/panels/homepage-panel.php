<?php
/**
 * Homepage Settings
 *
 * @package travel_agency_booking
 */

add_action( 'customize_register', 'travel_agency_booking_customize_register_homepage_panel' );

function travel_agency_booking_customize_register_homepage_panel( $wp_customize ) {
	$wp_customize->add_panel( 'travel_agency_booking_homepage_panel', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Travel Booking Options', 'travel-agency-booking' ),
	    'description' => esc_html__( 'Travel Booking Options', 'travel-agency-booking' ),
	) );
}