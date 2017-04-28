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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '12345678');

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
define('AUTH_KEY',         '[ic88^r#v]vz|JS*Z5tvwp]=Q2U8kLw<`(6 YZH7Z9Cg:j0NsWnzN/TKl Q4O2mN');
define('SECURE_AUTH_KEY',  '6U*<aUVa6)}7- Bbpgc0~zz+hAv<v($W)e+|*q60[/JJsHa-Wg{m-9a9L8d<{x O');
define('LOGGED_IN_KEY',    '0?LnQ2VsD$x/4>b|F.{A+W_ef9 uY?`8o9P1Q`F4.Qr>u*gFZZsVLf:~hTT3-V;|');
define('NONCE_KEY',        'oi-cQymUi//w:_YHt.Xe{%g-@Ayjbg--R?U*|O pu==-EAB,9VGS(z$*ad ^;}1n');
define('AUTH_SALT',        '<NnjT;x0l-U=o!55F>M<At.Gc;Toeu*{e`eB>KH-LH=QI$zF{6V>__?~c-)*t7Cb');
define('SECURE_AUTH_SALT', 'Uz-ajkl@FrW*i9($0/Sf=d1*0!u}TcGd4h3V-:s7u0d0-=b=_@3k9szes.k<L_XR');
define('LOGGED_IN_SALT',   'oT~BW|*$1?+0q+1m>Tn~t2@h{]{C~Q}e+:Tr>*CyIGtR((VR)/et?gr&4R,KkJxA');
define('NONCE_SALT',       'J}YfLQeQE<)A&yl} c-uNq8(Ct_1.Q*d;Tz.#{FL[ayRBX3ExW.bbN}4( 296#ea');

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
