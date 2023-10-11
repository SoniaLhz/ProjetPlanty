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
define( 'DB_NAME', 'local' );

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
define('AUTH_KEY',         'SI4yHYo6zuYVD9/bweynAHeYEHcr39f1LMzTEJ5PZOKYZkaxo9A00i9m/DLbPlYDLMZd6ozNMe0l9CWyNtaVhA==');
define('SECURE_AUTH_KEY',  'KW3D0jX/LrU8sYGNEbP9c2T50BBQl+Kpv3MYTxPMccoqTOtK7Jzjqm4UlhTFcY6ZPrFI6nBd2tbG/X5u7eTy0w==');
define('LOGGED_IN_KEY',    '/s1z6YxPXWC8UyjLV0Hngv4baxaCU21kSgLgEcCiibAVbWhCDZzZuF/l7N5x84hgMi3BMiFv98EjAukdspeS/Q==');
define('NONCE_KEY',        'R1vqqqk3JT7muKyVRcNLlmkFbE4n+uI7qaHaq2qFZlcvfQnqG6agFvXi3SK7n9ktoswNY6p/+1ZP9xlalbZizw==');
define('AUTH_SALT',        'ZY6O6fEbitSQAXqqmsCajDPRCNv7n6KRvBEBNsmcXxnwlH2U01tp6i/IGI5F3dQZ0otaSJmdHbdjiQNTE5/tdQ==');
define('SECURE_AUTH_SALT', 'Fs5uWLP4PYEaDmN70uJkBrcoKfn85IfIhliVdk26wUR7+xDp6D3ikAxn8dWNboBklx7DxqTcE1ktgBm0HGF/pQ==');
define('LOGGED_IN_SALT',   'JSPfgds55uxgQ9HBotrZP+3k7I7w/DaVldUdIWWddmbYqLnGinUSoerieixBmUv2ZYK5WBymxdvI9y5iYqVefA==');
define('NONCE_SALT',       '5sKvrAPkY1x3+mrYIdz6ST2p8o+tJ7xgHiFCHzAKZ5JRJaQCDhu7zF13OOIvn/mD2jdfC6GGUo/Nz58o5jUy5g==');


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
