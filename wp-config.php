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
define( 'AUTH_KEY',         'iCO@5{9rqn)&$T;=03^tb_G_pv]=zl*^QNy^3+HvciyN7]IXJ$WN7_|=I%!(QmB|' );
define( 'SECURE_AUTH_KEY',  'D+0sdtt`Hn.8H~H<Oi7W9j?^([w+Lm`hT0t5H g`3mR7KOevr!n.kqME<Ge~{`z&' );
define( 'LOGGED_IN_KEY',    'qZ&B}V;kJ1C+#qc1?+^ X_)em%-bN[5,lt-fU8H&Q+2uL0k0~nccv?$sva)t%tsJ' );
define( 'NONCE_KEY',        '.T@%BU1Y6,w:~=..D_uVq9(8;h2xXl3Z~e3Vf .b6V;.l9]|SyEWe8zi;S$OYq{u' );
define( 'AUTH_SALT',        'E32q:oMb,)?V{I*9^s%,/#a_0vn=2py-o(~AT:@2@BzJw,s!,Nq1l0{=.7 ^31<+' );
define( 'SECURE_AUTH_SALT', '/E~0lP9>pz`t%-Tw/}7r^r (:*{5lBOmF O7.Lc?*{*5dLtv|z{G{C/Vc/-+f^{P' );
define( 'LOGGED_IN_SALT',   'L/nvXjc%HgO-A:+cn[uMhm!W:o|Hel)Hg..*@ YaNu2SdLpD5BPYc$kFr0%PYY%.' );
define( 'NONCE_SALT',       '10ofp4}Z-d]#{rsSQ.~xU}rQ>$T}-kmba/<f[]Wn6eXH#c#~gye`. |MFFU+43V>' );

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
