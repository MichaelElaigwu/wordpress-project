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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'mykhel11' );

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
define( 'AUTH_KEY',         '0|H{%~Pfw%UcH!p(`xz/sr?qO8.LX<qCj?|/)z[L#j=DrO64t+H6s?S2@[1(y5*7' );
define( 'SECURE_AUTH_KEY',  'XeO#o5OE<ZK[UAUo<9?Mm997}!aoq}0m[N_8Srp2@]?E<i#0;9xGQ^Z>f(c/wAQ?' );
define( 'LOGGED_IN_KEY',    'R{;xASe#A`A){s9K]$)T]QGo*R-0Z:q]0Qqy8wg;7f8BSO{/X n/R0/,DmMXVv+e' );
define( 'NONCE_KEY',        '|Qt&$3x5b!%3:_lL}Ya{mqwUO3Bu6v,H</S7z9=tG$=HC1L?q#)#mu.67!16J4bj' );
define( 'AUTH_SALT',        'u03F8SDNE{lY/jD&qhw>`Dv$[8X^W?2m@^w@8,rxxj|)MVV4^P$.+8|{uUbJ92|Z' );
define( 'SECURE_AUTH_SALT', '.I>;q0#S>rho$xbRoz ;F*1L.eU.v505_0249T&!s9DT2q~`cdiU,W/*4WW`%%P1' );
define( 'LOGGED_IN_SALT',   '|M5mOp]%fS?P5nA5HJ~WBC(khaQ;8mPluO;A^H2kZ27r&P0ts+VoAEj}@B7?ovQ!' );
define( 'NONCE_SALT',       ';L=iK{QwWhBD1Dt].aF 8TL~|iw!i+UirH)]X9f+0GK^v5ZN1]~X6b}fG*[-7@*^' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
