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
define( 'DB_NAME', 'thep73937214_thephonechoice.com' );

/** Database username */
define( 'DB_USER', 'thep73937214_dafoneguy' );

/** Database password */
define( 'DB_PASSWORD', 'Powerball8744$944#' ); 
/** define( 'DB_PASSWORD', '7dxt1.]y)j%atWWR' ); */

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
define( 'AUTH_KEY',         'poOl]RnbE<3S9#]j ~u5iX?AysimM#Fqmm7Pl#k$JOpnQ2?g,g3D<kju$v0y!8/c' );
define( 'SECURE_AUTH_KEY',  '}iVhyv!z%%VB=a3Fmo^J!<}#2_6qW}uFQP-nfbo;-:>:a!YX]Pil;sFx7CRMhWOF' );
define( 'LOGGED_IN_KEY',    'e5(1DJUE :,Rm#c=@eLZQNLmTnUxYpie1,7Ps5Mm0O+O1~i:]Wx}3nkbK0|GfWo;' );
define( 'NONCE_KEY',        'ZR+ft|&hNT=},D>g0gj)TtN8WaWP&/-YYr1,*8lxY@~}T$0|jUpJ)kJ<COLo^yG@' );
define( 'AUTH_SALT',        '7<(-1`Q7!KBM+<awRqIc?mMY8mPn;4G&7:^8wK)am^G6VX!I2hl)1:`^ eNmfSRE' );
define( 'SECURE_AUTH_SALT', '$L:*V;#?u:_}x[xeo;DO,]Pn @pa4VxPpjwj[(p|{-[(6EaSlkl`JV7}Tdgh|jii' );
define( 'LOGGED_IN_SALT',   'in$91!fzanBkPXyigG_BayyoTSF/~B+ctwUf~2A{2p118<rO+pjpJza.9FJ4l1#&' );
define( 'NONCE_SALT',       'P%^1[`9[Z&N0638@bbi!>BOqQlqa~q}_*1s3:d/b99e &1Z~X^6xhK(4,TYf.Y4g' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define('WP_MEMORY_LIMIT', '512M');
define('WP_MAX_MEMORY_LIMIT', '512M');

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
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
