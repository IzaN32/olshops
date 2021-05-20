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
define( 'DB_NAME', 'OLstore' );

/** MySQL database username */
define( 'DB_USER', 'be61f9a47920a6' );

/** MySQL database password */
define( 'DB_PASSWORD', 'c4a18533' );

/** MySQL hostname */
define( 'DB_HOST', 'us-cdbr-east-03.cleardb.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_HOME', 'http://olstores.herokuapp.com' );
define( 'WP_SITEURL', 'http://olstores.herokuapp.com' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|Tt1famKyL<&j4YZwbeZ~tv>q(/_6O#DefP<jHM-u{4(!Wz+OjhZsQ4(m5bM-Db9' );
define( 'SECURE_AUTH_KEY',  '!S`kH>1}jw-+!V(k^zGam*<FD7<@Cq%-xIuCHNo}H:DePY7|R6FxU~eNcrZu %!t' );
define( 'LOGGED_IN_KEY',    'CS1@T6h3TIR)NUJ[PXITO.`o|1r6`/5.kGl?t)tvNYZHC}K7Tg=Q-X74Awjb=/&=' );
define( 'NONCE_KEY',        'FfkwP&o=HdGGT=^us=mAfS|]lX &A0w}n$PcTaq<-?um2?fa mn#9GyVMkO^lSQ{' );
define( 'AUTH_SALT',        'e:w0#/_[Tkt:>;QfEV57:yVno:LR)_>:d?iX}jm<lFB+^W:JFRE;,aQQS_Eu-s6?' );
define( 'SECURE_AUTH_SALT', '`E&snp-*_kWoAbYAviv=sRVyOBsCH!80[z_b5-$%~]0P,DzSOGAm9+|LjANd|Z3{' );
define( 'LOGGED_IN_SALT',   'mBsk=>-:)D`]e;}Mij-r(!Q#U1ogMDJO$4[o{Ms$;0TUlZ.0S.me$]#K!bFA$}<b' );
define( 'NONCE_SALT',       'Z06#aTQ78. U(4p[vj43-cm)`Q;]%93}/G`B|Nl&+I;(j$FWvm_.L:;SzQYWf1>R' );

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
