<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Admin098');

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
define('AUTH_KEY',         '~rv%%0#*_aI3?fGa+V^:7C@O,6|?-X+{,W+h||}fv6-}8v9g*Ks2YM.~l&@2A%LX');
define('SECURE_AUTH_KEY',  '<Q* ,F`?[&GYV(L)Qu^ubEm_oXIoi8M8-6-pejlo=LS~vkd[l=5jskF`c`^z&Svp');
define('LOGGED_IN_KEY',    '?E$tZr>p~Hqq.4bUF8O8yb+W?qX)tb5A67uJA%h~wz>CziNPqmG|MySsg]`sDwt_');
define('NONCE_KEY',        'c1v+KsMsgg,FqV;|xH@+Ilr2``VZ6EYM+iHQLfrbuMBWo[=nrFe%c=W-JoBpt)Q2');
define('AUTH_SALT',        'PpcRaV-3f[rxDPb{Z1r|6f>/_%9F4Z_8gWuQm)Q -VTG].;ZC2C7%zX|>s!hR2.C');
define('SECURE_AUTH_SALT', '~K$8! 16{-|fiK,Kv4f$ c+N]*pktFz?sBt|lg0fDD(&L|6/:$4o6-zu.mAvW=6$');
define('LOGGED_IN_SALT',   '&+k5E@`-b3(1*SkMOC``zu2?ZLr^EpY!|+t.|/$;+PZOpO*wujKZhysOv,s9Zvuy');
define('NONCE_SALT',       'H.6+C^$HWRtYkBl|;x;+1|jxKFa*xx-#N+oQoG2&|j/WCAy3Fsjpzu Q*PGTj*fl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
