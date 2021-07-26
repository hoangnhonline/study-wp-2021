<?php

/**
 * Footer Settings
 *
 * @package travel_agency_booking
 */
add_action( 'customize_register', 'travel_agency_booking_customize_register_footer_section' );
function travel_agency_booking_customize_register_footer_section( $wp_customize )
{
    $wp_customize->add_section( 'travel_agency_booking_footer_section', array(
        'title'    => esc_html__( 'Footer Section', 'travel-agency-booking' ),
        'priority' => 15,
    ) );
}
