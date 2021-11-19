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
define( 'DB_NAME', 'wordpressapp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '$sS9*Akf^1,&!b{@fYZsiXPNJ5_E5<2Fi?$d,+j|S+SrmGmc?B8.GsGyOs7*`Xok' );
define( 'SECURE_AUTH_KEY',  'oPmsKLam.f%re[6).NHs6|FsX#r HC[e*}OhRl K@xR5El$?VJtp_NZrm+|v4|,.' );
define( 'LOGGED_IN_KEY',    '2gbu#JyhiUv<?k_M# 3L@,iQbk(ldO/AF}<,THisn$Hq)jsRE/a51no0{G>|p>$S' );
define( 'NONCE_KEY',        'q8~TebK@jv0F^OwS{:$k$7q9# FU+YNF@!)^2GEdJTpJwg(4lJj(UN[D-[rN;w])' );
define( 'AUTH_SALT',        'VX*70m/M;h|<JAWax_-@Gr3C S]y.CK:dxXkE+)Gg6o~PDb#+ZZn,pe<i&f`u-vI' );
define( 'SECURE_AUTH_SALT', 'b7MlBs0I7aJkZ/dL[h9 >=G.]uj]X6tXQkQBMmy3ouTgP`#_TIo-(lro1(fc~reY' );
define( 'LOGGED_IN_SALT',   'ortfsJ--JX==977w2CdK7zI8h4vcJ`lw%$zPBrczcTZ~l-F8{)`op*dB>i;9wqp@' );
define( 'NONCE_SALT',       '9%6:91sbnmvd9Hm>sCuNlG_{tdDKNvl/!qVduevJcFK{9A/CN{afT 4<dsY0KXr%' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
