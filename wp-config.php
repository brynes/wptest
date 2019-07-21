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
define( 'DB_NAME', 'wptest' );

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
define( 'AUTH_KEY',         '?CD!Ed}A?e}`y?sg?Qsiweq.bR_zX5sT{q>GY7FpSi/V5vnIR[/2SS>Z9YOp}ZqV' );
define( 'SECURE_AUTH_KEY',  'Cz7Ht)!^*q?!C5.(~7*T:[<f}Ij7?AeGapn-2{<O{lpFrao*n(y{qIng-8}%%eEi' );
define( 'LOGGED_IN_KEY',    '}oSg]$v.<A*R{AAmT-ES6Cy{@q!U@.lN~R@*30sd$PJR|kZB9r+?NMtab/:T`@k}' );
define( 'NONCE_KEY',        ']3{HXOb~.Zs0Mk_SB{R4}:RzGq)gmi9E 1&[yodw*8~uVEwXGKxi.{0yPprfNE_c' );
define( 'AUTH_SALT',        'c[,MLD/T*&tpLoEa~eL1={7pN5:V/g|_--RA<ksZX`G^qo3)(.-k7^b7~jda(#2p' );
define( 'SECURE_AUTH_SALT', '-NXFB3{9[r,xgf?Q[)rP5T&b}uzJ{R HYI|d{/10hL9M28,Z~cEX~R;&jhoK/&M6' );
define( 'LOGGED_IN_SALT',   '*j,(W2=K}0*adooug/a;zW]!A3zTaHe9/8E>Q%$L#!NRD;*Yy(ywt](}<,@=G%L6' );
define( 'NONCE_SALT',       '9H$R?tP2Ut5s&NhWXX>.KRF?fXNoyYB.cQc%:ul6><B#]F?]J)$h?h]ilwja(_-B' );

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
