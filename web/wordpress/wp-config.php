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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'theJovian' );

/** Database password */
define( 'DB_PASSWORD', 'admin123' );

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
define( 'AUTH_KEY',         'ynQ6[L}.F1P0/_:r1UzHy|u<Y_c;B V%UuPOV--K(5-[L|BC#&yGYt!G; N62]Or' );
define( 'SECURE_AUTH_KEY',  '%1KDd(^HvOd}9>QJ.h~xH6L*&zMo`h]Xi/ &MBJ<SqRG@+7:ri>=:rD]NJ=K<ejx' );
define( 'LOGGED_IN_KEY',    '@zztuvbA-gfN/!8TEX1Ldt`FAG>w/1&ksP1WFSF>Lnr,eyL.O)<JM2zil~4:sN[l' );
define( 'NONCE_KEY',        'H-ol,ZCKW.O8QaWj|vPiGZi@SH4$1%,Q^AQ,Y>gwP<`M&e8Iij/3iA$XFv~ah?hW' );
define( 'AUTH_SALT',        '#?Ivuc6gA}}IT!C(TdVm S6j5wEd6{iZkv:T>RD~{H3S ]qT2 !UaNbtR]TUosS9' );
define( 'SECURE_AUTH_SALT', 'NtT7Iwu1|9kk1~<Yg$|h$Fm^a8uBXsyNVcI?}}EpwI~pee)}yzkG:nM(3U7uq(~)' );
define( 'LOGGED_IN_SALT',   '_q;gLc((K8WPObO}GS[>M6X]/e b9!$JSD2.j:R*/UGrL/?P& ]E-9U<1vhnM..q' );
define( 'NONCE_SALT',       'ulfD#DQz4*BaT5=z5aKX1[lEHFV&h6#pxTXLD/u~aV;#Ys`d~[isel)?V8,aNDs$' );

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
