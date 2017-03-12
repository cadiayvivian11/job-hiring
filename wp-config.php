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
define('DB_NAME', 'jobhiringdb');

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
define('AUTH_KEY',         '8 k# K,yLPJ;W Pox2(bF5U>8+-w]FtB9&TJ6cX6=G$s)j9@|6bzU-@5KM9=KbBZ');
define('SECURE_AUTH_KEY',  '4BBaZNy5*TNZ|@klqJ,SD|0fEU=wLVGgk<7Q/36L(8Z%LMOG~%].G`?Dc<-O1Zq>');
define('LOGGED_IN_KEY',    '&KG1d5HqC:CE!P/K3vL80Y{A,ihQ&i=[#{Hty:,zZbrr+jnk%+_U> )PM&v&+[Ez');
define('NONCE_KEY',        '0^@H)nVv]-aK6cK$fr4`-qCa,QW>J-L#N3V!~#nF*W%d,L]S}E9X(R/ ^5nG[8sv');
define('AUTH_SALT',        'h`O]$V3YLD*ig=KtXtCxOMw6VTS9dK]VtQt$5yH[h~ IE%%f>GyH-wMvQU=rMfex');
define('SECURE_AUTH_SALT', 'r|]VBElI(3$ebW<WE q~&hL0Wa}FgB*?KkbU`!U|-/N(yPO>pHoS]>,~T|*ljnV;');
define('LOGGED_IN_SALT',   'a]&Vt=^)j}-=kL[-v-7Qm+d==_a IMB5iNE|2!)PKT+5/)b]<:IkFHQv(|kbk /*');
define('NONCE_SALT',       'o,zDy%wGuZmhrELtuA~!PTE0|K,D+lJgF[qoK:xzT-Z4#|5=J(&uK`Kp8De;ifex');

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
