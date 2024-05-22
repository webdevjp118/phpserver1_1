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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aniref' );

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
define( 'AUTH_KEY',         'xFyK2ER7I:z^l#|Rtt5h`C~`zJ0zKe9b:@U/?g=ORMQ),}:iksHJRAF>B7i=ut#3' );
define( 'SECURE_AUTH_KEY',  'AlWdLI;6<){7z.C&-8[<DDO!K+?68}p??DiP2c_gF~!nxmHW4/9!<J!|Dk,Z!/jE' );
define( 'LOGGED_IN_KEY',    '*ID|~)@WYN=o_@.R57a=n}*vou[Y2*-CW!u>9>irHc~c{{@+WL5zP~jmDRlZ@q,l' );
define( 'NONCE_KEY',        '*D}E>b3)_qF@$eB|DKWPb<AcHb4!`Ll6H#|C;mSq`|ko|iXutGaO#H D79d;{.]{' );
define( 'AUTH_SALT',        'Xpxh.e0kYEH^Ek^5 =Be*N}03u_w(1MwW>^lQ%P4Z@M**BL_EqoN:enXzBO&OoxX' );
define( 'SECURE_AUTH_SALT', 'k%Q olGW!S8}R3yk*yDxEjnuT%ip920PM?GW,~9f{z_L$ailK<{cXpqqsvOE:b<5' );
define( 'LOGGED_IN_SALT',   'P^|-+}.+-Ou35K-t*xSyrx{-9apjq:F3`7N:Sj@BxQBZS@Gw0_;;C:}7./QC3(yY' );
define( 'NONCE_SALT',       '-?>PZ#26.]S{Y;$]~FpfkW6w_TFVv^)8H!b(+mZdD@^<8LYC{T#n(COKZW/AH@26' );

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
