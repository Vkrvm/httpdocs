<?php
define( 'WP_CACHE', true ); // Added by WP Rocket


//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
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
define( 'DB_NAME', 'northfi12' );

/** Database username */
define( 'DB_USER', 'northfi12' );

/** Database password */
define( 'DB_PASSWORD', 'Fyuh98#53' );

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
define('AUTH_KEY', 'pR096v8~~n8*8(Sk*p7%t79!AoC1F&/[@44+YWONAY2P6%V&h4!#wP1f#:(5#J6Y');
define('SECURE_AUTH_KEY', 'Mp:rTl/bZj7B0YU#D4Jp7mDcK75]P:sFC(%3NKTnjr@B&dgfQ1V0J3340ch]571B');
define('LOGGED_IN_KEY', '%5e-JNx5924QEEU)e-5G9Sg9vZ3a2:%~k7W&33fC:2VJQ-s)E]|x8#e(q7EPUCsS');
define('NONCE_KEY', 'z%94H#Z6l93%#fU9s0)bTJ;7+90)kO~0!i;IMxFq1X2B23o5NB7665_jD&7|(T|A');
define('AUTH_SALT', 'pW93P(v42-n4:;3B-/R:GC::WN67X:x%fBAW3aU(k1(-s267T82BY]0KOg*38xv*');
define('SECURE_AUTH_SALT', 'K4gyJG3-k!0s[zYL2z+_!9:&Afm;3dPp|8|x%9(s96!_R-ASLv%t4@tD3*5D)KgT');
define('LOGGED_IN_SALT', '+*iz3B(@F7QAg:|!0K*m5zIn54310*@~:ZaQv0;R[%d)1w@7k*C4c!+F21yy~BHw');
define('NONCE_SALT', '95;~7rf06rTgoS[BLwyn|X+!8116#0!X@EBby2x04D)6[#hZo4d2G4!ivIPisjQ#');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'AUwrv_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
