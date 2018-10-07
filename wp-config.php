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
define('DB_NAME', 'kleveragro_db');

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
define('AUTH_KEY',         'Bj1_]+}zh#?JLsbtA3T&lcX}@eHe1$|9~@P7~5x}Er-- 3ft8p)?I/e(Gj%m#1}~');
define('SECURE_AUTH_KEY',  'Qm{?gqJ1<,EYW[k,S*/:KQ}Sy~.RJq8Q@ m.ybE[dkg%%y(c3#f~U(+CQ-Cf;|W|');
define('LOGGED_IN_KEY',    'p.^k R-3O@Z_/o{fUl/5o01qJ^rv(kpeDH_9]3]!ps0l VEJS8p;r]/uj/~:bZ?K');
define('NONCE_KEY',        '8[o?!]1fZH7*@fmkZ@03C_i`,F8gRz9Y;GO#SDtYmorJ%70b3(^rEq]]yiE2+*5#');
define('AUTH_SALT',        '%Xi)AWDZV7;x^ o%Y0uUg28G?:RU>7(4qAUo!}k`=zCfV#/S ,bHNg>=RR{WO!RM');
define('SECURE_AUTH_SALT', '#xAH3MVab2;>4RYW[,CSc&h:J;0td3dbSt!jXZxy?^XLGa<T+!zv?EaP3Wan@^i_');
define('LOGGED_IN_SALT',   '1C;.l$Xkl9yY]uDTQiQY`gEs93J0V1w~/fZpeeJFC@Q*C%kMH>{e%}jk_7sy5?KS');
define('NONCE_SALT',       ' 5B{(i}u^a6gE>>#-r<EzU>J;HB13.0,;rxJZV$(U4lRQ[ygsOgtFnYERKytW9<V');

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
