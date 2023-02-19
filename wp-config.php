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
define( 'DB_NAME', 'wp_db' );

/** Database username */
define( 'DB_USER', 'psychval' );

/** Database password */
define( 'DB_PASSWORD', 'wpsecret' );

/** Database hostname */
define( 'DB_HOST', 'penguin' );

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
define( 'AUTH_KEY',         '7!U=0MR=$@_RJC9Dr&zCb?N%o?>w+E!t6CF<dkqa] jNU+9HCx}{K$]|h.-bL p}' );
define( 'SECURE_AUTH_KEY',  'UNsvmI&8M3~wW6ax/>>b7%8%W^24rhM}aCE|1G,(D?= !V5<V-WoHWMr#2I8zM[H' );
define( 'LOGGED_IN_KEY',    'r}te2:CtB%1z7h$xItQd_6 4zA$8H4OHO~&vu `)4N9Gr#G>nj7.qYiciKyU*pZO' );
define( 'NONCE_KEY',        '/>VM|;?k.qTNy59g!3fdO=v:duNg=](@s0ziK^L[] $)_G;_l0]C%S}@d]Kk[),2' );
define( 'AUTH_SALT',        'asfvZ6CD<7w~)YHg&_i.7J-W:}FD[jJhJP$lS]&XQMe^BE>x/54/bp,Ig{Rj|v,8' );
define( 'SECURE_AUTH_SALT', 'FF)fD:U`tV^A$W#j]=`XR;7s Y}LB(Ty<g//agms+]YtCl^%2[kIaxUtUga{KS?E' );
define( 'LOGGED_IN_SALT',   'lcciY0]vj$`o~uC2ucn_.@P)W^[Km`T@r43j*-Fj[vL9+//: 4{Ya7A@%e.t-)kI' );
define( 'NONCE_SALT',       '-@o;J+w@G{vwq>G1qecDOT`(:<V+s/_SE8Bex|G9KaEI~]D,4~q~x`&%(E/Bqqd0' );

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
