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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'qucabywq_wp590' );

/** Database username */
define( 'DB_USER', 'qucabywq_wp590' );

/** Database password */
define( 'DB_PASSWORD', ')-9SSp21Bg' );

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
define( 'AUTH_KEY',         'x7pacospnaat4fidpjj1mdsryyod9ikdqbw8rzsyywqb9dspy8zi2p1wvjispv7f' );
define( 'SECURE_AUTH_KEY',  '6ijneojhlstsiss7drq51goijduy63fcn0qxq5f6q93la1b85wlh4ixgocmdegmx' );
define( 'LOGGED_IN_KEY',    'fezdd3lijdrnlhatpd3gk5pezuqklhkmm67ttksk12qivc6qx8xstqztjg4ebkqy' );
define( 'NONCE_KEY',        '18prgrpunmxtkeceezktwhtpjgbwqs5p1uqjqweoxypaxd2o32sh9cs1vez4oer7' );
define( 'AUTH_SALT',        'tqujvn1zfbyza1vnci3rx2qknjexelijivcvhbqxsporxaebi5dumlu7tlyxvm5u' );
define( 'SECURE_AUTH_SALT', 'jr7uqg9jc2jf8uu840wtaclxlmckwrwxixjjcp7jheet2zdat6h5gpwjdie1elu7' );
define( 'LOGGED_IN_SALT',   '9jeaxdjbm8s3psg0ehwaxdbvzqvq2cbfvnqr5aos1zobrg3wii3cxtlq0q7fljah' );
define( 'NONCE_SALT',       'zcb24zviygynhseovmohdggoctcaxvcucfqhzsd0tsjh6vvyr4bo6uq31mttbthv' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpv0_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
