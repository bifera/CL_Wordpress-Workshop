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
define('DB_NAME', 'clworkshop');

/** MySQL database username */
define('DB_USER', 'clworkshop');

/** MySQL database password */
define('DB_PASSWORD', 'chujemuje');

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
define('AUTH_KEY',         'Ol`/L*K=+[RK,bo8L^!(r7&<n<P%DZ4fDKJmR289<-:##M#2bBu?}TLz}EE~@4{g');
define('SECURE_AUTH_KEY',  '<G?c%|BB+UVv(m_@:waF[U~,Z,v,E})+/4._!!7wNf[_?LbXg&M!ym@}T7vm!o`r');
define('LOGGED_IN_KEY',    '&PO HzFoj7)K`E]~P<d)PAHV95uF&5|,_`TRMO&8@37*>zFKpy~ZQfz6VOpBX6gC');
define('NONCE_KEY',        'U_ME9~D]k%|LKUFx=TKx;u6eVO)}8bvOn`?c&,RfD08Fpq_/O@@N^x/^ze@?/pch');
define('AUTH_SALT',        'H;HJzx*)e*=E@KN=qh<[:Qvqe1I`u}&I6&Nhao;=@{4EXgB&ddc[||O@mhkCRU:l');
define('SECURE_AUTH_SALT', 'N/d{V2LpnBLo}eqY{t0$Bt1T{Fv7!D9Mb.=xS_L*9$wUcGRfy{ID(t9g).9x!_Nl');
define('LOGGED_IN_SALT',   'Y21GOahqM*!AOrxME:z.WB;#-nB|=fUNvIHr?edkVt&d(D1Hv0-?ucrSB)t]x2>e');
define('NONCE_SALT',       '?e|.c3vGtytct}%[8;v/{N$( b:6kY(u])V26{C(7Wl*HzpP$2U{n$20+_YVVSKz');

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
