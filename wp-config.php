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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'theme' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '*)nY7lU`eOE`:h%UyHt_7D/`kV=#$|T(4^-[m$`/3UO2j#f`;b|L6R*_M.mrBk&a' );
define( 'SECURE_AUTH_KEY',  'kzUD< zM mk5a!,08Zr.)s5JlzdQeP`> .H~(32{-Y4x|.( }>leUGEK](*r0a:1' );
define( 'LOGGED_IN_KEY',    'l]28zxt=YVg~|)Ug@<Boge<$v0i8=t<as*<*;^Ga-bcb%ICk!}SrFQST3%39kqs^' );
define( 'NONCE_KEY',        '|b5n+lmo2?_5c0.PXhK5`bLMuA, a%mw^1_]9zO&~DR#nb_H5@+)<P,.[i`-:D&5' );
define( 'AUTH_SALT',        'IJrRT=hv5U3u%a<KY6&[bexzo%%NMxQv2>-I8gA.<w-O@vYJ#LOoODWVbdKpdRc)' );
define( 'SECURE_AUTH_SALT', 'J5j*:Un5*)+aCL>84N%QA<.uB9%*vLiswb^7*3Z4vWE6Q4]hu<;@dG%sv=P>CkI&' );
define( 'LOGGED_IN_SALT',   '`]{:NGVwe44PJCA-N}!obKm!jJewd?_ ZuaY?[Ckxm@F_>wJk$(|,Y{V6D}~o)0!' );
define( 'NONCE_SALT',       '*7a<lzU>a9>$?:-{.HFJ`MQ~8,?%z~*RWfh@;WkyPSc|8CkZMopK^Bi-cj.D6>E,' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
