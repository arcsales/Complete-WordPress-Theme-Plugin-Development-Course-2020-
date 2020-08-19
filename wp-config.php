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
define( 'DB_NAME', 'wp_test_db' );

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
define( 'AUTH_KEY',         'c=-^XsdX@FM+J%PZXP=H{Y<p((I57@|aDj@b@?{)NyG)5kh jI*XX[.4`8-WT! O' );
define( 'SECURE_AUTH_KEY',  '$qL{}2Q]2DkW><Iij(5Mel2SUwaWNW}Nl?DY/rD^3^`](l.+#8?j_Bp$YmA8+$x#' );
define( 'LOGGED_IN_KEY',    'g7-GqOQ5O$&Durs,u.zOWls~NizJWqs&qR?RT40IlCX1?xgzlP6[^~af($;U1WnS' );
define( 'NONCE_KEY',        'GVv|0]0h$@!v_<<u=38<rAB22&u=qsM>uBMUHZ8kimvXe~DFHf[SM97;C4tVUVw%' );
define( 'AUTH_SALT',        'B.2,me-8l|pZPcm|>}+U+wLq:<2d(0P0MC&lF<cf6 I9VQ9NQSTTnr;W95J)iOs)' );
define( 'SECURE_AUTH_SALT', 'W?_`DR3Xy9$$4;Eo)Qf#X.yi:g[uQ?`k4`AQvkM|it:g,fXw[K;OG}EEG2vyL`.q' );
define( 'LOGGED_IN_SALT',   'Z6R*59>yfPZ}]M;qaHk{JZ?Y`Nlr4)w^T+6WNW3D8?}H+?$c7->~JOl]w<Z}Ks<]' );
define( 'NONCE_SALT',       'MZ|e,>}JLuoZ}8_dVw[)|<~}O8stl#NZFJ(2tHoy%sTHVIO,UC/wP2OTEKfO}Vf_' );

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
