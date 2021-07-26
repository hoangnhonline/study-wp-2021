<?php

/**
 * cta section Settings
 *
 * @package travel_agency_booking
 */

add_action( 'customize_register', 'travel_agency_booking_customize_cta_block_options_section' );
function travel_agency_booking_customize_cta_block_options_section( $wp_customize ) {

    $wp_customize->add_section( 'travel_agency_booking_cta_block_options_section', array(
        'title'          => esc_html__( 'CTA Section', 'travel-agency-booking' ),
        'panel'          => 'travel_agency_booking_homepage_panel',    
    ) );
            
    $wp_customize->add_setting( 'cta_blocks_show_hide', array(
        'sanitize_callback'     =>  'travel_agency_booking_sanitize_checkbox',
        'default'               =>  true
    ) );

    $wp_customize->add_control( new Travel_Agency_Booking_Toggle_Control( $wp_customize, 'cta_blocks_show_hide', array(
        'label' => esc_html__( 'Hide / Show Cta Blocks','travel-agency-booking' ),
        'section' => 'travel_agency_booking_cta_block_options_section',
        'settings' => 'cta_blocks_show_hide',
        'type'=> 'toggle',
    ) ) );

    $wp_customize->add_setting( 'heading_cta_block_1', array(
        'default' => '',
        'type' => 'customtext',
        'capability' => 'edit_theme_options',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( new Travel_Agency_Booking_Custom_Text( $wp_customize, 'heading_cta_block_1', array(
        'label' => esc_html__( 'Cta block:', 'travel-agency-booking' ),
        'section' => 'travel_agency_booking_cta_block_options_section',
        'settings' => 'heading_cta_block_1'
    ) ) );

    $wp_customize->selective_refresh->add_partial('title_for_cta_block', array(
        'selector' => '.banner-blocks .block-holder .title ', // You can also select a css class
    ));

    $wp_customize->add_setting('cta_block_image', array(
        'transport' => 'refresh',
        'sanitize_callback'     =>  'tour_booking_sanitize_file',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cta_block_image', array(
        'label'             => __('Image', 'travel-agency-booking'),
        'section'           => 'travel_agency_booking_cta_block_options_section',
        'settings'          => 'cta_block_image',
        'active_callback' => function(){
            return get_theme_mod( 'cta_block_1_show_hide', true );
        },
    )));   

    $wp_customize->add_setting( 'title_for_cta_block', array(
        'transport' => 'postMessage',
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'title_for_cta_block', array(
        'label' => esc_html__( 'Title', 'travel-agency-booking' ),
        'section' => 'travel_agency_booking_cta_block_options_section',
        'settings' => 'title_for_cta_block',
        'type'=> 'text',
        'active_callback' => function(){
            return get_theme_mod( 'cta_block_1_show_hide', true );
        },
    ) );

    $wp_customize->selective_refresh->add_partial( 'title_for_cta_block', array(
	    'selector' => '.discount-holder h3',
	) );

    $wp_customize->add_setting( 'content_for_cta_block', array(
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( 'content_for_cta_block', array(
        'label' => esc_html__( 'Description', 'travel-agency-booking' ),
        'section' => 'travel_agency_booking_cta_block_options_section',
        'settings' => 'content_for_cta_block',
        'type'=> 'textarea',
        'active_callback' => function(){
            return get_theme_mod( 'cta_block_1_show_hide', true );
        },
    ) );

    $wp_customize->selective_refresh->add_partial( 'content_for_cta_block', array(
	    'selector' => '.discount-holder p',
	) );

    $wp_customize->add_setting( 'cta_block_link_label', array(
        'transport' => 'postMessage',
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'cta_block_link_label', array(
        'label' => esc_html__( 'CTA Label', 'travel-agency-booking' ),
        'section' => 'travel_agency_booking_cta_block_options_section',
        'settings' => 'cta_block_link_label',
        'type'=> 'text',
        'active_callback' => function(){
            return get_theme_mod( 'cta_block_1_show_hide', true );
        },
    ) );

    $wp_customize->selective_refresh->add_partial( 'cta_block_link_label', array(
	    'selector' => '.discount-holder a',
	) );
 
    $wp_customize->add_setting( 'cta_block_link', array(
        'transport' => 'postMessage',
        'sanitize_callback'     =>  'esc_url_raw',
    ) );

    $wp_customize->add_control( 'cta_block_link', array(
        'label' => esc_html__( 'CTA Link', 'travel-agency-booking' ),
        'section' => 'travel_agency_booking_cta_block_options_section',
        'settings' => 'cta_block_link',
        'type'=> 'url',
        'active_callback' => function(){
            return get_theme_mod( 'cta_block_1_show_hide', true );
        },
    ) );

}
