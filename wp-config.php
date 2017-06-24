<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'lkr]V+iVbo@ ^EvE`Zwz.|Bz)QjM%uCD4w4[U?}CI@V*WaP}|Q(R^0akpN!ogZ:I');
define('SECURE_AUTH_KEY',  '1HRipb+),8P#s[vWRFuo[@)@p.dC67qQ&gCLzI;/b33$sI}z TLp-*3u3U/2c$+}');
define('LOGGED_IN_KEY',    'Cf*xNn0-J~X!1?n}oqB-QHKS6Qj.z9Sq,/6@<-bv5U7bB%&VApBy5$A(Wg~2_&3p');
define('NONCE_KEY',        ']*9ub#7)+vg47+g)_3LF(MEe(@X#UAmR>z/+i?XDN7:QCanUb6+;l8q[5v2+K,G{');
define('AUTH_SALT',        'Vb[5L&lZ`60ek+y&c6b1-K%P|y`[h9g|[+*^j{=n-+$XDA1.r^zCy8M>y`51=6-1');
define('SECURE_AUTH_SALT', ',]#%Y0>sg=NjWT*B%YUm{|l=KGmk@pY}T,Y.k!64c2eN(EZXA#=_?,|7^MpC>A7J');
define('LOGGED_IN_SALT',   '*Q+7P5rDAiw6KQxE<+gW>Rr;<%txjh$/<StLp+ut.=nJNqDe7PNc=gF8o;hA{5Jt');
define('NONCE_SALT',       'HFjC.,y82j4 +6qucQ.nU|^S_s5d:95W<Hm|e?cnDs) ;kc}+_m/]cn-g4A[tl;u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp423_';

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
