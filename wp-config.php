<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'gP{}$h>!HYd:g;lyp@LD;aTj;@t|Jlo6!<3;gC=xPSta_sprtaDQx:!UaD}=RE8}' );
define( 'SECURE_AUTH_KEY',  '_NuE~-Y34S+<g)kz;7}{5Z{(5(SakWI!`6v~[sD$V Bl!!UDudvF>72&36I]z^w{' );
define( 'LOGGED_IN_KEY',    'Bom2@0hD%` <|n_opd/&d<GA#0aFs=OM nRv+KNF?[tf;U=s,ZpF[WXDNAs Z#T+' );
define( 'NONCE_KEY',        '^X$dLW}e{d`2eCp0X+Ic#,JDi MiBJNvGcbMk(oHd 3^vI@d$De800[-Mp7lDdpE' );
define( 'AUTH_SALT',        '-}R0Y+%pCFT<(|T6g6j#{-k`QDzd)Qi6vGu@.3#ZR=,>eC{9^ZJwG_A.U.ej@u1~' );
define( 'SECURE_AUTH_SALT', 'mVUbRd{cl`K7T[ [)kJtJNxU,Z{ Me~ks6sy8)B/DebNZ;C=L,d>PpRLo7 `d5|!' );
define( 'LOGGED_IN_SALT',   '^3)~D3[]+sLQn`KB,toj?s|z!- A&z}g)j&3a+>{j-M5RY>x[daglVL/65B5_W/#' );
define( 'NONCE_SALT',       '^1IG.ad3S!cRA>:.r+RLMpOswK$jzWT>n5:,I3DsG ,p%7m1W)[4Uhv3v(6gN0dg' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
