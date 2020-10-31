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
define( 'DB_NAME', 'email' );

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
define( 'AUTH_KEY',         '`Th:sdfMw/VU{_azxl!Kw<TKsghS$P[D#>Cf[ fjqK$X YymHj(*T}H37cgwBKtr' );
define( 'SECURE_AUTH_KEY',  'lwA;-EObzY/*,#xO5Ti!-dQ|a?z=9l~}1?U9)TM_7W,P+S i t(RAk36!4gFXx<]' );
define( 'LOGGED_IN_KEY',    'unFW5w|fJAT43wl-5fsTV*,JT~vkh_cZcFer4NiWzY$w8+O!-|SwmRrw7Cs65 j8' );
define( 'NONCE_KEY',        '2*L1!bfH=DBs.g`yI(Mhk}!DdO5 !weK$jX!)<hAoTr(WXA6cg<xK_?YmmchXevv' );
define( 'AUTH_SALT',        'IwB:x!~Hn.0w G8GUa CasLJ=c-LI|haOu+_l,j;Jc3L6F{yl6` oU<;eU/pB,1@' );
define( 'SECURE_AUTH_SALT', '>6GtLczb:Pg~rUy;*:Mu |MBdB_IB{K@hM1To26)Afap<v{5C3DpKsu*,-?q%~0L' );
define( 'LOGGED_IN_SALT',   ':@y*fUBD%HJbaQ{7JvX&Xc]$Cd5brGAuNX)RollqEt!<Pesm E5W1Zu`4;8>WQ}Y' );
define( 'NONCE_SALT',       '[7P;y{G7k#;lWt6&$1;aJ$9WQ[15xbK^wJt76~SWX g:G9fc3h_iLO%k<,Hdu[OR' );

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
