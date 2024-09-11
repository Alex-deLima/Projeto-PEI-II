<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'noyB|lXf$HDfV<nP@OW7g:-g:N7(Nxb_:#3YvRc~gRkBZ2u,%%kj58u<*g.( |X;' );
define( 'SECURE_AUTH_KEY',   'C$|Kk)?8E48H;3*VKDY[:]V3DW*s8$t>4?4?.Ayj|(V6 a qNR~Fw2&1{}U-sGzJ' );
define( 'LOGGED_IN_KEY',     'PD.:t>4|8{t:/j9eX> KZ&5zifF2X$&F:kiGaad4Bd/RYYF6ZNbnL5H{1uIML)#u' );
define( 'NONCE_KEY',         'nxDl ZzIg-s2*A4%x,#[^b:{ix@?Fo_X>Y0+e<9YAS{4P~Dz#~G?~&oIBAi:BN&o' );
define( 'AUTH_SALT',         '5_JM)(I;]bLsw7sMiaai<g%{lOz[tj4t-fVd~s_V9 REPjCv:%$^rrR?]APrKb8P' );
define( 'SECURE_AUTH_SALT',  'f&Qb!}fYoDzLTn3o:ivD/u=myBls-j7}|f@!:m-v<q[+[pkW;(OzwJfX=X2 9|:g' );
define( 'LOGGED_IN_SALT',    ':CaST,hi*Q|b}ke?>JuP OukQ_%0O#W6$0Y#)HPpmZAXtc?A0efTqWK5H[J/@@SO' );
define( 'NONCE_SALT',        'F`F$*X+5r#uKDK$PM_HZ,.y0V>WrOX7Pkb#@jq`?ga![q?h(s6)r(2<u5u$l-#3{' );
define( 'WP_CACHE_KEY_SALT', '.?v!*}]`x{Ib>3w=(Rr4>]kCgHg@!]>,{l3hs{2bw(<ouHmK&J UuJA)t9xvGkW(' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
