<?php
/**
 * Blog List Settings
 */


add_action( 'customize_register', 'travel_agency_booking_customize_blog_list_option' );

function travel_agency_booking_customize_blog_list_option( $wp_customize ) {

    $wp_customize->add_section( 'travel_agency_booking_blog_list_section', array(
        'title'          => esc_html__( 'Blog Options', 'travel-agency-booking' ),
        'panel'          => '',
        'priority'       => 11,
    ) );

    $wp_customize->add_setting( 'blog_post_list_options_title_text', array(
        'sanitize_callback' =>  'wp_kses_post',        
    ) );

    $wp_customize->add_control( new Travel_Agency_Booking_Custom_Text( $wp_customize, 'blog_post_list_options_title_text', array(
        'label' =>  esc_html__( 'Blog List Options :', 'travel-agency-booking' ),
        'section'   =>  'travel_agency_booking_blog_list_section',
        'Settings'  =>  'blog_post_list_options_title_text'
    ) ) );

    $wp_customize->add_setting( 'blog_post_layout', array(
        'capability'  => 'edit_theme_options',        
        'sanitize_callback' => 'travel_agency_booking_sanitize_choices',
        'default'     => 'sidebar-right',
    ) );

    $wp_customize->add_control( new Travel_Agency_Booking_Radio_Buttonset_Control( $wp_customize, 'blog_post_layout', array(
        'label' => esc_html__( 'Layouts :', 'travel-agency-booking' ),
        'section' => 'travel_agency_booking_blog_list_section',
        'settings' => 'blog_post_layout',
        'type'=> 'radio-buttonset',
        'choices'     => array(
            'sidebar-left' => esc_html__( 'Sidebar at left', 'travel-agency-booking' ),
            'no-sidebar'    =>  esc_html__( 'No sidebar', 'travel-agency-booking' ),
            'sidebar-right' => esc_html__( 'Sidebar at right', 'travel-agency-booking' ),            
        ),
    ) ) );


    $wp_customize->add_setting( 'blog_post_view', array(
        'capability'  => 'edit_theme_options',        
        'sanitize_callback' => 'travel_agency_booking_sanitize_choices',
        'default'     => 'grid-view',
    ) );

    $wp_customize->add_control( new Travel_Agency_Booking_Radio_Buttonset_Control( $wp_customize, 'blog_post_view', array(
        'label' => esc_html__( 'Post View :', 'travel-agency-booking' ),
        'section' => 'travel_agency_booking_blog_list_section',
        'settings' => 'blog_post_view',
        'type'=> 'radio-buttonset',
        'choices'     => array(
            'grid-view' => esc_html__( 'Grid View', 'travel-agency-booking' ),
            'list-view' => esc_html__( 'List View', 'travel-agency-booking' ),
            'full-width-view' => esc_html__( 'Fullwidth View', 'travel-agency-booking' ),
        ),
    ) ) );

    $wp_customize->add_setting( 'blog_post_show_hide_details', array(
        'capability'  => 'edit_theme_options',        
        'sanitize_callback' => 'travel_agency_booking_sanitize_array',
        'default'     => array( 'date', 'categories', 'tags' ),
    ) );

    $wp_customize->add_control( new Travel_Agency_Booking_Multi_Check_Control( $wp_customize, 'blog_post_show_hide_details', array(
        'label' => esc_html__( 'Hide / Show Details', 'travel-agency-booking' ),
        'section' => 'travel_agency_booking_blog_list_section',
        'settings' => 'blog_post_show_hide_details',
        'type'=> 'multi-check',
        'choices'     => array(
            'author' => esc_html__( 'Show post author', 'travel-agency-booking' ),
            'date' => esc_html__( 'Show post date', 'travel-agency-booking' ),     
            'categories' => esc_html__( 'Show Categories', 'travel-agency-booking' ),
            'tags' => esc_html__( 'Show Tags', 'travel-agency-booking' ),
            'number_of_comments' => esc_html__( 'Show number of comments', 'travel-agency-booking' ),
        ),
    ) ) );
    
    $wp_customize->add_setting( 'pagination_type', array(
        'sanitize_callback' => 'travel_agency_booking_sanitize_choices',
        'default'     => 'ajax-loadmore',
    ) );

    $wp_customize->add_control( new Travel_Agency_Booking_Radio_Buttonset_Control( $wp_customize, 'pagination_type', array(
        'label' => esc_html__( 'Pagination Type :', 'travel-agency-booking' ),
        'section' => 'travel_agency_booking_blog_list_section',
        'settings' => 'pagination_type',
        'type'=> 'radio-buttonset',
        'choices'     => array(
            'ajax-loadmore' => esc_html__( 'Ajax Loadmore', 'travel-agency-booking' ),
            'number-pagination'    =>  esc_html__( 'Number Pagination', 'travel-agency-booking' ),      
        ),
    ) ) );            
    


}