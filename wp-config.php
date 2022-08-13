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
define( 'DB_NAME', 'cadretlemcen_db' );

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
define( 'AUTH_KEY',         '6j~&GXK{0 WYbwE%ilVHA&hl0r>C7y*;sW-$r]skn,ADHA*I2es|s{+Ooov<%lr4' );
define( 'SECURE_AUTH_KEY',  '<aV!GEI1/l VKW(tuEHA+E>Vt%<V2[pQ5PjjLxhZFG->v5$TgJzP8iua{-|F}B$+' );
define( 'LOGGED_IN_KEY',    '`64]F(k=p(X^%5:#ABO!- C~#(U#jnbdcv0:Mp+wYNx^_rn4+{mti>eKdUPr<Cww' );
define( 'NONCE_KEY',        '>n/ZNv]OiNwa#/%E~yY)#YI|G `EVqovu;McLy}XF]:sr-@,i8-XTY_m$p0aN@;V' );
define( 'AUTH_SALT',        '0P:R?={>XH%Xszflc?c+o^:3JGb~Nt17Y.xdx)zDHJP*Xe!VZ`B~7 [{^7EC;1Cu' );
define( 'SECURE_AUTH_SALT', '_5N 05*RlVe.:q,9V<loQ{Ol=r!z=0Oi#Tq</(w#{xjBg>^E7L_zn{d;ASFvKv>R' );
define( 'LOGGED_IN_SALT',   'yP;zCFJswpjm{FW:L7,o70!sYY.Fl5:&Cr2GsP_]2Rpsa7BQJ>ID14bKIGB7x=<W' );
define( 'NONCE_SALT',       'VVqO`-.jZ3+,^oFElzcsvb;JadLTk:*l8paSuSgCVifvc`Yf@X;lRWbpvZ^qH5{f' );

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
