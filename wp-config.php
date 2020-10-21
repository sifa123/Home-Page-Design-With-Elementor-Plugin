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
define( 'DB_NAME', 'ele' );

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
define( 'AUTH_KEY',         '242LuU~65vhkI_xNREEinuoa&u7-#^lae-8D=tWwMB^DT Qn?+f:l/8|ZF4ywy,2' );
define( 'SECURE_AUTH_KEY',  '0}k><?gw!i:c1;`hTtL4#w:G?oo1H#k8_gN_g%McIDjFF,12V&I#VvP~{dItjeE)' );
define( 'LOGGED_IN_KEY',    '9R_(:g<lQLqB[Tef-O,FQ02N:`,}kj7t*K&16(YEoPPkjs&$6TGZxayUio4rFjPp' );
define( 'NONCE_KEY',        'FX:[a`Oxcb:RN:Kd}wK.w{W?XvM<Db=+ja]^%:FJuM!>`^R/=P#twKabh9Jb%r]O' );
define( 'AUTH_SALT',        ';pttx@$bWzguZnXWF<>x@NC!hv4S5b&&%,i.EsK|;iT6$<A]rilO:P~M$r$}t#ZM' );
define( 'SECURE_AUTH_SALT', 'K]12h<cq5fA/I;{0xUF!jL?v2`-0*h/tG2wOwh&t(*,iV{940Bm>m#`].KNm=G@i' );
define( 'LOGGED_IN_SALT',   'LeUJx0GHAiQsM ,FhtX(L7:?g[!U%kqB{H+ZCl|h6tBd*m69Z#D5xqb,G=:3rFyR' );
define( 'NONCE_SALT',       'B9=XbMp5Q7HC%>T%<@SU>lY/}}Y|1Q!&ERQ{U=H@phoIM;/rSAN7lLZ3KbD.uSWd' );

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
