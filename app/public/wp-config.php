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
define( 'AUTH_KEY',          '*&eJd;8o:o_(k{.RiL**53`2bPJKHp@@]lrFnQ$ih;vm5y#ywVkx8QIV<=8sle+l' );
define( 'SECURE_AUTH_KEY',   'I],}WL_<=^r?]-rs!]3]knA?*,=moH E]<?qwWHJ8E3*@1>MR{_o3XS 3$5|(4Lb' );
define( 'LOGGED_IN_KEY',     '@jo0h#QVk(.mq>>g;)V8_{FYyV0D~RVh8GNVmo%@wnwPn}a;C},@ruBi_NnkDyS=' );
define( 'NONCE_KEY',         '/fK9j>F{h)jg|,S*h%S#L=Y*&4bFRndxOMx== 4odQ6oJ1>ftXZ~W*:R1T[~evMJ' );
define( 'AUTH_SALT',         'OVw9HY&;t_~B~4t.D_YStimUh|GB.Ir6ew?twxIX,FLkG91DGdeLl5Zt(gX}eK0U' );
define( 'SECURE_AUTH_SALT',  'g.bkAo`:uw3Cs8#Ka<vhtC%UCwNqP{q3[mM|xK`.Kzj1Qwzpx3^ t?&WqA9F&)/=' );
define( 'LOGGED_IN_SALT',    'bHG-<z+h1PsC@ps3Sds13xHgP$i`rGfez1_b:^H8ak&u.o`m#[i!y2FB)t&Cut{[' );
define( 'NONCE_SALT',        'd1vU9k[K:CeFW82~WbjLK_(St-DRarK:K~1_=fk4rkTW;(*73tFcPTqoX||7BqHx' );
define( 'WP_CACHE_KEY_SALT', '|UQqgBr+ifn%@S_:/-C4}`]E>/n8c02jofJA^yF7 p|2& 9c]01nhXm6nX,=Rznr' );


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
