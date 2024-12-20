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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zr32cq9tXP9QbJ' );

/** Database username */
define( 'DB_USER', 'zr32cq9tXP9QbJ' );

/** Database password */
define( 'DB_PASSWORD', 'zHWwzCLFf8aZC1' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',          '#wKqAl.h-;A1vs+CPV[O(dR,`rUimh6:}7oaQPZk?saAKz.hWun?XYoF5aM[b<BH' );
define( 'SECURE_AUTH_KEY',   'n9*#+[*y,z&;7)C7@P3Ad*.=ahg|j,_^0FXlHMO~_%,_A>>JcEg{EQ&GFtp_ `E]' );
define( 'LOGGED_IN_KEY',     '5]mqp^%?!*R&,+GL[J.%>yNA<C@Lg75+j76Id&zK0h_X/38=3-4;$/J~7kU$9sE5' );
define( 'NONCE_KEY',         '&x^jQ=7k6`OFooFO&?XJ`8_>snsB_ei: Xxsdw:eC^s7B>%qZ}qypJe#yB>r&4K`' );
define( 'AUTH_SALT',         'F%]JT,lk#[eaa&1ipX8{;qUTq#[!mW)|xylPTgs<YMo^n0py^2r6#xU@[o=0_,ft' );
define( 'SECURE_AUTH_SALT',  ',S!G}ql,%U/wi%FHa{jK~}j.bt};U%O+zi OG*GO:SU6dZUAplI=GURBDbX8q@S=' );
define( 'LOGGED_IN_SALT',    '!(Bvkj#l@mb*H3sb`CD@~:q_HfJH^lW>tG&SGL pElFJEHMZ/8_`8%iwR-P[!3=<' );
define( 'NONCE_SALT',        '!U$,QOv=Ejwam#sj-$Ng,jZO/ad}##xr?G;YALXuKCKLGBya/PEFoOuD/9&@c7~9' );
define( 'WP_CACHE_KEY_SALT', 'pXVD]Tf#4Ow]&PI(B!)6$*}_iTc]_px,*5;8{W}<qk/w;zpTxjgL F$lc{{f9Y)7' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

@ini_set( 'upload_max_size' , '300M' );
@ini_set( 'post_max_size', '300M');
@ini_set( 'memory_limit', '512M' );

