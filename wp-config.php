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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '@_Cerezo0129' );

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
define( 'AUTH_KEY',         'TinrK8;9%#DTI]iJ7BP6Pz?G5vMPqif#!joB_qXg-j`Pm=G|5^fo[0Ld,%}9|LFP' );
define( 'SECURE_AUTH_KEY',  'd$=1SC`JT~JOUvv:jZ/Isf$=DygM@=eJtL{Dt`_qSwp#157`7YxAUzQ1F_H=h|^O' );
define( 'LOGGED_IN_KEY',    'jorpV.ajjZkOM1NjIW?:RN=+#qgu,FLRkKRp(cb#yidn74iPPH~wS8Hwy]]y~E.0' );
define( 'NONCE_KEY',        '9Qu~12NqfDia3503t >V8y}H}Am{8,sJf~>Z-N}:=,Z(nE49HQG~f_#V;deWotxH' );
define( 'AUTH_SALT',        'eWcbW0BCMc:-)PRTv=hKLzkRJ,|fld1iRX; p89g@p*a4w&p-PnI$xUt8v4XNSK2' );
define( 'SECURE_AUTH_SALT', 'HuBHfzz=i-ch $aIJ|m-x2QyUYi@8fW~]!g!M6reZEv#m{<;2#67*^=JhVSz<`*b' );
define( 'LOGGED_IN_SALT',   'iJ7CltbbI{*o6L,{:>ud6uGW7eMLFG.$d2-PfV@l~~~#e1Z%7zHLkKZ*JEdoOX-3' );
define( 'NONCE_SALT',       '}!EGE$_u82{qJXgD!w9sC(Q]s{ZD;t#Qe]E*#+2$kO=zs/Z=fEdo_a;IuXZn]^TE' );

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
