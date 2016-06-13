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
define('DB_NAME', 'toxwknq_hisco');

/** MySQL database username */
define('DB_USER', 'toxwknq_hisco');

/** MySQL database password */
define('DB_PASSWORD', '1q2w3e4r5t');

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
define('AUTH_KEY',         'z#DT!FEV[E<S7e%KpBO[[MiH;T1JLn?.B~:6`Cz=t+jUw+K<[/5L0|WgLdL<kHTN');
define('SECURE_AUTH_KEY',  'F0a IkWku|_>p8LIhTv*X{T KS.Aox3UOGGG6RiM=CAk@`ny@Cr#l@eUOv{E2l3n');
define('LOGGED_IN_KEY',    '4d{AnN*:HueJc)9v_Fv$ql)?8ogd|TgA$>Jy!Z[Gp(vX4P`YA0)Z:le.dYZi`C++');
define('NONCE_KEY',        '&zl8xPVl,ibnQsNv9qeF9NhkF}~pPr:QA_Y%u9%15M]9=|;jUWT+P)u. J!0lPf;');
define('AUTH_SALT',        'yFsFO@4Nw^K>$t|AeD^jC3+|K}+7(c#puDtNwC6~C5v8Nn>IJ!hK8I=b5(^G.;WZ');
define('SECURE_AUTH_SALT', ',gq=>S|fS>OcbLv3i/VbJmw5P=a+d`U<U3Sf/$i@XSDMxYws%0A5S|iZUw=`8MCp');
define('LOGGED_IN_SALT',   'eO$va`WHOr FDfzMeb,B+>*^gke^#owZe7Tb(e)yW*&26oWkk62p&ow[IYd|7gkB');
define('NONCE_SALT',       'orJ_7A]@)T-6vBuPC}DOUc(s{MYN}2nM$^gKP@;]Y|LiMZP{,;>#xiuuc><9V-0/');

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
