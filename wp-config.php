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
define('DB_NAME', 'photo');

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
define('AUTH_KEY',         'f=Yr|=4`>lWmUhhIj6 ~!BC(-99VHRfHVYqXjpi~eBZtz&j;imL/JmDKp/lZ&Bu]');
define('SECURE_AUTH_KEY',  'K=-Bjfc4mjsv>9GS1FIyv*dY}fFZ.G+jP@A.xx:,JLRx<4.l_m|r,f#27I:UBO3j');
define('LOGGED_IN_KEY',    '>=wTp>&ss: Ah%Aeo|[%uI?ZSorgxzlrQ`nru47/;-quS]y|1H0MO0,5Q*&,:!D5');
define('NONCE_KEY',        'F@?OKx4D:u%t5b->HF4 @5*x{4(Zch8Z&qG<blp>T;MZvh=-kb,,~jC5}Q{Uf8%E');
define('AUTH_SALT',        ';A*(6&9~`rZ+:*JcY`Nt0Rg.[F8z2<vebh]y;%(rAM6<F:P64}G_%@rjs4tkiW|l');
define('SECURE_AUTH_SALT', 'DUM.`u}O4L:W~x*+$kgb)fDQE2h7FZF&!a1#K*_w#pzqf1GIV^Z>UZ395}A#^?RO');
define('LOGGED_IN_SALT',   'fAL%*l$`mj%&Q-/uURhrUWot@:&Z>No]PF^^y)F;MUzYmM,S+rK3@:NRue:hHE%J');
define('NONCE_SALT',       'f4$vg!|ENVY=WAM*F}^uY)LItK(7 CRPlJT]qB1YRK/N&Qem`<rjWWBE<-RT ,4]');

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
