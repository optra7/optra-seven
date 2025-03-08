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
define( 'DB_NAME', 'optraseven-db' );

/** Database username */
define( 'DB_USER', 'optra7@site' );

/** Database password */
define( 'DB_PASSWORD', 'optra7@site' );

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
define( 'AUTH_KEY',         'trG9](J}l$z2-k5r9*YHc`,ZO!![g9D9HsSswr..;a,fMq4+a>U#m%^)/NJ9XVo.' );
define( 'SECURE_AUTH_KEY',  '.Chh{G(#ri(.xGKJw?^IK]sx|W+rLtNi8r[gw16%]/#peF.~gm0d~3vwR;F|S ~<' );
define( 'LOGGED_IN_KEY',    '^;GDI;[uLo&|[tyy6`v]Uv|ekvX>N5qN39lwEe1tRqmrLOUD*)z) .XbeC/{)ekt' );
define( 'NONCE_KEY',        'b$X;X?q#bC@MAyLfH8Wy|UoIh!~aC*jGZF#J*@^F9PO/)Llo3 VJ-A=YQ/M4HZ:t' );
define( 'AUTH_SALT',        'dIai1.;yh]rg;2vJD=xZR<=<u0(Csk4rNs#sr9c(+)gEUvtjbdvQJ,:SX->#Tf?p' );
define( 'SECURE_AUTH_SALT', '`=TnZ)-6#sf}YO`r/J|5~`9>9=>HDimzaM#dxsr/^!~+mm&P5zJ<PH7k:Yv.z&PJ' );
define( 'LOGGED_IN_SALT',   ';ky*7hOT[0zs!0Su5PIfNd;XW^VE2+R~S2U/Co%({vfAHAHTygyTAo,FnHtctz0&' );
define( 'NONCE_SALT',       'RaRT1wY2)vYr+MfOh%fFQ5MB@2&emzgRaK>/c sDc5xGKV5[d?&fHWu@l5(hMP#d' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
