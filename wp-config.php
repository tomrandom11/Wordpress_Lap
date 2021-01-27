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
define( 'DB_NAME', 'mdatabase' );

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
define( 'AUTH_KEY',         'WQ>cQQ?H>nPuH~$f=PHEij1(Y<HYlbfnO`]Pu&J+^q09Q<!Lz&XY&[te)W4&aJT&' );
define( 'SECURE_AUTH_KEY',  'wO(IuQ+zO,pu&tt1kh{V@!%kR^n3h EJV_#0[pA,cdA}/f?/-d=:4~Y,@F>.(D.p' );
define( 'LOGGED_IN_KEY',    'H]Jk0C[ ;Ivx=;mmbN|h)_ cVh+oUslO/d)]Q{O4oOnZ8 )FQ%QdM7m36j23$*h=' );
define( 'NONCE_KEY',        '#NL3Iiw[624RSa|BQpQ2i=5y8/;|1sS44=29:N~(:(jt^pot!,ssBF;s!>1rP]y+' );
define( 'AUTH_SALT',        '>{0z0Vs#:hOTu+Da^[q1hd+nQGV9C15G9%;lUMihzIq_SiI8 vxu_u@]J61%c5E[' );
define( 'SECURE_AUTH_SALT', '7G16Q2@p0emX5]oUH;y)&,1pnnUX8ma|-~|AP&;sD3)MUQRa4hX8|0.D+<~Lp(R(' );
define( 'LOGGED_IN_SALT',   '8zK_$&FPxjlP^]]COX]eK0e{8VxPcUd.J9i$TQ(XIE6fWHaVQ%i77dN_R+d--foD' );
define( 'NONCE_SALT',       'Q*]s0gk}z(LXHZ1,.2=~k,m!i}yMq+^{pvlEy2xXifT[JuAQrQgNJ*4))s`^Pgtb' );

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
