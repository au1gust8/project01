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
define( 'DB_NAME', 'helle99' );

/** MySQL database username */
define( 'DB_USER', 'helle99' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wnddldua818' );

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
define( 'AUTH_KEY',         'Y^tszLP7jZ`Gd2549Wsj_fekhq9j9@l5T5B1EcW-)(.1#p(B6|az#*T_-[p)g-rU' );
define( 'SECURE_AUTH_KEY',  'xkCmRWy2P$mdkS<Ac$.eh5JB19&X_+~6rO?BK5.lELhFv^r)Vo_JK|+U*+t6gG~u' );
define( 'LOGGED_IN_KEY',    'TC_F=BA8o(SSa#qu#5l(7%8m=;E(| P=~8<_WrN7p%1=!&Y x! $qsrdU#_%Fg|R' );
define( 'NONCE_KEY',        '|}Tl8e#R8E9g O/*3C4$+[pf[jR1p_wt>s?f.lRu/aG29!|,5u3ey`vKAm6d04<`' );
define( 'AUTH_SALT',        'JsC}3lj$[i4Et,G@L$$H|b%9SzQUPU1t8gF+My%Cy .;2G;tC{zeT_Pte/sm3zYA' );
define( 'SECURE_AUTH_SALT', 'sI{Y,2@y+VG_ShOaopOBQ~s~wohl=y|ith=Rj%RSVp>tfC@~F|X-Ya_e_qUcK[4~' );
define( 'LOGGED_IN_SALT',   '4e]8Pe}vO2 nFUH5(MQH>MJe}r?O<`^O_O(Z[.xfkP(^W UDV}hLV3[gnRE*jLkB' );
define( 'NONCE_SALT',       'X!.DaHwb[+P:%(4MsEI$$Dl2YQZOB*QlL<}80vo+3&F7Nl3j199HQR@6H>_.pLJ*' );

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
