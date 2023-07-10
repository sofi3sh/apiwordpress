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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// Some commit
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'server' );

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
define( 'AUTH_KEY',         '~amYDs9G2$*{?55rV9TRvv;ML$SHAc7y>=(4,^00bwG<el z< p6uGB~f^fPq38&' );
define( 'SECURE_AUTH_KEY',  '`X%G#Y>w=HWbU8<)&WNV,F@wxwv{RsKynHR,un0D F]uk1g(f&H}svFFQ%U#u[D/' );
define( 'LOGGED_IN_KEY',    'qBbHW[H--sng3DyAI|DuT$Z-y1 GkfHi(@g}eW#DLufo Gdw>y8j-m@[&!seg& R' );
define( 'NONCE_KEY',        'uH[zs+}#}4_O-i9|BY&=x$p!;^rXhA,:M6tY4Spx#o?+y[0q)=X5D~erDeZSZeQY' );
define( 'AUTH_SALT',        '//&G}yGtR H~XR*%u=dN_Rm.[@+lQ}7/s;E1BJfSiRX#(+iCHKF>x$]=NeOcwfvI' );
define( 'SECURE_AUTH_SALT', 'QrzXb.&lF=nG@3]~Z_+2Up/n67_kY?&.m~Y3D?;/Ae1vpW[<t^fkFtk>)vvr3l7z' );
define( 'LOGGED_IN_SALT',   '^HqJjPfC<-^WKI|`Hn=>M#]I`h{XO;gH0&3J80pNn~%Hq<W0J~|/VbhyC3)mjFRn' );
define( 'NONCE_SALT',       'FJhQ8C+b#=,h*!~3RUdN[e);Fj;j8Ad8AY]&ay49C94dbmp@}LFo.FS&.jsM59/m' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
