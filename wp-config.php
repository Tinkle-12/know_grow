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
define( 'DB_NAME', 'know_grow' );

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
define( 'AUTH_KEY',         'LR7Y^N}>v=esQ$xL1UTb$:d-wUp6Vq ^w{0y[Gkf%;UHm|[$sUkR!x&glh+v^(,_' );
define( 'SECURE_AUTH_KEY',  'Zwm^^0#Ugt:>i%2Oxh/L=&o@EaV(@z*4#MZ3s>IckuCW6X{Q7}#x).g_Dv4/ :n<' );
define( 'LOGGED_IN_KEY',    '@+HGpDZF9; u[eNF5_/=[@G/)}wk9Jm$1X.]$c}>_t[sox*f~2uijX<,@!$GvFN:' );
define( 'NONCE_KEY',        'N-VoBOj=6K {Z-]}(JxVCja<dcW39j(b>@G&fa|;6_5VR9AgOW+JE!AR{Uih-#}$' );
define( 'AUTH_SALT',        'cH*~hG 30^iGQ>o<K=]YcjF&5LWH|p7%J0DlNsJDBK-DiZaO/5<@@BF mLKt2t7[' );
define( 'SECURE_AUTH_SALT', '9P)Gbw1 rGS;NLG]R0cbI3LO{ LVf;hYPmkukzloIte3 Yb9%,i1XOVv0i}5w)./' );
define( 'LOGGED_IN_SALT',   '`!> ^uY92Fbn*E.&+476 |?fo5a;mw=*0~feZxxL[{}]?x>Cm7R38!t#@Ul~u!W2' );
define( 'NONCE_SALT',       'tLGl)8[HI68zNs-+r+0.[f{l>-?T^}L`WF-l$*!|LY%N3*X+f%yQC^@#{)V4+oqI' );

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
