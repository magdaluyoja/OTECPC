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
define( 'DB_NAME', 'otecpc' );

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
define( 'AUTH_KEY',         'qYsYm`u;ygxsFyQk,adRP$Ae>Pik5-Hl~`_W|cQ=N8&r S:m$jNKqhv$qD}yH*K+' );
define( 'SECURE_AUTH_KEY',  '-(Wc&15v8Q?*-E,tP;*A~c=S`}}B$yKMij-iA_ie=lunOU3j:Jqu{pfYi$5TS^lx' );
define( 'LOGGED_IN_KEY',    '1YObBYw^mPY<6)NA4>5HHd{vHA#{ k6Ha1+a28ANl+ds5q$o^gcSgUw+IWG`aEQP' );
define( 'NONCE_KEY',        '6#,6.a2HE$rmK(q`1s[h.U Hg17d07 zbOuJHY;;?#6SZG7~cK):P/Z-A*l-`f(M' );
define( 'AUTH_SALT',        'Ke@ru5lmG;h.[c|=|>TZhod7SG9NZ7 mX.HB:^*3TP#UDngO;IpF `O(!pr+$aAX' );
define( 'SECURE_AUTH_SALT', '$9!l&.toT[qbjD,INofOsIfhSN[&!9q6*3E}*yE.I2$QQoL`AR0+G73?(Fxu`nIn' );
define( 'LOGGED_IN_SALT',   'b10>b6EyLrW%2]-BA6(2P@S)ybC]EnK^9jc]m[*jm @PgNz,ARhhW~F~TC6-UZ3*' );
define( 'NONCE_SALT',       '^7P<]nTED%HGIieJgK.XOo%a^[*h-2R47lo-N?Aj5>{RJ,$iTq|D}09HhH>=_#ud' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pc_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
