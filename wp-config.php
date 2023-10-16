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
define( 'demone', 'demone' );

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


define('AUTH_KEY',         'SpjQetOcMAf1EABCZ3I5XgZvduZCahs5wqN3TYiZPcaMwIaUkJ1PY44LUkWYWo7/KQ4FojdwLlwPWRZOz3iq5A==');
define('SECURE_AUTH_KEY',  'UPrnN+rF0W99JJto7tC/XldwhNsYnuSc4fMYQ98/kCZzkmtbPhnm9goH0ez293CMBjgMv8jcVH8bY/YFi0xuFw==');
define('LOGGED_IN_KEY',    'yL1RTJnXpz3MmESpReK2bIosfwaojcrPr16cZQ2P71ZY1W7Osa49OTJRrDEwVEp38WolAFF83PV2aQA0MhUoIA==');
define('NONCE_KEY',        'elRBHZndtdd6jrypRlcHw0jFFObOkcsraty//jokqN0wANJrQF/gVxLTzkZi3CtJj7k9+nD4+eSqO7Xs74t4cA==');
define('AUTH_SALT',        'aX0HolNI5KryP+5MkBTn4WoU8KpvIV5iBFQfJN/aVgowKPqrfwqUNPmdcVbwV/hLbhk7UX4ZwJ1u8ltYmVs8Yw==');
define('SECURE_AUTH_SALT', 'qSsceFMGgCohM2N8C/W4bE5J0ONHYZPp9s/D7+g2Kfdz9u6uJzCR7i97UexvbsGOttdaYbsdb2tYY7VQFq8NTA==');
define('LOGGED_IN_SALT',   'ekWf8bnSPTnbdlh8cnbFTw9yuv+qBYQP2W+ckCYJgcNSSxS4BsAO2d3vZK9Z+gGV1J6jhwpPpCgJSFMvljCw/g==');
define('NONCE_SALT',       'BexPF6mf3hKguzmdBf3FTLFAYvXhZoDTzLHUiyZak6f4cZd1B5tjFZU9iLFc1fW8BBWqUBOxOwQF+hUXFmSciA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
