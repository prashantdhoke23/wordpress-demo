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
define( 'DB_NAME', 'wordpress-database' );

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
define( 'AUTH_KEY',         'jh*P]Mmhg:a%:9<kvQEc{$c_*DIO.@Q6GCTW49pPY$$_}(14i-m-AA8O.KgqxZyA' );
define( 'SECURE_AUTH_KEY',  'R EoStGy.8~t3 i%:+ET|Q=Zm|V*aUw##XNxgN;8$~qa|qb5OS9V|AY&WL:~rIw_' );
define( 'LOGGED_IN_KEY',    '0F_9|TW8Oe;.WSuiT#shY#winN~w~x@HVd%-psw&nFyd5Wx>hClZy/F]WY~S[R.3' );
define( 'NONCE_KEY',        '+m(~{P4){_!^v:4sT9e5` j7aJzRJL*!Qq6`-:<n<[+^c,clM!:9Jy2mn^XW6l_&' );
define( 'AUTH_SALT',        '^4HPI+]o6tQ$(e/yL9PY:A?V}_~qcn$pvpt*+m^`tS_v.g3?l(,>5hL^bW`}EdAo' );
define( 'SECURE_AUTH_SALT', 'brnnK5yMEis3&YNZ.YwojstSxAVs[<#QOKg*f;7`KALtq%`*h{:b]|6cnz|9lVC:' );
define( 'LOGGED_IN_SALT',   'B(8z{0&Git$x6]Sb5.:mCsfwbAp53stbU6c_tHaB;.TdoWx5KCmHPfwS]dPU[0s=' );
define( 'NONCE_SALT',       '`P/X{a)m7*Sbhh%h-|eK_P2EgP!Sp,3tNRg]|&(qTbzX[)VEDvna%rNQ+cR}cA,*' );

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
