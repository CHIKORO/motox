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
define( 'DB_NAME', 'minevote_db' );

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
define( 'AUTH_KEY',         '08L:/UXmG)pGJn3ye1NMGZ96nU)@2+t8he,V*:ooa3?Z|]Mp$Nyjpw!eqtd?|jUW' );
define( 'SECURE_AUTH_KEY',  '6f3y=s)(rq265~Nx;IL/*>|V(qxWXv2`#+}63~qUI1hnIV~/C;=]mX|gM_B]28;>' );
define( 'LOGGED_IN_KEY',    '}#?zdW0&Iy<:l$vq^hbs4eR`$~i&AFRc`@a9buyZz*FG&=g^l+ ,NJ)Eg=^T(SM?' );
define( 'NONCE_KEY',        'SAZzC^)`d=#&].bsB7`X%bmLz>wM@w&b9&dPN_NsgwT61`dtfY&O8d({7kVbXpFm' );
define( 'AUTH_SALT',        'Q8mVke3xVc!P~NS0v##k/{jdasies%QsI7xMF?6GcVTrbnv];8K3]?ummK@<xF)?' );
define( 'SECURE_AUTH_SALT', ']Ww?J}|aSHV;>wNKw&VzTG,ZC;w*;0N,[fBP+9dox9s5x6AZhHq]G/4/Pq[9.f6r' );
define( 'LOGGED_IN_SALT',   '>*LghCUx&EZwJ$J[+hXB/^nzSl^{Bci!z7w~UHDFg.>8_uPHFg&D3ja!ZyY`A<Q1' );
define( 'NONCE_SALT',       'h{&7rmVN0[-.Ol`N{oe8-@0yH^ECYJUB/y(+/i5dpQ&Ut7}-a~;kvq#q~h`%c{i=' );

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
