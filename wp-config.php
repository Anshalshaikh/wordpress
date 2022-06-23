<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
$_SERVER['HTTPS']='on';
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
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'database123' );

/** Database hostname */
define( 'DB_HOST', 'word20.c3agsh2pnccu.ap-south-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'x{Kv-au&FJ`*V<=LYk?s+5ID4/]Ilg-STctix<gwJFN oUN@,r}]Y8d&jVDtXgO,' );
define( 'SECURE_AUTH_KEY',  'k,EU+#<E>|=JR?n>A0DoCXl!s1V$ok7b=WbnsH+Y2{a;$9n-X$9n6W=na7AaRXX)' );
define( 'LOGGED_IN_KEY',    'GmqG<^sELj_gg2- Kf+d~-kkUTp}2F>]5vn$Fm+ITxH%Dt;[76C+vRja_;|=_6Vc' );
define( 'NONCE_KEY',        'X*vkY=mWqhxD1+k/bA~LgX#)?+;}B~F9NS|5d*>b|`-KiE|bi.l)UB+F$:}$fjc6' );
define( 'AUTH_SALT',        'Rc]dZ-{-=w*?$N^2SPQn;%D:wd{a}Ku9B,+-!5.,U10!ZAB:IDfX63P-FU6E.o^|' );
define( 'SECURE_AUTH_SALT', 'loNKI-kHkVQYl#E{$|}@~-p0k^9|&7xvpzpPAsLlF7O[9d<aFX|]S7<$3]jN4$KVloNKI-kHkVQYl#E{$|}@~-p0k^9|&7xvpzpPAsLlF7O[9d<aFX|]S7<$3]jN4$KV' );
define( 'LOGGED_IN_SALT',   ';*u^K(0c:q.,gG*U&{<l]t+^Oz?v?T22%ivM|<6-pTFT3.)C(U[3pZ2$$^5u1,jh' );
define( 'NONCE_SALT',       '{D-[c[MP+L+DD`TKI6XE-t<RjOi?5dDq#9h:0qXg7Rw1|%j|n<hS*#i%~Ms46r-x' );

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
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
