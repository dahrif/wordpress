<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'shopdah' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root2021' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']XvasT; ^W8$i-2:r?pw59oh U@g3%<k w!aJy07c|!*b4yOS|B~,F>RQ1;K9I.=' );
define( 'SECURE_AUTH_KEY',  'd#$k2jI%L5/9?!UMT#k~10((+j$=.TLv@fv0ak!n<B^K?=~6QI&ZT^KUh[}|T/>K' );
define( 'LOGGED_IN_KEY',    'SzNa>{n<h[^fK @*/M=h@cZ~):J3esM)5KO[Mi#umH%.8$br)==+EH8>TBE/gcKI' );
define( 'NONCE_KEY',        '6XZC7?^%)[]tcTW2v[*4G^AYIMN uf<&U2~*5dt3=|N-1o:@uvE}@cjN3+%b.Eoa' );
define( 'AUTH_SALT',        '^T:,4GAajezHi&/z01iaYPY]u|!{_rM@x_yit%kZf:lX>kX(zZxw&uK$Mu5q9pS=' );
define( 'SECURE_AUTH_SALT', 'To/K )^gJ%KU~-*pY_:9h/Hv|>MkK~FY({^>YbP24!}_z4TX)Xv?swauZO~>3;fv' );
define( 'LOGGED_IN_SALT',   '{TL8{dr`u*CO3dyKvBv7UJjb-F>:{3<Sji8[UbrQh6_?SU>Q~ 8uwO8VfZYk{A(a' );
define( 'NONCE_SALT',       '`_d2X|V7vfNK}fCG2dfE{7doGCT{j7Xne-WFX+.4xiF/|y]<CyOY*PdwBea6BZt0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
