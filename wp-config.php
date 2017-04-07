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
define('DB_NAME', 'c88-micro');

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
define('AUTH_KEY',         'U!Hy!MU^r/zUK(hdp_f$HP1u inK1jk%!9fNFc)np{@&v3(?tHQa<g zO1,8yDt[');
define('SECURE_AUTH_KEY',  '&DI%hF8=_V-qC(s$_AXlFw!?n~Up43-Xh~SUwGXf;h/jg,}=,Q]`%0Xy:%_t*(,=');
define('LOGGED_IN_KEY',    'rdv.K 3.in@;%3-2VA>>se:_QJ |e~|1=ycHt_v??AZC^o)Pt;KC=tBT(n;soE#J');
define('NONCE_KEY',        '#A(t:OWt5Y%s!?GR{Kn[#o=!>~}I+tdD4=a+Qy7[tLg@:GER6-D$#[)7y~Nr#|MQ');
define('AUTH_SALT',        'WeV|Z&2]t#aNsJIIb24ohLEny&gkVL#HMuMQf4`#YkxuEG8r+?N#s]rn7QtuYKSG');
define('SECURE_AUTH_SALT', '0X}2yiPi.>W@`s!biBE!9LpXf1J,t~#ni*sp3dz3w)P_nNR;mv!?W+V&l+Udqoh(');
define('LOGGED_IN_SALT',   'GPK|htSMmZ/K0Wt3ik^X_:Mm5wZL1(cF9}%oJr=Jszi>m=v&nTMPB#wlm+P4U:2y');
define('NONCE_SALT',       ')|*^?4LR*ZvX>3.]hNLT|3FGGrwS1P`-~^=B~NH=i! y,V-C}rBh|v-(@-:i~ms2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'c88_';

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

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

