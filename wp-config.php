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
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'a1d373e3cc4572e40c2f37484f98501b267fae65f9f360b2' );

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
define( 'AUTH_KEY',         '{Sgqw{- 0PQmCd&wxd=5DVGLqm@R}$qoVp`dA02nUxbMTd>0wO7P}Z{}(4:>i([x' );
define( 'SECURE_AUTH_KEY',  'yB!GjuJG/1%ZAdNtHWv%(VR<z5i~ttucM$(;<|K_C:BFkINGja!}o1lnb})> NN(' );
define( 'LOGGED_IN_KEY',    '2=.8>;Mc>4`!Cc(f[U I%QM|M#;d,cVe,,<U[wJ/kQOoi$}dolTBLMTrHYAPq{@F' );
define( 'NONCE_KEY',        '2X<5i|ht!)e=Wx4+eD;|W}an%8fq9ThN@vkLBb6|<4SkiIfUZc,v;Q7{6$*{_F%.' );
define( 'AUTH_SALT',        '%XMDd`YixH/@zxt=[X84U8q2p0;V),?D8g+e2:]?%*64))83_X?^y0wCZx$a.!dk' );
define( 'SECURE_AUTH_SALT', 'S]&2_01+^8^TOJH/dmoZy>t2XT0&C}+SdiuLWVm_GuBtECTSIW:t)yal@?>Gdpd7' );
define( 'LOGGED_IN_SALT',   'D!m>nDQRnb: ag!Y}PbL6,Gw7tO4)$An(P1<I|]}4LNJLVJcmEBi>-hRGh77^l3r' );
define( 'NONCE_SALT',       'iInrSf_4U~x1uBevl9aZJ442_glZw*Go?)?4(B&X~boJ)v0_#C6314Z&Y?`(ediq' );

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
