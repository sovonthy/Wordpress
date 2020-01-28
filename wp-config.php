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
define( 'DB_NAME', 'my_wordpress' );

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
define( 'AUTH_KEY',         'q-]CoG9)PdXS(u>0=$Z^h0(PXI*(QG?(WD:VwAjoj%h,!nIsHI({DUR[wQ@JuW7B' );
define( 'SECURE_AUTH_KEY',  '=Y1SjHn5tAI!w*eD<p:%MDltQEyzHt[|d74+4Tde^8<XPS!BhF4S%@g{r>+rP@p{' );
define( 'LOGGED_IN_KEY',    '^EA3Fzs*cGpozC{lUFw5~j&%91W }-AUQ$^==wSdNS,I=U@m& w P.fX!7LDrebL' );
define( 'NONCE_KEY',        'ryw+_o7zWSK{#`N;T`5p~SoRDqfkGbpmQ-8}ERb}N:<di%ym VGXfbY2&D7OyFn:' );
define( 'AUTH_SALT',        '+&.w}!}?0emi{NF!NC^%ez)y.z7bW&rwx&Tx3Skvax?HTh!7WRAM#9NnkuG,no?r' );
define( 'SECURE_AUTH_SALT', 'qwK~QuMSEYkJWNBm^fG:Z G/_58-sMyzS7w>Nw{Jkw}?VVo&Uy-D`g{U(Ys<m+NQ' );
define( 'LOGGED_IN_SALT',   '(XXNn1k.Ocf}F/:@/^zpNu/sx^E=X$ WHMz8$nNvWC3tWHdupm2fteb8<m-;qF-X' );
define( 'NONCE_SALT',       'B}O|hPD61KhKqBU&h)huCEm9.`p~(VAb3jnKp.t1?4A5u=9=0_D;`h+We8rWTg6I' );

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
