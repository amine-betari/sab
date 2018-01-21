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
 
/** Recaptcha **/ 
define( 'reCAPTCHA_site_key', '6Lcz-joUAAAAAPWquTfVAoX8sq5TTBULC2VlFBtr' );
define( 'reCAPTCHA_secret_key', '6Lck-6Lcz-joUAAAAAC6UCW6dMLgoUxQXdv-OimLaCg8r' );
define( 'reCAPTCHA_error_message', 'Please confirm you are not a robot.' );
/** Override default file permissions */

/** Contact Form 7 **/ 
define( 'WPCF7_VALIDATE_CONFIGURATION', false );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '6KRXTLLNrb');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '!)dNMV*Mex&7%SFO%lW i$;[?$T?&FX)$1S{T.<4P,z96!Jwa+JGV^3KHD-.qB$!');
define('SECURE_AUTH_KEY',  'wqo%Un d7SpR{KVd33{i{?VBC72T+<Nh0Z}|E`3^z,(nS|CV}z4Ll`B!#`F{aDE@');
define('LOGGED_IN_KEY',    '.yk<ZAC%Q:;+a5}PHWTkzr]P=Qn*dK.Cy4ai&(? <O([Ojy%QcR;R][^,5R#dq-K');
define('NONCE_KEY',        'vG,2A;K$$FP57)$*h}74,QcNV0V$>&yT^:cV|S_E_l3o>CP.7!`2%&it@(w0UGaD');
define('AUTH_SALT',        'ikZATjFa[268]KQ4L{BJFd;:gjr*ckaSz?3f>z-2Y>6]y%0PGAtObkgQ[r1mQQ5/');
define('SECURE_AUTH_SALT', 'Y)yI]fnr0NxE[Dit,]ggPlMJPVC$|bC^Xc-Gmt5-<x1!7nKgzQ/+UR>eh*O c/e!');
define('LOGGED_IN_SALT',   '<:L=&!0D^po]7(7Dflw}+OxJQkvF7FE!0;`LOex~n5zw.^s [Jz-DvPem{~RYB/}');
define('NONCE_SALT',       'me%E^]ref,5x6G8E5_Sqyp`JW$CXR 123)}WaPQAR_HhW898WS}b<YxKwECH%YBE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bas_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


/*if(is_admin()) {
    add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
    define( 'FS_CHMOD_DIR', 0751 );
}*/
