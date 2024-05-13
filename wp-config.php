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
define( 'DB_NAME', 'WP_Project' );

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
define( 'AUTH_KEY',         ' B0R,>-D(ZOV[byUgDpVf@Hjp$E>5Y(_MM-[d=3?t |{,JT;e0kI!h!9B~f!S4!z' );
define( 'SECURE_AUTH_KEY',  'voQ(!{Vp#I`/ftg8kUhlIk^A 7jTTA/BJ31v(-I<V3,iA4n{qf@@?6/R~zukEd^q' );
define( 'LOGGED_IN_KEY',    'r^^T)Tn`CP#2 ??wbi?P:?)Ji_[C@B){~G.,9o2{+SKoat`d,[@zq1R^rPZBd_,P' );
define( 'NONCE_KEY',        '3buw x52Xgh-<L$itCcU$(EtT{z%@|S7zZZ6{4Bk[x<N^*>m:{k#x6M3JR3{;G>i' );
define( 'AUTH_SALT',        '[*IU@pnygic`MchU!^ -Y8/2S.rhwTxJiW_ep;3Ch}1Mn0mGj`v[O%s3DLFm~CQT' );
define( 'SECURE_AUTH_SALT', 'aX&Yf[rdvCM,1:GMVt aT_zG6NMZm`Jbh0qsExQMEX#tw!45fl`AOA*(gw1`NQ]r' );
define( 'LOGGED_IN_SALT',   'TGgL~e)y=Z=vCBw%d6vc-_b_4+T7Y1Pg{rg5<_ibIzv&!T^Vq!*^^[IuCj.u5{+Q' );
define( 'NONCE_SALT',       '}v!Z/ axrtyo&Yh0P,y25j/T5hA4UjxbT&5zN5]_3JCs_:_$8<E~m%X&CD>&RRcr' );

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
