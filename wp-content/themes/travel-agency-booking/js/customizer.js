/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */
( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );

	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Site title color
	wp.customize( 'site_title_color_option', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).css( 'color', to );
		} );
	} );

	// Site title font family 
	wp.customize( 'site_identity_font_family', function( value ) {
		value.bind( function( to ) {
			$("head").append("<link href='https://fonts.googleapis.com/css?family=" + to + ":200,300,400,500,600,700,800,900|' rel='stylesheet' type='text/css'>");
			$( 'header .site-title a' ).css( 'font-family', to );
		} );
	} );

	// Site title size 
	wp.customize( 'site_title_size', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).css( 'font-size', to + "px" );
			$( 'header .custom-logo-link img' ).css( 'height', ( to * 2 ) + "px" );
		} );
	} );

	//general options
	wp.customize( 'travel_booking_contact_number', function( value ) {
		value.bind( function( to ) {
			$( '.phone-email .phone' ).text( to );
		} );
	} );

	wp.customize( 'travel_booking_email_address', function( value ) {
		value.bind( function( to ) {
			$( '.phone-email .email' ).text( to );
		} );
	} );

	//banner options
	wp.customize( 'banner_section_title', function( value ) {
		value.bind( function( to ) {
			$( '.banner-holder h1' ).text( to );
		} );
	} );

	wp.customize( 'banner_section_description', function( value ) {
		value.bind( function( to ) {
			$( '.banner-holder p' ).text( to );
		} );
	} );

	wp.customize( 'banner_section_cta_label', function( value ) {
		value.bind( function( to ) {
			$( '.banner-holder .btn' ).text( to );
		} );
	} );

	//popular destination
	wp.customize( 'popular_destinations_title', function( value ) {
		value.bind( function( to ) {
			$( '.popular-destinations h3' ).text( to );
		} );
	} );

	//popular tour
	wp.customize( 'best_tours_title', function( value ) {
		value.bind( function( to ) {
			$( '.popular-tour h3' ).text( to );
		} );
	} );

	wp.customize( 'best_tours_title', function( value ) {
		value.bind( function( to ) {
			$( '.popular-tour h3' ).text( to );
		} );
	} );

	//cta section
	wp.customize( 'title_for_cta_block', function( value ) {
		value.bind( function( to ) {
			$( '.discount-holder h3' ).text( to );
		} );
	} );

	wp.customize( 'content_for_cta_block', function( value ) {
		value.bind( function( to ) {
			$( '.discount-holder p' ).text( to );
		} );
	} );

	wp.customize( 'cta_block_link_label', function( value ) {
		value.bind( function( to ) {
			$( '.discount-holder a' ).text( to );
		} );
	} );

	//blog section
	wp.customize( 'blog_post_section_title', function( value ) {
		value.bind( function( to ) {
			$( '.travel-articles h3' ).text( to );
		} );
	} );

	//copyright_text
	wp.customize( 'copyright_text', function( value ) {
		value.bind( function( to ) {
			$( '.footer .copyright p' ).text( to );
		} );
	} );

	wp.customize( 'travel_booking_heading_1_size', function( value ) {
		value.bind( function( to ) {
			$( 'h1' ).css( 'font-size', to + 'px' );
		} );
	} );

	wp.customize( 'travel_booking_heading_2_size', function( value ) {
		value.bind( function( to ) {
			$( 'h2' ).css( 'font-size', to + 'px' );
		} );
	} );

	wp.customize( 'travel_booking_heading_3_size', function( value ) {
		value.bind( function( to ) {
			$( 'h3' ).css( 'font-size', to + 'px' );
		} );
	} );

	wp.customize( 'travel_booking_heading_4_size', function( value ) {
		value.bind( function( to ) {
			$( 'h4,  .speaker-title' ).css( 'font-size', to + 'px' );
		} );
	} );

	wp.customize( 'travel_booking_heading_5_size', function( value ) {
		value.bind( function( to ) {
			$( 'h5' ).css( 'font-size', to + 'px' );
		} );
	} );

	wp.customize( 'travel_booking_heading_6_size', function( value ) {
		value.bind( function( to ) {
			$( 'h6' ).css( 'font-size', to + 'px' );
		} );
	} );

// color	
	wp.customize('primary_color',function ( value ) {
		value.bind(function ( to ) {
			document.body.style.setProperty('--primary-color', to);
		});
	});
	wp.customize('secondary_color',function ( value ) {
		value.bind(function ( to ) {
			document.body.style.setProperty('--secondary-color', to);
		});
	});
	wp.customize('dark_color',function ( value ) {
		value.bind(function ( to ) {
			document.body.style.setProperty('--dark-color', to);
		});
	});
	wp.customize('light_color',function ( value ) {
		value.bind(function ( to ) {
			document.body.style.setProperty('--light-color', to);
		});
	});
	wp.customize('text_color',function ( value ) {
		value.bind(function ( to ) {
			document.body.style.setProperty('--text-color', to);
		});
	});

// font	

	wp.customize( 'font_family', function( value ) {
		value.bind( function( to ) {
			$("head").append("<link href='https://fonts.googleapis.com/css?family=" + to + ":200,300,400,500,600,700,800,900|' rel='stylesheet' type='text/css'>");
			$( 'body,p' ).css( 'font-family', to );
		} );
	} );


	wp.customize( 'heading_font_family', function( value ) {
		value.bind( function( to ) {
			$("head").append("<link href='https://fonts.googleapis.com/css?family=" + to + ":200,300,400,500,600,700,800,900|' rel='stylesheet' type='text/css'>");
			$( 'h1, h2, h3, h4, h5, h6' ).css( 'font-family', to );
		} );
	} );
	
}( jQuery ) );
