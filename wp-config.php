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
define('DB_NAME', 'Amberdatabase');

/** MySQL database username */
define('DB_USER', 'AmberUser');

/** MySQL database password */
define('DB_PASSWORD', 'ILOVEBLACK12@');

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
define('AUTH_KEY',         ',ju/3[WOOo!T]>E`P-]B>#`kjlb:T1_cXi+wUi)Mbz^~IazOF6x_RG?(=Z?s$<ko');
define('SECURE_AUTH_KEY',  'i*`yt:[}CB)iI@*<SAk4 sb`XsH_q{..;aK4uM|r0C9Zo-{q~$3c5CA_V1P)=Qk8');
define('LOGGED_IN_KEY',    'T467es7Tp9FlQp.4|M+e%gQ7ik~yI6O6aWiBuKI+!<*WHn2X/#/a(%`j8&rl9MtH');
define('NONCE_KEY',        '^9.0~tpf6<fmdTd@Q.*&|.psR/@nWs<,8?o~]kVEG{~h>n3f#sg]_Vay+59E|dP;');
define('AUTH_SALT',        '`?i6As8_=+MD&7pHtuK?NIg[cM%rryrBw<B^/3HalXzRHTRuu*vTOOS2;Rb{602B');
define('SECURE_AUTH_SALT', 'Qx&)5(^.9w7-J ccul+bgGRdfIN~O:Pub_l8,Ft:Q*Yjn4-rjy}>)U?jO_W},C%?');
define('LOGGED_IN_SALT',   'r*+@5?Coj{!dUx,?,5iTKU)PT3@pv~izf6-ns*oeZ<Cl{*UrrW*dM|YisC<}E]]m');
define('NONCE_SALT',       's]Mw$[+;Y8(}$qbKJ~hxGYBT$p^g`~W_57d}:v$5/iVD^U6|F<!H6dN10G>?h13j');

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
