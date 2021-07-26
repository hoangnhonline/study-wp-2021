<?php

/**
 * Search Settings
 *
 * @package travel_agency_booking
 */
add_action( 'customize_register', 'travel_agency_booking_customize_search_section' );
function travel_agency_booking_customize_search_section( $wp_customize )
{
    $wp_customize->add_section( 'travel_agency_booking_search_sections', array(
        'title'       => esc_html__( 'Search Box', 'travel-agency-booking' ),
        'description' => esc_html__( 'Search Box :', 'travel-agency-booking' ),
        'panel'       => 'travel_agency_booking_homepage_panel',
        'priority'    => 160,
    ) );
    $wp_customize->add_setting( 'search_section_display_option', array(
        'sanitize_callback' => 'travel_agency_booking_sanitize_checkbox',
        'default'           => true,
    ) );
    $wp_customize->add_control( new travel_agency_booking_Toggle_Control( $wp_customize, 'search_section_display_option', array(
        'label'    => esc_html__( 'Hide / Show default search', 'travel-agency-booking' ),
        'section'  => 'travel_agency_booking_search_sections',
        'settings' => 'search_section_display_option',
        'type'     => 'toggle',
        'priority' => 1,
    ) ) );
}
