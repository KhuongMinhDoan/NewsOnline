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
define( 'DB_NAME', 'wordpresss' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'dO?Et#{9Z~oY)A7nA_ZY1Dgr/_DlAxU&t&FPb_Sb|gy*RR>zvK-0Co*Dzv<rW{`D' );
define( 'SECURE_AUTH_KEY',  'c+$9a?2s3s}iQ|~x^;7=#*^oo7AdxY3szJF#w;t(tTb0e.5mZ5{)ve@?i5xU8^c@' );
define( 'LOGGED_IN_KEY',    '~$,-FCSE0T}<neKTS}/b Q|C,+ Z_[EQ@?_zoy7*]MY%#cOZ4OrY$[^1+oCF4X:>' );
define( 'NONCE_KEY',        '3RS$1_KTG1lCrh^o>xeA}~{8YyXb~RRy3%-;J.y4}I=_SNeY1?Ltm7825P[s=;(;' );
define( 'AUTH_SALT',        'l&8![_7`^X{jSXq<kR|kaWjHm[{R[S6Qmx$]?W(YU ldn:]/i<^BJw=DpawmC8Z3' );
define( 'SECURE_AUTH_SALT', '~$0xP7sQUw1v;c#KKIb4*p;Ro%,Id#zl$_f)g{=&YI&2Iy3MfPnXoo(6<G/j:Ek`' );
define( 'LOGGED_IN_SALT',   '>at:8K1ps(^ ru*v+n2HR!H!]$>()kD{bvLL<HFiCUQr^RgOXR Rf.j@;%Q+Z`Iz' );
define( 'NONCE_SALT',       '_~;T<GcV&9#LZ!E6Ut*5G0uH%3Hn@DrVT_,zIax]JWH>i`:gt8cvp1Ot:0r&~ubJ' );

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
