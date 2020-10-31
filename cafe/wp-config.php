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
define( 'DB_NAME', 'cafe' );

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
define( 'AUTH_KEY',         '^&Hzb%|uL]:e]1&R*CO%b-&$<7>,SI([Bk#fY:lZ9(%o&!YI[*r=@rA)0V+~J^Oy' );
define( 'SECURE_AUTH_KEY',  't`,zW9orhHu>ahEx |5bSG&=3(Mq@r,h%xyXWM:W=}KQO)7mm8XVgQ?D?P8JxMgY' );
define( 'LOGGED_IN_KEY',    'H~ -;K7({5C=lMuHz]2uMGW,rP&r@o/Z[I}Cu1p!h-#Fkl-!$+?/&I0z;+%sSpW]' );
define( 'NONCE_KEY',        'M98r*G<I$+d!nX-I#!`G(b~Bv)YmZrA@$*<,!r6|L#BYEtC}Dfe2A{PPr$H%VDPx' );
define( 'AUTH_SALT',        'RefT5B|[1i,](TM}?1a9U r-]?I2t@oIm;TOBq!gHgA@XR(w>!]E3:OsZZDeHkdZ' );
define( 'SECURE_AUTH_SALT', '(4X-R*&,oje~K}@pfuJBjq1!Mk0cs5CtZ*(C@L3{Y})+{?:VOnl,Av6-ZrV6wr.B' );
define( 'LOGGED_IN_SALT',   'mCq/C/GWRUL*nmMp|_3mVi*scz}(&<p0?rre5xXG!uOq7{vc/[]I{AeUDgR,8qF1' );
define( 'NONCE_SALT',       '10:]nl-m7(4,N>!qNu+.?kQZ/U-vh3UHFexpx>n!JpiN|2w p7C1n2^I_w?4!+=J' );

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
