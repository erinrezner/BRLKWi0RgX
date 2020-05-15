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
define('DB_NAME', 'wp_april');

/** MySQL database username */
define('DB_USER', 'amedw');

/** MySQL database password */
define('DB_PASSWORD', '63%3dDxb');

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
define('AUTH_KEY',         'r-Tgn^^B(bE^HTl7eW%o?v@Hi-IKe@-w_~~e<SZRwW}9H54O2yxass[aEjOe2- H');
define('SECURE_AUTH_KEY',  'i*~bW24hDauG|6*7_7bYgI|c%PSY51|dv}1~.[#_-td5QsOtbxQEfrC;tfZDse8u');
define('LOGGED_IN_KEY',    'x+)<.gEtJ8?3`k4}t9,pAJ-$LEG;}lG[p^ww_q}Lr_2Ws UCWmBJ<4s*z3V8;P(~');
define('NONCE_KEY',        '+8A-LwsOsQ<xaX;:PsU53dstW_=s=ryN+z9VWKA5!}Qxxnii^7,&`JHYu400[p`{');
define('AUTH_SALT',        's-&&@DsLzc>w+DT<Q,jL,bX-.Shq^J6Oja[N*zRhq}77v-,$ggbeMIau *$-3wG=');
define('SECURE_AUTH_SALT', '->j/s-%>Q+9GEGDXOL`bfVpP0O#p&p!a3aON!f*3E+/)sH3D NSCk:R8(fl8sbdE');
define('LOGGED_IN_SALT',   '7arWGC!`[R^Q)+Hx+}JeM@eS64xh+R[&JEH|XgS~)Bu&x9VrRtn{tu,vLsA%x&)G');
define('NONCE_SALT',       'h+Z $]Q4CVWBFy%v32]|zz`gMhgyd~W;k04Fk%uc{qKy.69sE~O|0?#hXkc}W[6J');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'SPDwp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

// Increase Memory Limit
define( 'WP_MEMORY_LIMIT', '96M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );

//** How long before emptying trash */
define('EMPTY_TRASH_DAYS', 15 );  // 15 days

//** Autosave limits */
define('WP_POST_REVISIONS',5);
define('AUTOSAVE_INTERVAL',120);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
