<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'act02_persotemawp' );

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
define( 'AUTH_KEY',         '7+L[Tv!)VGW1=gIhMPn#mE&a{^l*onJY,;EQRPKqS;J1nIH+<$Kq6C>rYi6$aruP' );
define( 'SECURE_AUTH_KEY',  'i^dDX0&`w2<n;LU^EM1 J=NS|*ZQJxYH8*swKa3<iv^LaeKp%Nz&o,t+;x`:@ThF' );
define( 'LOGGED_IN_KEY',    ' bLdW@Mn>hd:keX-sv0n5s0UzE/8plI9OG_h^M6gItcA#~]_ UovOasrt<^.&NW ' );
define( 'NONCE_KEY',        '|S?CWq@-EW`_by6Pm_y0zUU6`!^fT6X%Z[n-.z1g#3H:C`zx`[`,X:Fz1hHp5?X+' );
define( 'AUTH_SALT',        'W;Ri=?G?5c*h^Fx;2X#KhUPbd.PbVI>:e}d6y<3FJL?}YhEQ#zKxScEt/U?|^APn' );
define( 'SECURE_AUTH_SALT', 'aEE~#jX[^#&PfZ]$m~NOL[5SjOwU:nkW[S`~]-*C&efQkFa0ndqh^/ 9n7=(rhez' );
define( 'LOGGED_IN_SALT',   'dIs<ul>/X/-~Qb7*JWd S3d$H5m@^aR)VX4F>SN>:N]VO26e3]d=/jd|dF)Og#v:' );
define( 'NONCE_SALT',       's[~+pMP`d^P@T<5-~= D3|M;|[Yc9<867,6;?,^2JQ&A:{@|Y(AM$9uc`:L|f+EE' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
