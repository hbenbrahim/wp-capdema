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
define('DB_NAME', 'larbitre_main');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'y {/g$R6+P(gfE3HuC`;MI4t0+l|&5%=%u2E^@8MnZZ,LJ3*xCS/%.W4xW{7AMsO');
define('SECURE_AUTH_KEY',  'nN(Lx,#-O[[j&JWUN-Vf)Zj f8kU-km9VZ@]Z~C_G4!zZ<i,/sQ=+#qMUWP3;hkt');
define('LOGGED_IN_KEY',    '{#|!~;:@Y4Xv:t|I-:+]g*z8|hJ3yM%v=I|!9]I.a]K[#=)kAufIDK].VlFep|PR');
define('NONCE_KEY',        'yD$_/JAETYO-?<;CQ&&|NrJyN,q>fe,3C7S#r4/+|?-IvS=vKAnV.DfWWS|c9dhO');
define('AUTH_SALT',        'ULB)`3@|/rIH+wo(y4[:nv*+g-/<:8*S3=+|vY[l9YdAr^R-0wG2_gHR[wHIhLKR');
define('SECURE_AUTH_SALT', 'f=8+[fj)p0<p0c~SjZba*1g+=1TyVF?~<4d+&^ xhNb$I!o<?2gE5z]l^)KoLz>E');
define('LOGGED_IN_SALT',   '`2qF;lX@vVsfmNvsX+lMr9;X:<U7AzuCPa&t^=+(HUdtzpBx@-TwFeJc!6@qnL|V');
define('NONCE_SALT',       'Y]PZ4UNsm2-qgc4<`No)-y-_|dYY^sCV0EFV{[LRJ~*[yM5RhRg8@Ra.x,tOuo#[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cpd_';

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
