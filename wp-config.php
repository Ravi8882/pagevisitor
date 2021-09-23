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
define( 'DB_NAME', 'pageviewcounter' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1:3308' );

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
define( 'AUTH_KEY',         'CQZ9y]#*Ly0V~5VJOq_J :|xlle?(vn9.1=Yd$<WuogIFUvby{<N6LA5.DoKM;xh' );
define( 'SECURE_AUTH_KEY',  'te|C)g{^ (LU%y^6,zz8*zZ]1K{)z2{-3m:jFE7Bk<Y<$EY{:3fKm^y.tSA@N8[E' );
define( 'LOGGED_IN_KEY',    ')^>o5Qd9Uu-mty:[Z1E}ijdaY8wmb?uwms*7!-CGd9Ms8|L>gAB)&ZWw<% w[zjx' );
define( 'NONCE_KEY',        '*u{R-X-Itu4[l4.u[mo{D:wVt>Ep?4n7Uhl`]q3wN! 5cdlBiq{{pDbKtQ^mjkQ#' );
define( 'AUTH_SALT',        ';Gr84{2@x[Z(]}Gv(u>vwhY8N.k:{Jc5><QuG}q](b1S(D_ SDqpH1/tV5@Fm&>Q' );
define( 'SECURE_AUTH_SALT', 'vn7La$b2]iHGHPaRN&RI$@fz~`J&?n1R2&}%4%!@~)H+13f 6481:T595w@~UtRt' );
define( 'LOGGED_IN_SALT',   'Rc1$1d#w#cqcKHaNmMum #2.fN|Fe]22j|9qNAawY}4##@9HodFHy>nqNK[96_nw' );
define( 'NONCE_SALT',       'S,e).#.XtI@soc}epFbxPf8C]q`7o(d6J6zrilS/,KJuifyZZoY.d=+*l}Jgi`NO' );

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
