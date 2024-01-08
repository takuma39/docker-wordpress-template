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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME'));

/** Database username */
define( 'DB_USER', getenv('WORDPRESS_DB_USER'));

/** Database password */
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD'));

/** Database hostname */
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST'));

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
define( 'AUTH_KEY',         '8(xjs~5QoF=YQ4XKQw!.l{F(He?+VJBgu/4:Af,?@wl]m*8C5Bc#Gq#p0>+*F)3k' );
define( 'SECURE_AUTH_KEY',  '*x`/Xr?zL4r!J:`,0bS}%vxj5-K)Ywa$Vg _P(X{:VAj0a>L[xd}Q?}Gjs89w4?#' );
define( 'LOGGED_IN_KEY',    'yVU|zhOuD=&0B`TRn;d~b]cc.)dHffh@{/zkAh/|avtXR-ti>gk0rSd6My#2`W=K' );
define( 'NONCE_KEY',        'z=78:m|BDtgqkPw:N>g)THE}^lz%`P5s9Xrh60s$3tWKaa}7i0(oF<tQC+1zM|zK' );
define( 'AUTH_SALT',        '/2glSJAAS;Y[[xz/a9_W{H~yut]`{{i$94A}Zazg-**Rmzq+~;>K}?GR>*mT4qo5' );
define( 'SECURE_AUTH_SALT', '}i*oA~.P&E$DfGCBc$)Ek@TkIy@[^h3i+;:KJV[3$X8k5(@L%%A@.CFEaKYd}bhL' );
define( 'LOGGED_IN_SALT',   '-.5WCq@Y[c0<`hA?LI9IKBoYU6Q@NVYw/&dwgVo&bM2{6<dyvD1`a+zU7K09,rv_' );
define( 'NONCE_SALT',       'ZTrj`-<m_d4lQb`ZJ_)+8;yc*_VB(4t,7B<7v-bwvg+HRK% x/M%XZVJEJ$(Q?:*' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

// プラグインをインストールする時にFTP情報を求められる場合の対処法
define('FS_METHOD','direct');