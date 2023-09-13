<?php
define( 'WP_CACHE', true );


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
define( 'DB_NAME', 'ronibd0_wp956' );

/** MySQL database username */
define( 'DB_USER', 'ronibd0_wp956' );

/** MySQL database password */
define( 'DB_PASSWORD', '-p[S61JK76' );

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
define( 'AUTH_KEY',         '4356kcnuqdcvekt8pflphlorxmo1wo6hjafbzvrpwsguk1kbksmhh54an3c3itpq' );
define( 'SECURE_AUTH_KEY',  'stkfi7gxdfajyuwyebbdi3zwtzl68uhf7afxwpbxgqmcxo4kvhymff6q1n33x9lx' );
define( 'LOGGED_IN_KEY',    'eri5kpsgd9en0etq0exzqeidup3p7sy0nahdaxzpahlc10gyd0r3ptvhz72ucbgv' );
define( 'NONCE_KEY',        '5a5fgo9kd4lxio929wny6o0esrzejrblsjhdiievdwhqqa7pjyelifreabxaclqk' );
define( 'AUTH_SALT',        'kwvlojjtcxvlryusiakglt2k4s15oj7kppwugn3fop6aflkusv4vedvr0yvbqhvg' );
define( 'SECURE_AUTH_SALT', 'tthsda1m3sbgkxcqgcx0zorzjbet92ndpoz6vpcccvc05zetq5nxgsocffofq7dj' );
define( 'LOGGED_IN_SALT',   '8trkiey1okasfzbszkzwtxaxv9mhrydp4nw6nlrcrb37gmemuz42emhgj87i8dwf' );
define( 'NONCE_SALT',       'gzot2kxveoh9mu9v2zfg7rvh8jyxccpbob9ikqg0g93ytqc3ilkuamsdswaagxnq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpwq_';

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
