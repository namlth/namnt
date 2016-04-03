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
define('DB_NAME', 'namnt');

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
define('AUTH_KEY',         'R-0`dbRVTNb0-|#Qu.@B4:[lTOw=Y48,pl|w0C+pFPmx`lbA7><:Xp<-R6=TeXwQ');
define('SECURE_AUTH_KEY',  '9ZJ%B0s4?^-=8:5IyT4qf.I)DFMl^+CEr:I6}x5BlgR}-8OK>(#{a>mVrqGV+8t7');
define('LOGGED_IN_KEY',    '-M`0Z|3T/m%|[@$ozcV>:bwNRed5Q#}SaJRn~)JjLGLYv|h+KE_#U&rWlUQ44-L&');
define('NONCE_KEY',        '}7x.[OsJ2,FNSA(mO30UY+_2LH !+<#Xunk9.%s5-6hoj!?rr%Cm-!tQ:++ 5qq|');
define('AUTH_SALT',        '4*OC2T9vjj2.q!gP9h(wD^1S`HNBCE^lu/ya*Ia6k@bh$alg_rM,}]p}t{{VhM5T');
define('SECURE_AUTH_SALT', 'jiO4inn7c%`F8K|n)bbocs;/6v&&t!|/aaI0:zU`.TkZ?+<mv-_HayI%2|s-])3G');
define('LOGGED_IN_SALT',   'g3lk{|sY_KVml-bq;/VtbSx-b[)IvM_Hk[)qIUNw6Kc-zFjSmeBlqAPr5R,G-=We');
define('NONCE_SALT',       'a$~-0`Qt8%O]cX[W[-TNB:-@Vk/PVrDp>Niv3`<NBN)f&0M]Zx~)DZ~>W+#LxZ(&');

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
