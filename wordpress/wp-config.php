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
define( 'DB_NAME', 'gosha' );

/** Database username */
define( 'DB_USER', 'gosha' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         ':JYAK(f<CYrTf[_Rnvb>}9Zix,-@QiR/vdOJi9Ix:&S5^9}G1X)P*:i(vr-!Qm?#' );
define( 'SECURE_AUTH_KEY',  'kH}E.!?<+AcOW}Hlhs+RxIZ6-`r(V1OH8e[4No{mDUsdc+}vh#=?/g_0;1y6!w-r' );
define( 'LOGGED_IN_KEY',    '_3vpczG,BumH:I:.@NKIhZ/GyuUTlmh7!cF0mO>v6QciF7V8^%A;VtRFywg;L#|;' );
define( 'NONCE_KEY',        '0;}JF8eU]!SYnUR3A#;x*m>5O5}dI5M,Le%8#^3HXS*7 nN(dTt|ZCuxIVm]4@=C' );
define( 'AUTH_SALT',        '(!b^3Bpb@[{I^ZU|j?jv+$O)_%1-|Y4>C5R<n:1KQNX6He0.lR/4jolJ&5VmYNXs' );
define( 'SECURE_AUTH_SALT', '7>lV-`T?&O$iw_cB+4??Y7rV?(o_wO{#i! (FPA0C98rC&vG7wJ,aZ4`rmo6A1i(' );
define( 'LOGGED_IN_SALT',   'B#8w4Lin}2exY1Z[yjPjoob8U3r.o+o3KDcLRI.[g~[s%p]+<le`[R8z/ZJC%kfZ' );
define( 'NONCE_SALT',       ';F-xZY#9]l)m7H5bg8HV,R0#|*u=ycOq6!HvLqB01FMK(hDgBbEq.d#wPf*Zy*rr' );

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
