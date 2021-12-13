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
define( 'DB_NAME', 'custom-wordpress' );

/** MySQL database username */
define( 'DB_USER', 'custom-wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'custom-wordpress' );

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
define( 'AUTH_KEY',         '-V&?v)&R/Z$n+&R7siWWX<k.Li}s!^aG[|IBAZgJ2l%iJ72^l-9|vWRLAQp*p@O-' );
define( 'SECURE_AUTH_KEY',  '3%6i(95O~bE:T3ne3Slf2<Tg p-KKI21)b43Gu$m@1)$W* AR.51AvxYD)Gm6-le' );
define( 'LOGGED_IN_KEY',    '&Y/xi1Yv8eYS0w]N^R154a##()DYgXdU-{q,D/>1=|E,t`,,oJ,&M+mLaAaX>2%7' );
define( 'NONCE_KEY',        '>?fx&)E[I[o#K:ZUZwoj;H *eMz{&JNNHze#Dlkl?1Tz.7:bv%7Jn^[@}f-D&(15' );
define( 'AUTH_SALT',        ' 7Tl3=y2OxSMgi2d?gtEXN!SL.Sbez_| tgdJiu1 :H7m0Q5nhX}A{=f^|V/ewGy' );
define( 'SECURE_AUTH_SALT', 'U6(b!=[!}x`^4[UEDOQnI.E?[E3c5yMITzAIAXpQEd2,E(FtG@wD6G<4gSJIy!*!' );
define( 'LOGGED_IN_SALT',   'r+8w~Kc/8w-]wx}zJ$WC|g#TR?RK#sqJ54VbtPDvd/?r)Dm$~8`;+VElv], c6~D' );
define( 'NONCE_SALT',       'Zqf3O)0v%%SWEevEg8Cs[#*[Rm?-O%$@Y~E9hzu9SpSNc%OBIaVoyg:xWi)zI@v.' );

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
