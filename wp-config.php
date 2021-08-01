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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'skarki25' );

/** MySQL database password */
define( 'DB_PASSWORD', '23528624' );

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
define( 'AUTH_KEY',         '>{sQiyWs%.(s7<+-34oj :-7]H:P{VSw1Nsg(~hEZW~uW{06TfXMr~E&p3i~n1sy' );
define( 'SECURE_AUTH_KEY',  '`feKV2GW&aW^R|tqM!kGUKoy{sUN1wWo%07x@M3Tm0Mwg9G1ke{X-/9/!aadbh^)' );
define( 'LOGGED_IN_KEY',    'xJc-!]EfbJD]-A&h:=%K(Kneu&uZ77lePs> 8Q9jvm<`|U=X7.qSZ%0FZbY58Bss' );
define( 'NONCE_KEY',        'ZzI*Y)k:sVJJ`QC=bJR:-wcSfBY $F[g._.Z$tKHVNd4J&@79}i8j]K}mNH(Lq!Y' );
define( 'AUTH_SALT',        '@7U&EpYiz^w>b>&_)EW`1!Yp$X,j.l.!fA$b.4k$V@4Sgq,$QL~_e_5wXGp9GXmS' );
define( 'SECURE_AUTH_SALT', '~cO7b#3MC*@LnMF.!dBT],kah=&{R-f%]DnH0,rQz8nY/mnYgW@&_k@I17PUt8<x' );
define( 'LOGGED_IN_SALT',   'L[Awcw1OjSI`x_@AiIBrmE+t^O@Piue93w8B`%34_^@^;8+UN=wn)+=6`ikjio*E' );
define( 'NONCE_SALT',       'cCIK|rR-bp:/IY23P<1ieg6iGY0Bw+.bq+VD58]G Hc>)[uKevO,`v.d]x)>I7bQ' );
//define('FS_METHOD','direct');

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
define( 'UPLOADS', 'wp-content/uploads' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
