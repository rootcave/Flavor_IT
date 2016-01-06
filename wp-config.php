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
define('DB_NAME', 'flavor_it');

/** MySQL database username */
define('DB_USER', 'flavor_it_admin');

/** MySQL database password */
define('DB_PASSWORD', 'Jhu8VaZj5nQhXwb2');

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
define('AUTH_KEY',         'UVE.FmJd+5c%J?c) xk&/eIf?jMS@|h=nnr}$57QeA@:4lZKcX|+)8ZnJ[uENj<[');
define('SECURE_AUTH_KEY',  '8M&S7>FWPm9Z!gmwv|]n~JE:aou3V`V1)Zs|-X.x[nz%Uj.(@9stJ6v|DgIRqz**');
define('LOGGED_IN_KEY',    '{8(;rI1|>!mw)>kZNL/B&5}Vzp/eZ;sdJ#ehnrpX {IgR8,553r~Y5XHmZK#)Cn.');
define('NONCE_KEY',        '}/]>:S|~qI6VIUv|t6jl*OZl#.3`oK-*^|L(hfB(m>)BwK|6N!}!IV)tsdl~6Wr!');
define('AUTH_SALT',        'N4;(Y-_(N4i! iI4:M/>A@xuv+6nG/Rb(L_wr8I<Fe>5:/1`-ocA(QL!,w-}*4cw');
define('SECURE_AUTH_SALT', '@>1jO-6S(MMNO3V5}Aj(wRH#sKaN66cqGOx{1:k^:nv[DaDl4T&m}i<i+eGoEIC[');
define('LOGGED_IN_SALT',   '+|HTTXd-~Zd3?Rh=l$2:zJMmGOSY3v7MJF$Yj/G!+{+4_r{AH?Q-JB1I;tZCGA(|');
define('NONCE_SALT',       'Xr5{*dG<k[{5GAs[H^nel^tX=$*VB#eOKN kw>n?L4<KZjLVOuZ/=9>gE_0penU2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'RT_';

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
