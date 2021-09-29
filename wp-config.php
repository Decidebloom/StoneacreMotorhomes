<?php
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wwanvildesignsco_5' );

/** MySQL database username */
define( 'DB_USER', 'wwanvildesignsco_5' );

/** MySQL database password */
define( 'DB_PASSWORD', '[03g6)Sg7p' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kh8sjvhrh8kmrz2evctfxuvfvmdvhhdwkodb9d3gujeyaengpowgzy5rggignado' );
define( 'SECURE_AUTH_KEY',  'yaupws5qsncbene9741m9rci6uc3fdxgrtektzfzzc9rqyefpib3epdzmgyb9qyx' );
define( 'LOGGED_IN_KEY',    'ajctx5iermamz1rshrcyd43nfmdh3w8cnilivwjqsejx3dojsdk5iosfsp0ouhyg' );
define( 'NONCE_KEY',        'dwuxvre3qqaykhyazp7rvat37jn7awkgbpvqdtbgqehnxt8ivdmlvcbpddjnh0si' );
define( 'AUTH_SALT',        'tpqkpvrhbhdjhsc2jf9mwlqtb7dncr0vhzajadmohoa1ltdqplbamhndcwoxwygd' );
define( 'SECURE_AUTH_SALT', 'm8a7jhbbsheclauuzr4nqyzha0ypnbw3rcavrkgbwxeuedrcbtaklakj83xczrrc' );
define( 'LOGGED_IN_SALT',   'sq8l86bgcij9sdt5auzt1owknkidgxpnzvgulbot6y8be81c7xlx3eukzimrnvur' );
define( 'NONCE_SALT',       'ckvanfgqpomatbrayvwtttib8rfvxxmamumgvmblgbdpypovzm8bkfcmldwjbaih' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpav_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
