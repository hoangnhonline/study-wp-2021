<?php
if( ! function_exists( 'travel_agency_booking_register_custom_controls' ) ) :
/**
 * Register Custom Controls
*/
function travel_agency_booking_register_custom_controls( $wp_customize ) {
    
    // Load our custom control.
  
    require_once get_template_directory() . '/inc/custom-controls/sortable/class-sortable-control.php';
    require_once get_template_directory() . '/inc/custom-controls/toggle/class-toggle-control.php';
    require_once get_template_directory() . '/inc/custom-controls/dropdown-taxonomies/class-dropdown-taxonomies-control.php';
    require_once get_template_directory() . '/inc/custom-controls/slider/class-slider-control.php';  
    require_once get_template_directory() . '/inc/custom-controls/dropdown-posttype/class-dropdown-post-type-control.php';    
    require_once get_template_directory() . '/inc/custom-controls/radiobtn/class-radio-buttonset-control.php';
    require_once get_template_directory() . '/inc/custom-controls/multicheck/class-multi-check-control.php';
    require_once get_template_directory() . '/inc/custom-controls/repeater/class-repeater-setting.php';
    require_once get_template_directory() . '/inc/custom-controls/repeater/class-control-repeater.php';
    
    require_once get_template_directory() . '/inc/custom-controls/notes.php';
    
    // Register the control type.
     
    $wp_customize->register_control_type( 'Travel_Agency_Booking_Control_Sortable' );
    $wp_customize->register_control_type( 'Travel_Agency_Booking_Toggle_Control' );   
    $wp_customize->register_control_type( 'Travel_Agency_Booking_Slider_Control' );  
    $wp_customize->register_control_type( 'Travel_Agency_Booking_Radio_Buttonset_Control' ); 
    $wp_customize->register_control_type( 'Travel_Agency_Booking_Multi_Check_Control' );
      
 
}
endif;
add_action( 'customize_register', 'travel_agency_booking_register_custom_controls' );