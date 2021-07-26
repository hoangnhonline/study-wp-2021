<?php
/**
 * Blog Settings
 *
 * @package travel_agency_booking
 */

add_action( 'customize_register', 'travel_agency_booking_customize_register_blog_post' );

function travel_agency_booking_customize_register_blog_post( $wp_customize ) {
	$wp_customize->add_section( 'travel_agency_booking_blog_post_sections', array(
	    'title'          => esc_html__( 'Blog Posts', 'travel-agency-booking' ),
	    'description'    => esc_html__( 'Blog Posts :', 'travel-agency-booking' ),
	    'panel'          => 'travel_agency_booking_homepage_panel',
	    'priority'       => 160,
	) );

    $wp_customize->add_setting( 'blog_post_display_option', array(
      'sanitize_callback'     =>  'travel_agency_booking_sanitize_checkbox',
      'default'               =>  true
    ) );

    $wp_customize->add_control( new Travel_Agency_Booking_Toggle_Control( $wp_customize, 'blog_post_display_option', array(
      'label' => esc_html__( 'Hide / Show','travel-agency-booking' ),
      'section' => 'travel_agency_booking_blog_post_sections',
      'settings' => 'blog_post_display_option',
      'type'=> 'toggle',
    ) ) );

    $wp_customize->add_setting( 'blog_post_category', array(
        'capability'  => 'edit_theme_options',        
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '',
    ) );

    $wp_customize->add_control( new Travel_Agency_Booking_Customize_Dropdown_Taxonomies_Control( $wp_customize, 'blog_post_category', array(
        'label' => esc_html__( 'Choose Category', 'travel-agency-booking' ),
        'section' => 'travel_agency_booking_blog_post_sections',
        'settings' => 'blog_post_category',
        'type'=> 'dropdown-taxonomies',
        'taxonomy'  =>  'category'
    ) ) );

    $wp_customize->add_setting( 'blog_post_section_title', array(
        'transport' => 'postMessage',
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'blog_post_section_title', array(
        'label' => esc_html__( 'Title', 'travel-agency-booking' ),
        'section' => 'travel_agency_booking_blog_post_sections',
        'settings' => 'blog_post_section_title',
        'type'=> 'text',
    ) );

    $wp_customize->selective_refresh->add_partial( 'blog_post_section_title', array(
	    'selector' => '.travel-articles h3',
	) );

    $wp_customize->add_setting( 'number_of_blog_post', array(
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  4
    ) );

    $wp_customize->add_control( 'number_of_blog_post', array(
        'label' => esc_html__( 'Number of posts', 'travel-agency-booking' ),
        'section' => 'travel_agency_booking_blog_post_sections',
        'settings' => 'number_of_blog_post',
        'type'    => 'number',
        'description'   =>  'put -1 for unlimited'
    ) );

}