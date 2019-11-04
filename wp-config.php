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
define( 'DB_NAME', 'wp-blog-2019-2' );

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
define( 'AUTH_KEY',         'i&GM5Rts_<{#RY^l_qs;N1dDPTl,xA~(aaV-~?Q!c8Bnz]V!]+1ATTy9c;V-(}VB' );
define( 'SECURE_AUTH_KEY',  ';{5Iah,/s-E ;hs<]=D1/=T<GkqR7m7%{-injO 6y%j3Z/VV5:2:X</er^cel|=O' );
define( 'LOGGED_IN_KEY',    '{I1:IY+I7BTsO=&ZFm|QUN3XHFv?Z{w?08PzMtH{Vt(z&KfzmBG[Oo=%e=.m;wz,' );
define( 'NONCE_KEY',        'p:~<RwQ%Z>CB m^x3/l4MA^1xmjse/:J86FUG_P8fj@ma]{JZ<.SU]GYz^(3Jnd~' );
define( 'AUTH_SALT',        'Q`wcq/@ah[HGhp&8`)2H DV_kmlpeCJs:v:cqL9]!gs,70d>Q/|f}F`xKV~2l|mp' );
define( 'SECURE_AUTH_SALT', 'Y<%yZ>]z^:C6l(U#9cd.o&xJn?>/>>,k2v{L!Kq32R ngrO4$yu]a}K`=v[Kpa)=' );
define( 'LOGGED_IN_SALT',   'tJpxy>N/2T.Zp~]5H+ua:-+#9~f#;UQo@j.Y(UtWZFc>2WM][8Ce!PQ=2+^S{:zI' );
define( 'NONCE_SALT',       '|yn(I;3:d=0$t#s0 kvo,x,}l1_`!HAPCM)(+b!%,pH(w$3F6 u/A[j$&%PI[wY$' );

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
