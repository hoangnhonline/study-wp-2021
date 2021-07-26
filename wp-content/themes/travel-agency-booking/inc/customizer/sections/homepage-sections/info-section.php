<?php

/**
 * info section Settings
 *
 * @package travel_agency_booking
 */

add_action( 'customize_register', 'travel_agency_booking_customize_info_block_options_section' );
function travel_agency_booking_customize_info_block_options_section( $wp_customize ) {

    $wp_customize->add_section( 'travel_agency_booking_info_block_options_section', array(
        'title'          => esc_html__( 'Quick Info', 'travel-agency-booking' ),
        'panel'          => 'travel_agency_booking_homepage_panel',      
    ) );

    $wp_customize->add_setting( 'info_blocks_show_hide', array(
        'sanitize_callback'     =>  'travel_agency_booking_sanitize_checkbox',
        'default'               =>  false
    ) );

    $wp_customize->add_control( new Travel_Agency_Booking_Toggle_Control( $wp_customize, 'info_blocks_show_hide', array(
        'label' => esc_html__( 'Hide / Show Info Blocks','travel-agency-booking' ),
        'section' => 'travel_agency_booking_info_block_options_section',
        'settings' => 'info_blocks_show_hide',
        'type'=> 'toggle',
    ) ) );

    $wp_customize->add_setting( new Travel_Agency_Booking_Repeater_Setting( $wp_customize, 'travel_agency_booking_info_section', array(
        'sanitize_callback' => array( 'Travel_Agency_Booking_Repeater_Setting', 'sanitize_repeater_setting' ),
    ) ) );

    $wp_customize->add_control( new Travel_Agency_Booking_Control_Repeater( $wp_customize, 'travel_agency_booking_info_section', array(
        'section' => 'travel_agency_booking_info_block_options_section',
        'settings'    => 'travel_agency_booking_info_section',
        'label'			=> __( 'Add Info Section', 'travel-agency-booking' ),
        'description'   => __( 'Add Info Section from here', 'travel-agency-booking' ),
        'row_label' => array(
            'type'  => 'field',
            'value' => esc_html__( 'Info Section', 'travel-agency-booking' ),
            'field' => 'info_name',
        ), 
        'fields'     => array(
            'info_name'     => array(
                'type'  => 'text',
                'label' => __( 'Title', 'travel-agency-booking' ),
            ),
            'info_desc'     => array(
                'type'  => 'textarea',
                'label' => __( 'Description', 'travel-agency-booking' ),
            ),
            'info_thumbnail'     => array(
                'type'   => 'image',
                'label'  => __( 'Thumbnail', 'travel-agency-booking' ),
            ),
        ),                   
    ) ) );
    $wp_customize->selective_refresh->add_partial( 'travel_agency_booking_info_section', array(
        'selector' => '.info-block-holder',
      ) ); 

}
