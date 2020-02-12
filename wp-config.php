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
define( 'DB_NAME', 'pryfaebdd' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '^wh/tC;;(|H~NE|@S;*JJ_CgIPO5-P!a%jCsR#,^|F(nI%p~>h;3&nGjTdla(J-B' );
define( 'SECURE_AUTH_KEY',  '-N_S3XLN^uf1hpBXv!irMbjw;&t~p9u|d7fP>XxWB095KCH0^J:`9F$e&|m(>H7*' );
define( 'LOGGED_IN_KEY',    'n6=T/]6I~Y+iaQc_XkKR6*&_2H>j}>a&qvq?;<mh|Ae6~;b=dh|}^|u8#@Ab7l1x' );
define( 'NONCE_KEY',        '@i0|hX)2TKT<=paQ,T;aTLAXpi+nPn%b@xIUrM`6&`:r/8hffzP!vH)m(1. ( }L' );
define( 'AUTH_SALT',        '6hk%cvgEH-`3bPnMw*Lg!w~KKs26SZT.;B5Iqg]T->)?Y&MT!=pzTqM>6tdy.oXj' );
define( 'SECURE_AUTH_SALT', '`ZQfJ^@iY[_c2$1{g4n#FAaz(n-tKlNkJl2YU/1+v2<i7:KkSk;.tflDg]$}QFwx' );
define( 'LOGGED_IN_SALT',   '=g#kRo|]PSJS=;8O-I_}n5)b%})}2kV:_eA4x$L+Y=2nx8kIX5~psUEZn{Eml&kp' );
define( 'NONCE_SALT',       'LY29=1yae4vRwut@yCuz^g8Via6UJ^}<Nw>{ |hX)?fM3{!8j@f3)</eJd{rQq^h' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fae_';

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
