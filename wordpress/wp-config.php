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
define('DB_NAME', 'website_developer');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'xZ;`a>M/M/@L3LEAd+3b^9I[X+X~VL4N=cR.!m]M 188j%jG6EZs2::6fqzi[Aq;');
define('SECURE_AUTH_KEY',  'fvLA2bHl|0(dmsJ=G|~??vC->F<A+AGEQ$5>delj@mzF9$K tc2INRBN,^`_yJT6');
define('LOGGED_IN_KEY',    'Lb)9D-b}XC@({#vSZM+;!{6BJobuhm9P`uA*PZ)p5fg=tLNGlPb1fabra{-c,Lek');
define('NONCE_KEY',        '$kp[NVF9F>oMW@&ApB/$-n{>X0R(OKW<V90Mgn>;e%fp3o>Ea{EKGmIFiJRL<@?,');
define('AUTH_SALT',        'ocMWYVf(x4UAbY5hE3fN*[}iv7I`pnEi/EG1oBO*P+d;_;ChxV`R]h[61vO>MOXT');
define('SECURE_AUTH_SALT', 'A;)g4uju ta[ {(crz2 ~nO0Qwg2Ey$UKX?/F`aU#JvT)XrvnfDYjt!9f7i&W,Z8');
define('LOGGED_IN_SALT',   '/g<J^CPe>GeqFaEzCJnW:F{7Vp-P7H[&Bh8d.byCb%8nbrD@&td1{N9 jhe$4lK@');
define('NONCE_SALT',       '4~SdX(hoGT#,isrY!anZ|y8d`WZ3p6#RJ?Y;/q*!uc$?]1&y#}v?$&@5}x7]9;yr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
