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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webmaster' );

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
define( 'AUTH_KEY',         '=I3/L^BCi,QFB0$?SPGrG<hV]1/X5*u;@om^:j{t!=LN@$ZdV/~RxsW;>_L$S,BE' );
define( 'SECURE_AUTH_KEY',  'h!4G0#O`vw@K&edtp>ng{iJS=:?N*g$n7U**zrUO:GH2tda?>vV6fXm}#aN9~`E*' );
define( 'LOGGED_IN_KEY',    '[:i`g$4KXuoU>=M0_*e?!#PZl)W_:$U5*_ur#~*wFeepRBi7!z}2a.t&u0>Kp+[#' );
define( 'NONCE_KEY',        'zIsRHg(+1Zq+9@:^UM/(rho801bhFo(p_olAi+nbr]=1f MF8=/}V{qt~^x^;PP+' );
define( 'AUTH_SALT',        '|!<`t uaq(kZUy[3mU.4n&eg1;!_!eOk}7u5NXdmt*<yYFa~ud>1Xu=%zJ+0o,7X' );
define( 'SECURE_AUTH_SALT', 'Tm4APWwNoed9_M/J#sdKcV)xK)SIS@%!;H_U^{al!#Uet?Ca~j~;cvD4:C}r:AW;' );
define( 'LOGGED_IN_SALT',   'v#6j=f^cOvBK~?MVu$)o05zWq_[7ED)b}zM+ KzdJebYTpQ[:RY #.E;TVSklDWV' );
define( 'NONCE_SALT',       '[LFvUv 3(Pel2H_}CaP*+qEV-EJMlg}UVavAy_iL*Au_w--%Q1YT,7J{d;#^*N7_' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
