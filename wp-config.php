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
define( 'AUTH_KEY',         'Bf8[;tx[ c=lP$eIqNatWVEgU_!b8B?fGYQTD sHlp..eJn::=[X[a8,cX+Q:OVL' );
define( 'SECURE_AUTH_KEY',  'jQUJNH@3Q[S>e{s^9 F=Uj@(COSU@,%E;>3<OF_fc)VB+p_TwXq8CFnIjM;|u;Y.' );
define( 'LOGGED_IN_KEY',    'v)k[#E8O1$x~3)y82nf=9gz/SWig9^Pf|Vf5%,*P-f!3EzV8.dwxV&c&r6>!x.tx' );
define( 'NONCE_KEY',        'si<U3<$yI(3%AkM&4&_WDm,[oaCee#HFie;=Ifez &SGClG&tY!:=;.X4c7=nC&R' );
define( 'AUTH_SALT',        ':.KmM^cqczJ/K9&W%zD{a*Ilv;St-!o4tf*AaaLd&e(DDzw<CzNx5JhK8w(j2.0|' );
define( 'SECURE_AUTH_SALT', 'xw[!7^f~9>:Fh(T7]12na/.L8/o`G]!hUzX}kCw5|dvYQ=c9&*}U;z_^iJ4tLL&/' );
define( 'LOGGED_IN_SALT',   '4uY[_,PgR>ux#Ws%z)6SLSjx`}xkdQVS_42Sez|DZoYIA|uKWUD?nQc<LAMUG2@a' );
define( 'NONCE_SALT',       '}pu+BV3OdU{iG|:^Uw$O3d{Ve+-#5EzKVaBv8Gk6K]E8x$sP({P_ruj{!r95Sepi' );

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
