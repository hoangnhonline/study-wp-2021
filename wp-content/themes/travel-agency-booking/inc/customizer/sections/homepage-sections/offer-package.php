<?php
/**
 * About Settings
 *
 * @package travel_agency_booking
 */
add_action( 'customize_register', 'chic_lifestyle_customize_register_about_section' );

function chic_lifestyle_customize_register_about_section( $wp_customize ) {

  $wp_customize->add_section( 'travel_agency_booking_offer_sections', array(
    'title'          => esc_html__( 'Offers & Special Packages', 'travel-agency-booking' ),
    'description'    => esc_html__( 'Offers & Special Packages :', 'travel-agency-booking' ),
    'panel'          => 'travel_agency_booking_homepage_panel',
  ) );

  $wp_customize->add_setting( 'offer_package_display_option', array(
      'sanitize_callback'     =>  'travel_agency_booking_sanitize_checkbox',
      'default'               =>  true
  ) );

  $wp_customize->add_control( new Travel_Agency_Booking_Toggle_Control( $wp_customize, 'offer_package_display_option', array(
      'label' => esc_html__( 'Hide / Show','travel-agency-booking' ),
      'section' => 'travel_agency_booking_offer_sections',
      'settings' => 'offer_package_display_option',
      'type'=> 'toggle',
  ) ) );

  $wp_customize->selective_refresh->add_partial( 'offer_package_display_option', array(
    'selector' => '.timer-content-block .title',
  ) ); 

  $wp_customize->add_setting( 'select_trip_posttype', array(
    'capability'  => 'edit_theme_options',        
    'sanitize_callback' => 'sanitize_text_field',
    'default'     => '',
    ) );

    $wp_customize->add_control( new Travel_Agency_Booking_Dropdown_Posttype( $wp_customize, 'select_trip_posttype', array(
        'label' => esc_html__( 'Choose category','travel-agency-booking' ),
        'section' => 'travel_agency_booking_offer_sections',
        'settings' => 'select_trip_posttype',
        'posttype'  =>  'trip'
    ) ) );

}