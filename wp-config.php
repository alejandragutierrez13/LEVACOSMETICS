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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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
define( 'AUTH_KEY',          '&[Pq.!_ihI?xmuv/jPZr.nR1~!9vYKa^=_gvhW7 C`se?p8RlyeT1;(t(`Pp/T5T' );
define( 'SECURE_AUTH_KEY',   'K8bexTF=+3+MF3o4^g0Uj<P?.sVHCadOkL!G.qJ0X&u?p+G.Nt g`LjHv/$RX;Iw' );
define( 'LOGGED_IN_KEY',     'e/bme7AG,W>@>a8S]$5,gUU1t_8yv9bN/LZIFEEG#WW9 xecSd5` xT[}KH~fjsE' );
define( 'NONCE_KEY',         'z+kL186N|t6;M;}mrb{Kh~}GfpjSx(buQ..v{PP$e:R[-B4qiU2#Ow4P4jjQ$;Jv' );
define( 'AUTH_SALT',         '>PoSD^[d+#V;IRKk,$`<R~l<|*kk@]YH6PXpf!KeuD,DiJ3fB$ux5!pU%DhL>TE2' );
define( 'SECURE_AUTH_SALT',  '%..%U;Myf~,.DD,-HPK6Ou.~q05?|mD4_vZM?sk.|=sZ!BO-Hrxs302?r9ByrT<[' );
define( 'LOGGED_IN_SALT',    'S!mcFU+`XRIL-ql4~T@Do Y?L#!l^,3j}S%O@A8Fo#&zWn0V?fn40H?zHZ8wcHd,' );
define( 'NONCE_SALT',        'arl^=4?P*z=:erR$o((f$Q966)fWcU@}A#QitJo9z#<;4Lr^_w+{P6E+6<m8efcn' );
define( 'WP_CACHE_KEY_SALT', 'f0?pQ*Bx-^vT9<2MyT/{:/>`z<X;]pTi%&poj$eTCC>B4vx#8C}QOdVVRN@-rpW<' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
