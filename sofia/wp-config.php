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
define( 'DB_NAME', 'sofia' );

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
define( 'AUTH_KEY',         '2-+8J!x*xQW:EdvM~uR(q=ZF[;?8I31^F:!%Gp{KXpIRFf662MJ+~)gy:;H{9|](' );
define( 'SECURE_AUTH_KEY',  '[^))+h*h|L?RSK |[wK=X84,j`ao:)sdEHS`h~0r#TQt1fX2z+sis5Z.^YVN, nA' );
define( 'LOGGED_IN_KEY',    'U2H{s56FZ)64 *qY]@bibLN19P`TDB^9s@m97[>rEPea)#025_fMel,wYCK?eTlv' );
define( 'NONCE_KEY',        'dXBc9lfc$WIw+|4W1ybOOU%;`uI|vPs*O)zd1>j$rk$i_{5KzZ>av3}~)oykx{wO' );
define( 'AUTH_SALT',        '!i%_N>fIVB4 ZUf2gZ|l]|t#&b<Z~%ra5I!N`%Q4_Z6Rq+JUcwbK|>4w-A;XKclz' );
define( 'SECURE_AUTH_SALT', 'D4.[QfDo91lK9h:F a-y/vt65Y$IMS~iGAo-)3T#b*~t?gc*v]vu`3.:q[#XBDyb' );
define( 'LOGGED_IN_SALT',   'xpWTgw~9n4t]2=EF |Kc~2.-U_M=jTw7_l+jp<dAdFf)y]QjV2XB*OFPOK)LonKJ' );
define( 'NONCE_SALT',       '?Ph}Wz#(GG2x`}UrpDlzJ#VT>.0$|37:?Xo (t&eRu!Jk|i51{z~wr}j+ld+-qrc' );

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
