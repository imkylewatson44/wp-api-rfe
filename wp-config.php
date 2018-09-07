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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'onxjKS#!`^([-g.v9!euU[.*KO>;J-^Udm{X.U5XD|Bg1x8&thm~%gO{c1}NsU!8');
define('SECURE_AUTH_KEY',  'Wbp4,i}-Qt;w/O qO-o]?RhHgK{B/DSfzzU=Wp`1pN=:B; eUMe/+jO$ uOzm1*A');
define('LOGGED_IN_KEY',    'E^JdH,&xFFbUEsadkqfB9pHC}w+~td+=mp`tq!PI;+#@r}}4]H]>ix8(nZ?DP|F:');
define('NONCE_KEY',        ';[UV67*whp@7pa837%u]D(Z GQvA#k0n^7IX3##jy6T<YGz=&a,RdX}2Tbxn }jf');
define('AUTH_SALT',        'qNCr2*!6ZSl,;Xc9=PxpW|7KxjSbq@5Y9s^E>B)1M,<}c4bVG}fGv4&VRb&=fYp#');
define('SECURE_AUTH_SALT', '7r#wl4yHvLET?mJ=Jz|G%6QukxqNb;SLmP{b(de2lA2p>5J+9ed?PS75M9E)`%kJ');
define('LOGGED_IN_SALT',   ':va89iJGsbiYV2+A:-GjRmq<u`>PskvRvhv,zK$}eQ>W+FaCX7:N=?t>BzH^{NGP');
define('NONCE_SALT',       'JU6[x+6:JdtssqQPNo7U`w0G$v?iV($39QMewh?blfKo_*Mw71p2$fSmusdsf3PR');

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
