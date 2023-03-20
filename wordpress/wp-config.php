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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'siteAdmin' );

/** Database password */
define( 'DB_PASSWORD', 'cookieMonster1!' );

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
define( 'AUTH_KEY',         '#2Vp2&^$F[24! zh{mxdqpYI_>IoMI|vw7sJ%b]gy&W;wV gHTXz;ux%XH!O{X][' );
define( 'SECURE_AUTH_KEY',  'NFXO(^qC~4E<{_0~[G*NbCRsf(*K*N#{Rh%lIx9in+u5QSo;QdZ!AD|A/Lo5wrW!' );
define( 'LOGGED_IN_KEY',    'B[^)HD;N,II;&!7C8(P%N 8tebUKu#|O{p!pWJ~jd?^#U^|el A/`ft3p9BE^__!' );
define( 'NONCE_KEY',        'a^tXQNzOTSE=lrh>&)Z= :TeVE{$Pc(F@;Q,ph=R3ZslNvBTPmMEiTbAg2>=mt.X' );
define( 'AUTH_SALT',        'zb^w}!ET#k3s@#`pCsC.2J2e KVl~ApSd{PQ:VH9nRAgh$@>rpdG3l6yv*Ofo,,d' );
define( 'SECURE_AUTH_SALT', 'Q`C=eDgPABg!<h9i7JuLs%c|q0<!VThFV;:G.Q[-$B`oX]n<{xBT2 . R0BV30}X' );
define( 'LOGGED_IN_SALT',   '[.&V/[dbOgm5dz:=rD*XVi &d5woduztdu+8Z1SPnMp*uE6$iK7t(:@cz-Z)+k:q' );
define( 'NONCE_SALT',       'DA>^9.k]O1ezYf?}kXoORs2:9Stk`78;`Ia>)alzgo*B%)fSM]@rDRhhJmf1(CpJ' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */
define( 'WP_DEBUG_LOG', true);
define( 'WP_DEBUG_DISPLAY', false );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
