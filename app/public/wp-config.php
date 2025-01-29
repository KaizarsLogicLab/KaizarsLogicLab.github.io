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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'E>rfp.$bTFu6tM0L(=i!W|h.^Vvi_`.tOO!h{=Qrqi#BM`~#1yZW]=wV|XHQ2E3d' );
define( 'SECURE_AUTH_KEY',   'ept6xk+D[*aMmA[w$DpRB4UQ6;b3=Kn5I:Us[??;dWLdC_?r/`9H?QWVQ {#Tr^J' );
define( 'LOGGED_IN_KEY',     'Q[;sR3SXj%K%t#kPvS@C8Zs&Y:TVK2atA]Do7z89|Ds_TZM/{&xu.ju?&M)t8%+@' );
define( 'NONCE_KEY',         'wxCWM6*5ZBZ]^~BVGK`x:W109KOQ{umIfwQd{eM-=A6CXQJ[UfoFf8b|hc?UD:Y+' );
define( 'AUTH_SALT',         'yCR2{IT|+<3thaMiusT$KXkC2!_S;gHh3Z~/3`Kc41DJ/,D&(@q@Jd/*MNKUJ37P' );
define( 'SECURE_AUTH_SALT',  'a~cDU%N0EN]MYF[[L]D!TPUlpoa r5rw0SJzsfg3X9h2[Ix8v]E2&.U<Fk3,o@$u' );
define( 'LOGGED_IN_SALT',    ')k+Bm%([X%K,~}H&wF#QO5*= {T+5S._d|UjoWXK+*^AKEV!|OXo]oHFPBpug[I`' );
define( 'NONCE_SALT',        'T|B GHqb0!l[dTo`1Fv<Fwr(kJr=n#@m2 cc(?mVUD.M,tt]MfB[:E?WYk>>%$RX' );
define( 'WP_CACHE_KEY_SALT', 'Xa9/dC(jo~?M(#78Znx<,e7M~0^EMOX?t@`W&5!DA/M_4~5&k$.GeB^,v`+ER&Uk' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
