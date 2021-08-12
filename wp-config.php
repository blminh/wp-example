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
define( 'DB_NAME', 'vaniecom_co_8e434' );

/** MySQL database username */
define( 'DB_USER', 'vaniecomco8e434' );

/** MySQL database password */
define( 'DB_PASSWORD', '8e43418bd96df56c6' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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

define('AUTH_KEY',         'h7L>Y6FXapg~N0.0 %2e|m:;a-9+^67*FDO4qJ2&!E]H. Apc@4HqBr+z<QXOi-C');
define('SECURE_AUTH_KEY',  'w|@cL/M2|<>%|rhlnPm/@+[?|baw27y!^[l.0C8,XL-tr1T1@;(0;P%I| rUD-1<');
define('LOGGED_IN_KEY',    '&V73SD*)<Xp{NaS+aA!k{@dr3B3,;OaI3VQ,sqb{`6$<BIN=:`B4}p}&JbgSK5!<');
define('NONCE_KEY',        'LhX:O^CLX93+:U>wgg<U71P~[pxJ7#bs8~,$nuVMIC7Cm9z8zg;U[cJl{(X1SMzs');
define('AUTH_SALT',        'BI?:&gfjc?B}XHb^qRD3F)]KcW-pShd_-n+;#&k)&E1@ E_O4Gi,QD7aZ.8A=B8=');
define('SECURE_AUTH_SALT', '0|+Hodj/8d$PCKvC.8)o{}ET{[>ca f)&O+tYF8dz;uQIsr-eN$h:-s|D}&8WV?8');
define('LOGGED_IN_SALT',   'b6v%PLvx< gSBFq>x?4+eX5s,O)k2q=<buD&??G<+#PQN.%GthC4R4ao!F(e:$Te');
define('NONCE_SALT',       'Ch*{/$?-BZkO%AZ%G3Y=%|>S7BG/VC fR{W[Yw5A_mYHV<;km+{_aCxmd#SV7;Z-');
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
define( 'WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

define('WP_MEMORY_LIMIT', '128M');


/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}



/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
