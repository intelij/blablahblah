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
define( 'DB_NAME', 'impilorevival_mywpdbir' );

/** MySQL database username */
define( 'DB_USER', 'impilorevival_mywpusr' );

/** MySQL database password */
define( 'DB_PASSWORD', '$]Br9Lhp,gxZ' );

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
define( 'AUTH_KEY',         'bA/DDy#:!z#T:zd5#-WQ.:/!17nh%C$+2_~l@,hX7x_E(ogN.4#dpSPJ[b>sSA29' );
define( 'SECURE_AUTH_KEY',  '2c=vNvF2kfyr65dw]!V8ZY4M%3&W:}F#HKOwLo~N+7B^IoHL-3X%=M`9,HDYuA4A' );
define( 'LOGGED_IN_KEY',    'knIR*XA-1%kroyFiWp$vcP0%e4]1OD]Rk*YRIM% -5;m[bSz]-& mQojy-kWEgdM' );
define( 'NONCE_KEY',        'm;Pq4|h+B(=.hGe9dfq6H_LddFrjCZ$WV1]A0D8qieJ=:S]4}g@gkg&N#9neBPqu' );
define( 'AUTH_SALT',        '!PGdj:+T{~=X205-cj{hI>xs?;VJ<06T<,y,)dR4E1}]E6U:tNlPIOUFi`CRr[+?' );
define( 'SECURE_AUTH_SALT', 'KvZ{[bmT(qME`XYbZ;|EZ}/yM&TOds_(Q1z<W{!o6KvDO`@</*C`dl.zoI9!Nt(a' );
define( 'LOGGED_IN_SALT',   'JD6>k;UZdBksGnSOa3KvkXPE~e=tfi?SEugxhLE7m%6 H9:AY3=mBZs3c6NE5LY6' );
define( 'NONCE_SALT',       'RfZ^/V/$tV|tt4J$&|1ex2=bBgSP)p&p[ozX{LYot#_5_(>-<_!yJD!;;c]Y[[O>' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'implrvl_';

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
