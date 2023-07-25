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
define( 'DB_NAME', 'ceripad' );

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
define( 'AUTH_KEY',         'U ])hiQ7@<&[Vs?i5cL_$UkR^!kB7xn!U4qk9a}Tm|0CDXR/{sBq M4aJ[Uj]-]%' );
define( 'SECURE_AUTH_KEY',  '>lfa0.;~4r~Rj%Ju0/bIG$B7<oB6p?3$.*MV/32y(JXVi76%L34&&gIOsS0&%$L=' );
define( 'LOGGED_IN_KEY',    'j b&*XXW+McdI`(G,+Zk:7Bd3D_T<)(SNKr:g b?L/b$a=O939q;*,&oC<~n/oy;' );
define( 'NONCE_KEY',        'c[?t^PEXd[(I2^8=+rU1!s3Dy@496T+539AGA9vD;t8M!v5lXm[Y>Ib]4zL1CRNh' );
define( 'AUTH_SALT',        ']yzB`{GH#4s^+NVjbkQnU6PA%B)=rNqWg]PO;NZ#l,/M4@+qU#&9BU7:q9SkZi{p' );
define( 'SECURE_AUTH_SALT', '*gWydbS}SZ5obI!}jOQg6&V x;M@W#C,Mt%h9.?x4@y<oMz9Mn.oi3)$BZ)Uormk' );
define( 'LOGGED_IN_SALT',   'S$_jdU$uL>E>j%oIYmk9L@O}Q7EMyq<d@iq$ehHJfb&]tayOLOX)q.lqcFE+Z~#L' );
define( 'NONCE_SALT',       ',Qgs^`Uk v8:9wc0;Z-8_WfFzLLsOmlO[u?&GnWeakZ|-p(cA;>0Uf7_s?yh$#oQ' );

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
