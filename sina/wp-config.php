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
define( 'DB_NAME', 'sina' );

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
define( 'AUTH_KEY',         ')Er=n/D@ lVnWwzt)Lu^.j|Sb(bs#UA2/>oQI6f%?{~Dq}>t(5t&9q%9v&&x8R9|' );
define( 'SECURE_AUTH_KEY',  'U Y ognFduqp5-HA(^kLSEr.N5Sn[).Cxe,Q&w=7d=/bmG`jC<^h=Vv~)t[s}M;w' );
define( 'LOGGED_IN_KEY',    '<.kuC=p@Lr<%?GnaBf$1:M)Ms[oW2}& -nU=Q[b8h SO&T3Yb|Fzz1~gwsZ.3y&j' );
define( 'NONCE_KEY',        '7pmgl-fk4%_Dqu)iCC,P3&s)WV:]%v/lLq#)$F[fv,WC?Eql#Y(/]r=iQB~mc{u)' );
define( 'AUTH_SALT',        'cHuZnPsM(x2A7e^HvO%gY`?;2UwE-ASc+;YE_=Yoaw*/=s{$7r&,kIJjtu5`o9nM' );
define( 'SECURE_AUTH_SALT', '/9cX(Imy+9ahB,,:Tl*^#$B$YRh,`E4h{y]vyHT?;QFI]xf}B){Z6ul;}-aS|*B$' );
define( 'LOGGED_IN_SALT',   's*22vL.ML(a5s)-}O_b76csAc4F!SxtPT*=1.Df6}MTkj/zm/55.R.;b7Ko{`/({' );
define( 'NONCE_SALT',       '.0rt|Y[@6 GDE+`WOi:!Zo06c$Rt4;`6 /BHuh49s)]{g#o#$DX%^`+g8h033;Ph' );

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
