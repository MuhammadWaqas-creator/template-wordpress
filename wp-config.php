<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'login' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'TGF#`-7}p<E>;RA_235>5=!L[DgJbglW<@b`MwZLC(|a @MuDvo(o$K~WG.-XRd0' );
define( 'SECURE_AUTH_KEY',  'T|lDljHLK`sJC6[LU_?{cO6U}@>jO>rX|eE8p&s%G-R#&(g1Ap?w^RMPMtYaZ68v' );
define( 'LOGGED_IN_KEY',    'VF@&)`:i#iD=uf#Y3Ln,AMo`fm4vFv>esv4@KrLt2yi$Tp<@Wt,mkn<;pp+(zbe;' );
define( 'NONCE_KEY',        's5k:Njh&|u+!dbH[`G~n9rPp|bEJQ=V,#$l#jQhF^F`kZ%VgCs|y(RI[&bD]X,T_' );
define( 'AUTH_SALT',        '=kZ6Jf#O%HKWl_OZ[aO*).sJ_ DC]@(<Prof9uA-FeD~bhdG6/;$W@CkKOch2 &]' );
define( 'SECURE_AUTH_SALT', 'cIJq8]qEE_.Qp2K,WrVI)@h~q~wix[FX%f3!{d.5/vY/a{]XXw2&kJj+;mo809@/' );
define( 'LOGGED_IN_SALT',   'mgha?}~yXa^#p[]@xxI8&YdHEx>j/wsc)<`mF&I[Gma= ilO{ZEB22tkAz<}2BNM' );
define( 'NONCE_SALT',       ']l-TZtDyM;G%8J0c#K]tCw@N)41GK[@i|:qe`9VKQF84T5e|}l<Mpgu66!l8(23b' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
