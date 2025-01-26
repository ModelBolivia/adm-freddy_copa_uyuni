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
define( 'AUTH_KEY',         'NW) pVd70OV#0>_1rK1=l{GT[XLuJSMV6:6f)EEd}9EktBZO$y8sdO-l,%~RM]?M' );
define( 'SECURE_AUTH_KEY',  'w7.k01[1.b*^H1CYH9gO0|}%Yyx-Dj~:fh-ZTzIY7n%S>)OR}V:Af@4e$,C|`)67' );
define( 'LOGGED_IN_KEY',    ';9Up:>)E9~|rh3=B`*$8PvPDpa{.}I<{FKe0i+E-uBwM@Hj#1JLH#+E8SDT>-P~L' );
define( 'NONCE_KEY',        '33XU.ZwC>]g+UhEOkm0EB3w!Q<5i9x!|$VJxdK(0q(hwuIUhB*$1wpSs>#dRTZr4' );
define( 'AUTH_SALT',        '$t?VVnFR:T=N9_OZqF#e}]+|DqCfntR^#&([SRr0.G:S,1[6CV0plajJAJK%Fa/P' );
define( 'SECURE_AUTH_SALT', ']j#60|S4cK0S^ .>nAN(CIs$kT-{t8ZFuMTQol5>?7|R^j%6($x=ZdSK|-X q*7)' );
define( 'LOGGED_IN_SALT',   'jJgOY7:~jc)Mu{y08R[xBPTQ_zx1>64omk}_5lT[@$81p4wObZ|5&e!L3ED; f*&' );
define( 'NONCE_SALT',       ';LJkH&da[Uj1eSsMrkRps9+mQ~SC_BpgEK]5FVd$j2I Hy*$IRO,k.]uuS]ebe9O' );

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
