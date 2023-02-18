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
define( 'DB_NAME', 'hook' );

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
define( 'AUTH_KEY',         'Q;Ab#_w!X8mtoYnjXC~:l Y_cAZf]My#B#i>FZgef|o.NpuGe>yUehXTcK^hCH?w' );
define( 'SECURE_AUTH_KEY',  '7g}`l7>JGa@%wjC&x %flX<&>E30g$W1=O!CAb>^B)cPX?%_,r<9GP[H4kjweP[a' );
define( 'LOGGED_IN_KEY',    ';Y1dLLuT#.-a)IU4I6Gmn 45yV#aIGB36T93L :B_GbAhbp)?uzGV-Cw++Sq:F4w' );
define( 'NONCE_KEY',        'IzjTGR,M4MSktjn*xSJ#ky(4IMa2N|2wDAn!2l~BxUkD$.=G`vcg_q*E@emKprN%' );
define( 'AUTH_SALT',        '/GF[UDvp~}qKJzB&q8t8V.YXcmX7<lHD?xneVh9n!`fhZ-{q|E@o61Y))YENtni0' );
define( 'SECURE_AUTH_SALT', '2sV/v98c/XC^.:i5tQePMgXJ,J;a- %j/>SAjUMPp{<e:Tveu]?C(dL<%fvJtJ3_' );
define( 'LOGGED_IN_SALT',   'Hll_Rhh#n+2YABB&y+=e)G2G]@3NKyvi3RMwhWP5TFrM2#tJ`q]8/C}D07XdpC>N' );
define( 'NONCE_SALT',       'vCKtJ Zu|j:Fm-jZM;#8S[uz^EdrWxhGoD#&$1R8*>9F{94x{{nYche~c95xb1hU' );

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
