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
define( 'DB_NAME', 'flyniv' );

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
define( 'AUTH_KEY',         ';`P4D_^cG56adgvQ7+PR-9WcOVFQmhF_^P_>:9eO<AB(3CLnNN/el]&(30$f|{*M' );
define( 'SECURE_AUTH_KEY',  'h%D1]]E.b4o}Z9U^,W{{AF&$I_h3t=(+%vgecK79pfq{RW7L~Qa.$S[l&jel5)ps' );
define( 'LOGGED_IN_KEY',    '-M5;6AYxn8r1f^+>Y6gpOs2|7VBqCnl2ogR2/g=?#vZDPoQ^[b5*nYNC](~RQNG?' );
define( 'NONCE_KEY',        'P.n7kE(uA`N;;&8CCdS#!4!& -TZ8D>Fo6cA/5j5Y:pb%QE1=$HRXd:I<J,L&k!G' );
define( 'AUTH_SALT',        '^3q+88`u~FjH*o%,`>$8J[BQQ`ze|xvyu;1M8BS>+Zwv94.,BLQ$}Sp4.5LU@!pC' );
define( 'SECURE_AUTH_SALT', ']>J(6,x !pq_zmRUFyW443m,=1|~?-A*.3eSP,?&u9z#XzqMcy#b3U8/9gNix-}l' );
define( 'LOGGED_IN_SALT',   '>/S=2b[;cx`,NW)FH] 7NTgm~* ;@e2*RdNV~^SBX)H1jwUx;*mw+4Y+~&4E.a-J' );
define( 'NONCE_SALT',       '<>x@XVIIR?V9xE4d/loLk)2H#f%j5h!Q(qu1hQidJ9y=S=Nz8fde[jU.U .>2vr%' );

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
