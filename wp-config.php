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
define('DB_NAME', 'phonegap-wordpress');

/** MySQL database username */
define('DB_USER', 'chris');

/** MySQL database password */
define('DB_PASSWORD', 'Glenganagh36');

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
define('AUTH_KEY',         '6 wX8cI8skeMYXWzkuSR|JW!D/NR&eDlQbW#F7gdt@-`2R-Fx%Qo-v%^dLg(|/5O');
define('SECURE_AUTH_KEY',  'm<!ZB|uWr~IZ!K-pj3E8gCuI.k0 Pex*wHj#{:b#fT*TsoLaedb7z9V+S[BN_ZUh');
define('LOGGED_IN_KEY',    'q8^{;)X^m{]f#C}~F+B+AM*+r,DSO`Sc&b_),; _V(r$O6xV1[vo ,UF}k*Shlj}');
define('NONCE_KEY',        'hrFk,e|^;`_6|=IGIao-j|>Yr?f,-O>vY(pNR)|bkhd)Ii?sAT4ny{$aJGm$22bt');
define('AUTH_SALT',        '2Cd~dCe<>(-#DQZ-zR3*+u|7~rx=mrR##O-j@Q5}V5aWf>7*ww(J|}F{}?d4Qz4P');
define('SECURE_AUTH_SALT', '0VJ/|xugY0owE/_&wvT?AEt!cq9>!0+}x%Z@CPOj*<A(6)@GQx8E1#bvHDp/BxN:');
define('LOGGED_IN_SALT',   'EqLEhNODZQLda.w|%gGjYFKEOM6#3U/JM~YuDIB M[SpAvV0,.3*HKg..J*)D6QH');
define('NONCE_SALT',       'DY&V%PB;4+3ON&PSbkuKN_nfb5obZbS]+R~,kEDE m)e^>N)BYZP:-D.^r|9]SH.');

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
