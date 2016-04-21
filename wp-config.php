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
define('DB_NAME', 'chiropractor');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '4eJIsea8');

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
define('AUTH_KEY',         '*#2EM*<UKOV+~rQ+Th!gcmvHWFDFnZw9FTcHGOCm{#T&|1CdV4bjDm%9Q2!gip1+');
define('SECURE_AUTH_KEY',  'd;&.a!^:wzg|mw,%ZjTx1RyH^B68|TxH:]A.+|/(-dI?5SNLa,:FN<1wGMh}$Wu^');
define('LOGGED_IN_KEY',    'UswzS<b2f/#{3kk21#S)SQ?l63w?K5x]-5-^,TJ&E}gk9IU^WT$K~viX4gO8Jwt^');
define('NONCE_KEY',        'B+B_I2yDPU:or7V(<_7@LY&bXC8E@2su<uN=]OJNr.DB69[ry};4nBg=;wrm1^h~');
define('AUTH_SALT',        'dAGTE-k3VP7Qj]V;F6o0v=_b@<7R6+F#0j#w#2[g@qdNhkJDh19V]+UO@oma+Z K');
define('SECURE_AUTH_SALT', 'THFlT#!ef,5oc]@A}>JzYbQU8n=r|-o7-+(TlF<zDk8Uj JA+hlMo%-%}8x^%9w<');
define('LOGGED_IN_SALT',   'kF?XmfgR`.@]n89}X[{=MzDBjtQw2Fg+.JkiNPq`~RfY3Cza#)x*%Y ue_}r|B.f');
define('NONCE_SALT',       'J}+qK;Y;fgu/Z>i6Ckgb_n*u]G|AxypDdO~v.d;jkt^Fp+Wvf2f.D2MGX<`3[/:P');

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
