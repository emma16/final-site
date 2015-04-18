<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'stockphotos');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '{zhrt,;[3K,Z^=-g.FqO754NkID6;wnQ=EH,mVkQ$_Z.%7:?+gm9HE@/:Dh;(ruz');
define('SECURE_AUTH_KEY',  'd>|NDFi^r.GhW73ce-^mT6==PygUz}pBtz|&--VSKrlSi&(q?nAu2io3a(-F. ad');
define('LOGGED_IN_KEY',    'Yh+,fV3WBk#AC#8o&(*P)QHy-G=V k2!1 `9vkRj.3#Jli6Dk9:h8L{j;0E!GP^|');
define('NONCE_KEY',        'R3&-PAKo5Tb~1`ypNOESBq,{R~e6`A=4|q4:qvji84>aM|U;}OmRu@|Pas;*2`<W');
define('AUTH_SALT',        'MPI_F.S~W&y=,Qtt8RWbA~bi+]Ys?aPH<wU$;/uY2yo`6H8#[`XTAXp:eDSTe7^+');
define('SECURE_AUTH_SALT', 'T6v+T$+Zd(^wPD;.c*!V4)t2EOx_-VgDSA9/^..N0ZjF[yvgIn^(?j^dZ{|8zO&x');
define('LOGGED_IN_SALT',   '{zHOv{9}+PZzdwSZ3z&cnD3rK{tZ7J|E}K/r7/R| <TXN-,im:p9ijFb+T%h5~3L');
define('NONCE_SALT',       'xahUdYG.UcPuP-G+TgB?LF#0ShD|>38mG]frbsG,E4^,|QR9g},[IbOP[eEm_M g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
