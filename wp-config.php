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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '_FOO/J 6yYE?zL_n*XDP82sHN[NT}ddz`c@m2D]&Yg;e1Qu}48aM<r+;-CAmUu4>' );
define( 'SECURE_AUTH_KEY',  '9;boZW8b;Fs#]/bPrJ0G#@)TaThbH*]5J?ZP1wf9lM|[z6 NDZ7H0oT/}A(x{W`b' );
define( 'LOGGED_IN_KEY',    '9N/;fOHw,<J&Gqz%BrY#/_R8yk&sWajfNr/[u&-to^RcIKG[m6IjZ~a5R4@an} V' );
define( 'NONCE_KEY',        'pnI)aY]ckTyxmIXHS*<=B(g` }S=a4GV-vP<_djk2r#qiH|pSYE-$~9s~<>$5f$b' );
define( 'AUTH_SALT',        '-1Gcu77N:H.U52`UHl1(Qsiz*i:0=C}6;pa(Nozn*oVL<?NPQq@oib-f;XcL3QSB' );
define( 'SECURE_AUTH_SALT', 'AxtP##f~(fa}4$CXnan60^UkI)Wlp^m%mSX6yt~*7.,9ma3PSq^`eQBsB{LXsAKh' );
define( 'LOGGED_IN_SALT',   'G2O_eHmhti&X%);`$qm8sjyL[e+7v|t?)a=:<t_ W6N>MEvDy(!(ui7F`ciZiO5B' );
define( 'NONCE_SALT',       '_He>/Su5i8d8i)mCBq{HQ+^%eRvE$.tpf$&kT](}DU.wIj=LvH_{{Ux[Y:xaCTrQ' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
