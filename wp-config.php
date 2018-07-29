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
define('DB_NAME', 'writeondude');

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
define('AUTH_KEY',         'K|41k2B/w1yb8[t7#~;`&p~Js&0-B6G=-wTb{}1N[u$EoWD_(h=5U_L**vb3!&ra');
define('SECURE_AUTH_KEY',  '2Yn-SRXGcO(=O*J,o]`rRhX4{9.BgAl[ C0H@=-][p}Gk(~)j89|2I9>VfM#Nj+t');
define('LOGGED_IN_KEY',    'S6bXglo3Q+w|8W)c#S~_^09=?hIUUq/ko]9[9h-)f}%/wk*146Ojwy,>6/Hd8$kr');
define('NONCE_KEY',        '{.g>{yk3)N%rqxR{AOX-~x/Ii2Cz;6[gH.o5(-.vqU=n-W}iO2nUBlj8L_IdoS[=');
define('AUTH_SALT',        'dJhB3`[<jau5y8m9p~Oqgz<J*0sjCF%L|WN<0`xS<YI;,Y)SX=IZVpinwYl!G|6 ');
define('SECURE_AUTH_SALT', '_j&uMVkUgv67[+@=]{PHy]=Gbsb}Wofuvu_kQImqPhkVc26h2h#:r4GeCE9<W .^');
define('LOGGED_IN_SALT',   '8Cyb!.lrB,7 ej{Q.wYO))c:]-mz{Ry%MEmwUDBU$j*4G(i0~Hs7b.eW-5#l$LAd');
define('NONCE_SALT',       '7`x;n81[.}nV1iB{a0FkmD*<<M!kC/baO_h=j{Y8/^64`#hSJ)6/tlx<;,,}DvmU');

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
