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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'store' );

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
define( 'AUTH_KEY',         ';Cmtz`0nE}Vdk/EKV+R_it}y@b@:xTRKyW!;]]7M fle;b!B3xu{xl,Wy b>OZi6' );
define( 'SECURE_AUTH_KEY',  '{SR& 4vwm=tyMnW5D#w^FrL-AdG6:m Px/BtxN}^@PD53n2(Q2zj =wBWJWd}O2B' );
define( 'LOGGED_IN_KEY',    'et28R<VQ5ud(d].7= ?N!FP#QOiYS2QSa0JMJ{6Vu+*VnN$JLwvK3B/c}woz iMZ' );
define( 'NONCE_KEY',        '!n)3rpz|*K]3}0 h;75*arC4M&*byw (Z ./{wW_SVB`eN}Z:3ZE[~J rfAHiwip' );
define( 'AUTH_SALT',        'mE9iZX{?Mx>d;Tlu:EItM@{a%Ej.Q1{k{tQT{iD*``pYTW0@2Ir*o=:W;UKgov9[' );
define( 'SECURE_AUTH_SALT', 'dKTWZcqx a[/S.1J3JU%9_/2/?h+lIJumHN4VPoyErT3HdDj(Vh#NZqlSY<&[7H&' );
define( 'LOGGED_IN_SALT',   '.~;8Ku1:mtpab:,:]Fkt6^r{r5nqFe3pcp{b?SG1sE|EI){#%#X*|Wu=}iJFF>:s' );
define( 'NONCE_SALT',       'R3b x*;rtB^aU[eU8P.ssYpoXN/;3{.+`^M0i09qa|RIn}$!Gj%PYiY&W&ow=K|o' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
