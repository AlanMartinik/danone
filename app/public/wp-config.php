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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'INmz^[FNVxiDu)#n_)S <xJ[!s,J{^Or(80wRE;N^lh@!?3*JGfY%u#lv/M]X#;h' );
define( 'SECURE_AUTH_KEY',   '^$mw$m~+0^U6bUe `#jiNpJN_#tI.;6puh?]SJU;w_(2wXaZIhpmx3Tkei[l3/H|' );
define( 'LOGGED_IN_KEY',     'O4Lr{w?xz5g5m4}Z<wM<m?HH#myD5G8OT~t{A*kyI)d`oL}2vi#HVbIus^@N;|Sz' );
define( 'NONCE_KEY',         'jZ&vAvIfXUUTv%gNwE-+o-v%R:Nb0G(<R,6o<%k`lqeC|WPO/9=5&BF9+KfkOx>7' );
define( 'AUTH_SALT',         '9%MT:]#%n?[69y{JFES(Q.Eh?Of@@n{4ZY;D|a|5)<6[!xlzJb!PtD+#!0EB:@v>' );
define( 'SECURE_AUTH_SALT',  's}l~WrvM98[X=sFlr7GA5j;}3:iDidehJ4s$2iN>d3|x8C22,.1fq;fN(8yOdHnW' );
define( 'LOGGED_IN_SALT',    'ft2k0wMPaE*=G222? 5QS94-ZB|p)1PR:Mr@m&vlX%N!M`FTfSxURESJ^3_ ~]gT' );
define( 'NONCE_SALT',        'YP+Tj>io|JyWJMTEqKOc@x:DZ(wO`|ZAC79J8uq*mYFlk.Ajo8>A9 t#+)W`.Z1j' );
define( 'WP_CACHE_KEY_SALT', 'I-wmv@(lH6-^y$8t_<v?Yt#^Rg#P,0>p/z<-B=-*D2!aZN!dFdJ6><lP4isI..3M' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
