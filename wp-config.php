<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'leeanne' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Kup0)OfOqF;-ulN@_`C/!@`NB9n]hhV}u5)~_M)jV3)[*!xC4YhUKH[DB!s5Ov$v' );
define( 'SECURE_AUTH_KEY',  'M3`KU#bo(ON.):z]L1kJ5=FVS$oFHVRFx/ oX^-/WHONxw`)m_KU~pc(5[)VzQ9%' );
define( 'LOGGED_IN_KEY',    's3 9Yj,y/B~[T>5bQqhxSg7yf#g[TadHzFQ$bIbgB_CwdQXV5ZL BvU&f#o4e3:k' );
define( 'NONCE_KEY',        '-j(@22Ann4p(>p%Nfv`>J:!+$;:ka9n#or)six~811fuOkfWupKaWwSw!sr?!fx1' );
define( 'AUTH_SALT',        '8&kdB2rEeEzrbxB~yWJ(x@gS$fmw_cGqb[I;[ QB-us;qz:5pt]7eYIA]-O@M^JC' );
define( 'SECURE_AUTH_SALT', '.},@E~@;1| : AT&4`p90wJY50^@%S2upgB67^@(Z fh[g#z$aWSn^r m~qL(-!@' );
define( 'LOGGED_IN_SALT',   'g+=L_/Do!GzW2~NYN.>v1l7l-FA?mkJZe+Hg_Ji(-8C]2Ns-vusJH/v^ml7s5&rN' );
define( 'NONCE_SALT',       '`en-z@u0{%dUKsT-F&1bkczB{N#rDo&iLEJN[=8&]2cy1n5TW t:5>`zl~fS~_5i' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
