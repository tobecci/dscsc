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
define( 'DB_NAME', 'nscsc' );

/** MySQL database username */
define( 'DB_USER', 'tochukwuojinaka' );

/** MySQL database password */
define( 'DB_PASSWORD', 'developer' );

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
define( 'AUTH_KEY',         '3kP7?r2Od%gtjfLIn]|*xWF~/B]]$}os[IkiP7f~J+fJ_LNCT)Ak7^]-qTUd@9@/' );
define( 'SECURE_AUTH_KEY',  '^GI=f[3&RETVW.7glo*;zF};dq}jb9JLH4u{/<A[hjv5n24}(v2*kBAi2W={<f?d' );
define( 'LOGGED_IN_KEY',    'D0Jc4*-,m<PlT];fi:?pa.lGw(/})@0q)O7qu~$f*8pTE_BBC%M8L||j{[;D3b_`' );
define( 'NONCE_KEY',        '_WN_?6oDN4;|?vmHd0,zC8VSiLE07]5I+3)5$cguhqjk#>&^VbL>_7jJaacV(gE(' );
define( 'AUTH_SALT',        '/&jw[PY7lmqE*<Y9SJeX|O1gCp8Hu5nD+V4c$? &b%3,07oK}QX@r;;Q1#Ko=Wo7' );
define( 'SECURE_AUTH_SALT', 'c{;83GO/Wu$RU!m9RW)e D[4zJC0w]Q/Chx6tmPhG;nUoWv^2;=|aJ=YxROye~:_' );
define( 'LOGGED_IN_SALT',   'Mu~-e=JjoN4f+:#$bqr%1e%1k U$?ZbTbSa.1x;d.*x^}nS i=^;^<`#wMEuIpPB' );
define( 'NONCE_SALT',       'InD6cLaMOON&ryeyF_ICBi%_;L+F!>MCUC53CoeA:V=tP.b-8>HID-[1{xd:OU?i' );

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
