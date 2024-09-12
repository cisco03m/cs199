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
define( 'DB_NAME', 'wp_local_db' );

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
define( 'AUTH_KEY',         'rTY![xDIQQyslvDZh>,Whva=^d#jD1E_aR>.{&+OZ4$hIE>Qx28L9%-PQ%nk5%(M' );
define( 'SECURE_AUTH_KEY',  'P,0p~hN,[!fO<<i?My{Gk&BQ@*;O+5z^tVNFR7&Cby_2Y29Unxq4xqZMe(.IIkM&' );
define( 'LOGGED_IN_KEY',    '(Gfh;s+TF&Ioo,mFcxU$dFC/Td|(<pRD0sg_p:MKeyeTH{0V9u55JN37/G~</#V1' );
define( 'NONCE_KEY',        '4qAG%_CB+`L:+H+85I{ 1GrkyCdgY(C}?mbC3X-zues[J  =Rhg0oKEBN&5CU++x' );
define( 'AUTH_SALT',        'Q)M,{F[1j9rDwq~$;JKM^N![tf$<oI&#T<NBYg/DIb}+Bii6+K1T>@>_:QK%jdC*' );
define( 'SECURE_AUTH_SALT', 'iefDfqfhQ^9pbLV~OGNPBXJSzZAci?lb|OIpVf0Bk!$.JGjQwQw[!!$2Ie`764qH' );
define( 'LOGGED_IN_SALT',   'F[Zg|Iw`Y>2~Qk^:tIL$)@5*>r6|djm614[<sgxDo&__VgEwQiU>S-tviAN(2%U@' );
define( 'NONCE_SALT',       'W!LBwvotcNBu+&Cw9Z1r3mx: {ryDXBLojg!]vcSU|+mV1_6$e/JzoJ(xt9S2)mH' );

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
