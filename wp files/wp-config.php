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
define('DB_NAME', 'veronalittleleague');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'gHcq^Q:ii}5FNRY{!|+3YFWN@Lr*x{WEk3Z4/f!q0B3opk`MWYMp4;4uc&.?,$Wv');
define('SECURE_AUTH_KEY',  'l%_N.FL`OIT`]/NiEus@5N9!+dP PIQSeW(=I}oskdU@={ c4OJ-/{B/bb^}u!KH');
define('LOGGED_IN_KEY',    '9k-S]{#eibsnVC|wLG|K03V:duOu])UO6Jv}Oy>H-B9Bv,+=.A(9A1Ve~SQF_Nh~');
define('NONCE_KEY',        'Iiio78u|v{`wdES~?i9wFcy})F(HcECTck1wE/lQ/#4RbX#y0`xLM8hq+xp)4x0l');
define('AUTH_SALT',        'ErsN?*B/cu;KW%bi&7d&z!OgfaGqKg_FCk8?Z|0Y1rFo3c[-l^eMQGVm;n.4uuN2');
define('SECURE_AUTH_SALT', 'q{u`yLfQ@D_OPCPSxQmFqR6DLB`A,B5kIB*MZenQZEi[G6qo|bay;-sqGW1|POGp');
define('LOGGED_IN_SALT',   '4%[T0jI1 O7iTabMCi@@BT|.N~t<%LzV!^ j+T)2C.+2xc+Ki-jZ~2[693a(Txm~');
define('NONCE_SALT',       'J4,3Qn9d(0w!*~6p{-W0=acZZPKA8m-gyScui-WbMa)V&pzQ2yND/LLG@%&m4edd');

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
