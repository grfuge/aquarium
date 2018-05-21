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
define('DB_NAME', 'aquarium');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '|&X(%qDEIS)}xDo=-jUgS8}nmUKz MzVR]j`xq]PmeY@sc*E[5ntc)X:oQPDdyeK');
define('SECURE_AUTH_KEY',  'v32&.AcN3*kO,au|JSU@bYdU]#n$kns/f}j.H$?SeLcmHid7 3G^<%ztA{*[k_}~');
define('LOGGED_IN_KEY',    'WB>!)rzQH-aPAk~vr28,`$O2dx,mpdu>KC-WCSQE,@`Qs$&k1pIE@!N;U2*tJA-+');
define('NONCE_KEY',        'm>$O<WV`LS?3;KL/+D0)Z#3KQ+b`)7o.NEyq9oH6K/AXS]B(8-[|H{j0gm#Q]7h0');
define('AUTH_SALT',        'o-C@sVA`*R L+gBZB.M{:d!lD,nlW$XcKinun=4&yVD+9oHbCvBWc7?P$SK;xIB ');
define('SECURE_AUTH_SALT', 'b5~8hj~L^j6,k&ZEr|9WHwYQM/l_hHT%LJOQ!S}Z-lz}KG!OnK`?LmDFzBfBh.g|');
define('LOGGED_IN_SALT',   '1&.PVT|6dGLOzGR,o<:^D/pgKS04Fg(czx(N_mY<aQmoo)PN*.v7g0)2ob$C ]%n');
define('NONCE_SALT',       '&6N>DQFLH$&h[+w:QSy5`!*u{VdLzI+@so6(bC;l%qMy`Rfx~CZh`N|B#Wq5&4_|');

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
