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
define( 'DB_NAME', 'min' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '#lz:N@kQw:T_nA!Z::c<V2)MJMTT;c6SXuq:9XEoWx/4QX7i=u&`>!ili-.`v05]' );
define( 'SECURE_AUTH_KEY',  'N8kEHg}k0Zf4,W:Kjs#D7A;5thQ}7.)Ztrx.vG=RdcbeG<B]T9pO]JP$4ziv)s_k' );
define( 'LOGGED_IN_KEY',    'B/?]Jw>zAGw$SuW/NkK1fc#S r.tn574|Se%d5Y#f?7WO/zf%WD5fN[ ;3@LKTk}' );
define( 'NONCE_KEY',        'Yd(dV]tdX>+R]toN1q1}!QW&j:mEXt]s7bqeBV<S[3JLDZR r[|tEk~f3zGO-%Yq' );
define( 'AUTH_SALT',        '+eE><!mGdEQ ?LGMzn-YGIx|n5NTtj)M%%7h?-7fOHp~<4{ <0uDzRH#)G$k?nFf' );
define( 'SECURE_AUTH_SALT', 'z>(7$.(-=w=^Nulf5`M?NV8Pq>9m$h.--d^TvaQJ8.!bD5n1:09|-v|AS4_;H9OG' );
define( 'LOGGED_IN_SALT',   'G*4WZUhz=w6uvAz9w1N{$-&fL;qndnl`ni#fv>CX{7@fEdbVJu|okwvd+_2l}l~#' );
define( 'NONCE_SALT',       '~rLQD6?mE+xIrvLj+|T1MYX$cVVQ6&ZaP)!XTDZAraGk5|4q/TsBc~vvOVrhP]&a' );

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
