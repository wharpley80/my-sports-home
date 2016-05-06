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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sports_home');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'X=+nsJ5OFcB&(v[=?RF-st,f!18Hw<sg8N#0izhtcExY,,76U?wuKP)hB*#X=EBf');
define('SECURE_AUTH_KEY',  'rCV.N`-c}Ft[@!l+qR)d_c9bMym,$CE,B4L-T8ySS)7~= ;uObM-qjA5n%{zV*a(');
define('LOGGED_IN_KEY',    '3e(cq77R^H#)qSm%-.gceiD+2]4ic<2FJvS3E,h-4kI&a$k$M@wBd&P+!d4J3PVg');
define('NONCE_KEY',        'H61Ia$qq5qC}#%eqMFYCodxt;A-tY&Yn*<lx-N*wN5;CQ|~Fv@l1d<^b}Qh^jOh(');
define('AUTH_SALT',        'Z?<>(qjgos~_Avkmkxyit+y!nXe(`)OP*rGo,OB_Th&DY]?Q6!oKW2y|ups$&q/=');
define('SECURE_AUTH_SALT', '`*jm&[mQ^YIm83.pxe<)%uFI*A<x2@)]~/(LC{~+j230Gb)~sj4]a`I(IoYR]WI6');
define('LOGGED_IN_SALT',   '=O,y7nUm9$w|F6l STbV<-YXx7uro };)#s<:h/6`td$k?&w&WI:a@Fz#x<Q}opb');
define('NONCE_SALT',       'A(:?;=-TmH;#|2)]2G!MVLaR?.+QcKOdpWaW}6 MEn)$Bl0VkD~b^^;*gew9B(&5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpsports_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
