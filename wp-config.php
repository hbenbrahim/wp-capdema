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
define('DB_NAME', 'capdema');

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
define('AUTH_KEY',         '<:kbsW84&>`*Z|,<[a}7+12Z|Zpdg[F%4K)t|D<PE!HdS/{=EEwpwPhy%Go|,+w@');
define('SECURE_AUTH_KEY',  'L0ICSHQl9|~n8d)r`ag>&}ky$oLP-:SZbN?;-2!f-oT*x|[7%Q0.avxTz<*qc+Dz');
define('LOGGED_IN_KEY',    '.5@0V]+^:#Mv=!6YTkgktx`Oz>0KZAUOK7|k}N{lqPYap`N>8r.rPAZx#[|78)KL');
define('NONCE_KEY',        'ko|!jG$,.C6UUn]pK7@Yce*beX4yax w>(7y3C.1Z*d_8f8#3WVxxJ-?N[.2?0<v');
define('AUTH_SALT',        'MZO7xu/fHe{_iqv!_-1/u+/:wGl+&B{3,Qc$CK&_nr0?do~K&_)zQ^$a=02*(pfD');
define('SECURE_AUTH_SALT', '&(*K|oT!)PHNS?Iam.ySR6%It&269EZHuu,^,dM,|YD^:6^yRtx<~7Fr51MzVi5H');
define('LOGGED_IN_SALT',   '2SN-`Kw`C|PkMda@Hx+rg!z, JKNuTj<o<G1X5;Et|!1j/9B2][BWVGrXP g--.b');
define('NONCE_SALT',       '6t{VKX6.F/^q:DZ_I^+q,MLQy<`ZtZUJOf<^=>/1<3vaiu*_S?IL2.8huCaj`3*Z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cd_';

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

