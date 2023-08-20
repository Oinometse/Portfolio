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
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'aBTZu32XYUximalwAUGd5F7oPVNsqOMN1cTcRwLSj5TzRCI7PJhr2QSX58JzyOxX' );
define( 'SECURE_AUTH_KEY',  'S0Y4Ovs1pnANc1k42X5lqF6zx9RmrcBYn6uDty5IQwmO3idKuv579rfMAEjFswep' );
define( 'LOGGED_IN_KEY',    'UryynJkpFo1b73aRx4ikyq7VAlKxu8KcFiBIoT8Tj9mv49rKvAAjc5sOHFgofkp4' );
define( 'NONCE_KEY',        'wXG0Kyf5eSjPYdYycRkwLQt9rMtbDpd1Ac47a3FwK6BKE3hclDFlpYIeD50P8KAv' );
define( 'AUTH_SALT',        'aiaOw21XR125DB2Sj6V599qdumZpfUlwVAJZl8pfbolAEIZL8wpRwfF1OTF5FS9B' );
define( 'SECURE_AUTH_SALT', 'QtYxG9B3wO7U4diOSH41EiY0G5hdiB0MFsBoU0m8D5DY50zsPgMQySi9eaN7VJ5j' );
define( 'LOGGED_IN_SALT',   'C9Pt4bJLmznwMuhDNxR3C5iEobVKIUXdEM6mFZSk6Ot6KSNvly8fjA1knINudKaV' );
define( 'NONCE_SALT',       'VTtCcfc57vkhCud4mj5m4ICHWDP9QE8XEl260NFBzDaUvBUBOhtKAtpyHDkkc5Qd' );

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
