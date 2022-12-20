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
define( 'DB_NAME', 'gameblog_data' );

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
define( 'AUTH_KEY',         'bX)baiV PasTkOOIv*TT(*11;,*C?<%:y)=q]WvLy.mH!hxCRWxoMH;Rcu2f.TZ*' );
define( 'SECURE_AUTH_KEY',  '?(6/Wda15nTr$gt&9xSgIc5FSJ1 hR8?KVrM6S+<JW1&e#;I_?9w*Gw|ERD{WXY<' );
define( 'LOGGED_IN_KEY',    '&`l]89r0~M9]a:1V@J@8CT,!7v w!-:xu7(v^Y@:_z{xoC5oct~&-Xd_ZdM5X>km' );
define( 'NONCE_KEY',        'MOAq-sQl9U]+DvL?%i2Q2kxt}~l55ox-K0<>c;q? K|x7I%RoJvgdbU4}N5e#|tm' );
define( 'AUTH_SALT',        '5WB71j=MZWXYVsR|n>;sS gBFmuJhAs@}FP(^/^HSW44}Fo )hrf]:E08X%`Da7u' );
define( 'SECURE_AUTH_SALT', 'u;h@<0Xl`H{/[C)7m)&x*irf^iEn]OUV86nd`Fy/J4t3q^0;Iy@~tIT@thL[V8ly' );
define( 'LOGGED_IN_SALT',   '1.Fja}s+Sz[%]S3uLG K5^#=9,B[DaN/?uQpyf>9hb,~0dTwf<BOi(B`^upHpKR>' );
define( 'NONCE_SALT',       'i?mP$-jYO,0p0GToRqC0})c#(iP-U9.nQxNRURoQQZNAROFd0?PC#|pSRM@%~PIM' );

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
