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
define( 'DB_NAME', 'Ecommerce' );

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
define( 'AUTH_KEY',         '<a`tftQe?o~>_:=SV_-19=!WX||r_Zm<#BB:?s?AA-Z3Gjkn8p3vKA/;3vI+kW>m' );
define( 'SECURE_AUTH_KEY',  's0qq7TLfIxv5FM{os+{+D*@WbijBs ej^,{-hY V%qGwRB)u-Z;n|tNPkA2>%?tk' );
define( 'LOGGED_IN_KEY',    'R[[hm=DysVl$4AoWh-9RSQ(`UjVDS.?D+B0%Ph)R_Y nc]NDa _y:su}Se!]eB C' );
define( 'NONCE_KEY',        'X&wJ|<T3P*VxY]_hjW/*/RL?Ttzp:2?FiM>ibEk~,Sh{7>88csmAzsMe=xzaOU~o' );
define( 'AUTH_SALT',        '5#RIf^gi/:I.baHY#W*]V:X>^kP ;&^Hr<e,HqQ#G<VlFm`ESev{[.r`+fx##ub,' );
define( 'SECURE_AUTH_SALT', '.%n/&NF)`!$q7NLqZT3G8/vh4f%fly*a3#CRb{w1,8Qbn6{UWgwGtl,G!Vv<P4ii' );
define( 'LOGGED_IN_SALT',   '=&v`C4U_ZUOh%p1W};(V1=>_}p~j9$, 7|!xef&@wQl3[WX3I6uw:,>vuYVz8zo4' );
define( 'NONCE_SALT',       'KR,v%Ag8EA(rS)J:KEK&&1(pb0D-Q86i(;l~Lc<&oQ44{p`q-MJMHbleHLf52I0,' );

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
