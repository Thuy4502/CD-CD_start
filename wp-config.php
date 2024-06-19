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
define( 'DB_NAME', 'mywordpress' );

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
define( 'AUTH_KEY',         'E5(oB?F,j4MH{1.KLZ<AR++=uP~>0JE}$uodef<[.K]rbo7M|Gr=?^?/v>{,VK.V' );
define( 'SECURE_AUTH_KEY',  '?|gio3_Bws(($*lCImUnzo]3_;9_s`D6P6{7U^Yf~:HqKn#F.cO@CvUa.O(3&@;u' );
define( 'LOGGED_IN_KEY',    '9NVDeO._YpTCsyYXimR-C?D> w%CuXJ.$#GOJqiip/x(q-9emTNFQzGjZP{XQ4aR' );
define( 'NONCE_KEY',        'J}28#v17zJt{)9:64DK*f%{Q <D`n$=6<!3sNCDXGtW}dFt8ZGXlV/Y{$P/uwz^B' );
define( 'AUTH_SALT',        '7Jtf5M-~H%V>GE8fM>i^:X#py0)%TJ!Bgma3:gb;pE]G5l7mB}Sf]vY_s~~?~rit' );
define( 'SECURE_AUTH_SALT', 'XaXS7)u]6szo,q-Y2QCWXbP%<c?j4RYP&QKd2S0l)aF<YO,*uc@t]Bug8w^n0 E]' );
define( 'LOGGED_IN_SALT',   'njE/:Zs6r/ g&B/?d96!8d.IBE)W5TyKdT0HTpR#?e-`J_jY)*+4^G;X,4,+75)B' );
define( 'NONCE_SALT',       'jKjhoA:GbE]*: %ZXd&8)l%BXlK;n+1)(l%(N6S9qZ}m^M$ffyKC-+f|*73M2*g[' );

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

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
    $_SERVER['HTTPS'] = 'on';
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
