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
define( 'DB_NAME', 'rapblog_data' );

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
define( 'AUTH_KEY',         'f6Z:W#pTQS.3oLPT|5?) ilgivjdCq?G`_k{t^Mcc0rz]Bk=M&Mg67<eQ$O[h@@{' );
define( 'SECURE_AUTH_KEY',  'x2*VK?due<.=KaLs63[)CdD!Jql!H/.;ZFcb&[sd_m!]Z!AWCRLBxN9]PP+:64b)' );
define( 'LOGGED_IN_KEY',    'M``Wumo/gjd]|YA_TvrRJ>v[?Fl>l=aw=p?V:YbAjE~Inkz;BL$C%9#.DU#`jqVl' );
define( 'NONCE_KEY',        '<3%`f[UOntl1-n.|C a5KslPcs@wQhE_]Cd4d*[Nw)S_>RXan;Q|m(^ki0DkIUsc' );
define( 'AUTH_SALT',        'ZWAjwLlDPPnn/o<<[u`(;iZ<=Y,OQX:tOXZAyio{&6*A,xqzD,RKtJ;dxfvt>[AJ' );
define( 'SECURE_AUTH_SALT', 'I_~3^p=ZeRt@|5`T@@(7{H*(vwlYG])q3C<1Xtq{:LXiyhC/?<]Ks (cUI_%RVxB' );
define( 'LOGGED_IN_SALT',   'OV1/I6N8]+IL%7}l*2;/;26fYz)*ot:trfkvaOo6_!wn%PC(^i5iq_+ZUp ysE5[' );
define( 'NONCE_SALT',       'bGUqE&**~!k22)c>nyn23@L@|<ug6NO*jBA(+G0Bt1{r.|,bNb;rjA9o)mSOJR23' );

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
