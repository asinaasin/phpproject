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
define( 'DB_NAME', 'chat' );

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
define( 'AUTH_KEY',         '}e4,x3sKOx:sP[]FtVs$?%2yUI@F7AJ7C(?_pgL::M:ScwVw+{P>pk0db].$wib2' );
define( 'SECURE_AUTH_KEY',  'rsU_QAkYKY(V%N6D>UjL;]<+JohJVEWXu=*Z-zVl JrFAg=GI-U?bsevjQ9R+5iV' );
define( 'LOGGED_IN_KEY',    'I(9=|<iU K7`>SQ)}##1i>rDB}iO}-w.G@0Jyww1<^W Fe1HhCf-7ED%GkE#$sXL' );
define( 'NONCE_KEY',        '*)|xg3XDB0eWo1 ;w1/A3rP?zUThJ(.Abbh}.j3-6% ^ooJE%:m`KcI6FF~0sszk' );
define( 'AUTH_SALT',        '(3$jM>{4Ab(?#V!CHoEH]n,GKc^*vY<W+A6#BQ2F+`[`R1.oB)>+O;rcK+!q->|G' );
define( 'SECURE_AUTH_SALT', ',$M,ju (dG6MXjY%b156[Ryv([Kt.:&4V}OR[%|P_!fSaSqM%gkD0Yx^mc+R4 S+' );
define( 'LOGGED_IN_SALT',   '5K4jku@W4/J!Ya#]^i-1Ahs~SNgJ=}rN}~mzU);|[Mj$o%~`Rb{+6X8$b+$-e}bx' );
define( 'NONCE_SALT',       ',I}(UKpNlj;JZQ.2%xwA|@$k?O<|h<{mDk`:s?}#<$qEpEd7!Tu..,,-cR 9hNz&' );

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
