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
define( 'DB_NAME', 'livestream' );

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
define( 'AUTH_KEY',         'I[a+`?XYRVL_s-3}|ccEm:va-C!KOxryH~6GvM1Y(P#bwz&H+mg+$3jea7^U1uZ$' );
define( 'SECURE_AUTH_KEY',  '3d#Utuk*2nD(&D=$FX!v17xGO,P@s8MS`*5?CNZ5mE:PGcu4-&yf!sSENcE6:Q#}' );
define( 'LOGGED_IN_KEY',    'g/cz;z!Xt5*h<_8R^{*bN_qN?XGqn-zRB]{9W3U7CakhKtgSXQOkTj?r3 H|k~q4' );
define( 'NONCE_KEY',        'GJffPoo*Xt&>mF<`T=7&9`&sZANUX7/EH@J[DRGJ<X;^yPW4;l_V>]Es1?tb]b7d' );
define( 'AUTH_SALT',        'm/&xa^PcaXGrlhGj9A.X*5,w[ZE#dic&{C-xDDvB4z}2Dy+U14n$PJLV+Nfg9m?u' );
define( 'SECURE_AUTH_SALT', 'H*aFYJ^-6ftyP,b*dl][z=Jw:@Cwc&pCTA21:m!#811ocoOI#PXv~9WE LuzpH?L' );
define( 'LOGGED_IN_SALT',   'h&1|PPb^t4WkKw({nYL_)$jC<2vTeSP;LX#B?_tb)/;1j:97G;-HYl8JBDG)z=8>' );
define( 'NONCE_SALT',       's*@yUw:dL*&Hlb=@}G-z>)hsQmCk.Va)ch;;mb?;}is.?~N=KShiZI?}:S@xboB?' );

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
