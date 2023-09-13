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
define( 'DB_NAME', 'ronibd0_shop' );

/** MySQL database username */
define( 'DB_USER', 'ronibd0_shop' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p4.S1e@JZ0' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'g39nt7k2jj2nw1hka6womkaome0mpu0n2sfo3si9q9dmnqs02mtwv4pupianpn33' );
define( 'SECURE_AUTH_KEY',  '5m2pshoz7kzdhjxelwup6wxcls8tltqo5ucpzlgovy13m8hqfsp98r2qngek08zm' );
define( 'LOGGED_IN_KEY',    'kvmilpd5bxcwpv4wfi0uwitz3ilb9xihnrjuwfxrvqkfonqlsnvsfpgpqcw1nwxr' );
define( 'NONCE_KEY',        'rj0r5ii6xhvr5nuhtb5v20cxjtqtiggdoocmcr0es2gmxdebcau7v0wh3lexwerg' );
define( 'AUTH_SALT',        '53csefaotw7er8yfhwsfdbmgkjz6vyssisnde8kjpdfsprtgod5skuo5mhcz0aen' );
define( 'SECURE_AUTH_SALT', 'b2wojzzr6a0lleosgnelftsqfhwdjsquofgtapchnj0jtzydv00zt3r4sqtiwygs' );
define( 'LOGGED_IN_SALT',   'ckxj6pdxnynvw9lelr9vmxnnbcme1wbc0taq7muvqz2uuum5o2um07ajem1ewcps' );
define( 'NONCE_SALT',       'b2ukwbkwshqo88lps5ooneb2zdgumq4zy2w5v7pykvczto5mjnb0s2evwxjdqpri' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpqe_';

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
