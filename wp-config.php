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
define( 'DB_NAME', 'prakash_marin' );

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
define( 'AUTH_KEY',         'O?V w,;<Y(8B;B9FhMM,roA?ePgo@?GI,>Bt.<~{blG7X#Ez@=Gg]&wOPnOnNwx+' );
define( 'SECURE_AUTH_KEY',  'zD9VQ(2_ZT>>q2Z[<@H!$slb?9>Z+knoSv8~uBiBCku&s7{<YYxd*+yX/M?q=Qg}' );
define( 'LOGGED_IN_KEY',    '%uS]gAjbpH_?mJK.y#[b3,.NgliK.j]f|BcZuap#v]-+gwl:s@/$)6sAiI8Om*@_' );
define( 'NONCE_KEY',        'DDyj25@ahHJ6_f}y $RfjXU2vUnEB[#e[KEMd!/3%JG2^3bIahzZ@pTzUsc_,Byp' );
define( 'AUTH_SALT',        'z|!H&+<s(D?B|i#3+-YHcR$HwhG9_QEJ(3<HjTbwRAz[ej1(-tQ_vi+8RMgO>OO ' );
define( 'SECURE_AUTH_SALT', 'VD>N:eM4%;~a!.{sehZ=6SP2:D;k|MPZjXd8|[|76RfV2+y=6CC^}veO;~?p[X+l' );
define( 'LOGGED_IN_SALT',   '?}ooPM*!|lb>^^xvkHEDONgld} WRezUTYajRnJn*%_MA2Q5d%VytYOCweWzbpcM' );
define( 'NONCE_SALT',       '2#P~]a%z-e(d!QH-RSBS,Ie1}^<tx7j-w,EU<`oeyjEuR@Iar:-Cm^fFQuMO-TsA' );

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
