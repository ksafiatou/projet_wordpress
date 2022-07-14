<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'P)cjw3-cek^CL2KaAWtetS3.IH7-{s5F,mdwuIxL_~tx[5`:Mq8fa17yGKG62>~Y' );
define( 'SECURE_AUTH_KEY',  'g~<L+^BYI @&.5ITh@]4l2M/`j8YEIU|_Q4jl;|bpKTsG[{f>w#G^q{sA&DeD _k' );
define( 'LOGGED_IN_KEY',    '$dvEp.Tc$]`nK.%k{2CPlfe0b N{5c[1FKJC]W!(E{|VZEq_F(j!,4?fi{P7q3en' );
define( 'NONCE_KEY',        'm5O_ f v=d=9|z_Vb6$1:#l(LE8|;*7bb(kXFH~<w*}oS}:FF:Sw T}:VHi6lSRo' );
define( 'AUTH_SALT',        'G?BUzi}VaA2V(3XgIPI(^ck[;AqU7pUf9jXAx]PWeAc %)s[^]_w9oga(5c?}WO$' );
define( 'SECURE_AUTH_SALT', 'Pq6swA]8-*|N*o`b3J7:K[T$}?>clA~o/cT2diu?t}^Gkhr,Zyh.1.)Y|*)6pwlY' );
define( 'LOGGED_IN_SALT',   '3t:+Ih|sK!vdHow~H3)-ixHq&g[tk,FN6#K#,ZRxyjokBkWewQ:6~+vD;$x{+DZq' );
define( 'NONCE_SALT',       'BU%p.n1iV=dk*z~&>Bj.GlC3l:Zcl1-s|-F,Po3/!X1$/^-C_OeTopMEN)n7&ZW;' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
