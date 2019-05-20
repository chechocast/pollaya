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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tresse' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '8sf]N0va_U&5Yhh=&^?-mNoM8IUp ediE<}bK%|1$&I^**PFXIWyWgh&^YNZt9j<' );
define( 'SECURE_AUTH_KEY',  'Ms`t_fi{)!Uo2K`H}!um/?PVS[-X:r3>cS+pkwj6^y5l&:0@e1!R7fxv.(M|;7v1' );
define( 'LOGGED_IN_KEY',    'x(!>2v1L3_tAhO7S9Hd$<abvrF=@U6Oh5avQ61Z&:o^uNh2lqe`0?,q4>a;j)r2@' );
define( 'NONCE_KEY',        '6!k^;_9OKZM;G|`>HlrSilzkQf{PSMi[0)+ncE46&+<}Nk.1v& *)q;#X~[hFF&B' );
define( 'AUTH_SALT',        ':H68&G4B:+k0H-I=jg]>*pD_s`3qWU0ldGW&^t--hlMSt#_al~EjwIumapQ$H;n*' );
define( 'SECURE_AUTH_SALT', 'Y{_Ck}H@Gg^D9vMNa[4NHLE(Y0L;@} F,KunW,K.{Jot{8=kSz3? uP:CeO[n@To' );
define( 'LOGGED_IN_SALT',   '5KushYTJsWRHl[g#vHzmn:VM@F4V;_|]t2(/yn(X|f5eE``4F~}>6p09##A7~;iU' );
define( 'NONCE_SALT',       'lH`Tl<5S0HS*ztM5Mh3N7*xWFHUec{?cGokU+|ifS7nny[x@j0_w?h9+x&]>i6YV' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
