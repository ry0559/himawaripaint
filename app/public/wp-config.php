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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iCSGBNsOxrkRIYj3ogA1gMwtg+OMReTVFOY7QHlyxmlEuCYyDJm8dKDz76/38SynYmb1WPdsGY144Ss28pLWAA==');
define('SECURE_AUTH_KEY',  'Q5Coh1fYqYb2eK7LSlaiIjstNSx0ZyGblm84YFCnM2zTGNnOw2gCQzGu1rbKFkkiFXn/qPXG8DVBVc448N68WQ==');
define('LOGGED_IN_KEY',    'J/JSSJjRJ4RViGw4YE0czgUTIP5mNvL2ftGRqDI/rorg5XzINGjz++gAnTHR9przBBvpJvknlea/o8azE9R/tA==');
define('NONCE_KEY',        '49f/V6NXmpkHJBb6hNmXO2k+tGC6cFY59yE65+zCD1gbGlf0dnq/GuUYVjXJO/BX8vVfOpp3h21GmDE/UFd6hQ==');
define('AUTH_SALT',        'r3MB6Xq16uJsF0LBcfUy/V5AJdNkVQ0Ev7SsZskFIDqmk7NeVMsW0xadW4elldEJzZfcRgqcQuVhx92gdk7rdQ==');
define('SECURE_AUTH_SALT', 'eiQTwhEm6dXPHlYZ/Qanw1ZXaiyDwWODlXCUWXZIFjfSPMUEvnO7T/1r6EWYatcZNzsVW6W9uzGf0G95+8p8Vg==');
define('LOGGED_IN_SALT',   'k87fi1UVVsId97eiwEFsIjLSYGmrvj618q85vX5rgHDQ9T5tHL7Nz6UsNvz6VnpiTROcyZ+HI0czvEcwMAgg8g==');
define('NONCE_SALT',       'EMOZK1jw17wpQZyhA/4bernh2cAckHLOGI1C/PMVwSxwpuo8tB868hQmnXYjujv5SM3fcb3i69+h4IFVxbtWbQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
