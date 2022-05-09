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
define( 'AUTH_KEY',         'Le-N}80)o6Rm2Cej&uF{w^RSx_8hm{EF7wbO4:[.1m707{+5-fN<7Rj;>}qt9OI|' );
define( 'SECURE_AUTH_KEY',  '6*}`WP|y(>3F(q]A<h%e0TI_1tDO.{dL?M4IX?xXr lq`g}=e8g7`<@D/ Q,aW3`' );
define( 'LOGGED_IN_KEY',    'y~XRku`KU.>~tlH3?lL,01M.Z ))w!FQ9m@*}#!fZZ=jpTp{?1yyHCperj`CPt7,' );
define( 'NONCE_KEY',        'gZo%Kniu/)yF9t#Kkg~I}r4[YWRR0GFD~F),UH]19ugO:As)VGwXMy*$X:AR!(Ec' );
define( 'AUTH_SALT',        '}bx+RXR,Hc06r/<Zy$nAX8v1NoAv-3]58j^8L(nXx,b73q ~GE,=dSQK~>0QWses' );
define( 'SECURE_AUTH_SALT', '`hib/l>D.41H^+`]t9<zpE5^QV%;sulUPog%eQPO)[c@JKrS XqPx;N0 l]<^WG]' );
define( 'LOGGED_IN_SALT',   'JzwnF@x[}s!VSo1 |v zc9ZalMpb0dq;$-G/[G IuWCsX2F)I@oa 7`%GJWWYCIO' );
define( 'NONCE_SALT',       'O0t/^G9zyfERQ:+qpfkieoLYQ=E>|a)tJ{}SYzae0Z_m{9f50-Ds?RkSx;iv(oRC' );

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
