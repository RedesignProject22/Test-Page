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
define( 'DB_NAME', 'redesign' );

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
define( 'AUTH_KEY',         '8d=toK+=|wmpL|e[9hc4lJr &ne>KI~DF:N-hjc^[GtFtc3S=B:tbw<Nh7aP4U3~' );
define( 'SECURE_AUTH_KEY',  'j`zHIn]ZN7Gs+rvk>jHs,]cajj/yW)de?hy23|5)*YZG8wBVX{f05,-Sn}#ple]l' );
define( 'LOGGED_IN_KEY',    'vFl|wz:K~.|xs`A[p*Qi(k#)T1HBEuw96tQ-&TnAW Ej|diDrf6b@kO*#=7`+QG[' );
define( 'NONCE_KEY',        'K5<ul(gD@Z1mM Mv%!Av0Mlentr&czJ~PWJT%BfDZ/E|^?b3jEG4_pTagLv]0/#@' );
define( 'AUTH_SALT',        'WJm^4XSe@[Ti45EP[/,5-qRcNf{<>s]>FZW]u{skWLgN]Awd,d)V2Rt}U^`f/2%.' );
define( 'SECURE_AUTH_SALT', 'FRokX,YB>2*WycFQxn~{qiodTf!Y4h:kdi*do,yHf^Q%c<)y,!FIHzPO_QsEdo w' );
define( 'LOGGED_IN_SALT',   'mkPfGIAlI(x?jD0kXc!DG`GGf>Rr*?R0B8bgJQPFpkClsR9Yb(ZQsi)<79 Qz#l)' );
define( 'NONCE_SALT',       '_i53;!^7[ckH3:G_SYXGbYZq|V-Qft$CK*n2$vzvxZ~7>t*I+-7tR&W}r4B/$*O{' );

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
