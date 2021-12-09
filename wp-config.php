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
define( 'DB_NAME', 'agencydb' );

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
define( 'AUTH_KEY',         'scwa>0FQ<H&3v%QjN_A+M7+X[8GNT+sx*Vf*S;FT`hux8~]0sFtFy9z!tQI|0wrn' );
define( 'SECURE_AUTH_KEY',  'T]yd#*QWaa&J$X80fK=k ?^B#c1n:ydAy{s),EM:z@<tg_u[Z$ndDfJG7Rg)d wy' );
define( 'LOGGED_IN_KEY',    'r)Eayx@//71sel]R3`K{}(FzYtB86G):APS N^nzcW]7P_ooyV=9H<;w[dSM;D<v' );
define( 'NONCE_KEY',        'xE6p4-f12hoej0b z+6DNPvd_b.Ze!:FY89^+YrG6nCBv~r QTf2jX4+0s;H$&nc' );
define( 'AUTH_SALT',        'E?/(};5~3Y[pdt|+HO|r._v-VqR|CD]2N-Z-4msHu1H_bI[zF*k.O4]A2.Vf@k4Y' );
define( 'SECURE_AUTH_SALT', 'B(@8)U*4^*e}oN$KZtkzS<t7ZX<cT0yo0RG/n/);4:Y[_d`tvVRGlBx4{;y;{v`I' );
define( 'LOGGED_IN_SALT',   'CuD5|X9$!@m=`IwSr]vx1Vydnqg{h_)i(uKcLwgrW}Uqn |.SmcbVe?`9Zzz]!+8' );
define( 'NONCE_SALT',       '[$g3qEc#zCzvo~YnnwbGaJ`Srd=u~Gd39z$ps0{/NuwL9:t_DuM;eImqcV8e98)%' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'agencydb_';

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
