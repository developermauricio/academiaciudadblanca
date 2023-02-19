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
define( 'DB_NAME', 'academiaciudadblanca' );

/** Database username */
define( 'DB_USER', 'forgewordpress' );

/** Database password */
define( 'DB_PASSWORD', 'tjtfabe0b4ljfzjtygnz' );

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
define( 'AUTH_KEY',         ',3o!mKU7dQ;HLbyL:t1,H!dy+bfLk4KHeNFD!X?IH=02C)+KGWec !X[/Vd5^Q>`' );
define( 'SECURE_AUTH_KEY',  '6t[N:oxj#x9q{F<O`fl#< p`?KGFb?wa.]7`tT;A$u,fUbAt6?hH]Jn{%T9}lsjf' );
define( 'LOGGED_IN_KEY',    '$NONu{567o,Qdmt-H?x+;MryJ6#%C?LHYoz2&.HYT TD=F6E{fo`k[!TD41lYfe.' );
define( 'NONCE_KEY',        'A8{;Ugal,znFVnTixqjTPAUn;F=,() <-P}XMmBv|<m5zAmi&.NGfGeT3ADZBHkL' );
define( 'AUTH_SALT',        '3+r7C]K!kPBusO2F> 6R5Ltl<2z:fMyU==8_5}eR.<vnfCMhx&K:>FD/y|Vh+wRB' );
define( 'SECURE_AUTH_SALT', 'iaT-K<M`Cs<]Z]`yQ}j^2(~i0,:1DR-.S8f{.a8x}_*2iij|)LR:fSBf4NYY$SRM' );
define( 'LOGGED_IN_SALT',   '%hkPs0B|ufgb_$CUL5o3E4vnpY.*eC@m `%u/GZ0N:U*U?AkT=MA-i/Bp1xkyHF]' );
define( 'NONCE_SALT',       'QC O08Z-Iqv ~b_C}!(.ot%wx~a2z?9j+koJ)/v,4nMwr,^)OR<Y=57c@pnVp|-*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ac_';

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
