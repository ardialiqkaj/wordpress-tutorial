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
define( 'DB_NAME', 'wp-tutorial-db' );

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
define( 'AUTH_KEY',         'Co6=;m;(:T1Fl5CrsUkQ_?TG3mU1bpi(G{}(kM(dd]/oH_:[$Zh)GT^gicx,k+pt' );
define( 'SECURE_AUTH_KEY',  '/p0aOT|@Ff S e7104!6*$,947W=dY16wSpd.L0;u17-Q+8tuZOlR}$llE2;NKlW' );
define( 'LOGGED_IN_KEY',    ':h5E_7;g5MkBF9v *]FKrv-/rz-~])tHPDouU6n{Jm) f,QECXKf[/Wg#E9A?X2^' );
define( 'NONCE_KEY',        '(`FycU_ 4d}/Hj>T(^Vy@.+Te;B]`?Y$pbAk##;C>.:)q*Qi3/w5@O#BlcS_f7#x' );
define( 'AUTH_SALT',        'K$u}m]V?~0+T,yO4n4#eejD1&/0K1&&Jwj[I{|]kf=t o|TNLsP$Y uuJ^a`_@h2' );
define( 'SECURE_AUTH_SALT', ';}cClDq[A5+ETw,(Hs/fK;y<x% 0b1^62DKdJE`}z`>$se1xtIy@3L>KSS5vn-7_' );
define( 'LOGGED_IN_SALT',   '$|<i;v&jSlqYB.$WaG2/!g&^O7$J!Ae}UiKwE~[-|V_`,:bgPvZCcQE;R q8~x9X' );
define( 'NONCE_SALT',       'kz7}A*`&mOv[9yK>bBeKg_lAswli`J|SN@!Sc,]<E$B~dR6mU]+_9xsy `*]$.-]' );

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
