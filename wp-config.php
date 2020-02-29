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
define( 'DB_NAME', 'pulse' );

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
define( 'AUTH_KEY',         'hjCgk%ufnQ4Ad}^rr`?Cf{F^Te=~`FC~~Gc ^BtXS%R|T%e*Fn;`fR`|Z<e?h!g&' );
define( 'SECURE_AUTH_KEY',  '4hgc*DyT9,(mkpIg?%w2MF]e{$K2MrO7kLdb+v<OK<AMu]zP)dCC$T<dk.UYYS|X' );
define( 'LOGGED_IN_KEY',    'yfDOQ28iXACn`=g6la7FfS0k/U,@t_2-+2@wY8{zZoNeBG@kh22SW2uJ]fdz]Qu1' );
define( 'NONCE_KEY',        '/ZiQF4K_I)abBhjd2y(&&Y<J$oX0YaA< a0rW)[0l9x5/ne43}Q!L#VNR%dgk~A)' );
define( 'AUTH_SALT',        'vNT}?h;_i}KRF8>193{(EdQhe|SQ[vu:T AK4]{rHS6zhItDV+LS8:#uFPhUzO&k' );
define( 'SECURE_AUTH_SALT', '(3rP]Xz[ubl|R0% E2![0 x*M`stP|=vYR/g]]XeLo!}xxzQ.:rh!~ELAkAE<@qj' );
define( 'LOGGED_IN_SALT',   'szxcrr6kpfjayP81@Ss}4{DC4I(,jUtyh{K`* KtAc4T@=H01%q8da}gnPH}s-W4' );
define( 'NONCE_SALT',       '<-sUEWiv^.@%uZ[ns3ug8cy[v[a{@%On,:q;h*)9ak26aZ8$#AQIf2C 3_q2`T6P' );

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

define('FS_METHOD', 'direct');
