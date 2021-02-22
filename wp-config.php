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
define( 'DB_NAME', 'wp-1' );

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
define( 'AUTH_KEY',         '&FB#5.KU4JIlp^AXEqMW bPb>(i$Dp-oB35QE*`MrDEfH% .(jHH`nZp6t^>4RW^' );
define( 'SECURE_AUTH_KEY',  '.}3WI|,)Uqy2k#LNh|Y#ds?s=J^xV@~t._VfRhlAr%DxHk*vpdB|Qt#4qdLAmH#Q' );
define( 'LOGGED_IN_KEY',    'E_N<eN?+hjXE/&O_vX~~F!Ms,F13Bj,Q1TlQSWYoDW`h+z_}zy%1W^Y(R<5NO~Ty' );
define( 'NONCE_KEY',        'w>g<0bo;bf2#8h(6+:u.e=~QT&]sIvPpo!_V:&9[LOz2|s_w*hkH) 0hMIr~MD+b' );
define( 'AUTH_SALT',        '|iGNWvOEUbL7hWrpcnf%#Hh..tWi43/WKrj|K6pqveb!}v$I8xb+)CT^dEOSjw+`' );
define( 'SECURE_AUTH_SALT', ';/%RU_vKy/vX`$FX?-`B9i=?5~99Ab:m$S[y/c/~*zady5S92TysG}s!]f+0AFw,' );
define( 'LOGGED_IN_SALT',   'g%EDfSL>}pFXbB^A~7)sr?@|cYpdU#$9WzOk1MsJ^kQ1khVgdpF*@@<~Kl83eb}V' );
define( 'NONCE_SALT',       'zP3a()3AMW!wb ;5|_^05ZiNI*[,[|!;5[s0DYZ/=G/k[o,r4:*f Acnhw!bWa,F' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
