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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hartytech_db' );

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
define( 'AUTH_KEY',         'M(*VjgC0VZ:#OezFKnQys{yo|}!^HZ9R5y6KJxB@szt!3t<=*)}YFrywkBwatr6H' );
define( 'SECURE_AUTH_KEY',  '_0 2XN%&+,!Yh<?)G!M$L~~4<5R?]md(oUB7a:R]7hZmt;aGP+a Sl`fJKL*KlZd' );
define( 'LOGGED_IN_KEY',    '4P@=6mTZtAvP[CdYJhlpePJQGO=&<Ro WZ/#EaD$[cmw2}jk t,+-n*md$?`28.y' );
define( 'NONCE_KEY',        'ZmRVhh:D% fi(q?iopph@T*w2TCZpE/C`zerL*:a/8/0 #;+ge aF^QVb(tm3`4P' );
define( 'AUTH_SALT',        'dhE`C{xI~#1wzrNl m/3{ I82245L+=_H5@}xtnh;NEnFBK=Ex>K8C4qe5qU|@NW' );
define( 'SECURE_AUTH_SALT', 'Oj,:!k%qi<o}Ft&z]}VkGHs:J[da(:]D2HHnhL <S]b#e3f$0.XmYk Q8NxGVqyG' );
define( 'LOGGED_IN_SALT',   '_I~{@+{6dGi}G]]DB:u+:sHuEiFYR&HEBg{RDciW+`7b%mcA90O2D_N JcR2{rZ<' );
define( 'NONCE_SALT',       ':yU)<Pf*=AQbBY<UlbkkU)-Zy7dysz2k`O7[r2~E;x,@m@t:BE/|]P@}:,z/KTF{' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
