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
define('DB_NAME', 'whc-digital-agency');

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
define('AUTH_KEY',         '^&_/e=T,ednF$6GXJKi~O6g-UbWMx,5zSJx|lc}6.q2_Egtm`nh.?{CC=($/HnGk');
define('SECURE_AUTH_KEY',  'JRxW(%a7x6EH3Cl:_WK8T`hD(xB8h1}rvoVBJ,t7(>a_39qcnNm7x>$@hA[]!P^q');
define('LOGGED_IN_KEY',    '3J?u^xofvG4s.ICXM6t,P4!OP6YI_2!B.ssc)gFeX{FsxK>,%i!+kl[M_PCZbp!Q');
define('NONCE_KEY',        ' zP/Un%[w>Hw*[E@=D;eFKibc}Io(Ly}%P]iAigLjC7G(=83)&uco9dK6&Yz<WB+');
define('AUTH_SALT',        'Kv<r:@KaIeKqcu}0U4 WlRQx`n!9mmn]hvG$Te$b&_mZ8LSpAbY)lm^EF/l tL=r');
define('SECURE_AUTH_SALT', '2Mk/7g[IDpp`pO%o46N,35RZ:;/-O,?cLWvAgv7#7|b9_=%IULrB._ t8|3dnF,8');
define('LOGGED_IN_SALT',   'bMpG[NjYoAjI76<L8,>5IZm+gDt|QvW]m>%eF)f{gMz&9p~AhOM2Mf(r&V(po2h=');
define('NONCE_SALT',       'cWJA@?2G4$|AC1}o ~[s^1V,8VC~7_|8s0s>-2z|JoKj*mYwvf]p=p?*>xX`zNnR');

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
