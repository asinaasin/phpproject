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
define( 'DB_NAME', 'college' );

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
define( 'AUTH_KEY',         'WXn*5j)!r4kMjUJat9:/1tPO#~I~qQ#tI1J h&J<yZ!mofQANi <3({!)1:N>#Ck' );
define( 'SECURE_AUTH_KEY',  'Mf67;q*XWN8y@CX0]V9~Smhgz?zD7~1E+15Zc6^3iB+QVF#Uz0}@#OMq;0c1|uTi' );
define( 'LOGGED_IN_KEY',    '}=AjOj]S^Mh<OmbB1Iqce;v4QzaQGSCTe@PmD7{Gbyy{{eP#M/g}0cr:t/E!1.,v' );
define( 'NONCE_KEY',        'V=jYq@|=j%pFxlZclGk@Up;i}e)i`+(>VW!Wohz}}tKB!Rd?Z4j_n-a@:xJT:}?u' );
define( 'AUTH_SALT',        'C=9gn=4l]-WU[:Y*RH[jY!dM2ok`FDi3rn(qAx-_{9K6lU_]h]cla,Uc|r3}fDOs' );
define( 'SECURE_AUTH_SALT', 'J}9_Z7z8>&{&=4 (m>Q2Z865=q(Of(R6:nXpZ[8F1?A$:J* QVMNZ]1:?DlE92C@' );
define( 'LOGGED_IN_SALT',   '`:0[mt=TFmsdztAF8><S+uH*W)9S3O>?@;_?TjU3(mm,}TL|yiRt}77_>qa&T[,_' );
define( 'NONCE_SALT',       'ud98mu[Fh0NB|qPHIqd wMLf,|M#skdxIss4O7/|2zT+b9Ja3!K81(lvN?.C7jbs' );

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
