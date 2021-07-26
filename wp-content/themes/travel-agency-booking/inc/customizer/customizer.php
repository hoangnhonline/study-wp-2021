<?php
/**
 * travel-agency-booking Theme Customizer
 *
 * @package travel_agency_booking
 */

require get_template_directory() . '/inc/google-fonts.php';

$panels   = array( 'homepage-panel', 'colors-fonts-panel' );

$homepage_sections = array( 'banner-section','search-section', 'info-section', 'popular-destination', 'offer-package', 'trip-sections', 'activities-section', 'cta-section', 'review-shortcode',  'blog-section' );


if( ! empty( $panels ) ) {
	foreach( $panels as $panel ){
	    require get_template_directory() . '/inc/customizer/panels/' . $panel . '.php';
	}
}

if( ! empty( $homepage_sections ) ) {
	foreach( $homepage_sections as $section ) {
	    require get_template_directory() . '/inc/customizer/sections/homepage-sections/' . $section . '.php';
	}
}


require get_template_directory() . '/inc/customizer/sections/general-section.php';

require get_template_directory() . '/inc/customizer/sections/colors-fonts.php';

require get_template_directory() . '/inc/customizer/sections/sort-homepage-section.php';

require get_template_directory() . '/inc/customizer/sections/blog-options.php';


require get_template_directory() . '/inc/customizer/sections/footer-section.php';

/**
 * Sanitization Functions
*/
require get_template_directory() . '/inc/customizer/sanitization-functions.php';