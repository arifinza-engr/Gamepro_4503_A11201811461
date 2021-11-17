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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ' &4b/up?qq>X)Ra/TriRM?Lw:deNmm*7ev}8fVGMd>eBv>R]vj~=s) R]eXq-MkN' );
define( 'SECURE_AUTH_KEY',  'tO+33QP]{QAwF=h7HL1ioSz)n|9=Xf4LXQ{ZnbN~KWEk|fY6[kGo@WZ(}~9>:$;/' );
define( 'LOGGED_IN_KEY',    'lVE@HKcua1VKHtbjI(d8V-HAptyO7em_U2}g-1+>5~wl+YmcugW_?)qpbc</|^Q1' );
define( 'NONCE_KEY',        'rZCvD5/?P9((nD81jG#N64.SL]Zeg=c+KUYvd?;xnyPY9.T<8Ft]4x#!{Re6A?T/' );
define( 'AUTH_SALT',        'JM3[_<>}R;Q N)ei,w7]$z$nJ[pr@!2*_|Q`?Rgf>3<I.|YIN#jpgIHni#iMF<hA' );
define( 'SECURE_AUTH_SALT', 'NSVPhGkKDLM.RKRB~7xoIX_)o{Gw2(o^rXcdP[#I` =ivV0;D0w^)sL.[[.f>BB ' );
define( 'LOGGED_IN_SALT',   'mx2]=)DsRet*idb]=%QBWHKT0pnOo!&]G!!gqZ#x14do>oCvWV#aKH(Y19o=jNjU' );
define( 'NONCE_SALT',       '6vR6/<#)[+l%ll$R!@,amf7ee|jcUOqW_vi[XlB.fy<S<IU+%vHt`k,c[w V:8.{' );

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
