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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mdw21' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '2z6gG6PRU6jQU.t' );

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
define( 'AUTH_KEY',         'u*^fNlVxReob3O1bM}2iq=DA$d^!Pw2uaN:*Z{M*-n7~3?)w7bP~5o],68R4N|&k' );
define( 'SECURE_AUTH_KEY',  '`DP(y0K2=n3Jv;9Ou6Q=AD/CDzSizl|4bZ3@)VC*H,R5 ;ao%f`,YJ<<}*w*Ni2d' );
define( 'LOGGED_IN_KEY',    'L^hG:S,[*ydFr v^h6kXT_dtCROrFUM6He&0mr! !)!D %{fB$+Y{m%ythG3K)xX' );
define( 'NONCE_KEY',        '+ t`H];-QO)U|GZ}#C}PpP&@qg7rCa330u/*<)3LA~0l?p5^&c?XaQ=zL0d&U{L,' );
define( 'AUTH_SALT',        ' &wCIO17]2Y~U XFP^OTL+,;Gb+_]-YHV%8V3Rn<a4e38+M%cM(@>l1)BRvn:Nw2' );
define( 'SECURE_AUTH_SALT', '>([FE$wvj1^I|Re8Zp8%,J,Q?ZLrwhL8yGYjqX[SeHRd9(Q#kh!8W?7{KTRd1[Vc' );
define( 'LOGGED_IN_SALT',   'co]l_K/% MUSXSH1QR8?P[(<Qd]3)6g]3)I(6:$qJ5ZHP(A/g@:Tj5DzM <x|*.W' );
define( 'NONCE_SALT',       'oXJ7pojTdw{NZn,Tx/p/,|Cmj/q_?l;/>nt]=3E8FQI~NM_E:|}/*#e=vw5[@kg^' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
