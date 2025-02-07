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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         'wL^H1 YbkQ@<zV-c_gml|a[nK ]2+L:p7]jgr:S9_/a<iUYaJ&<Pg=NMmrO{Aa8A' );
define( 'SECURE_AUTH_KEY',  'Ne*=^tNR:4oIoxK*k/eH1wpkAPh$Sefnm#K1(tA_>a`J+@h<c;N-C0MVO3/bTecH' );
define( 'LOGGED_IN_KEY',    'L9}JaYx$In;l3HAK/!n@EL6d]#g0i BjuJklJ}Up&xH(%7bk3UQA&$b.eW9!81I>' );
define( 'NONCE_KEY',        '-N}N3mLqYk ^S3FjBZENEfUM,z;5.[3JxRvN=l&`rz}5H s6dh[aSPZk,Y#B0,Kp' );
define( 'AUTH_SALT',        ' GW}`,*1= /<Gsh!C)OEfUAl2]uy=z*~GBztt|0[[8$_YyVM .;rCE[$/$X1.i*w' );
define( 'SECURE_AUTH_SALT', 'e@e HY1Iv#,K6YL%2A(EqRpRQ2?=GKYYXix-T9s5{eQ&o,-C62H;<JWXzpvO28s1' );
define( 'LOGGED_IN_SALT',   '{@g|tL0vZ/8ASX^:NUy8w?$r,qGnFs8W!fb#Aq5^ib)x31;k^*c:~C(b2u;3c,ou' );
define( 'NONCE_SALT',       'pRCxWxHbL-YH3=_d2mp[JiTvnhJtir:gjP@SA8J1Vx]oJw[mek#Q!m*<{B.Ax/ 9' );

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
