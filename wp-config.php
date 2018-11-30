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
define('DB_NAME', 'b7040746_db2');

/** MySQL database username */
define('DB_USER', 'b7040746');

/** MySQL database password */
define('DB_PASSWORD', 'Qwer1234');

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
define('AUTH_KEY',         'g1W(CccE<wiLVuaBlTHeAak5a3TrZP|MF=]cU5E[Qu]=,j%X;#,KW eh:%[m]9 D');
define('SECURE_AUTH_KEY',  '^65M?+B-X+j:}kqV/}]uf`n>/4d?Pz0|Z4nU#)/52T*Q^JPrkAtMh)xq]W1#)mz:');
define('LOGGED_IN_KEY',    's^~V`g[4LhO>F5 p!j`#dPLGPN_K~h-wC$+i.EABh#k;eB:gVt7GW%QfR5SGD6A1');
define('NONCE_KEY',        'UsDKX`mShmYuX-CH[+o+OF@PAxi`:l#~]=$ws}^V%[;jARt[scg>c>Z^B@Wnx*4S');
define('AUTH_SALT',        ')sba9u4PwmwlAVv!UDR;In&^S :%T`)?`^pR[qje#(>,.8x4n3b@4fw^I=X/|NFj');
define('SECURE_AUTH_SALT', 'xbsFjpfi/tT(j)@I+0:,`DF*vrc/PJ^KN7-7a-7g4/nD]isJyS 4EkW5n2x+?s|&');
define('LOGGED_IN_SALT',   '&wl={ySO>!u~~U{qtu),*$E~8-Ar5sC3AEw_?l1<&z :$+r<1 {neIKsl<!_&wW<');
define('NONCE_SALT',       'y&?azphOZC;QJ-V>8DJDGhw2tG@B()e.,7Y^3nQ]Tj^I7P/!XwH#aF{#];dOTa8?');

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
