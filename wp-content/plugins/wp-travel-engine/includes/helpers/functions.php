<?php
/**
 * WTE Helper functions.
 */

use \Firebase\JWT\JWT;
use \WPTravelEngine\Posttype;

/**
 * Gets value of provided index.
 *
 * @param array  $array Array to pick value from.
 * @param string $index Index.
 * @param any    $default Default Values.
 * @return mixed
 */
function wte_array_get( $array, $index = null, $default = null ) {
	if ( ! is_array( $array ) ) {
		return $default;
	}
	if ( is_null( $index ) ) {
		return $array;
	}
	$multi_label_indices = explode( '.', $index );
	$value               = $array;
	foreach ( $multi_label_indices as $key ) {
		if ( ! isset( $value[ $key ] ) ) {
			$value = $default;
			break;
		}
		$value = $value[ $key ];
	}
	return $value;
}

/**
 * Generates uniq ID.
 *
 * @return void
 */
function wte_uniqid( $length = 16 ) {
	if ( ! isset( $length ) || intval( $length ) <= 8 ) {
		$length = 32;
	}
	if ( function_exists( 'random_bytes' ) ) {
		return bin2hex( random_bytes( $length ) );
	}
	if ( function_exists( 'mcrypt_create_iv' ) ) {
		return bin2hex( mcrypt_create_iv( $length, MCRYPT_DEV_URANDOM ) );
	}
	if ( function_exists( 'openssl_random_pseudo_bytes' ) ) {
		return bin2hex( openssl_random_pseudo_bytes( $length ) );
	}
	return uniqid();
}

/**
 * Generate JWT.
 *
 * @return void
 */
function wte_jwt( array $payload, string $key ) {
	return JWT::encode( $payload, $key );
}

/**
 * Decode JWT.
 */
function wte_jwt_decode( string $jwt, string $key ) {
	return JWT::decode( $jwt, $key, array( 'HS256' ) );
}

/**
 * WTE Log data in json format.
 *
 * @param mixed $data
 * @return void
 */
function wte_log( $data, $name = 'data', $dump = false ) {
	if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
		$data = wp_json_encode( array( $name => $data ), JSON_PRETTY_PRINT );
		error_log( $data, 3, WP_CONTENT_DIR .'/wte.log' ); // phpcs:ignore
		if ( $dump ) {
			var_dump( $data );
		} else {
			return $data;
		}
	}
};

/**
 * Returns Booking Email instance.
 *
 * @return WTE_Booking_Emails
 */
function wte_booking_email() {
	// Mail class.
	require_once plugin_dir_path( WP_TRAVEL_ENGINE_FILE_PATH ) . 'includes/class-wp-travel-engine-emails.php';
	return new WTE_Booking_Emails();
}

/**
 * Undocumented function
 *
 * @since 4.3.8
 * @return void
 */
function wte_form_fields( array $fields, $echo = ! 0 ) {
	ob_start();
	( new WTE_Field_Builder_Admin( $fields ) )->render();
	$html = ob_get_clean();

	if ( $echo ) {
		echo $html;
	} else {
		return $html;
	}
}

/**
 * Availability Options.
 */
function wte_get_availability_options( $key = ! 1 ) {
	$options = apply_filters(
		'wte_date_availability_options',
		array(
			'guaranteed' => __( 'Guaranteed', 'wp-travel-engine' ),
			'available'  => __( 'Available', 'wp-travel-engine' ),
			'limited'    => __( 'Limited', 'wp-travel-engine' ),
		)
	);
	if ( $key && isset( $options[ $key ] ) ) {
		return $options[ $key ];
	} else {
		return $options;
	}
}

/**
 * Get Requested Raw Data.
 *
 * @return void
 */
function wte_get_request_raw_data() {
	// phpcs:disable PHPCompatibility.Variables.RemovedPredefinedGlobalVariables.http_raw_post_dataDeprecatedRemoved
	global $HTTP_RAW_POST_DATA;

	// $HTTP_RAW_POST_DATA was deprecated in PHP 5.6 and removed in PHP 7.0.
	if ( ! isset( $HTTP_RAW_POST_DATA ) ) {
		$HTTP_RAW_POST_DATA = file_get_contents( 'php://input' );
	}

	return $HTTP_RAW_POST_DATA;
	// phpcs:enable
}

/**
 * Timezone info.
 *
 * @return void
 */
function wte_get_timezone_info() {
	$tz_string     = get_option( 'timezone_string' );
	$timezone_info = array();

	if ( $tz_string ) {
		try {
			$tz = new DateTimezone( $tz_string );
		} catch ( Exception $e ) {
			$tz = '';
		}

		if ( $tz ) {
			$now                  = new DateTime( 'now', $tz );
			$formatted_gmt_offset = wte_format_gmt_offset( $tz->getOffset( $now ) / 3600 );
			$tz_name              = str_replace( '_', ' ', $tz->getName() );
		}
	} else {
		$formatted_gmt_offset = wte_format_gmt_offset( (float) get_option( 'gmt_offset', 0 ) );

		$timezone_info['description'] = sprintf(
			/* translators: 1: UTC abbreviation and offset, 2: UTC offset. */
			__( 'Your timezone is set to %1$s (Coordinated Universal Time %2$s).', 'wp-travel-engine' ),
			'<abbr>UTC</abbr>' . $formatted_gmt_offset,
			$formatted_gmt_offset
		);
	}

	return $formatted_gmt_offset;
}

/**
 *
 */
function wte_format_gmt_offset( $offset ) {
	$offset = number_format( $offset, 2 );

	if ( 0 <= (float) $offset ) {
		$formatted_offset = '+' . (string) $offset;
	} else {
		$formatted_offset = (string) $offset;
	}

	preg_match( '/(\+|\-)?(\d+\.\d+)/', $formatted_offset, $matches );

	if ( isset( $matches[2] ) ) {
		$formatted_offset = substr( '0000' . $matches[2], -5 );
	}

	$formatted_offset = $matches[1] . $formatted_offset;

	$formatted_offset = str_replace(
		array( '.25', '.50', '.75', '.00' ),
		array( ':15', ':30', ':45', ':00' ),
		$formatted_offset
	);
	return $formatted_offset;
}

function wte_get_trip( $trip = null ) {
	if ( $trip instanceof Posttype\Trip ) {
		$_trip = $trip;
	} else {
		$_trip = Posttype\Trip::instance( $trip );
	}

	return $_trip;
}

function wte_get_engine_extensions() {
	$plugins = get_plugins();

	$matches = array();
	foreach ( $plugins as $file => $plugin ) {
		if ( 'WordPress Travel Booking Plugin - WP Travel Engine' !== $plugin['Name'] && ( stristr( $plugin['Name'], 'wp travel engine' ) || stristr( $plugin['Description'], 'wp travel engine' ) ) ) {
			$matches[ $file ] = $plugin;
		}
	}

	return $matches;
}

function wte_get_extensions_ids( $key = null ) {
	$ids = apply_filters(
		'wp_travel_engine_addons_id',
		array(
			'wte_group_discount'           => 146,
			'wte_currency_converter'       => 30074,
			'wte_fixed_starting_dates'     => 79,
			'wte_midtrans'                 => 31412,
			'wte_hbl_payment'              => 20311,
			'wte_partial_payment'          => 1750,
			'wte_payfast'                  => 1744,
			'wte_paypal_express'           => 7093,
			'wte_payu'                     => 1055,
			'wte_advanced_itinerary'       => 31567,
			'wte_advance_search'           => 1757,
			'wte_authorize_net'            => 577,
			'wte_extra_services'           => 20573,
			'wte_form_editor'              => 33247,
			'wte_payhere_payment'          => 30754,
			'wte_payu_money_bolt_checkout' => 30752,
			'wte_stripe_gateway'           => 557,
			'wte_trip_code'                => 40085,
			'wte_coupons'                  => 42678,
		)
	);
	if ( $key && ! isset( $ids[ $key ] ) ) {
		return false;
	}

	return $key ? $ids[ $key ] : $ids;
}

function wte_get_terms_by_id( $taxonomy, $args = array() ) {
	$terms        = get_terms( $taxonomy, $args );
	$terms_by_ids = array();

	if ( is_array( $terms ) ) {
		foreach ( $terms as $term_object ) {
			$term_object->children  = array();
			$term_object->link      = get_term_link( $term_object->term_id );
			$term_object->thumbnail = (int) get_term_meta( $term_object->term_id, 'category-image-id', true );
			if ( isset( $terms_by_ids[ $term_object->term_id ] ) ) {
				foreach ( (array) $terms_by_ids[ $term_object->term_id ] as $prop_name => $prop_value ) {
					$term_object->{$prop_name} = $prop_value;
				}
			}
			if ( $term_object->parent ) {
				if ( ! isset( $terms_by_ids[ $term_object->parent ] ) ) {
					$terms_by_ids[ $term_object->parent ] = new \stdClass();
				}
				$terms_by_ids[ $term_object->parent ]->children[] = $term_object->term_id;
			}

			$terms_by_ids[ $term_object->term_id ] = $term_object;
		}
	}

	return $terms_by_ids;
}
