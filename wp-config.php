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
define( 'AUTH_KEY',         '|9y40E-%puzNEKM?4hvIH.@i.;pkT2SY>SFfap$Q4tnOM3$9QL@ZE!<[g^#KT]HD' );
define( 'SECURE_AUTH_KEY',  'Nn!1i.6cZUaODc2ZfFL]c{Dg!!|C(cPrr.yBgRf;,yno$@)>+S?g|ouCqo|k$;Qw' );
define( 'LOGGED_IN_KEY',    '3Q^aW0fpbu&N6SsIFwL7&xhL4-k1ZU0~l0~Fk(bUO/-AVyG^D3Yf/mNE[!<dY=Ti' );
define( 'NONCE_KEY',        '|}n@<zc*FC+/-4=tl<sdETsNdHnk`^<bDIG/NhfM$M69?2(VV&F/kyz$6]p&U~o4' );
define( 'AUTH_SALT',        'pM@_>1uv4~,C8n3kf[#47(>{E :Ea$++O$p+ 7GmfaIL!+li?OOhKutmdgk!d8;a' );
define( 'SECURE_AUTH_SALT', ' 6>mDSnb`F[i:K.Egw*rS$c`=;n#>lZIc;!)%Xw4akj$(T.g=+Ch3K!uv#xx^$ze' );
define( 'LOGGED_IN_SALT',   'Q*:_`K->vZ*k*s@D ,.bKDAMSGi8t9>RIe`AZ&o?$>^L/hD1OYdki<Y`fciq8H@C' );
define( 'NONCE_SALT',       'T-b|z~h~R_2u3L=DTnGti#(!6is.^+Nz6> .hIz&1g~k7y=[`]Zi)7gqQ52ds0Kc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
