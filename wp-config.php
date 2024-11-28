<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'iceskyw' );

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
define( 'AUTH_KEY',         '!#?8laWx,3$(YH?dGi)4S_#}zzF8t&WQA)9[T4$P^F;6pRCZU-2.^Xz(1V=K?>2e' );
define( 'SECURE_AUTH_KEY',  '0N{&|!!^Xjt^v5Yc*2@ H9fBJEN@ejX K=KV=Lh byuBT;[NPzp:o;~$=ffNQgf#' );
define( 'LOGGED_IN_KEY',    '%.JqoF/[(7I=tkA:SFPJl?e|l+`YK^tP{69D$*PZ-|47fnA+hv,}d%EN R^IyIo%' );
define( 'NONCE_KEY',        '!^|hzJ]Vzqt[$>% /kOr13@!tr=5|EcUgq_ko9N8wy ^(5s/rfG4MJo9 V`H+JWf' );
define( 'AUTH_SALT',        'J]6_r@[gz?PCe@k80t:/fUl}L$8a7/~[6gAgG*IQ@m63VAI-|o`*)^;IuEE9Y{Oz' );
define( 'SECURE_AUTH_SALT', '6HK@z/ySH</;*4w/O1&99[8N|_c;dAQq[^Gac6v0)Vt#f(SqB/^GV5 ,NO#Y;fz+' );
define( 'LOGGED_IN_SALT',   'V.`#_)e?)a /}nyw =[^b<hN-,,h?4B7~BP6kz~PfQv%sJ06*2s~=/R.jup9GJj|' );
define( 'NONCE_SALT',       'yD3YRz2N$B>a3:^Ux$2Zlg&wu=p<IHJoCz!&7?v@VD>i%0p7$?(GD(utRH/:;%n)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
