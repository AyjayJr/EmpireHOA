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
define( 'DB_NAME', 'empirehoa' );

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
define( 'AUTH_KEY',         'i kB#:|NHQl=KR*_+s;ta) 67H!_bSL7DwT!}@sVzo?[?( C+eZ;6Au.JX(/L6Yw' );
define( 'SECURE_AUTH_KEY',  'Ic#~Gjz`5[nVYa^RQQ4{QGxPL|{@5R[)i8E90q#d*6&.Nw)7a_h1`SET~ZrKz`$/' );
define( 'LOGGED_IN_KEY',    '|&!cS:wulcqTc+Rp2,c88>gO>in2<h2DUD{kfW}zS;6E@?d<|hadraFZ,ZiL|%1A' );
define( 'NONCE_KEY',        'W<5g2]i:&n9Ofrs& Fi#&M~IRm@%OUpnY&^zvpg25CV{P)U<x{VL kb,-@M~.2j1' );
define( 'AUTH_SALT',        'p>`VywquGF2k%d6<unQjQ950Vf|q<KbhN {G*|$lu%XM7.kf!L+FMQk7K;JgI]HQ' );
define( 'SECURE_AUTH_SALT', 'tH4[6U@%XVwL<vf]DG`csqB`R1FO#9wNbRr^D1dW)K<3OuD|1!J}<)Rw>1E&Tp;!' );
define( 'LOGGED_IN_SALT',   '-J@,LH3|cb.(4:I;8;4}3O1n0)JSDA4=ZZb8D gk|CN%rO3+}+W)yG@$+;kUQ5?U' );
define( 'NONCE_SALT',       '[rq}13RG?!RH8v2k6o=a#z~v{>*)^`z{RD_M-tI.*W5eIU*eC% y^H?Z1BJQQ]>W' );

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
