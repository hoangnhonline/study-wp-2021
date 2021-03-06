<?php
/**
 * Color and Fonts Settings
 *
 * @package travel_agency_booking
 */


add_action( 'customize_register', 'travel_agency_booking_change_colors_panel_title' );


function travel_agency_booking_change_colors_panel_title( $wp_customize)  {
	$wp_customize->get_section('colors')->title = esc_html__( 'Colors and Fonts', 'travel-agency-booking' );
	$wp_customize->get_section('colors')->priority = 10;
}