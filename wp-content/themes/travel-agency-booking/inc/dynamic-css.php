<?php

function travel_agency_booking_dynamic_css()
{
    wp_enqueue_style(
        'travel-agency-booking-style',
        get_stylesheet_uri(),
        array(),
        TRAVEL_AGENCY_BOOKING_VERSION
    );
    $site_title_color = get_theme_mod( 'site_title_color_option', '#000' );
    $site_title_size = get_theme_mod( 'site_title_size', '30' );
    $logo_size = absint( $site_title_size * 2 );
    $site_identity_font_family = get_theme_mod( 'site_identity_font_family', 'Montserrat' );
    $primary_color = '#22A6B3';
    $secondary_color = '#22B377';
    $light_color = '#fff';
    $dark_color = '#000';
    $text_color = '#757575';
    $font_family = esc_attr( get_theme_mod( 'font_family', 'Lora' ) );
    $font_size = esc_attr( get_theme_mod( 'font_size', '16px' ) );
    $body_font_weight = esc_attr( get_theme_mod( 'body_font_weight', 400 ) );
    $body_line_height = get_theme_mod( 'body_line_height', '1.5' );
    $heading_font_family = esc_attr( get_theme_mod( 'heading_font_family', 'Montserrat' ) );
    $heading_font_weight = esc_attr( get_theme_mod( 'heading_font_weight', 400 ) );
    $header_line_height = get_theme_mod( 'header_line_height', '1.5' );
    $default_size = array(
        '1' => 32,
        '2' => 28,
        '3' => 24,
        '4' => 21,
        '5' => 15,
        '6' => 12,
    );
    for ( $i = 1 ;  $i <= 6 ;  $i++ ) {
        $heading[$i] = absint( get_theme_mod( 'travel_agency_booking_heading_' . $i . '_size', absint( $default_size[$i] ) ) );
    }
    $dynamic_css = "\n        :root {\n                --primary-color: {$primary_color};\n                --secondary-color: {$secondary_color};\n                --text-color: {$text_color};\n                --light-color: {$light_color};\n                --dark-color: {$dark_color};\n        }\n                /* site title size */\n                .site-title a{ font-size: {$site_title_size}" . "px; font-family: {$site_identity_font_family}; color: {$site_title_color}; }\n                \n                header .custom-logo-link img{ height: {$logo_size}" . "px; }\n                \n                /* font family */\n                html,:root{ font-size: {$font_size};}\n\n                body{line-height: {$body_line_height}; font-family: {$font_family}; font-weight:{$body_font_weight}; }\n                h1,h2,h3,h4,h5,h6{ font-family: {$heading_font_family};}\n\n                /*        \n                h1{ font: {$heading_font_weight} {$heading[1]}" . "px {$heading_font_family} }\n                h2{ font: {$heading_font_weight} {$heading[2]}" . "px {$heading_font_family} }\n                h3{ font: {$heading_font_weight} {$heading[3]}" . "px {$heading_font_family} }\n                h4{ font: {$heading_font_weight} {$heading[4]}" . "px {$heading_font_family} }\n                h5{ font: {$heading_font_weight} {$heading[5]}" . "px {$heading_font_family} }\n                h6{ font: {$heading_font_weight} {$heading[6]}" . "px {$heading_font_family} }\n\n                h1,h2,h3,h4,h5,h6{\n                        line-height: {$header_line_height};\n                }\n                */\n\n                /* Footer widget font Colors */\n                .site-footer .widget-title{font-family: {$font_family};}\n\n                \n        ";
    wp_add_inline_style( 'travel-agency-booking-style', $dynamic_css );
}

add_action( 'wp_enqueue_scripts', 'travel_agency_booking_dynamic_css' );