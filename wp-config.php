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
define('DB_NAME', 'kathy');

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
define('AUTH_KEY',         'e|rM?=&mY7(:U^wKi-)NxlIhN++h`%<u |aq9 Msy+A[_n{z*)HMP%t6`!cIzUPq');
define('SECURE_AUTH_KEY',  '4f&%&6~Ck:b/OrB9G6>6:[<Q3D>mUa7x|P++IbCKH/_EtvPS&c3/hVKV?T|`+4HS');
define('LOGGED_IN_KEY',    '^w:FN^A*Qf6;P J:=Zl1FC~+h$udGOp</7ayo)U=kUKV[1$<x9<d]_qeIY+zyU+o');
define('NONCE_KEY',        '8Ek(Y6t&j=X*hulGce- Uj$@E4l%.RvNIb$l|*K[|030,hl,e5L=6wp7=et3Tgph');
define('AUTH_SALT',        'GWUS/B9;HI`X6qT*Tf`+^)8u:vJBP.+y+TV[b&_y.Z4x-6:K8P9S:dMtv3+L+$(6');
define('SECURE_AUTH_SALT', 'Y+~:b=lD wk]I8kotp/+/yTpmur|?:}11uvFOqG%rI_=4awB$IfF{&EbA`(iU,#X');
define('LOGGED_IN_SALT',   '8NC4D-eG+>1+ZRy-!P3`-&iFnCG&j*>Pp7qTYnHmR)e{^E`_6q~l--(x^l1v |2T');
define('NONCE_SALT',       'j];wSq_]1oF.*{hjl|_Ih0hd(j~LkTtKGozZT#Zhc&dM|wR8&@?s;d)^#Hu}]-bc');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
