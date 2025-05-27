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
define( 'DB_NAME', 'adm-freddy-copa-uyuni' );

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
define( 'AUTH_KEY',         'o/!yTQ=RP]Q/Q.h+F.?6:lFnQ#^|(.(|s]Eww)U~#9|S0]GHEP^,k8I$/W|v&H&|' );
define( 'SECURE_AUTH_KEY',  'x*S*7b#Jt_@GOgXc{bMW6dbbeqy-~NU%}YQ1,6jy)m{OEA@ICunR]6nJa^rx>GYN' );
define( 'LOGGED_IN_KEY',    'z9 z ?#k/rLl=hZ^k@^{RR-Z@^uTan=x,+taQl:O5J~jx8`1JF#0sT!?m,IHm%;C' );
define( 'NONCE_KEY',        '/$#xhfYN$zH%GA|ARE9+hG,8N@r <[Y7g39%,al_o8=sk7Z4p^JC{&em%-ndp_SR' );
define( 'AUTH_SALT',        '*uJi5OgKj^jcO)jU#y~r3CzGqDl);;>Q,^D)=2f1)uL1+Py/0a?>GDztxY|A:?>l' );
define( 'SECURE_AUTH_SALT', 'U4(^?tnWZZUmbe__w0?IeZw[44$9 F@o|5E;d;i|=8|?{&Bsrz6FvS$Ku>!b.]`0' );
define( 'LOGGED_IN_SALT',   '_GJlK;s0i)4lc:e{hZfi9$r!`VGE7f1@lIst%>&6=V2mKF?0KorIKu%C1f$tw8u(' );
define( 'NONCE_SALT',       'Pc}PPD`aV4<-h-E3>~-7K4VYb]QsS+ymQx9h*l^{Bp3$Pq|Y>I0>uaE|126x6cv ' );

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
