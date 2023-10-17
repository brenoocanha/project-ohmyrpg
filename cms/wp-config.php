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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'EWwELnb{>pTR<*ExhQzd}Ep~O%-`?C}[|G@ycqBU=||mA{:xO5X;zuud_~>0WWU+' );
define( 'SECURE_AUTH_KEY',   '6Rzw~O~znbsand=*eX0!t$)Ms@hRdI5E5.h!;Z_t,/FH06^)@}y45opu|VJfJO&e' );
define( 'LOGGED_IN_KEY',     ' mv8N]DsG2@sQ|-pD@/i^kAYb)iu^EF|0-S[3<@@s^4@ ,3Fc3YXi1M{+Sn3FaY8' );
define( 'NONCE_KEY',         '}tN&u~IXc+|lh7p[JEk+|=,?(9/#Vw cf=~raKstu/;N]#7rOa}Cg9T)n/a08Cb4' );
define( 'AUTH_SALT',         'B5&cj<UIPUg=FL8($u&#?uw,%6trZDhc6Uc>5n8lH0g,eVyHQXzjC?M=X{(5CQs<' );
define( 'SECURE_AUTH_SALT',  '1_d28_y;o&ZYw=srwMNO!f7S YXlBbA6Ht  H|k,W:Wdy%Z?iic-6Kq*6@|!-JX8' );
define( 'LOGGED_IN_SALT',    'U1S[:uHaP4_<:G$Lfe>=#-:/hw(arMx3Tlv*92l_*}1X=g6#}d`8cHc[wX|1m=<<' );
define( 'NONCE_SALT',        '|ZC}72qIJ+i%IL<2M!bGn@^-2k?{5f74%I~o0nunSN,5(:;h]cp?{ dMvc)PLg5D' );
define( 'WP_CACHE_KEY_SALT', '`Bby%2pxTU,|$~g+x^a;v74*@Q:{n}qZ)>Xu!XHlBpDj oRWMn2Mnm(|/*`kWB8{' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
