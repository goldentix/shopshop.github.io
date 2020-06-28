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
define( 'DB_NAME', 'wordpresslocal' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'EB;6]VD{$_I)ox=__G)dC;p8axrGmVke9ee=#Q72P/ez;8<gd*m.W),o5*-w?t*E' );
define( 'SECURE_AUTH_KEY',  'F{E[`1?^WQF,,:=|gF_X t!?/xY2xA_MM-171O}JEeCltLSGt8v=$x;%4e6Sv Th' );
define( 'LOGGED_IN_KEY',    ':%O2mnM>$awf(&;S/f~]u/x}lF^mq}KA_cRG]=-]:ZhFT|IU67IDNsoB[J|^D_ig' );
define( 'NONCE_KEY',        '<96N0=y;iC8C[:=#B;}b!R:y8;*o=Im1|!f;5L=}Z]4EHv?S1JFJY,}ep6a{kp(,' );
define( 'AUTH_SALT',        '}lKr|8m&6xa<no!!7i=b`a[O]|4V/m@tnxx(9K,/C-JeY[kE!*Q0ci/+O>Zhm5)7' );
define( 'SECURE_AUTH_SALT', 'W#>9.<; Bq>LYpyZ.kl?[qGJQDpW>@Ff/ahonim6!o4?L|W<vbn{l8souuv3Ibj`' );
define( 'LOGGED_IN_SALT',   'NJmD#rl^,?2~OAIdzST4+PDE}Y^]egp5Cu y!-Ey@gy4}*84=;nBh^UGxoR^Y:xB' );
define( 'NONCE_SALT',       '//hXV`KuNYeL?k>nFjIe^rk7V!l)oZFP_6qc`vs#aUU^Vi*|?$8Kb:48Ir]rlH6$' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
