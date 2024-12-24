<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'university' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '0)PiyIK^rK$VB$%*d>GxTF(xg,.8C`A&7o*&Y)Zqw<<kU%DgNbTb)_U0DrWRM,u6' );
define( 'SECURE_AUTH_KEY',  'z{M1QrD~)>8%PIC/OS4xa+F?,gC*?N#DmEs2yyFOl-TBPPEjqOCMTF`14j:9]zqV' );
define( 'LOGGED_IN_KEY',    'R.IEuH,_5|d7Q:oq_x{p,1GSAWD]ECcb:[U}3ZPOeASLNn+CXn>t;q,e~8PZV9!!' );
define( 'NONCE_KEY',        'kwspo* R_[)l[np>5SHJU9=Fj>wGI*E};Or+u#,cnJv)/0$Z?fKRi;R{;Nu`qZZR' );
define( 'AUTH_SALT',        '*=7[5lvK$2]iz1/Yz8|G[Bw6U`9zh+_z@Z^~%pX_X]#5g jX@>)Wpo~-@){[XSi]' );
define( 'SECURE_AUTH_SALT', 'UiK`=>{_=G=<t/dh;OO}BpBIE74~38r>=[5x.b[,ZTfuCn8?&91ESD/4/BtiH+`}' );
define( 'LOGGED_IN_SALT',   '49U_T,:(-~<bN]HCUDEssx,4A,jHB7?Oo 7k[tVcioNkDNn]3%/2Y$[t[/@#_ @7' );
define( 'NONCE_SALT',       'V1<$NyySVyiNYg,c&jO5~1(ENL8Y6t7`3~9+@emkhG>dI%28^stY^]l/#hF{K[!6' );

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

define('FS_METHOD', 'direct');
