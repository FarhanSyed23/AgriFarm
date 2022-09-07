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
define( 'DB_NAME', 'AgriFarm' );

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
define( 'AUTH_KEY',         '`y,Fx[?<Aj{L%rMGP9#RMA=1+=c6@Cxe6=f<EU(>P+%$K.arWR&Gp$=?q`Muo5Rk' );
define( 'SECURE_AUTH_KEY',  '@#|;`tdJ6h3jFijox 71&Je%$E]hHa3A^i>;K(`D~D)c%6]L9O2bvSpC[wy/my>`' );
define( 'LOGGED_IN_KEY',    'VUv`7obQ/D|!`UW@JH<mf]eG+MPn[PqO[YcrbigU0i(4+m:s=v_ELRm#+pbNq|Sn' );
define( 'NONCE_KEY',        '#V3*R+63<}PI4Np%%W$@>hflX RY:b~ctyQCZ:-6j4Jx$EKF_J N]h{ajJ7g8F^o' );
define( 'AUTH_SALT',        'X)(#|x`f4]fuZK ;Kd/H@X<3[ ECT[<-J7HNKD~|*VAq7d t,j0n~&fbj@5r.ap|' );
define( 'SECURE_AUTH_SALT', 'KcFvU0?a-Q;&d{V:C!#1}kCFz}j$9X3IcHm,mdCA?{Lk!}+q_b,/ UXTU{f73#jA' );
define( 'LOGGED_IN_SALT',   'z-*u2|zbt*(=&x& RK?I#Yk%.<z4>=]gjMXsKopw#-D+=V(]Tg01i$Gxi 0% 9=(' );
define( 'NONCE_SALT',       'Y%iR)EbT^YDc#VW1HP:I7_/o$MN?SqhVh*]MY&v6FSPA/d#DM{[x>`Rr%Q4#0/sA' );

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
