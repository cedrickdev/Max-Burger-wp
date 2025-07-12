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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Qka#<e06kwwNsg~Af6Cth~_2W,Ct29&.&I74c]1zbN) Wy$sdr~r^pFCa} u5@Lg' );
define( 'SECURE_AUTH_KEY',   'vA]#*iUTC]AX7di6H5$l^[|Aj+:9z`E,)<tZS)l_` |N!=!kkT 5JpR~A+`Bj_NI' );
define( 'LOGGED_IN_KEY',     '7MTEj|Q[c>tu/i~|8o@tD&9|7/]E[NP]@`u-wZ8@IBj/=2c1Tn(0f]9%Wx8u(R#h' );
define( 'NONCE_KEY',         '*4n#@C/{Uz<&uLT$KD)$/*Q]mV?klK#2w1,t>R3YP0Qm;#3I9Ik[;.Sg:*$~ay01' );
define( 'AUTH_SALT',         'LA2dvH8aE:t,~@,-/H/=e?uq_%Gy|zW@1wVdW,pwS=$PFTa8<nzc,I:OE:}!Dw{u' );
define( 'SECURE_AUTH_SALT',  '9 )k4{Nk;3+c@A`ut]|2os8^|aP{`1yo 2{dvk#mTe@7[}/nl_[<zxd[scj Eq/D' );
define( 'LOGGED_IN_SALT',    'fQ=A;wL8!8.*%<iPAO+f[qCsc%tudOI~|`^nL|*s$K7u/(a~b}e(D/S)46lNlj1C' );
define( 'NONCE_SALT',        'm0YDM.FGure 1GwLE2d8<oKZ_30((4s=0eIc<5t8YcK DuJ)AW4L w_Q`61YzNwL' );
define( 'WP_CACHE_KEY_SALT', '4eBSx5o]{O-3^ZsrfxIaTmJ!k[*Z2s|TuA9?~S2]mk%}f`3Z(W+#[CMc):EJC_M-' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
