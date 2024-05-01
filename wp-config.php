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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'task-erkan' );

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
define( 'AUTH_KEY',         'cfCoFfk*([gn!y:eEWhi}/omrD,<(7t$].[JF3$L[/R<<O^9S)E(QYRbkO-D)T 8' );
define( 'SECURE_AUTH_KEY',  '`w>h}` gtk8s[l@glfpxnR~!^ld`j ~EPwBDte=Qmm3{ HF;~f<0@@}#*u|eKtG+' );
define( 'LOGGED_IN_KEY',    '#p>xq;XZB),K}~!YxSvj/Y_M/25K<H?,e)83b&HAq`0,]-s+,wZG%e(Kj&%2w$JJ' );
define( 'NONCE_KEY',        '_Vsn}YY80Tf#aTvS#e|s*0(3zN #Xn586vw@x2]lFiNx?Nkbfctvl6&jwH5(dgD#' );
define( 'AUTH_SALT',        'E^wtE9UW3ba#x _I4f${p@EKxF)}Xp@-C-y{2`6J,:k?,mEXlE$Bnff!^Hi$S:1D' );
define( 'SECURE_AUTH_SALT', '5JPs[nUq0B6Ww+7[Qb/jHS7PiDa6kd63_!ShLH!GVUYyA5{|1H+%mG47^1p4.8:;' );
define( 'LOGGED_IN_SALT',   'oAydhcG_2&#,%Ev+>B}$x<HQQ,sth&;Lb/Z:m|rf02pf^DDJ7Qr[3^Ji([Is17nH' );
define( 'NONCE_SALT',       '17Fu&x/!{a`np9I!.r%;aLL/UWI/<,[oV`gdPmD^JDs65Y>-n#+g=$<CzC!Majas' );

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

define('FS_METHOD','direct');
