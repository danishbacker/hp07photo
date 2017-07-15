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

/** SSL */  
define('FORCE_SSL_ADMIN', true);  
// in some setups HTTP_X_FORWARDED_PROTO might contain  
// a comma-separated list e.g. http,https  
// so check for https existence  
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)  
    $_SERVER['HTTPS']='on';

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_NAME') );

/** MySQL database username */
define('DB_USER', getenv('DB_USER') );

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD') );

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST') );

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
define('AUTH_KEY',         '^L3BJEUkx*rHD+v+l+Z;RS*q$rZt&NR<I!}fyR8oIkfB?+>p{.G%Qgh ^#s^iAX=');
define('SECURE_AUTH_KEY',  'nRjk[JW:KB_JIU[;j^W^AeZM%E}@ZzXq2}pf5yCp#4O-S]wci+&7pWW]H;<ckX);');
define('LOGGED_IN_KEY',    'QH4Ad*cIl#k~RtMPgP:z2r!mg/|~p4PdE4piz2.0;3xaSk)WK1|s[xn>PUb0_J;;');
define('NONCE_KEY',        '!euj~uYy_neegs@C#]&tv:#oJAc?mcJIJ!^U &+?zY,05fuDZ|p_Ehl?VyHi4l>~');
define('AUTH_SALT',        '$Iw||;Ah1TNELiw!}|yjS:=PWBkp)I4bv,X4@4QpaT9mM(Zqmr*%K(mqR[_Qi/zq');
define('SECURE_AUTH_SALT', 'pnks2g-TkmT {?xy[^SL)U,?t,ykM0ilx2dd=Vgmhl{.5xu/M2Ki@<C~MEk%o}9a');
define('LOGGED_IN_SALT',   '2_opXoqPIZ;l2n{-I!b`KF`bDE]~hS6mS8H{p]}!~YFH|q:hhhq3V{RP{b)=)B.N');
define('NONCE_SALT',       '>[1]$Ma0ec7<jQ<!KZYo^>)[5CcB[V{4RoG_&r&OK:rx(hDoC4oA44Fh]G~sgjLO');

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
