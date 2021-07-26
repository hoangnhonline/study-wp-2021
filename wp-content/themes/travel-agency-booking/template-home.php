<?php

// Template Name: Home

get_header();

get_template_part( 'template-parts/home-sections/banner-sections', '' );

if( class_exists( 'Wp_Travel_Engine' ) ) {

	$sections = get_theme_mod( 'travel_agency_booking_sort_homepage', array(
		'info-sections',
		'destination-sections',
		'offer-sections',
		'trip-sections',
		'activities-sections',
		'cta-sections',
		'shortcode-for-review-sections',
		'blog-sections'
	) );
}
else {
	$sections = get_theme_mod( 'travel_agency_booking_sort_homepage', array(
	  'info-sections',
	  'cta-sections',
	  'shortcode-for-review-sections',
	  'blog-sections'
	) );
}


if ( ! empty( $sections ) && is_array( $sections ) ) :

	foreach ( $sections as $section ) :
		get_template_part( 'template-parts/home-sections/' . $section, $section );
	endforeach;

endif;

get_footer();