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
define('AUTH_KEY',         'kFHVVSHdeT9OB9vtak/3/Ui4/rryJ7K7TVZDNUXhG0EjNsWmDh1cm/Q2AR30in+lTz6mwbQfb5Y4UlzBt5B2vQ==');
define('SECURE_AUTH_KEY',  'ZWL+QqUYAAkK7kcnnUuJ88k7Mo+JG0JdE/SNfSx9WvDRhbu6G3YSpR3/EREcOCrZI1vkn8nOLxlPwsxgwdclVg==');
define('LOGGED_IN_KEY',    'NZ9dyokTjwOwRkN+Vk/faTGmQmUeuVWJcfdvzGzlEljusRNTRvSt4Fabw2nuAB5ZC/3dVFw+4qeHD9eBx9lxdQ==');
define('NONCE_KEY',        'Iz6fbH8HX3j1+e53lx0tUpHnhK0cFXjep+DwbC76cQwgqjQtQKASm0s4mLw+4jugo6i4PDlMXeHAHrN2RrBfGg==');
define('AUTH_SALT',        '/TbHLU/JN6Q3bZkd3iKlYmJNuwi1E+/YqZYVFy6aNWUPFQ2rB9VhEdYIpObS75O4I2lBFJQ77b/kkQy4LAR31A==');
define('SECURE_AUTH_SALT', 'MJBxa3sXmWCe/zgtj0ZBl+84j7ITG/75c3rSYwjtG+PnxzvY/Yr8a0N92ObKx+BttjDWqRq7lljVrRqYeAf3Sw==');
define('LOGGED_IN_SALT',   'LTPlWwI2op4K+Y8TZ+IOlLTGWPXUZPce1l7vz8TSpAdfP61Zz7iLaPEXeeMOdkP2hYO4ZMrzZSuxYgHEeS2eJA==');
define('NONCE_SALT',       'v8kohvKzlS+1G0dAMH3oxtlvmmbdVNYkRRuklxmPbMoXI22zZcIGFMC6gyYlbN9ZimC9zgMpZqj+pX0q5ho9YQ==');

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
