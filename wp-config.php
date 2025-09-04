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
define( 'AUTH_KEY',          '>5RwjtufE: 0`Omq-f}a2!gI]ptd?c,d_zu-60R@<sh=Smv8xB(G;HC,:d0o(x!l' );
define( 'SECURE_AUTH_KEY',   'o6L&JNR`oV-[L&Vt>/_~u9o>Qs!)@^^%M$6a-Sk[Vh|Zmk0=OGejg .2z9[+9<u}' );
define( 'LOGGED_IN_KEY',     '7$QGMX:z0J+x?LO1<~^TEt^R)1=UP+Kqjsa6,`CUW_[eF`14@1wYpg;vkz#((OM2' );
define( 'NONCE_KEY',         'd,<SYBgheD%S4G4Y6.n0nkeJ=AH>HM^gHv%+jv*|Y17vBFB5^3WIT[@Zaeuw78te' );
define( 'AUTH_SALT',         'eKkh}_lFd@&$HKB#_[{L@On2jiaI=X,:,{^#c;]GNcoQ#P#3~$rRy-YKa.r^#5%3' );
define( 'SECURE_AUTH_SALT',  'aPe4|:j9~QU%M-a-g#F5p<s`59!`.GL*i0XPT?OR_xpE,Gt>no6~X(y`-B?Mm~BH' );
define( 'LOGGED_IN_SALT',    '83XrSL//l$</f]ysiWaQd9MF*Hd5orIE)?/HS3x;mdd_3j&0DXyOi=m?j8,wo86j' );
define( 'NONCE_SALT',        'ty%/8AP68zT#G!;kf dnHB1O0[dc!!];f nks{1+CQ&|/Pdv*VrXAYL0~qJ{o<d[' );
define( 'WP_CACHE_KEY_SALT', 'or1+p.`4G5TcA}l0I<0y@Rlh8}I =]Xo;QJ/y0%obonR0Wje:uRc0%g9i7VmV];!' );


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
