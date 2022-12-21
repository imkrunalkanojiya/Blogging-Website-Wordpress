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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'krunalka_wp187' );

/** Database username */
define( 'DB_USER', 'krunalka_wp187' );

/** Database password */
define( 'DB_PASSWORD', '-!vp]3CS54m6' );

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
define( 'AUTH_KEY',         'g0lvojssfbf8nghnqbjiqrcmeduryfjpaq4e5nxwxxcqafrmyc0f5maqjkfqgpfg' );
define( 'SECURE_AUTH_KEY',  '0mmcbkpbpvmocjypzhbjypxzndq76flewuxqcksbvswdbjfhhfnygguzygfskz6d' );
define( 'LOGGED_IN_KEY',    '0shskqpcfshzpqfpmcpfn7va43zpcwdwr9feyr6wwudlgik8badtz9vk91gb7u2j' );
define( 'NONCE_KEY',        'r6vu0whbqmohw2l3xsul7q91eazsbuhsrmsts0tdxpwtrnafnzgqbhs9f7tkg5to' );
define( 'AUTH_SALT',        'ubelkhubwcxxsqtwlsbrrlzewmzylbar3xpxsuhvcvfdawajktz0hc2onudcij0n' );
define( 'SECURE_AUTH_SALT', 'folo4lba1zo6oqfx5kleopmtliksggnhelt4qzjq3dhdtiprocn7zf62amhyrshq' );
define( 'LOGGED_IN_SALT',   '0shwwfxcfjfxatfnyhtfruxvojdyofpflhs3ysevzxqwdbhvavrq3tsvlsoakkhu' );
define( 'NONCE_SALT',       'fgnkgg9ocafi0lljlg417bi3stnd28hjwdk5g6juo8w7kxqvopdhbgmtqinrfjsz' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpv1_';

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
