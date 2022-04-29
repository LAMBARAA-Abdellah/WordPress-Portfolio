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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'b>4i>14F0#szH2#DqomD$X^9gkw9JlNc +jSrIK=4&+o-]62Axt2?`)C*b@](Vag' );
define( 'SECURE_AUTH_KEY',  '|JF0(c4xRiss:A(v^&osz+6HZa[3ms?[)BLf%j.]<$&=S%qUl5N}>Rp7q*H8m6W@' );
define( 'LOGGED_IN_KEY',    '}JF5z`VzaDk3}}U,=[6]{D<JYDZK@BA9wCOq93]FMOZ<B/@=k>Q.GB(|.H8>tW!R' );
define( 'NONCE_KEY',        'DP^-%gK&Hhm,2UzG1 |D)6C}Y`n-3qZIBk1J=.RqtM-98,+<kg.)8dBU}K~z>[+b' );
define( 'AUTH_SALT',        's8(yOy}LHXD^!Wt:]Px7>fPo#F^*v&;mygCJ_X4u`5zjKfmTT2@aCa@Gahw=@7B!' );
define( 'SECURE_AUTH_SALT', '=4;u07NAF *Z1nW_6R`y!ig)6[/CMa1P4@IF:cu+gMm=iR+1bw_1Av$A06&z8#,y' );
define( 'LOGGED_IN_SALT',   'yXWnZRG} ;}QO8%gcn`F01.^ hz}]NB=5iW=bzWM<iw+|Ok;VG)4B}-MAf/IG;nf' );
define( 'NONCE_SALT',       'j]{ l,kWF]+ZFN:T@3`O=.T-7HINpm,-|K7mWA^kV@}r~YfYy3z6`2)~:C`aUylZ' );

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
