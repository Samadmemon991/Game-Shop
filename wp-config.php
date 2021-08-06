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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'GamingStoreAstra' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rJ3O)1~C.0h`So)<y42-c]HosT-n)^C/63p,}l2Yy?Z6]u4pb..h{6DGK!9uqQbW' );
define( 'SECURE_AUTH_KEY',  '_-6Ek!EQF2/c%%O[>G+&*q8}V)XCn-fLM7(/gnq<j|^~ezH1<#qZacEGmx$2=&CF' );
define( 'LOGGED_IN_KEY',    '.NNrX9Rc+o~4Aah[la*+?[h{3qD=Mu!xVmnamx>]4..8KZG77J60#gD~]cPV_spg' );
define( 'NONCE_KEY',        'zvq}z3(:Y_$6<PVdek1<YJMG/a2]P.xh#`/Ff ;!ePeYV*E07ICl}Mi9OPkflr5y' );
define( 'AUTH_SALT',        '}&g/Zpz0qPQ6AvTniu,6+qDIG|56Qo=EQCMeFa%z<fXyWjv_@A52bKu,3F@DnLhF' );
define( 'SECURE_AUTH_SALT', '*9J~D3w9J:K}hThscu!|1AE^o4dO^oL7_A_(>iNIB%~oLvX$f/1G=vnRZ?|6k!7P' );
define( 'LOGGED_IN_SALT',   'msC5|a5wCD=|b)lL7lsgW+6@[]6aA2O)!;oH]zcm~mWV0N@^gP~^#PSo>j%(iTXJ' );
define( 'NONCE_SALT',       'nXfYToM%&%z+a(^T{]84VUaPCM30x);0Q7AHGty!elx7adTg,rM[o48 :?d}WzIT' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
