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
define( 'AUTH_KEY',         '7f-[@.qfaQ}hj>,,/4dZkclW(gXwBweNCM/g4]E1w[JK0.Y?MxwQJZui9;:lSWP_' );
define( 'SECURE_AUTH_KEY',  '<Do%*>42loP;NJteG1|Mv^CeZzo`W>Er0H|<:yDQ{|Np!c*j!lNCnqm;w$r32lRm' );
define( 'LOGGED_IN_KEY',    '(7~a,3xg?|s7y&9iHGom_ jV$=k1cwH5DM6JCZ-7<PzeMj|k=dvB*J(y:#_v@J@W' );
define( 'NONCE_KEY',        'B|[F1T^Oe%cZ7V+T$lcTB#j7l-@0I:CAGO2g?U=+KW?(SL?jv}b.X|z5s)9=Ov!B' );
define( 'AUTH_SALT',        '?X.Kp69?aY;TMl+KwS7I!l0rzwc:fI25OKtSmliTDev;?d&$g#FSW2Nxy+)!B>M+' );
define( 'SECURE_AUTH_SALT', 'k,{wHghM;0W,0sNLee!nX)%TF,VISalkZZuV*u<o/];6<8jyO1vHH}wQ~uoYm)#G' );
define( 'LOGGED_IN_SALT',   'Kx{X)L+KApxAYk<r(d.nAKK-}MkAr-d~|zU41iCk1W.B@O36aMe5<+_w4Pg~~%Ss' );
define( 'NONCE_SALT',       'xp}@7ZBuxzS8RGksoy.XYt(l@,iGYQhY&!5aT.M(^~[2}@wQH%M,<o);_Ai6jd5_' );

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
