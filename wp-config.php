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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

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
define( 'AUTH_KEY',         'n9}>+5:%T5X25SzD >ruxy;1Cj*GnH%dUe_|ew1U&oJCZ{lw`CHDO5)(IL^VXCqD' );
define( 'SECURE_AUTH_KEY',  'dt4Zi3=A|-[T_DY)_HC)uT)*=%toIx)3UC=79o7{W#ty>!1)83 mzi6U&bd@]+4s' );
define( 'LOGGED_IN_KEY',    '0C& sYsTVbB$T*GG]$hz5VkhPv!7TEp9FRPo%^]]`[LSpSEav_Y@.QYdy/(^%kP-' );
define( 'NONCE_KEY',        'M$5V,t9f T1F!#nO=]vs.DXxdK bf:bo$]SMl5:`D&XJ0VYhOV6g aa:BUf3MSP5' );
define( 'AUTH_SALT',        'AySm39Cb{Cc75ft~XJF=yIy%PGFh+BJPpi}(R[Z8uFe|yFc.ic`@,+;$Mmu9i$K!' );
define( 'SECURE_AUTH_SALT', '*z[11V;eA{?DqD81q:L/[6raNKoe1ZS7pFH{bCiM&<yUe_-YI*&NC#I:=b<X$Z]Y' );
define( 'LOGGED_IN_SALT',   ']bH7}5x(FTvlmM)AkKYVVw@(cUCUVq2q|$578v=Ln}l/QaqkoF:9{fm1+5k!f+8g' );
define( 'NONCE_SALT',       'R1()fG{yOjViLCB,a:oIzS}yn=6qkON{Q.h^Hbf]AW*)7@Lj66TbJX5!fsnf]576' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_teste';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
