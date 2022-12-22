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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lion_data' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'O=ks?hX7.07iVNDaDTY=Q/`bulV`j)[&(fZn(Nqz. J8jg[vn Ib36x/j-aH/acV' );
define( 'SECURE_AUTH_KEY',  'Cp47^m1X I;^~wF&0GG0{ava_;clm2+~Q5GW`I6?1T8>LpM.N?~/}/@a6}6wTS]?' );
define( 'LOGGED_IN_KEY',    '[]&.2{O+)+uoqQanYxO*)V6~8Q5,gTao[@)|3tb=UYk42XjhUEd|`+;g_v)dmN/I' );
define( 'NONCE_KEY',        'z^-IBIGYj o[JoVMAs6D#4hhjdS@JjLTC}@zMHmb&!uiBjne E9hPnAC56M%E_pf' );
define( 'AUTH_SALT',        'HRkr7&AhO=RSux>x[!+iAKmfhq/#X91HA.@W[YE:o?:@+# `K*=enKJ|Kt)NM~O_' );
define( 'SECURE_AUTH_SALT', 'r^6o.o,BW&U*hu<A]!L%cxklGZYg^q-916bZx@q:$g.MtT|0uWxQb=tLoIGS%m2$' );
define( 'LOGGED_IN_SALT',   'Gvbq|8Ok`KWL^}kOvULFHRu[K@T2+k#Kkwt:-&s,UTnz!]{%C}t1G@NWe+@{Zusa' );
define( 'NONCE_SALT',       'AV: fvLuH+_Fd&7-:&s_=FG.SdO~:uatz `LG8!p#nQ4r-O$@CIH,A6T$%JW0~mH' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
