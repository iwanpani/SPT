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
define( 'DB_NAME', 'zakiyah_laces_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         ';^o+ZN:uq*kSG:02dk2v>.PtuV=A*d+G {QZLv+DCkpeJ|DitTKWxK#E^0!ln$fx' );
define( 'SECURE_AUTH_KEY',  '>oLY1cmc0G[j~qexbawVgkxvjG~8]b{N>~P%sD!hC-YY*TOK=5`p}oCAJ:2Zgy0m' );
define( 'LOGGED_IN_KEY',    '3eMV},$Q.L-NW<^Y=3^WSsE[K}-FQ48]9O}.?usG<oscrazR:@|Vf)SbfV}Y5q4 ' );
define( 'NONCE_KEY',        '`Y^fau7%TI9B/*dZHsYMs45;#B@Me;^Sst@)pHChwQ3.&=lnh.{@Rtz4m$~@.vfR' );
define( 'AUTH_SALT',        '1PFGSmrR;V*K-@=;)_A3=ybtEjlRNa1FW6_Kv(9-!c<OspV_x{BTscQo{%Y7xaq|' );
define( 'SECURE_AUTH_SALT', '%)r:f<0mx/MX${|o,:CX0K@_=zehaL<rC7LV|mvh:oF4<[3iIe(0>HUc_rPMSv0B' );
define( 'LOGGED_IN_SALT',   '](Uhnzpk*i5QF_0zEMW$G1,p|cj-& z1c`5%AR 7PKTXxD(~B`*x?kZIp0[: t.K' );
define( 'NONCE_SALT',       '7h-Ptbsw)TY}`tubD,dO,pBlCH-_VipV*<*ln=|<oZ&3bBE)s2l$_@g>KBVpe7{o' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'zl_';

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
