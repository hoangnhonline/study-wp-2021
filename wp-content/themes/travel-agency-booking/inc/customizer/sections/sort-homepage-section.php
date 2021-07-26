<?php
/**
 * Rearrange Sections
 *
 * @package travel_agency_booking
 */
add_action( 'customize_register', 'travel_agency_booking_sort_homepage_sections' );

function travel_agency_booking_sort_homepage_sections( $wp_customize ) {

	$wp_customize->add_section( 'travel_agency_booking_sort_homepage_sections', array(
	    'title'          => esc_html__( 'Rearrange Home Sections', 'travel-agency-booking' ),
	    'description'    => esc_html__( 'Rearrange Home Sections', 'travel-agency-booking' ),
	    'panel'          => '',
	    'priority'       => 10,
	) );

	if( class_exists( 'Wp_Travel_Engine' ) ) :
		$default = array( 'info-sections', 'destination-sections', 'offer-sections', 'trip-sections', 'cta-sections', 'blog-sections' );
		$choices = array(		
			'info-sections' => esc_html__( 'Info Section', 'travel-agency-booking' ),
			'destination-sections' => esc_html__( 'Destination Section', 'travel-agency-booking' ),
			'activities-sections' => esc_html__( 'Activities Section', 'travel-agency-booking' ),
			'offer-sections' => esc_html__( 'Offer Package Section', 'travel-agency-booking' ),
			'trip-sections' => esc_html__( 'Popular Tour Section', 'travel-agency-booking' ),
			'cta-sections' => esc_html__( 'Cta Section', 'travel-agency-booking' ),
			'shortcode-for-review-sections' => esc_html__( 'Shortcode For Review Section', 'travel-agency-booking' ),
			'blog-sections' => esc_html__( 'Blog Section', 'travel-agency-booking' ),
		);
	else :
		$default = array( 'info-sections', 'cta-sections', 'blog-sections' );
		$choices = array(			
			'info-sections' => esc_html__( 'Info Section', 'travel-agency-booking' ),
			'cta-sections' => esc_html__( 'Cta Section', 'travel-agency-booking' ),
			'shortcode-for-review-sections' => esc_html__( 'Shortcode For Review Section', 'travel-agency-booking' ),
			'blog-sections' => esc_html__( 'Blog Section', 'travel-agency-booking' ),
		);
	endif;

	$wp_customize->add_setting( 'travel_agency_booking_sort_homepage', array(
        'capability'  => 'edit_theme_options',
        'sanitize_callback'	=> 'travel_agency_booking_sanitize_array',
        'default'     => $default
    ) );

    $wp_customize->add_control( new Travel_Agency_Booking_Control_Sortable( $wp_customize, 'travel_agency_booking_sort_homepage', array(
        'label' => esc_html__( 'Drag and Drop Sections to rearrange.', 'travel-agency-booking' ),
        'section' => 'travel_agency_booking_sort_homepage_sections',
        'settings' => 'travel_agency_booking_sort_homepage',
        'type'=> 'sortable',
        'choices'     => $choices
    ) ) );

}