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
define( 'DB_NAME', 'rap_data' );

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
define( 'AUTH_KEY',         '{e*k XGq!P]kV 2I>4B=M=;Ft| =fM8Sx%5XbfvE*uZ.>X>?g<EZ[PGA(g7GuU(z' );
define( 'SECURE_AUTH_KEY',  '&4a)Qxb.sO3OH9.n^X!c<>ooc.>z&,Kr@+4`#uFAzp6!d,(NI3^)#ZA$(G{2L:Ws' );
define( 'LOGGED_IN_KEY',    ')<9,z}do:U*&Z06f]Ez7=CU>Wv9g=v55Qq#~G>./_S`q{DVq|]#{QpN<b&[ )h&P' );
define( 'NONCE_KEY',        'DK]X21%-MDAF-1&{ofA>}{yijY+BI7PBrq:8U<IoB})2M29py_7C&sH&M+eZ}ah-' );
define( 'AUTH_SALT',        '7 < ;fcpt$5?OaY9|!>;p^Q2{wr4]r,$X7)hw?PY9>EXdk;>(!a#oB4Mw7u/+nnQ' );
define( 'SECURE_AUTH_SALT', 'xV00u~35kYn!M!B(2).wyxuVH.^sx!)y)/=MIfktJ@VBVMWjMbU)%@Djo4ejPRG7' );
define( 'LOGGED_IN_SALT',   '4bMK|pN|p&^v`sbI<G9lhP{zr(~^X{x4R2X <H@2<FU?&<@{J0^V.w-RJ=D-87~k' );
define( 'NONCE_SALT',       'Sd,$T5owO:~}em]$vG^Dqbz]ctjI/sOL=ke F<e$&EVrL6b 5CX*s_5OOTQS};4p' );

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
