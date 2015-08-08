<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', '2594b2f31b');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b9bd7b3175963b83958fe67f1a0829da483e25c59c26ec0e04e2844035e5d066');
define('SECURE_AUTH_KEY',  'f79f4553dd13c4655eda6203dca0e0d1d92f88b25ebd185162610a6467c0627a');
define('LOGGED_IN_KEY',    '71a26588b367a68cc5a16c7448b183d8b4cce9f9eefd4ba9f5e3f9c3d2951ab0');
define('NONCE_KEY',        'b026a9e157cdd5d9443c1795afcb270c2ee601fc8a4544f453dcd01402ba646a');
define('AUTH_SALT',        'a4e593181c1d9207435072476f97c442a6630512a33f6f4c6443fb142677d78d');
define('SECURE_AUTH_SALT', 'e121d560a55b8739e505fb035ad6e4f7045a45bcfaca549784ef34c7dfe18f8d');
define('LOGGED_IN_SALT',   '68c57fe0c0ffb36eaf216421d06772a4022a47a5816ea753f267320caacc9b96');
define('NONCE_SALT',       '461607234ebd08b1ba9396829809a18e278271035fb82eee19f6a00027869a90');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', '/Applications/wordpress-4.2.4-0/apps/wordpress/tmp');

