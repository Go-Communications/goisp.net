<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
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
define( 'DB_NAME', 'ronibd0_blog' );

/** MySQL database username */
define( 'DB_USER', 'ronibd0_blog' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qp464@-nSc' );

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
define( 'AUTH_KEY',         'hpymz3zkfprwrwvwbdud4wpckqhakk6bphssaihqg0xwk2z5ntjcwfnyqh3ebfkf' );
define( 'SECURE_AUTH_KEY',  'tc6muikbguu6u6lg5oljuiltejafslfpphgu30vc6nlyq74vevhy7yjyja7qzbg7' );
define( 'LOGGED_IN_KEY',    'nagxj8ywflsfrztexbes1ttvhecmr1kj85rp72jezrmheovsyhqx6sso5ppf2kfs' );
define( 'NONCE_KEY',        'effql6jwhwfygmslyieetnao2lr6rfp1mwwhtvrzj2afhipbmozcqebywibn2so2' );
define( 'AUTH_SALT',        'fstqj6pcgt3m4zjd2v1fg0izwjc8uakkbrtqf7vhouzw5n0u3mtje86f4jiieim9' );
define( 'SECURE_AUTH_SALT', 'mhtj4xandnhhtfhrihayq8cj4i5rkmujog5ixwupeyed2ra3kbevreayi6qktyzg' );
define( 'LOGGED_IN_SALT',   'jubh9cvmhvnjewiu4hjtlmkndxyo5k5icsis90dvpidrszdcscacaosh8fott0ad' );
define( 'NONCE_SALT',       'jqrrgonsihkalkn49uzmf1mo7itcjfya31otlzynd7soapll4rtlleoawbdlzhxs' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpnq_';

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
