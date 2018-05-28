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
define('DB_NAME', 'mint-db');

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
define('AUTH_KEY',         '&{YZ93~F:)ak!YhnYQ2Y^b#n2.DmULhy%8>(^P^vAccz82qYkRf5o`S(hd4dFt*?');
define('SECURE_AUTH_KEY',  'w>S*ha`e2x/PE<0zqLrFLNYVCmYBLLDDf[5_&%8[qvH| X+Ne;_uK/$KA^).%<LP');
define('LOGGED_IN_KEY',    '+aa__^Mc?FSCG7u0{3dsC-bCuiLM57|koKkWT`>i5Qd:RL$Xja7aV~lJ wNOL/I]');
define('NONCE_KEY',        'o&vCw#l0IA(Caym^~%Ds&AL7mO$y4:Gc&BphN D-tSW:h}6WKbu#@[T$DbCx(4Vh');
define('AUTH_SALT',        'M)|w]v/:cq?45~6VDJ+q~tNDO22I25f6f~|tJw~0~V%Q12X-pdo9Gc~O?,[-.Q,6');
define('SECURE_AUTH_SALT', 'ruuLtO4@*g5{XqAf$Rdkpxw$$w9!jbaA![{,jq<UX%47T!e}Wy{_Dd%if)):I%+x');
define('LOGGED_IN_SALT',   'gA3,*YMv92s~NG<s:#RU$h+$w5c,!`*ejvwCyQdr8],:#V>5E[8xyx4YH)$$)`x&');
define('NONCE_SALT',       '7JzwtA+ud+GJJ#UAPs4.;8p/^J1&>p-dnu&yI`8I%r<i^G&?Q!FN)t(;HI35w$o&');

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
