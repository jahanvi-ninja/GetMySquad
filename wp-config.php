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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'getmysquad' );

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
define( 'AUTH_KEY',         'eVBp?K6Al1bD}71>(d8z|A:WzOh.j)7@zovA<E&BWlgSI?,(8d5#&L;L76&Lj[EU' );
define( 'SECURE_AUTH_KEY',  'qk6@[~FE`%05bbJU~j#_2w%z{NDUzJ9d@n 5bxe$%S`SE8lv5CY:wHT&-%]_lfx`' );
define( 'LOGGED_IN_KEY',    'aWH$cFOu[#4vO`j->PA%m$j aWSp[_;N h?&[xvYtEW,Y~8Y632+%QB:KDu0^wx!' );
define( 'NONCE_KEY',        '#8]A2)6*bulJaybuop.=nWa!,z[C!^.;T#3wQgP[1O;P%tE:Yb3EXba?N49?yNA9' );
define( 'AUTH_SALT',        '?R~ToCfu?Fi-(v|h#/B$<#N|zl[v7e;L1lI3xjz>^xKdGaHTP1pc{kI~,*tG/-pH' );
define( 'SECURE_AUTH_SALT', ',@,/S~G1NwiuffTt6jw;Fe`43pzVNhC|.i]nsAQ?YuD_)|@USp`X3g[*UJPY}YwL' );
define( 'LOGGED_IN_SALT',   'rVy>rV5nNg~=Jb[iUmH8%NLW/T]4VgM#sk}dt*~pI#bZg%<xv}x&qC/<jhnZ2C5o' );
define( 'NONCE_SALT',       'EU.g_saD;D0:zN.SUd34o/?`7!Js_0SIhYcCQZ)r+(wq[%C`b*a8m1B_39(*tcKL' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gms_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
