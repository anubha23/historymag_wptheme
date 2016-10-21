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
define('DB_NAME', 'IHC');

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
define('AUTH_KEY',         'JlyLv_.MuhqpN#U!Iajm~SLxs9~o2SYpa[fzZZwD+/aA}]=yU?EkYB<nx_ktE (n');
define('SECURE_AUTH_KEY',  'Pnh:m{,Jv[zt 2/&RC~b]{WqZiE}j`+!WH$[A}laWtBtu3AU6q8F1Ty6j)g[c0Cl');
define('LOGGED_IN_KEY',    'KESDjeYa[y)}oc?e}9+MPi9^#J-W~`PSxQ[xcVg.ht3+)A>I%Klf]s3[07+<!CDQ');
define('NONCE_KEY',        '$=0P.()k@BU9yulQLQ0JTAMw|;sez/dB3h;6zC+znq@vhUbSWw%+YRkrx6V99Qm6');
define('AUTH_SALT',        'h8PU,p$AL^QAn >(*v[9gGe{|`nu(ZIx!C^L9cA~Ut3%@I6pK`PFP5~?z_bJP*Zz');
define('SECURE_AUTH_SALT', 'E:sNoZ.f_5)N!|ILJ {9]f!+&j3e,>?<rduB)>dQ<I-YDq:DY4ydDc}<x8Q9 L#Y');
define('LOGGED_IN_SALT',   '7Kxc+NSZZ_QcHdv9Fw$L_)YtLnFL2qwOu_]SoFsD{Z;7#o;0o?{ +B^zc]~<6rKN');
define('NONCE_SALT',       ':EH=@)0|<bud9i`A)UFK5g_9UTO-J+:5w*&`w}<aDOG2$l9j3L]h?!,.t~ZCD/MC');

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
