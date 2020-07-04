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
define( 'DB_NAME', 'aprendiendo-wp' );

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
define( 'AUTH_KEY',         'cKFPeS:FhUK$RA?/9/jkZ{Q;9V2;Up=*@?iVu97q)$(u0{-FZ*:+usmwD_UGUP2b' );
define( 'SECURE_AUTH_KEY',  '%mn`R=@{Rf:E3(60Vq !gaH;!XZ-p>t|^&ug>:YIM:P)f&(1#M0My^pEP.%HI@lx' );
define( 'LOGGED_IN_KEY',    'Tv21(&gI#JG+C8tv*^}>h`] f&n-}Uc]ev,m2_[<Xh&K)G_$a&-.$&(O5B1&&{J:' );
define( 'NONCE_KEY',        '!ob)~;f,IPrd8{6Ib@]k;l%psMr9o3Y-;K=(kb,.,]{[i=_t541&)0P~a?<S[l;f' );
define( 'AUTH_SALT',        'gh=B*?e`K<nT[;,W;kDgb%E=_;#)(<9]ZW[?5Hsc,uwpN6MMmPpfk4nM)7{r$P4@' );
define( 'SECURE_AUTH_SALT', 'FOS4UE0-XUd&C5bg9@6l>ZS-8uVm|v%R+G.1}(9%P[A}um&P(?zb}n(W3h8M^77/' );
define( 'LOGGED_IN_SALT',   '&/juk&w1PY)DjOF+~ktvFXqY}R{fibpZ=*XXQcZD Lf*F30|w9B::hy<91!gjN#a' );
define( 'NONCE_SALT',       'WG.O.z/?e!Za4b)L`>2$[eteH&:2.4x1U?oBY= kmvmh<W~YL%;;Ke{^K%aexk__' );

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
