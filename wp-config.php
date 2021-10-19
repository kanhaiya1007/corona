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
define( 'DB_NAME', 'corona_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ' KdIS^]ap|yAV/y4b@F)Ohw2.zrOI^<,sg$.J5Ued^^4n`5~$uvv#,-za_5_4_P3' );
define( 'SECURE_AUTH_KEY',  'M}-/8?u5%Ng)3/jJ:%e@,9eO^jZiM~,[)) *jKPVy2N}YpXV| 5$g+gJI!fpxem<' );
define( 'LOGGED_IN_KEY',    'bKELCRuE`Rrd`zr~>)%0QC-e+awCH1_]CjE^<FAO`TrGj<!uwjM>4CTMB{G .%h8' );
define( 'NONCE_KEY',        'mr?JpxXG{_fpP70T>%8!e<e =)r9%4WfL1RmjYZ)P,XRtP}eY$A{9f9z$UY^Kg4^' );
define( 'AUTH_SALT',        '1f|1AO,h}G)9+LSthle8IZ@p:@P%CqZA8`/]:pA09lG9a*x<G]hiew1uXU+]J%G|' );
define( 'SECURE_AUTH_SALT', 'h~$?EHLt{-n3JyP)%D7zJ_TSQx}0#oh{-(6Ko/b~xk6s;_m>34-gdKgBKP<jy>>@' );
define( 'LOGGED_IN_SALT',   '*OX^jBh{_cE`S*l0&VKM6B-u,~bPmeH ;S@=}nsAED]1@Wn,X1vrq3.CRqNW+=Rv' );
define( 'NONCE_SALT',       'bRK}f>v0rNZUNc[ol?(7-FXd:2MVY)h%U&006O@^$P28_&/-&G^b*![T~[rIq( E' );

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
