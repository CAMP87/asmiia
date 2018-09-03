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
define('DB_NAME', 'asmiia');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'administrador');

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
define('AUTH_KEY',         'G[7iyTAnXR&xxy6@./w|.s|!I_OG}b`dGOSqz *(7JspzIU&mmu39.LXULrSU=D ');
define('SECURE_AUTH_KEY',  'Lgka}:,`5NLsXfv3S~N1_%I)*P5-l^HgU`1Uv:G_|6HXcZpD@o^z1m?BL6j{wtF&');
define('LOGGED_IN_KEY',    '2&P%p=V_1)+6n8_/SH=3uVr`D&)1_LwVY)i^v}69J7:.ySsoZ>GwYX>CSD:HEjWF');
define('NONCE_KEY',        'NWTR3NFK~dqqA084<;H)7]G3E2>h X{8(|LO8G0v1v+@{TVw!0h}if4|jWAzV}3A');
define('AUTH_SALT',        'xgclD<#p#lJWifR-d80~pG oW+G{3HZ{R/So0Fu0$(x~`N]H`/-t&4he F{=>c,!');
define('SECURE_AUTH_SALT', '+}a!$.{*[b<s)_!#)wBI2D_ZohImN`+?wZ))52v h$CT$d!F&u]612n@W[CGS0~k');
define('LOGGED_IN_SALT',   ' *rR-4<%9r[%e/@M*W?e=dO2GmB/6$$~pGy%%&(G{H6l(hmQ[TW_1C9(1s|/y>Gr');
define('NONCE_SALT',       '/(rU)#.,85F_q GJ&0E>l2?#%_xKG--$xWU2<{/_x5D_%=XCeGZpT%@q&Uz>Ttif');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'as_';

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
