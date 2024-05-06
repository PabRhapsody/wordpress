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
define( 'AUTH_KEY',          'nT,UMD,hjRjmdqBlPlD&D0!?`D /thQ|P0lc%<8->zLTK{_taYzT8<_:YVzz}y@N' );
define( 'SECURE_AUTH_KEY',   '3a%Q)rWP>{b{(d]G-1OPOo]-L2mjp?iZX%0{X>SZ#MT6Xb%vCb7r6Jz][m1)|v}W' );
define( 'LOGGED_IN_KEY',     'Ff]qvo}3)[a,0!d?C&At$[G!Pq7CZ2_lz#4),[^FpS~ZB<7#zs>?|IQz7?u8GON(' );
define( 'NONCE_KEY',         '1gOM5}JpIn(iznSALekj,Q&;KlnSx@1e%mC$=#!xcyeVT:0$=DS8-v^|A&;T@2*f' );
define( 'AUTH_SALT',         '!&C}2iHC=P%zxC]co1q^@?jM6&ZRS/kY3I*pG-K V^j*+R4HUt-qXIL?HO1S:s,E' );
define( 'SECURE_AUTH_SALT',  '#a8A0Z9mITB5X+&#M$yO}!E=;pF.>~h9dYJaNxDzs&dV61{[*feB$OTS.|f`y>=v' );
define( 'LOGGED_IN_SALT',    'R;FVn/}y#sO,S,ci+6*Bs.;@odQl94ucH1t[1R+x=j<tVGuqG;/DBz<#?[gHL}lx' );
define( 'NONCE_SALT',        '~6IlKE<h].PP:|2|`^J13ae:dFj?IY=d3R4s/p@L/5GYf$Y RqWWm_,f7JX@=?Wx' );
define( 'WP_CACHE_KEY_SALT', 'JR#}gTd!-.wJ&.&}=O-:q;iJR$.~dH@.5pa:~(8UFFd0.TI?}8?]`frWlswf`,gh' );


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
