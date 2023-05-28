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
define( 'DB_NAME', 'finsintech' );

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
define( 'AUTH_KEY',         '<q8I(1*FUVV~egsG,?%^c^]v<6zDax.1)SN=Pt]yj|1JMW d|K%AjmX3RV`gYV{j' );
define( 'SECURE_AUTH_KEY',  '`Ay(V0nI?98DY;D?=^ulWHh?Q9K9EcN3:doA]-*xYA8SR}rU+z&}1SAq!/m%LKc^' );
define( 'LOGGED_IN_KEY',    'lB2}mtT[g-EXTTV<?J~^ENy[,-`5(4miTpc2}.}:/zyX[T&)/mw~6KF)qK8^Oy~,' );
define( 'NONCE_KEY',        '<)vK8x{(omqq9NQsbCXyp#V5,Ea:K7M/V>t.TwIa,%%_sY<thrVHZ_,-D$+PG7u&' );
define( 'AUTH_SALT',        '6E.X0q.j.VQ1r]w*_e/t%e4VRYD:^Y.(y57.U6lowTxI^4(mDP701%4~@rsS3((v' );
define( 'SECURE_AUTH_SALT', '|FVQE[MT44=qgcgb7-8k@,v{%74I:bH7S`/RsS6?KT>3I;{{k5i#@6!,bH7.Gl:$' );
define( 'LOGGED_IN_SALT',   '0#PF}uoH35K%ieP^#/bSiu0Ue>c=T)F36o%~(h,~bZu`30]u?(*;cEHLvy[/1p6N' );
define( 'NONCE_SALT',       'vLZ1:kmsI%pg29jsV(N5]E2/4[Cj}o.{$axM1*Q#;2X#Sz)~r=?n?C*0KrWNW3#t' );

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
define( 'WP_DEBUG', TRUE );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
