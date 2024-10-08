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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'test' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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

define('AUTH_KEY',         '-6mfM$d7SitjvX6iMG(+>;YEXVz52S6V!3sN|/_+kt(l1hlkF,H+pQG+*1Vn+w&_');
define('SECURE_AUTH_KEY',  '<Qn>xjcm:Ar]i7TE4u9mNHC%YPK?l ;1/sru+.OLQ-1Gadg|-P8O;PP/ek|H~S>0');
define('LOGGED_IN_KEY',    'i.9@8Q-O%%-TLW-=+BN=(_|_}1-H){V-A{el,BRhctK<QYzF+:`P,m$1qR0*]~^n');
define('NONCE_KEY',        ']A-2/bFs=gp*.+z{V8x-#DVq79f,D1I|R+Q}A$Z:82?t|afq_S-4dwwHin+ocVgV');
define('AUTH_SALT',        '-!gE-to:tN&r;0 OhC4M49C*[Nj++nk{{]4sU.](yA949:UF&(p~Jui5O3q*9A9c');
define('SECURE_AUTH_SALT', 'A^57:ILpwt%8c5zpTaDs8vxKt#C&{5V31maRS6Zd<B?8b<$qM+UT8HC0Toomx%+:');
define('LOGGED_IN_SALT',   'b>bOC=g>:W;|B|tDg$1sZNVO`d|{cJK2pz`-Y!R0,Rny]ofl6^`%oBdMa%w!6JXA');
define('NONCE_SALT',       'M:-V/bz&syeDzI,Z<z4ZuKd7J:!hXz- e;k},^{*x8NpL-:*LL?Fbhd-PRx82 Ro');
/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', '/var/www/html/wordpress' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
