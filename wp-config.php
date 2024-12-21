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
define( 'DB_NAME', 'f_copauyuni' );

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
define( 'AUTH_KEY',         'W(,V0!{11P0x-PeL]:i_uk[s[B=][N3,JzLE5O6@tXqgyW;m@ye36Tl$J?#eg_K6' );
define( 'SECURE_AUTH_KEY',  '::CAkhYHU&?TJR%q, 7JbI*Dq3<Pp~>IV0DYw%{Mv[k]11FdG@{i]@cnrEaP@C[l' );
define( 'LOGGED_IN_KEY',    'ym38IY;+ERr8A,/{@(E(UU>FRMysCf)#x<UPSCx%`L9H22e?m;XPEHJi=m SE+hg' );
define( 'NONCE_KEY',        'Zp47I YGc?!v{9yOCST#BCLBlvP%CutW2Gd(j`Tw}1d^1jY>(j$Ak+eRlQ#Dg#qx' );
define( 'AUTH_SALT',        '{o?bPb9K>$]<_o%jQ+gsDx<~GkNGbk)l?1=1u8!hW8,hNMsK{jJT8_}QN#m<AWKE' );
define( 'SECURE_AUTH_SALT', '=BtE_N^Q@GhYso LD$r@I&vfxq@)&@$MQ;r1QADPh:B%uTY|h,(-7SB,@eo%+Q^B' );
define( 'LOGGED_IN_SALT',   'R[<?#Vn;LZPf,_|^fxnYw]5n~xqmJpz[^8ZC}(6{0QrH4[XilYWva!PXk,yX8%n^' );
define( 'NONCE_SALT',       '@6%EcmXHFbqp~.OAD@D]aw j]b~+Q];3;K_~rSI|6lUo*J1(H,}?_6Tm9,]9C b!' );

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
