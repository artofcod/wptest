<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mysite-wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'P.j5lx-2YcMwn0Opg8~eJUpKn7[cvN}kan?2N^3CM3*e^0Q<]Iaz}8#>HTOF0.|7' );
define( 'SECURE_AUTH_KEY',  '?56&&=z~x}TsLs4+hono>:CiPRm-JA@dtBWTI<,Z M`UdZpC+>Iv}|eCWp(O}xef' );
define( 'LOGGED_IN_KEY',    '&=snS+d+!s,yg.4K`M Wb-+90!Wh^|6!@.DTQY9}5;hk,sL@iRz2k>gaj }K59c{' );
define( 'NONCE_KEY',        '(O).Qh}g+F#~N,5N(hgsVrepRtLSUYpR8Q]Fi@[$lv$f=QfiLCp*;Zr-|$+/`Zb(' );
define( 'AUTH_SALT',        'b+y2&K&uCOE%I+?^~|Pc8&g4QNs:i0*8maqbv44}2uW<Y$3|]F*<5:i=cmtRDY?.' );
define( 'SECURE_AUTH_SALT', 'c#UJPCw[/71,#g0O/n/[KX{r8AK7tJ);^v4A*Y=}D.MK^Kc0:Ng.%k9cCI!*+ .:' );
define( 'LOGGED_IN_SALT',   'yV&1TS/QDIo#7a^g6vxZ2jjzW9+[66GR5nK6;68`N+@sJA.%Bu6qN=5,b-Ho&4V^' );
define( 'NONCE_SALT',       '[BL~nu#wOJ7tXy ~#!nz0)}L.i~~ J*c>C.{9.`F!U6yHyq.7xJ{QHSjm,>3596t' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
