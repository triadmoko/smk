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
define( 'DB_NAME', 'smkn3solok' );

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
define( 'AUTH_KEY',         'U[R|b3e=Qh;Yh}P<nL1t[_ u~@z;9gOp%-:P,Cn~v3Ze8ZxRVJ@9PQZ_c*`ud#V~' );
define( 'SECURE_AUTH_KEY',  'HtOiJK]T#Xg6_}yZu|`/LC:w2y#5<!Lmi=5zQ.m]Y6.r9D):xK4ORj)R)=mQ`mBD' );
define( 'LOGGED_IN_KEY',    'Ek:a`&)R1~B`-BtE,-lE1a,Wr7-,j!s6f^lSLwn(|ZdA7veF~+S)JW)fVrE^6$xj' );
define( 'NONCE_KEY',        'bGxJh&r/Z+Y2#I%%1A|:b1klk1eum|@~`5Pt?xr<NYXV5WPI_|23i^~70|yQXT50' );
define( 'AUTH_SALT',        'i*lqmMqA^S0-,fxt+YYK2.,)`eY>1*W*#fEez&;=sq0><Utnew{Y`CR!Opl,s,%9' );
define( 'SECURE_AUTH_SALT', 'CXa% )E03 k:@MnhOT@DftRyZ;{0LM,,2->/,iK:1$+jH.}+%)[#sNylQ8QXq|#A' );
define( 'LOGGED_IN_SALT',   'wL`{B,?G2A}9vw},ZM<}y?WU;<4*7ErSR_0G|VC)ek-ac$/eV!GU_u[X6H/SY{$s' );
define( 'NONCE_SALT',       'ubDI{ipsb`V80@8{T#a_)H_FfhmdjULP}}O`,#bDCg?~qnvTlqQ+yAd>)P; -X_L' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'smk_';

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
